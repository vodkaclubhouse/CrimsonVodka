<?php
	//Teamspeak query connection settings
	$config['ip'] = '54.38.23.141'; //Server IP (use 127.0.0.1 if your teamspeak server is located on the same machine)
    $config['queryport'] = '10011'; //Query port (Default = 10011)
    $config['serverport'] = '9987'; //Instance port, (Default = 9987)
    $config['loginname'] = 'serveradmin'; //Query loginname
    $config['qpassword'] = 'LXCX4xbS'; //Query password        
    $config['displayname'] = "QRActbot"; //Bot nickanme

    //General settings
    $config['send_enable'] = True; //send a message to client (can be true or false)
    $config['send_method'] = 'poke'; //method of message (text/poke)
    $config['send_message'] = '[COLOR=green]Activated '; //The client receives that message as soon as he received his group
    $config['groups'] = array(348,10,350,64,66,502,700,84,357,602,108,131,137,359,361,274,298); //comma seperated list of groupids
?>