<?php

// show error reporting
error_reporting(E_ALL);

// set your default time-zone
date_default_timezone_set('America/Sao_Paulo');

// variables used for jwt
$key = "example_key";
$issued_at = time();
$expiration_time = $issued_at + (60 * 60); // valid for 1 hour
$issuer = "http://localhost/rest-api-authentication-php/api/";
