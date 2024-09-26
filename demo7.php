<?php

// $favoriteColor = 'Red';
// $secondFavoriteColor = 'yellow';
// ternary operator
/* $color = isset($favoriteColor) ? $favoriteColor : 'blue';
echo $color; */

//Null coalescing operator
// $color = $favoriteColor ?? 'blue';
// echo $color;

// $color2 = isset($favoriteColor) ? $favoriteColor : (isset($secondFavoriteColor) ? $secondFavoriteColor :'blue');
$color2 = $favoriteColor ?? $secondFavoriteColor ?? 'blue';
echo $color2;   