<?php
$servername = "sqlXXX.epizy.com"; // InfinityFree panel la irukum host name
$username = "epiz_12345678"; // panel la kudutha username
$password = "yourpassword";  // panel la set panna password
$dbname = "epiz_12345678_testdb"; // panel la kudutha db name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
