<?php

// First, include Requests
include('../library/Requests.php');

// Next, make sure Requests can load internal classes
Requests::register_autoloader();

// Say you need to fake a login cookie
$c = new Requests_Cookie_Jar(['login_uid' =>  'something']);

// Now let's make a request!
$request = Requests::get(
	'https://qeq.mx/datos/qws/access?var1=silvia@vwdgo.com&var2=qeq939', // Url
	[],  // No need to set the headers the Jar does this for us
	['cookies' => $c] // Pass in the Jar as an option
);
$request2 = Requests::get(
	'https://qeq.mx/datos/qws/pepsp?nombre=miguel&paterno=osorio&materno=chong', // Url
	[],  // No need to set the headers the Jar does this for us
	['cookies' => $c] // Pass in the Jar as an option
);

// Check what we received
//var_dump($request2->body);

$xml = simplexml_load_string($request2->body);
$xml->formatOutput = true;
$el_xml = $xml->saveXML();
$json = json_encode($xml);
$array = json_decode($json,TRUE);
echo htmlentities($el_xml);
//echo ($json);

