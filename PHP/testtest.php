<?php

$connect=mysqli_connect('localhost','dbuser','password','aktiviteter');

if($connect){
}else{
die("Connection failed. ".mysqli.connect_error());
}

$sql="SELECT activity, date, location, description FROM aktivitet";
$results=mysqli_query($connect,$sql);

if (mysqli_num_rows($results)>0){
while($row=mysqli_fetch_array($results)){
echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3];
echo "<br>";
}
}
mysqli_close($connect);


?>