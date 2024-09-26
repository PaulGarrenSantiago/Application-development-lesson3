<?php

$age = 17;
$ave = 89;
 //if statement
 if ($age >= 18){
    echo 'You are allowed to vote';
 }

 echo'<br/>';

//if-else
if ($ave >= 75){
    echo 'Your average is passed';
}else{
    echo 'Your average is Failed';
}

echo'<br/>';
//nested if statement
if ($age >= 18){
    echo 'You are allowed to vote';
}else{
    if ($age == 17){
        echo 'Wait for 1 year to vote';
    }else{
        echo 'You are not allowed to vote';
    }
}
echo '<br/>';

//if else if
if ($ave == 100){
    echo 'Your average is Excellent';
}elseif ($ave >= 90){
    echo 'Your average is very good';
}elseif ($ave >= 80){
    echo 'Your average is Good';   
}else{
    echo 'Your Average is Failed';
}

