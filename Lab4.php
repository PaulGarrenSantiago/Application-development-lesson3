<?php
/*
Write a program that prints the numbers from 1 to 100. 
But for number is divisible of three print “is divisible to 3” instead of the number
and for the number is divisible of five print “is divisible to 5”. 
For numbers which are divisible of both three and five print “is divisible to 3 and 5”.
Remember, you can use the modulus operator to check if a number is divisible by another number.
*/

//solution here commented for display purposes
/* $number = 1;

while ($number <= 100) {
    if($number % 3 == 0) {
        echo $number . ' is divisible by 3 <br>'; 
    }elseif($number % 5 == 0){ 
        echo $number . ' is divisible by 5 <br>';
    }else{
        echo $number . '<br>';
    }
    $number++;
}  */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Section 4 Lab 4</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <style type="text/css">
            body {
                background-color: white;
                margin: 0;
                display: flex;
                flex-direction: column;
            }
            
            .custom-container {
                text-transform: capitalize;
                border-color: black;
                border-bottom: solid;
                border-width: 2px;
                background-color: aqua;
                padding: 20px;
                width: 100%;
                height: 100px;
            }
            
            .head-text {
                font-size: 40px;
                text-align: center;
                font-family: Helvetica; 
                font-weight: bold;
            }
            .section{
                margin: 0px auto;
            }
            .divisible3{
                color: blue;
                text-indent: 50px;
            }
            .divisible5{
                color: red;
                text-indent: 50px;
            }
            .answer-box{
                margin-top: 10px;
                border: 2px solid black;
                width: 20%; 
                margin: 0px auto;
                text-indent: 50px;
            }
        </style>
    </head>
    <header class="custom-container">
          <h3 class = "head-text">Divisible by 3 and 5</h3>
    </header>
        <body>
            <h1 class="section">3BSIT-1</h1>
            <p class="section">Santiago, Paul Garren Tuba</p>
            <p class="section">Application Development<strong> Section 4 Lab 4</strong></p>

                <div class = "answer-box">
                    <?php  $number = 1;
                    while ($number <= 100) : ?>
                        <?php if ($number %3== 0) : ?>
                            <p class="divisible3"><?= $number . ' is divisble by 3'?></p>
                        <?php elseif ($number %5== 0) : ?>
                            <p class="divisible5"><?= $number . ' is divisble by 5'?></p>
                        <?php else: ?>
                            <p><?= $number ?></p>
                        <?php endif; ?>
                        <?php $number++; // Increment the value of $number ?>
                    <?php endwhile; ?>  
                </div> 
                           
        </body>
</html>