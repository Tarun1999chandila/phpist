<?php
//sum of 1 to 15
$i=0;
$b=0;
while($i<=15){
$b+=$i;

$i++;
}
echo $b;


//fibonacii series

$n=10;
$a=0;
$b=1;
$c;
for ($i=0 ; $i < $n ; $i++ ) { 
    # code...
    echo $a ;
    echo "<br>";
    $c=$a+$b;
    
    $a=$b;
    $b=$c;

}

//print 1&6

$arr=array(1,2,3,4,5,6,7);
foreach ($arr as $value) {
    if($value==1 || $value==6){
    echo "$value <br>" ;
    }
}

//print 1 2 3 4 
$arr=array(1,2,3,4,5,6,7);
foreach ($arr as $value) {
    if($value>4 ){
    
    break;
    }
    echo $value  ;
    echo " ";
}

//switch case for check if value is greater than $value=4

$value=4;
switch($value){
          case 1:
            echo "Not greater than value <br>";
            case 2:
                echo "Not greater than value <br>";
                case 3:
                    echo "Not greater than value <br>";
                    case 4:
                        echo "Not greater than value <br>";
                        case 5:
                            echo "greater than value <br>";
                            case 6:
                                echo "greater than value <br>";
}


//script to display 1-2-3-4-5-6-7-8-9-10


$i=1;
while($i<=10){
    echo $i;
    if($i!=10){
        echo "-";
    }
    $i++;
}


//print 1,2,3,6,7

$arr=array(1,2,3,4,5,6,7);
echo $arr[0];
echo ",";
echo $arr[1];
echo ",";
echo $arr[2];
echo ",";
echo $arr[5];
echo ",";
echo $arr[6];


//function to czalculate factorial


function factorial($a){
    $f=1;
    for ($i=$a; $i >0; $i--) { 
        $f=$f*$i;
        
    }
    echo $f;
    }
    echo (factorial(5));


    //infinite loop


    $i=1;
while($i>0){
    echo $i;
    $i++;
}

//print
print "Hello world!";


//printf
$age = 21;
$name = "Tarun";
printf("My name is %s and i am %u years old",$name,$age);


//sprintf
$age = 21;
$name = "Tarun";
$result = sprintf("My name is %s and i am %u years old",$name,$age);
echo $result;
?> 


