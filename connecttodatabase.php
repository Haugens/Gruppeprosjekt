<?php
 //create connection
 $connect=mysqli_connect('tek.westerdals.no','sjohen16_dbuser','thepasswordis123','sjohen16_explorewesterdals');

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

mysqli_query($connect,"insert into aktivitet (activity,date,location,description) values('Hermetikkboksing','2017-05-21','Telthusbakken','Bank bank. Hvem der? Hermetikkboksing. Hermetikkboksing hvem? RAAAAAAAAAAAAARGH!!!!')");

echo "<h1>this is the ting</h1>";
