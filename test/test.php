<?php


$servername = 'localhost';
$username = 'root';
$password = '';
            
            
$conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);


$sql = 'select user_email from wp_users';

foreach  ($conn->query($sql) as $row) {
    print_r($row);
}



?>