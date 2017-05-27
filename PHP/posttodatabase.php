
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['submit'])){


//$connect=mysqli_connect('tek.westerdals.no','sjohen16_post','thepasswordis123','sjohen16_explorewesterdals');
    $mysqli = new mysqli('tek.westerdals.no','sjohen16_post','thepasswordis123','sjohen16_explorewesterdals');
/*
if(mysqli_connect_errno($connect))
{
    echo 'Failed to connect to database: '.mysqli_connect_error();
}
*/

//$stmt = $connect->prepare("insert into aktivitet (activity,date,location,description) values(?,?+'-'+?+'-'+?,?,?)");


    $activity = $_POST["activity"];
    $year = $_POST["year"];
    $month = $_POST["month"];
    $day = $_POST["day"];
    $location = $_POST["location"];
    $description = $_POST["description"];

    $dates = "$year-$month-$day";

    echo $dates;

    $stmt = $mysqli->prepare("INSERT INTO aktivitet (activity,date,location,description) VALUES (?, ?, ?, ?)");

    $stmt->bind_param("ssss", $activity , $dates, $location, $description);



    $stmt->execute();

    $stmt->close();

    $mysqli->close();
}
