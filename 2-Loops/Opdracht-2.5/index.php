<!DOCTYPE html>
<html>
<body>

<?php  
$student  = array(
    "voornaam"    => "Jan",
    "achternaam"  => "Janssen",
    "klas"        => "9A",
    "Leeftijd"    => "17",
    "Woonplaats"  => "Amstelveen"
);

foreach ($student as $value) {
  echo "<ul>
  <li>$value</li>
  </ul> <br>";
}

?>  

</body>
</html>