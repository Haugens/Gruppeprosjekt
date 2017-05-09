<?php
 //create connection
 $connect=mysqli_connect('localhost','dbuser','password','aktiviteter');
	
//check connection
 if(mysqli_connect_errno($connect))
 {
	echo 'Failed to connect to database: '.mysqli_connect_error();
}

//mysqli_query("SET NAMES 'utf8_bin'", $connect);
/*
else
echo 'Connected Successfully!!';
*/

mysqli_query($connect,"insert into aktivitet (activity,date,location,description) values('Spytting','2017-05-13','Klubbhus Øst','Her slipper du bare inn hvis du er skallet og full, drikk og ta en omgang med felleshølet Kristine')");

echo "<h1>this is the ting</h1>";
