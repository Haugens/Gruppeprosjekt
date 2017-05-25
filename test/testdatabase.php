<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "tek.westerdals.no";
$username = "sjohen16_dbuser";
$password = "thepasswordis123";
$dbname = "sjohen16_explorewesterdals";
$today=date('Y-m-d');

$dbConnection = new mysqli($servername, $username, $password, $dbname);

if ($dbConnection->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}


$stmt = $dbConnection->prepare("SELECT * FROM `aktivitet` WHERE date >= CURRENT_DATE()");

//$stmt->bind_param('s', $today);

$stmt->execute();

$activities = array();

$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    $activities[] = $row;
/*    echo $row['activity'];
    echo $row['date'];
    echo $row['location'];
    echo $row['description'];*/
}

echo json_encode($activities);

?>