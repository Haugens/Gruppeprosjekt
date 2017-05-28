
<?php 

$port = 21;
$username = 'sjohen16';
$password = 'thepasswordis123';
$name = 'sjohen16_explorewesterdals';
$servername = 'tek.westerdals.no';
$today = date('w');


$connection = new PDO("mysql:host=$servername;dbname=$name", $username, $password);

$statement1 = $connection->prepare('SELECT * FROM meny RIGHT JOIN restauranter ON restkode = id_navn WHERE restkode like "VNB"');
$statement1->execute();

$menu1 = [];

while($row1 = $statement1->fetch(PDO::FETCH_ASSOC)) {
    $menu1[] = $row1;
    
}


$statement2 = $connection->prepare('SELECT * FROM meny RIGHT JOIN restauranter ON restkode = id_navn WHERE restkode like "VNF"');
$statement2->execute();

$menu2 = [];

while($row2 = $statement2->fetch(PDO::FETCH_ASSOC)) {
    $menu2[] = $row2;
    
}

$statement3 = $connection->prepare('SELECT * FROM meny RIGHT JOIN restauranter ON restkode = id_navn WHERE restkode like "LYB"');
$statement3->execute();

$menu3 = [];

while($row3 = $statement3->fetch(PDO::FETCH_ASSOC)) {
    $menu3[] = $row3;
    
}





    
$dag1 = $menu1 [$today];
    
$dag2 = $menu2 [$today];

$dag3 = $menu3 [$today];

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
        <link rel="favicon" href="../Prototype/favicon.ico">

        <title>Vulkan FOOD</title>

    </head>
    <body>
        <div id="container">
            <div id="menybar">
               
                
                <a href="index.html">
                    <img id="logo" src="../Prototype/testlogo_yellow.jpg">
                </a>
                
                <a href="food.php">
                    <div class="food"> FOOD </div>
                </a>
                
                <a href="free_activities.php">
                    <div class="free_activities"> FREE ACTIVITIES </div>
                </a>
                
                <a href="nightlife.php">
                    <div class="nightlife"> NIGHTLIFE </div>
                </a>
                
                <a href="calendar.php">
                    <div class="calendar"> CALENDAR </div>
                </a>
                
            </div>
            
            <div id="slideshow_hovedside"> 
                <figure id="slidy">
                    <img id="foodpicture" src="../Prototype/foodpicture1.jpg">  
                    <img id="foodpicture" src="../Prototype/foodpicture2.jpg">
                </figure>
            </div>
            
            <div id="phover">
            <h1><?php require 'hover.php';?></h1>
        </div>
            
            <img id="harrow" src="../bilder/1280px-Arrow_east.svg.png">
            
            <div id="right_container">
                <img id="t1" src="../bilder/thumb1.jpg">
                <img id="t2" src="../bilder/thumb2.jpg">
                <img id="t3" src="../bilder/thumb3.jpg">
                 <div id="rest1">
                    <div id="top">
                    <h1>Restaraunt: <?= $dag3['navn'] ?></h1>
                </div>
                    
                    <div id="picturebox">
                    <img id="restaurantbilde" src="../Prototype/luckybirdbilde.jpg">
                    </div>
                    <div id="dish1">
                        <h1>Rett: <?= $dag3['matrett'] ?></h1>
                    </div>
                     
                     <p id="Aboutrest"><b>Lucky Bird's filosofy is quite simple: delicious food, good beers and nice tasting cocktails to a pleasent pricepoint!<br>
                    They serve what they like to call american food with a southern american touch to it: Chicken and spear ribs with traditional sides like Mac'n'cheese, baked beanes and corn stew. We use only the best ingredients and serve large and generous portions!<br>Our restaurant is inspired by american chicken shacks and we strive to make the good old american atmosphere here at Vulkan.</b></p>
                   
                </div>
                <div id="rest2">
                    
                    <div id="top2">
                    <h1>Restaraunt: <?= $dag2['navn'] ?></h1>
                    </div>
                    
                    <div id="picturebox2">
                        <img id="restaurantbilde" src="../Prototype/vulkanfiskbilde.jpg">
                    </div>
                    
                    <div id="dish2">
                        <h1>Rett: <?= $dag2['matrett'] ?></h1>
                    </div>
                    
                    <p id="Aboutrest"><b>Lucky Bird's filosofy is quite simple: delicious food, good beers and nice tasting cocktails to a pleasent pricepoint!<br>
                    They serve what they like to call american food with a southern american touch to it: Chicken and spear ribs with traditional sides like Mac'n'cheese, baked beanes and corn stew. We use only the best ingredients and serve large and generous portions!<br>Our restaurant is inspired by american chicken shacks and we strive to make the good old american atmosphere here at Vulkan.</b></p>
                    
                    
                </div>

                <div id="rest3">
                    
                    <div id="top3">
                        <h1>Restaraunt: <?= $dag1['navn'] ?></h1>
                    </div>
                    
                    <div id="picturebox3">
                        <img id="restaurantbilde" src="../Prototype/barvulkanbilde.jpg">
                    </div>
                    
                    <div id="dish3">
                        <h1>Rett: <?= $dag1['matrett'] ?></h1>
                    </div>
                    
                    <p id="Aboutrest"><b> Lucky Bird's filosofy is quite simple: delicious food, good beers and nice tasting cocktails to a pleasent pricepoint!<br>
                    They serve what they like to call american food with a southern american touch to it: Chicken and spear ribs with traditional sides like Mac'n'cheese, baked beanes and corn stew. We use only the best ingredients and serve large and generous portions!<br>Our restaurant is inspired by american chicken shacks and we strive to make the good old american atmosphere here at Vulkan.</b></p>
                    
               
                         
                
              </div>
                
            
                  
                
            </div>
            
            <div id="left_containerunderside">
                
                <img id="foodlogo_2" src="../Prototype/foodlogoylw-page.png">
                
                <p id="foodtext">FOOD <br> AROUND VULKAN</p>
                
                <p id="foodabouttext"> <b><b> The area around Vulkan</b> is well known for all the different restaurants, food shops and of course <i>Mathallen</i>, the well known food hall packed with different food and drinks from around the world. <br> <b>Vulkan can arguably</b> be named as one of the most cultural and most interesting areas to have a good meal. If you are looking to take a break from the everyday stress, you got several places you can either sit down and buy something delicious, or if you want to bring something from one of the many shops and take a trip down Akerselva or have a picnic in Cubaparken.<br><br>
                Maybe you are looking for a place you can bring your work and sit down and have an intense working session either inside or outside, then you can find several quiet and comfy bars and restaurants.<br> You have also got <b>Mathallen</b>, which is a food packed hall with food from around the world. Everything from norwegian delicacies to authentic, mexican tacos. If you can not find anything you will like in here, we are sure you  have skipped something.</b> </p>
                
            </div>
            
        </div>
        
        
        
       
        <script src="../slidingpicture.js"></script>
    </body>
</html>

    


    
   



