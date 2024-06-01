<?php 
//printing a php 
echo "helloworld </br>" ;
//declare a variable
$a =10;
echo $a;
//concatenation
echo "hi \n".$a;
//index arrays
$fruits=array("apple","orange","pear");
//index array access single value
echo $fruits[0];
//index array print using var_dump
var_dump($fruits);
//index array print using print_r
print_r($fruits);
//assosiative array
$details=array("</br> name"=>"usman","age"=>21);
var_dump($details);
//for each loop
foreach($details as $detail){
    echo "</br>".$detail."</br>";
}
//conditional statements
$age=20;
if($age==20){
    echo "not allow to drink";
}
else{
    echo "allow to not allow to drink";
}





























?>