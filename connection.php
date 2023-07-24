<?php

$config_json = file_get_contents(".env.json");
$config = json_decode($config_json,true);

$server  = $config['server'];
$username = $config['username'];
$password = $config['password'];
$database = $config['database'];

$con = mysqli_connect($server,$username,$password,$database);

if (!$con) {
    die("Connection failed".mysqli_connect_error());
}else{
    // echo "Connection Succes";
}