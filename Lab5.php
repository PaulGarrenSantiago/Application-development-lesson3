<?php
/*
# Names Challenge

## Instructions
1. Take the array of names below and loop through them. The type of loop is up to you.
   $names = ['ALEC', 'BETH', 'CAROLINE', 'DAve', 'ElAnor', 'ANNa', 'Freddie', 'AdaM'];

2. Within the loop, use a conditional statement to check if the first letter of the name is 'A'.

3. If the first letter is 'A', skip that name and continue to the next iteration.

4. If the first letter is not 'A', reverse the string.

5. Make all names lowercase before printing them.

### Hints
- You can use indexes to access the first character of a string. ($string[0]) or you can use the `substr()` function.
- You can reverse a string using the `strrev()` function.
- You can make a string lowercase using the `strtolower()` function.
- You can skip an iteration of a loop using the `continue` keyword.
*/

/*  The result should like this 

        hteb
        enilorac
        evad
        ronale
        eidderf

*/
//solution here commented for display purposes
$names = [
    'ALEC',
    'BETH',
    'CAROLINE',
    'DAve',
    'ElAnor',
    'ANNa',
    'Freddie',
    'AdaM'
];

/* foreach ($names as $name) {
    if (str_starts_with($name,'A')) {
        continue;
    }else{
        $name2 = strtolower($name);
        $name2 = strrev($name2);
        echo $name2 . '<br>';
    }

} */

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Section 4 Lab 5</title>
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
            .answer{
                color: blue;
            }
            .answer-box{
                margin-top: px;
                border: 2px solid black;
                width: 20%; 
                margin: 0px auto;
                text-align: center;
            }
        </style>
    </head>
    <header class="custom-container">
          <h3 class = "head-text">Name Challenge</h3>
    </header>
        <body>
            <h1 class="section">3BSIT-1</h1>
            <p class="section">Santiago, Paul Garren Tuba</p>
            <p class="section">Application Development<strong> Section 4 Lab 5</strong></p>

                <div class = "answer-box">

                    <?php foreach ($names as $name) : ?>
                        <?php if (str_starts_with($name,'A')) : ?> <!--Skips names starting with "A" using the continue keyname-->
                            <?php continue?>
                        <?php else:?>
                            <?php $name2 = strtolower($name);
                                  $name2 = strrev($name2); ?>
                            <p class="answer"><?=$name2?> <br></p>

                        <?php endif ;?>
                        <?php endforeach ; ?>     
                </div>             
        </body> 
</html>