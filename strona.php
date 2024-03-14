<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "kuchnia1";

 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn->connect_error) {
     die("Połączenie nieudane: ". $conn->connect_error);
 }

$title = $_POST['title'];
$description = $_POST['description'];
?>