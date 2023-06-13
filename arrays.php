<?php
// arrays
// $colors=array("blue","yellow","green");
// echo $colors[0]. "<br>";
// echo $colors. "<br>";
// print_r ($colors);

// 1. indexed array
// $colors=array("blue","yellow","green","red","black");
// $colorsLenght=count($colors);
// echo $colorsLenght;
// for($x=0; $x<$colorsLenght;$x++){
//     echo $colors[$x];
//     echo "<br>";
// }

// 2. Associative array
// $subject=array("ruslan"=>"CS","PHP"=>"developer");
// echo $subject["ruslan"];
// echo "<br>";
// echo $subject["PHP"];

// foreach($subject as $x=>$value) {
//     echo "key".$x.",value=".$value;
//     echo "<br>";
// }

// 3. multidimensional array
// $colors=array(array("red",10),array("black",4),array("yellow",97));
// echo $colors[2][1];

// for($row=0;$row<3;$row++){
//     echo "Row".$row."<br>";
//     for($col=0;$col>3;$col++){
//         echo $colors[$row][$col] ."<br>";
//     }
// }

// functions in arrays

// sort()
// $fruits=array("apple","mango","banana","peach");
// sort($fruits);
// print_r($fruits);

// resort()
// rsort($fruits);
// print_r($fruits);

// asort()
// $subject=array("ruslan"=>"CS","PHP"=>"developer");
// asort($subject);
// print_r($subject);

// ksort()
// ksort($subject);
// print_r($subject);