$port = 21;
$username = 'sjohen16';
$password = 'thepasswordis123';
$name = 'sjohen16_explorewesterdals';
$servername = 'tek.westerdals.no';
$today = date('w');


$connection = new PDO("mysql:host=$servername;dbname=$name", $username, $password);