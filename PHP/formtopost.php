<!DOCTYPE html>

<html>

<head>

    <script type = "text/javascript" src = "http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type = "text/javascript"></script>

</head>


<body>

<form id="aform" action="posttodatabase.php" method="POST">
    Aktivitet: <input type="text" name="activity" /><br />
    År "YYYY": <input type="text" name="year" /><br />
    Måned "MM": <input type="text" name="month" /><br />
    Dag "DD": <input type="text" name="day" /><br />
    Lokale: <input type="text" name="location" /><br />
    Description: <input type="text" name="description" /><br />
    <input type="submit" name="submit">

</form>

</body>
</html>