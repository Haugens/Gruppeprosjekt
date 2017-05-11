
<?php 

$port = 8889;
$username = 'root';
$password = 'root';
$name = 'dagens meny';

$connection = new PDO("mysql:host=localhost;dbname={$name};port={$port}", $username, $password);

$statement = $connection->prepare('SELECT * FROM meny');
$statement->execute();

$menues = [];

while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $menues[] = $row;
    
}


$mandag = [];
$dag = $menues [0];



?>




<!DOCTYPE html>
<html>
    <head>  
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="main.css" type="text/css">

        <title>Vulkan</title>

    </head>
    <body>
        <div id="container">
            <div id="menybar">
                
                <a href="index.html">
                    <div id="logo"></div>
                </a>
                
                <a href="food.html">
                    <div class="food"> FOOD </div>
                </a>
                
                <a href="free_activities.html">
                    <div class="free_activities"> FREE ACTIVITIES </div>
                </a>
                
                <a href="nightlife.html">
                    <div class="nightlife"> NIGHTLIFE </div>
                </a>
                
                <a href="calendar.html">
                    <div class="calendar"> CALENDAR </div>
                </a>
                
            </div>
            
            <div id="slideshow_hovedside"> 
                <img id="vulkan-bilde" src="../Prototype/djbilde.jpg">  
            </div>
            
            
            
            <div id="right_container">
                <div id="foodmapbox">
                    <div id="featurebox">
                        <h2> Dagens meny: </h2>
                        <h2 class="mdl-card__title-text"><?= $dag['matrett'] ?></h2>
                        
                        <h3 class="mdl-card__title-text"><?= $dag['beskrivelse'] ?></h3>
                        
                    </div>
                    
                    <div id="infobox">
                        <h2> Ingredients</h2>
                        <h3 class="mdl-card__title-text"><?= $dag['ingredienser'] ?></h3>
                        <h3 class="mdl-card__title-text"> <?= $dag['pris'] ?>kr </h3>
                    </div>
                </div>
            </div>
          
            
            <div id="left_container">
                
                <img id="foodlogo_2" src="../Prototype/food.png">
                
                <p id="foodtext">FOOD <br> AROUND VULKAN</p>
                
                <p id="foodabouttext"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                
            </div>
            
        </div>

    </body>
</html>