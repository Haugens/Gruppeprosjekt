
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="../CSS/main.css" type="text/css">
        <link rel="stylesheet" href="../styles.css">
        <link rel="favicon" href="../Prototype/favicon.ico">

        <title>Vulkan: Free Activities</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
        <title>Vulkan FREE $TUFF</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3"></script>
        <script src="../snazzy-info-window.min.js"></script>
        <script id="marker-content-template" type="text/x-handlebars-template">
            <div class="custom-img" style="background-image: url({{{bgImg}}})"></div>
            <section class="custom-content">
                <h1 class="custom-header">
                    {{title}}
                    <small>{{subtitle}}</small>
                </h1>
                <div class="custom-body">{{{body}}}</div>
            </section>
        </script>

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
                    <img src="../Prototype/freeactivitiesbilde1.jpg">  
                    <img src="../Prototype/freeactivitiesbilde2.JPG">
                </figure>
            </div>
            
            <div id="right_container">

                <div class="map-canvas">   
                </div>
                    
                <div id="infobox">
                </div>
            </div>
            
        <div id="hoverbox">
            <?php require 'Mail.php' ?>
        </div>

        </div>
            
            <div id="left_containerunderside">
                
                <img id="freelogo_2" src="../Prototype/freelogoylw-page.png">
                
                <p id="freetext">FREE ACTIVITIES <br> AROUND VULKAN</p>
                
                <p id="freeabouttext"> <b>Either if you are a bit short money wice or you are just looking to have some cheap fun, you have come to the right place. The Vulkan area is an area packed with free alternatives that you can chose from. With good basic areas as Akerselva, which is a beautiful river going through Oslo, or if you want to take a break in one of the many green areas around Vulkan.<br>Vulkan also have training grounds for people who do not want to pay for expensive gym subscribtions.</b></p>
            
            </div>
            
        <script src="../slidingpicture.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRAW4AZLuIFRGnYzbJdGgRcfA4bHXPD5U&callback=initMap"async defer></script>
        <script src="../script.js"></script>
    </body>
</html>