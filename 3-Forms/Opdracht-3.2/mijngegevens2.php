<!DOCTYPE html>
<html>
<!-- <body> -->

<?php
$test = $_POST['favcolor'];

echo "<body style='background-color:$test'>";
// <body style='background-color: blue;'>
echo "Geslacht is:".$_POST["Geslacht"];
echo "<br>"; 
echo "Voornaam is:".$_POST["fname"]; 
echo "<br>";
echo "Achternaam is:".$_POST["lname"];
echo "<br>";
echo "Klas is:".$_POST["cname"];
echo "<br>";
echo "Leeftijd is:".$_POST["aname"];
echo "<br>";
echo "Adres is:".$_POST["adname"];
echo "<br>";
echo "Woonplaats is:".$_POST["rname"];
?>  

</body>
</html>
