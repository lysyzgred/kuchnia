<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sklep";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Połączenie nieudane: " . $conn->connect_error);
}

$sql = "SELECT `name`, `price` FROM `produkt`";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
echo '<div class="card text-center">';
echo '<h3>' . $row["name"] . '<h3>';
echo '<p>' . $row["price"] . 'zł<p>';
echo '</div>';
}

$conn->close();
?>