<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('833124960901-imu9golujlnuets72op5ul9e7i7rg2hp.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/Hotel-Ordering-Application/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>