
<?php 

$port = 21;
$username = 'sjohen16';
$password = 'thepasswordis123';
$name = 'sjohen16_explorewesterdals';
$servername = 'tek.westerdals.no';
$today = date('w');


$connection = new PDO("mysql:host=$servername;dbname=sjohen16_explorewesterdals", $username, $password);

$statement = $connection->prepare('SELECT * FROM meny');
$statement->execute();

$menues = [];

while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $menues[] = $row;
    
}





    
$dag = $menues [$today];
    

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="../CSS/main.css" type="text/css">

        <title>Vulkan FOOD</title>

    </head>
    <body>
        <div id="container">
            <div id="menybar">
                
                <!--<a href="index.html">
                    <div id="logo"></div>
                </a>-->
                
                <a href="index.html">
                    <img id="logo" src="../Prototype/testlogo_yellow.jpg">
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
                <figure id="slidy">
                    <img src="../Prototype/dognvill_utenfor.jpg">  
                    <img src="../Prototype/dognvill_burger.jpg">
                </figure>
            </div>
            
            <div id="right_container">
                
                        <h2> Dagens meny: </h2>
                        <h2 class="mdl-card__title-text"><?= $dag['matrett'] ?></h2>
                        
                        <h3 class="mdl-card__title-text"><?= $dag['beskrivelse'] ?></h3>
                        
                    
                    
                    
                        <h2> Ingredients</h2>
                        <h3><?= $dag['ingredienser'] ?></h3>
                        <h3 class="mdl-card__title-text"> <?= $dag['pris'] ?>kr</h3>
                  
                
            </div>
            
            <div id="left_containerunderside">
                
                <img id="foodlogo_2" src="../Prototype/foodlogoylw-page.png">
                
                <p id="foodtext">FOOD <br> AROUND VULKAN</p>
                
                <p id="foodabouttext"> <b><b>The area around Vulkan</b> is well known for all the different restaurants, food shops and of course <i>Mathallen</i>, the well known food hall packed with different food and drinks from around the world. <br> <b>Vulkan can arguably</b> be named as one of the most cultural and most interesting areas to have a good meal. If you are looking to take a break from the everyday stress, you got several places you can either sit down and buy something delicious, or if you want to bring something from one of the many shops and take a trip down Akerselva or have a picnic in Cubaparken.<br><br>
                Maybe you are looking for a place you can bring your work and sit down and have an intense working session either inside or outside, then you can find several quiet and comfy bars and restaurants.<br> You have also got <b>Mathallen</b>, which is a food packed hall with food from around the world. Everything from norwegian delicacies to authentic, mexican tacos. If you can not find anything you will like in here, we are sure you  have skipped something.</b> </p>
                
            </div>
            
        </div>
        <script src="../slidingpicture.js"></script>
    </body>
</html>

    


    
   



