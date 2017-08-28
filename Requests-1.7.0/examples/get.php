<?php

// First, include Requests
include('../library/Requests.php');

// Next, make sure Requests can load internal classes
Requests::register_autoloader();

// Now let's make a request!
$request = Requests::get('https://qeq.mx/datos/qws/access?var1=silvia@vwdgo.com&var2=qeq939', array('Accept' => 'application/json'));
$request2 = Requests::get('https://qeq.mx/datos/qws/pepsp?nombre=miguel&paterno=osorio&materno=chong', array('Accept' => 'application/json'));

// Check what we received
var_dump($request2);