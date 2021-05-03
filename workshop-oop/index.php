<?php
include 'src/Fighter.php' ;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  
$Héraclès = new Fighter ("Héraclès",20,6);
$var1 =$Héraclès->fight(1, 20);
$life1=$Héraclès->life;
$Lion = new Fighter ("Lion",11,13);
$var2 =$Lion->fight(1, 11);
$life2=$Lion->life;

while($life2>0 && $life1>0){
    
    $reverse=$var2-$var1;
    $adi=$var1-$var2;
    $life2=$Lion->life-$adi;
    $life1=$Héraclès->life-$reverse;
    echo $Héraclès->name . " " ; echo $var1  ; echo $Lion->name . " " ; echo $var2  ; echo " lion life :" . " " . $life2 . " " . " heracle life :"  . " " . $life1 ;
    $Lion->life=$life2;
    $Héraclès->life=$life1;
}


?>

</body>
</html>

