<?php

$dbhost = "laksjdhf";
$dbuser = "vrutti";
$dbpass = "mznx456";
$dbname = "login_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))

{
  die("failed to connect!");
}
