<?php

// deel 1
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];

$myArray[]='metro';

echo $myArray."\n";

// of echo implode(' ', $myarray); maar dan komy het naast elkaar


//deel 2

$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];

echo count($myArray);

echo $myArray."\n";

$myArray[]='metro';

echo count($myArray);

//deel 3


// hier word er gevraagd voor de waarde die heet "bar" want de index begint bij 0
$array = array("foo", "bar", "hello", "world");
echo $array[1];

//hier word er gevraagd voor de waarde "4"
$array = array (1,2,3,4,5);
echo $array[3];

// de waarde toyata word op gevraagd, en er worden 3 elementen op gevraagd
$cars = array("Volvo", "BMW", "Toyota");
echo $array[2];
echo count($cars);

// de element 5 word op gevraagd want die staat er als eerst
$array = [ 5, 4, 3, 2, 1 ];
echo $array[0];

// de elementen staan als (one,two,three,four) 
// de count vraagt om de element -1 maar de index begint met 0 dus het lijkt mij
//logisch als -1 dan weer de laatste element is oftewel element "five"
$numbers [0]="one";
$numbers [1]="two";
$numbers [2]="three"; 
$numbers [3]="four";
$numbers [4]="five";
echo $numbers [count($numbers)-1];

//deel 4

$cijfersPHP = array(4.4, 4.6, 5.6, 6.1, 7.6, 7.2);

// bereken gemiddelde door alle cijfers op te tellen en te delen door het aantal
// ik had de formule uitberekend en ik hoop dat ik het goed heb afgerond
$aantalCijfers = count($cijfersPHP);
$gemiddelde = array_sum ($cijfersPHP) / $aantalCijfers;
echo(round(5.9) . "<br>");

echo "Gemiddelde is: ".$gemiddelde;

 ?>
