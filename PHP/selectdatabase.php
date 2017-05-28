
<?php
$servername = "localhost";
$username = "dbuser";
$password = "password";
$dbname = "aktiviteter";
$today=date('Y-m-d');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM aktivitet WHERE date LIKE \"$today\"";

$activities = array();

//$result = $conn->query($sql);

$result = $conn->query($sql);

while($row = mysql_fetch_assoc($result)){
    $activities[] = $row;
}
print_r($activities);
/*
if ($result->num_rows > 0) {
     echo "<table><tr><th>aktivitet</th><th>date</th><th>location</th><th>beskrivelse</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["activity"]. "</td><td>" . $row["date"]. " " . $row["location"]. " ". $row["description"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
*/

$conn->close();
?>  