<?php

// Premiere ligne
$a = 50;
$b = 10;

if($a > $b){
    echo "Hello World!";
}

//Deuxieme ligne
if($a !== $b){
    echo "<br><br>Hello World2";
}

//Troisieme ligne
if($a === $b){
    echo "<br><br>Oui";
}
else
{
    echo "<br><br>Non";
}


//Quatrieme ligne
echo"<br><br>";
if($a === $b){
    echo "1";
}else if($a > $b) {
    echo "2";
}
else
{
    echo "3";
}

//Cinquieme ligne
echo"<br><br>";

if($color === "red") {
    echo "Hello";
}else if($color === "green"){
    echo "Welcome";
}else{
    echo "Color ne vaut ni red ni green !";
}