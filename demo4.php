<?php
    $number = 1;

    /* while ($number <= 10) {
        if($number % 2 == 0) {
            echo $number . ' is even <br>'; 
        }else{ 
            echo $number . ' is odd <br>';
        }
        $number++;
    } */
//break out of a loop
/* for ($i = 1; $i <= 10; $i++) {
    if ($i == 5){
        break;
    }

    echo $i . '<br>';
} */

//skip and continue
/* for ($i = 1; $i <= 10; $i++) {
    if ($i == 5){

        continue;
    }

    echo $i . '<br>';
}
 */
$studentGrades = array(
    'John' => 75,
    'jack' => 92,
    'Jill' => 100,
    'Joan' => 80
    );

    foreach ($studentGrades as $name => $grade) {
        if($grade >= 90){
            echo $name . ' has an excellent grade <br>';
        }elseif($grade >= 80){
            echo $name . ' has a good grade <br>';
        }else{
            echo $name . ' has failed the class <br>';
        }
    }