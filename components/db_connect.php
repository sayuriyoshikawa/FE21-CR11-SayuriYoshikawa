<?php 

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "fswd14_cr11_petadoption_sayuriyoshikawa";

// create connection
$connect = mysqli_connect($hostname, $username, $password, $dbname);

// check connection
if(mysqli_connect_error()) {
   die("Connection failed");
// }else {
//     echo "Successfully Connected";
}