import fetch from 'node-fetch';
import dotenv from 'dotenv';

// Load environment variables from .env file in development
if (process.env.NODE_ENV !== 'production') {
  dotenv.config();
}

const { CAL_API } = process.env;
// Use the specific calendar IDs without the birthday calendar
const calendars = [
  {
    id: 'vodkaclubhouse@gmail.com',
    name: 'Events'
  },
  {
    id: 'en.eg#holiday@group.v.calendar.google.com',
    name: 'Holidays'
  }
];

// Set timeMin to current date for future events
const today = new Date();

const HEADERS = {
  'Content-Type': 'application/json',
  'Access-Control-Allow-Methods': 'GET',
  'Access-Control-Allow-Origin': '*'
};

exports.handler = async function (event, context) {
  console.log('Calendar API Key:', CAL_API ? 'Present' : 'Missing');
  
  // Get the requested calendar from query params or use 'Events' by default
  const requestedCalendar = event.queryStringParameters?.calendarType || 'Events';
  const maxResults = event.queryStringParameters?.maxResults || '10';
  
  // Find the requested calendar ID
  let calendarObj = calendars.find(cal => cal.name === requestedCalendar);
  
  // Default to the first calendar if not found
  if (!calendarObj) {
    calendarObj = calendars[0];
  }
  
  console.log(`Fetching calendar: ${calendarObj.name} (${calendarObj.id})`);
  
  // Properly encode the calendar ID for the URL
  const encodedCalId = encodeURIComponent(calendarObj.id);
  
  // Set parameters for the request
  const params = `orderBy=startTime&singleEvents=true&timeMin=${today.toISOString()}&maxResults=${maxResults}`;
  
  const url = `https://www.googleapis.com/calendar/v3/calendars/${encodedCalId}/events?${params}&key=${CAL_API}`;
  
  console.log('Request URL (without API key):', url.replace(CAL_API, 'API_KEY_HIDDEN'));
  
  try {
    if (event.httpMethod === 'GET') {
      const response = await fetch(url);
      const data = await response.json();
      
      console.log('API Response Status:', response.status);
      
      if (!response.ok) {
        console.error('API Error Response:', JSON.stringify(data));
        return {
          statusCode: response.status,
          body: JSON.stringify({ 
            error: data.error || 'Unknown error occurred',
            message: `Error fetching calendar: ${calendarObj.name}`
          }),
          headers: HEADERS
        };
      }
      
      let items = [];
      if (data.items && Array.isArray(data.items)) {
        items = data.items;
      }
      
      console.log(`Successfully fetched ${items.length} events from ${calendarObj.name} calendar`);
      return {
        statusCode: 200,
        body: JSON.stringify(items, null, 2),
        headers: HEADERS
      };
    }
    
    return {
      statusCode: 405,
      body: JSON.stringify({ error: 'Method not allowed' }),
      headers: HEADERS
    };
  } catch (e) {
    console.error('Function error:', e);
    return {
      statusCode: 500,
      body: JSON.stringify({ error: e.toString() }),
      headers: HEADERS
    };
  }
}