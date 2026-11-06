<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Using PHP Variables, arrays and operators"/>
    <meta name="keywords" content="PHP, Variables, arrays, operators"/>
    <meta name="author" content="Sammy"/>
    <title>Using PHP Variables, arrays and operators</title>

</head>
<body>

    <h1>PHP Variables, arrays and operators </h1>
    
<?php
echo "<h2>Days of the week in english are:</h2>";
    $days = array ("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"); 
    echo "<p>" . implode(", ", $days) . "</p>";
    $days_fr = array ("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"); 
    echo "<h2>Days of the week in french are:</h2>";
    echo "<p>" . implode(", ", $days_fr) . "</p>";

?>

</body>
</html>
