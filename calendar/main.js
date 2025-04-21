import './style.css'

const eventContainer = document.querySelector('#events-container');
const eventAmtToFetch = document.querySelector('#eventAmt');
const calendarSelect = document.createElement('select');

// Add calendar selector to the UI
const calendars = [
  { id: 'Events', name: 'Events' },
  { id: 'Holidays', name: 'Egyptian Holidays' }
];

// Create and add calendar selector
const header = document.querySelector('header');
const selectorContainer = document.createElement('div');
selectorContainer.className = 'mb-4 mt-2';
selectorContainer.innerHTML = `
  <label for="calendarType" class="mr-2">Calendar Type:</label>
`;

calendarSelect.id = 'calendarType';
calendarSelect.className = 'p-2 rounded border border-blue-300 bg-white dark:bg-slate-700';

calendars.forEach(cal => {
  const option = document.createElement('option');
  option.value = cal.id;
  option.textContent = cal.name;
  calendarSelect.appendChild(option);
});

selectorContainer.appendChild(calendarSelect);
header.appendChild(selectorContainer);

const getRandomNumBetween = (min, max) => Math.floor(Math.random() * (max-min +1)) + min;
const getMonth = (month) => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'][month];
const getDayOfWeek = (weekday) => ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'][weekday]
const isAM = (hour) => hour < 12;
const getHour = (hour) => (hour <= 12 ? hour : hour - 12);
const getMinute = (minute) => (minute === 0 ? '00' : minute);

function processDate(date){
  const hour = getHour(date.getHours()) === 0 
    ? false 
    : getHour(date.getHours());
  const minute = getMinute(date.getMinutes());
  const timeSuffix = `<small>${isAM(date.getHours()) 
    ? `AM` 
    : `PM`
  }</small>`
  const time = hour && `${hour}:${minute}${timeSuffix}`;
  
  return {
    month: getMonth(date.getMonth()), 
    weekday: getDayOfWeek(date.getDay()),
    time,
    date: date.getDate(),
  }
}

function mapEventObject(event){
  const startDate = event.start.dateTime 
    ? processDate(new Date(event.start.dateTime))
    : processDate(new Date(`${event.start.date}T00:00:00`))
  const endDate = event.end.dateTime 
    ? processDate(new Date(event.end.dateTime))
    : processDate(new Date(`${event.end.date}T00:00:00`))
  let dateRange;
  if (startDate.date !== endDate.date){
    dateRange = `${startDate.month} ${startDate.date}–${endDate.month} ${endDate.date}`
  } else if (!startDate.time) {
    dateRange  = `${startDate.month} ${startDate.date}`;
  } else {
    dateRange = `${startDate.weekday}, ${startDate.time}–${endDate.time}`;
  }
  
  return {
    name: event.summary,
    description: event.description,
    location: event.location,
    start: startDate,
    end: endDate,
    dateRange,
    link: event.htmlLink,
  }
}

