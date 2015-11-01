<?php

//connection to db.

//mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");

DEFINE('DB_USER', getenv('C9_USER')); 
DEFINE('DB_PASSWORD', '' ); 
DEFINE('DB_HOST', getenv('IP')); 
DEFINE('DB_NAME', 'sitename'); 
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if($dbc) {
    echo 'your in';
}else {
    echo 'something went wrong ' . $mysqli_connect_error(); 
}