<?php 

# Database connection profiles
const DB_Connections = [
    "PRODUCTION" => [
        "HOST" => "",
        "NAME" => "",
        "USERNAME" => "",
        "PASSWORD" => "",
    ], 
    "DEVELOPMENT" => [
        "HOST" => "localhost",
        "NAME" => "tripsafer",
        "USERNAME" => "tripsafer",
        "PASSWORD" => "mikecheck"
    ]
];

# Current environment
const ENVIRONMENT = "DEVELOPMENT";

# App Name
const APP_NAME = "TripSafer";

# App Root Directory
define('APP_ROOT', dirname(__FILE__, 2));