function createEvent(e, i){
  const colors = ['blue', 'amber', 'rose', 'indigo', 'pink'];
  const colorScheme = colors[getRandomNumBetween(0, colors.length - 1)]
  return `<article class="bg-white dark:bg-slate-800 shadow-xl shadow-slate-200 dark:shadow-slate-800 rounded-lg">
          <div class="p-3 shadow bg-${colorScheme}-500 text-indigo-50 uppercase grid place-items-center rounded-t-lg">
            <div class="text-sm">${e.start.month}</div>
            <div class="text-3xl font-bold">${e.start.date}</div>
          </div>
          <div class="p-4 md:p-6 lg:p-8 grid gap-4 md:gap-6">
            <div class="grid gap-1">
              <p class="text-slate-400 text-sm">${e.dateRange}</p>
              <h2 class="font-bold text-2xl">
              <a href="${e.link}">${e.name}</a>
              ${e.location 
                ? `<p class="text-slate-400 text-sm">${e.location}</p>`
                : ''}
              </h2>
              ${
              e.description
              ? `<div class="grid gap-1">
                <button class="text-slate-400 flex gap-1 items-center cursor-pointer" aria-expanded="false" aria-controls="details-${i}" id="btn-${i}">
                  <p class="pointer-events-none">See details</p>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 pointer-events-none transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </button>
                <div class="grid gap-1 hidden" id="details-${i}" aria-labelledby="btn-${i}">
                  <p class="text-slate-400">${e.description}</p>
                </div>
              </div>
            </div>`
            : '<div class="h-4"></div>'
            }
            <a href="${e.link}" class="bg-${colorScheme}-500 rounded-md px-4 py-2 text-${colorScheme}-50 shadow-2xl shadow-${colorScheme}-200 dark:shadow-none text-center font-bold hover:shadow-none ring ring-offset-0 ring-${colorScheme}-500 focus:outline-none focus:ring-offset-2">View Event</a>
          </div>
        </article>`
}

async function loadEvents(max=8, calendarType='Events'){
  try {
    eventContainer.innerHTML = `<div class="flex gap-3 items-center text-blue-500 mx-auto">
          <svg class="animate-spin h-8 w-8" width="20" viewBox="0 0 155 155" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle class="opacity-25" cx="77.5" cy="77.5" r="60" stroke="currentColor" stroke-width="10" />
            <path d="M120.329 35.48a59.998 59.998 0 0 1 6.712 75.868" class="opacity-75" stroke="currentColor" stroke-width="10" />
          </svg>
          <p class="text-center text-3xl animate-pulse">Loading ${calendarType}</p>
        </div>`;
        
    const endpoint = await fetch(`./.netlify/functions/calFetch?maxResults=${max}&calendarType=${calendarType}`);
    const data = await endpoint.json();
    
    if (endpoint.status !== 200) {
      console.error('Error response from API:', data);
      throw new Error(data.error ? data.error.message || JSON.stringify(data.error) : 'API returned an error');
    }
    
    if (!Array.isArray(data)) {
      console.error('Expected array but got:', data);
      throw new Error('Invalid data format returned from API');
    }
    
    if (data.length === 0) {
      eventContainer.innerHTML = `<p class="text-center text-3xl">No events found in ${calendarType} calendar</p>`;
      return;
    }
    
    const processedEvents = data.map(e => mapEventObject(e));
    eventContainer.innerHTML = processedEvents.map((event, i) => createEvent(event, i)).join('');
  } catch (e) {
    console.error('Calendar loading error:', e);
    eventContainer.innerHTML = `<div class="text-center">
      <p class="text-center text-3xl mb-4">🙀 Something went wrong!</p>
      <p class="text-red-500">${e.message || e}</p>
      <button id="retry-btn" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        Retry
      </button>
    </div>`;
    
    // Add event listener to the retry button
    setTimeout(() => {
      const retryBtn = document.getElementById('retry-btn');
      if (retryBtn) {
        retryBtn.addEventListener('click', () => loadEvents(eventAmtToFetch.value, calendarSelect.value));
      }
    }, 0);
  }
}

// Initial load with default calendar
loadEvents(eventAmtToFetch.value, calendarSelect.value);

// Add event listeners
eventContainer.addEventListener('click', (e) =>{
  if(e.target.hasAttribute('aria-expanded')){
    e.target.setAttribute('aria-expanded', e.target.getAttribute('aria-expanded') === 'false' ? 'true' : 'false');
    e.target.querySelector('svg').classList.toggle('rotate-180');
    e.target.nextElementSibling.classList.toggle('hidden');
  }
});

// Event listeners for controls
eventAmtToFetch.addEventListener('change', () => loadEvents(eventAmtToFetch.value, calendarSelect.value));
calendarSelect.addEventListener('change', () => loadEvents(eventAmtToFetch.value, calendarSelect.value));