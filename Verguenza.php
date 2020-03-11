<!DOCTYPE html>
<html>
<center> VERGUANZA </center>
<body>
<?php

echo"<br>";
echo"<br>";
echo"Verguenza ";
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}


echo"<br>";
echo"<br>";
echo"Verguenza 2";
$i=100;
if ( $i>99) {
    for ($i = 99; $i <= 150; $i++) {
        echo $i;
    }
} 
else{
    echo"Error";
}


echo"<br>";
echo"<br>";
echo"Verguenza 3";
$array = array(
    "foo" => "bar",
    "bar" => "foo",
    "dasj"=>"enoe",
    "enoe"=>"dasj",
    "deo"=>"doe",
    "doe"=>"deo",
);
var_dump($array);


echo"<br>";
echo"<br>";
echo"Verguenza 4";



echo"<br>";
echo"<br>";
echo"Verguenza 5";

?>
</body>