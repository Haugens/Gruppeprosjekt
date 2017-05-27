
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
                <img id="t1" src="../bilder/thumb1.jpg">
                <img id="t2" src="../bilder/thumb2.jpg">
                <img id="t3" src="../bilder/thumb3.jpg">
                 <div id="rest1">
                    <div id="top">
                    <h1>Restaraunt: <?= $dag1['navn'] ?></h1>
                </div>
                    
                    <div id="picturebox">
                    <img src="../bilder/Peppes.jpg">
                    </div>
                    <div id="dish1">
                        <h1>Rett: <?= $dag1['matrett'] ?></h1>
                    </div>
                    <div id="ing1">
                        <h2>Ingredienser: gluten, melk, svin</h2>
                    </div>
                    <div id="kr1">
                        <h2>Kr: 129</h2>
                    </div> 
                </div>
                <div id="rest2">
                    
                    <div id="top2">
                    <h1>Restaraunt: Vulkanfisk</h1>
                    </div>
                    
                    <div id="picturebox2">
                        <img src="../bilder/vfisk.jpg">
                    </div>
                    
                    <div id="dish2">
                        <h1>Rett: Laks med fløtegratinertepoteter</h1>
                    </div>
                    
                    <div id="ing2">
                        <h2>fisk, potet, melk</h2>
                    </div>
                    
                    <div id="kr2">
                        <h2>Kr:99</h2>
                    </div>
                    
                </div>

                <div id="rest3">
                    
                    <div id="top3">
                        <h1>Restaraunt: LuckyBird</h1>
                    </div>
                    
                    <div id="picturebox3">
                        <img src="../bilder/luckyb.jpg">
                    </div>
                    
                    <div id="dish3">
                        <h1>Rett: Kyllingfilet med fries</h1>
                    </div>
                    
                    <div id="ing3">
                        <h2>kylling, potet</h2>
                    </div>
                    
                    <div id="kr3">
                        <h2>Kr:109</h2>
                    </div>
                         
                
              </div>
                  
                
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

    


    
   



