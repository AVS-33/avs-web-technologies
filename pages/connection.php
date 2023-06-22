<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "avs_web_technologies";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$con)
{
    die("Connection failed: ");
}