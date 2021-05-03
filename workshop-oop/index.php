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
<style>
body{
    background-color: black;
    color: white;
}
</style>
<body>
    <?php
  
$Héraclès = new Fighter ("Héraclès",20,6);
$var1 =$Héraclès->fight(1, 20);
$life1=$Héraclès->life;
$Lion = new Fighter ("Lion",11,13);
$var2 =$Lion->fight(1, 11);
$life2=$Lion->life;
$i=0;
$calc=$var1-$var2;
$calc1=$var2-$var1;
while($life2>0 && $life1>0){
    $i=$i+1;
    
    echo "Round $i <br>";
    
    if($calc<0){
        $calc=1;
    }else{
        $calc=$Héraclès->fight(1, 20)-$Lion->fight(1, 13);
    }
    if($calc1<0){
        $calc1=1;
    }else{
        $calc2=$Lion->fight(1, 11)-$Héraclès->fight(1, 6);
    }
        $life2=$Lion->life-($calc);
        echo "🧔 " . $Héraclès->name . " " ; echo $Héraclès->fight(1, 20) . " " ; echo "🦁 " . $Lion->name . " " ; echo $Lion->fight(1, 13) . " "  ; echo " lion life :" . " " . $life2 . " " . " Héraclès life :"  . " " . $life1 . " <br>" ;
        $Lion->life=$life2;
       
        $life1=$Héraclès->life-($calc1);
        echo "🦁 " . $Lion->name . " " ; echo $Lion->fight(1, 11) . " " ; echo "🧔 " . $Héraclès->name . " " ; echo $Héraclès->fight(1, 6) . " " ; echo " lion life :" . " " . $life2 . " " . " Héraclès life :"  . " " . $life1 . " <br>" ;
        $Héraclès->life=$life1;
    
}

if($life1>0){
echo "<br>🧔 Héraclès win : $life1 ";
echo "<br>🦁 lion lose  ";
}else{
    echo "<br>🧔 Héraclès lose "; 
    echo "<br>🦁 lion win : $life2 "; 
}


?>

</body>
</html>

