<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test";

$config=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("failed to connect");

?>