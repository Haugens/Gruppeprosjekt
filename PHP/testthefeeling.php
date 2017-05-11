<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>THIS IS THE DATABASE PART</title>
    <link rel=stylesheet type="text/css" href="../CSS/main.css">
</head>

<body>
    <h1>A FOOK OOF!</h1>
    <?php 
        include 'selectdatabase.php';?>
    <?php 
    $today=date('Y-m-d');
    $date = new DateTime("$today");
    for($i = 0; $i <= 30; $i++) { 
        $date->modify("+1 day");?>
      <div class="date-div" id="date-<?php echo $date->format("Y-m-d"); ?>"></div>
    <?php } ?>
</body>

</html>