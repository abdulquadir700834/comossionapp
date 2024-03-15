<?php
$conn = mysqli_connect( 'localhost', 'root', '000000', 'test' )or die( 'Error connecting to mysql' );
$domain_url="http://localhost/test/";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>