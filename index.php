<?php


// basic function with edit prams 

/*

function data($name = 'Tohami', $address = 'sudan', $age = '5'){
    
    echo " hello " . $name . " your age is " .
        $age . " and you are leave in " . $address;
    
}

  data(address:"KSA");
  
  */

/**********************************************************************************/


// function varibles argument list

/*
function calc($a,$b,$c  or    ...$nums){
//    echo $a + $b + $c;
//    echo "  numpers of arguments is " . func_num_args() ."<br>";  // 3 
//    echo "  argument numper tow  is " . func_get_arg(2) ."<br>";  // 20 
//    echo "  all arguments are " ;print_r (func_get_args()) ."<br>";  // array of arguments
//    echo "  all arguments are " ;print_r (...$nums) ."<br>";  // array of arguments
    
    $calc = 0;
    
//    foreach (func_get_args() as $arg){
//        
//       $calc += $arg ; 
//        
//             }  
    
        foreach ($nums  as $num){
        
           $calc += $num ; 
        
                 } 
    echo $calc;
}

calc(10,20,30,40);

*/
/*****************************function to excract array***************************


//... function to excract array

$skills = ['html','css','js','laravel'];

function skills (...$skills) {
    
    foreach ($skills as $skill):
            echo "your skills is $skill ";
    endforeach;
    
    
}

skills('html','css','js','laravel');
//or

skills(...$skills);


/**********************************  string functions in php *****************************

/********************strlen to count charectors  in text

$name = "Tohami";

echo strlen($name); //  6

*/
//  $fun  =  function (){
//    return "hello";
//};
//
//echo $fun();

/////////////// accsess letters in string  
//
//$name = "Tohami";
//echo "the first litter in your name is " . $name[0];
//echo "the last litter in your name is " .$name[strlen($name)-1];
//echo "the last litter in your name is " .$name[-1];
//
////update string 
//
//$name[-1] = "T";//cange the last char from i to T to become TohamT
//echo $name;
//    
//// add new char to string to become TohamTA
//    $name[5]=="A";  //
//echo $name;
    
$string = "Tohami back end devoloper";

/*********************** lcfirst($string); your first char in your string will be small
/********************* ucfirst($string); your first char in your string will be capetal
/********************* strtolower($string); all chars in your string will be small
/************************* strtoupper($string); all chars in your string will be capetal
/******* ucwords($string,delemetrs(optional)); all first chars in your words will be capetal

 // echo lcfirst($string);        //output is  tohami back end devoloper
 // echo ucfirst($string);       //output is  Tohami back end devoloper
// echo strtolower($string);   //  tohami back end devoloper
// echo strtoupper($string);  //  TOHAMI BACK END DEVOLOPER
// echo ucwords($string);   //  Tohami Back End Devoloper */






/**************************************************************************************/







$skills = ['html','css','js'];
$string = "Tohami back end devoloper";
/************* implode to make your array elements as  string elemnts */
/************* explode to make your string elements as  array elemnts */
/************* str_shuffle to mix your string elements evry refresh */
/************* str_shuffle to mix your string elements evry refresh */
/************* strrev make hello olleh   */
/************* trim to  cut some cahrs from your string from start & end  */

//echo implode ( '-' , $skills); //html-css-js
//print_r(explode( ' ' , $string)); 

    //Array ( [0] => Tohami [1] => back [2] => end [3] => devoloper )

//echo str_shuffle($string);//oo oreh pevakdbadTl inemc  &  dlehdkTr bpmvoe aeainooc
//echo strrev("hello");  //olleh

//echo trim("###Tohami#",'#'); //Tohami




/*************************************************************************************/


/*************** str_split => to cut your string and make it as array elments*/
/*************** strpos => to search about possion element in string*/



//print_r(str_split($string, '3'));
 //Array ( [0] => Toh [1] => ami [2] => ba [3] => ck [4] => end [5] => de [6] => vol [7] => ope [8] => r )

echo strpos("toham",'h');




















