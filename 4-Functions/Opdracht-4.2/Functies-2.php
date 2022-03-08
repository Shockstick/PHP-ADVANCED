<!DOCTYPE HTML>
<html>  
<body>

<?php
function rekenUit(int $x, int $y, int $z) {
    $w = $x + $y + $z;
    echo "Als ik de getallen $x, $y en $z optel, is de uitkomst $w.<br>";
    return $w;
    
}

$uitkomst = rekenUit(4, 2, 9);
rekenUit(1, 2, 3);
rekenUit(40, 28, 91);  
?>


</body>
</html>