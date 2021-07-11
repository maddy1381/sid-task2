<?php 
require_once "config.php";

// $username = mysql_real_escape_string($_POST['username']);
// $domain = mysql_real_escape_string($_POST['domain']);
// $message = mysql_real_escape_string($_POST['username'])

// $query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
// $result = mysql_query($query) or die(mysql_error());

// while($row = mysql_fetch_assoc($result)){
//      $id = $row['id'];
// }


$from = mysql_real_escape_string($_POST['from']);
$to = mysql_real_escape_string($_POST['to']);
$message = mysql_real_escape_string($_POST['message'])

$query = "SELECT * FROM users WHERE username = '$from' LIMIT 1";
$result = mysql_query($query) or die(mysql_error());

while($row = mysql_fetch_assoc($result)){
     $id = $row['id'];
}

echo 'hello';



?>