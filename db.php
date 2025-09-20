<?php
$servername = "gateway01.ap-southeast-1.prod.aws.tidbcloud.com"; // host
$username = "4Xa7iRxUy3mSekr.root";                               // username
$password = "ZjPDz7cHD6n3SGDQ";                                   // password
$dbname = "myappdb";                                              // database
$port = 4000; // TiDB Cloud default MySQL port (if 4000, check dashboard)

// Enable SSL connection (TiDB / Planetscale require SSL)
$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);
mysqli_real_connect($conn, $servername, $username, $password, $dbname, $port, NULL, MYSQLI_CLIENT_SSL);

// Test connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
