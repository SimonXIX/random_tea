<?php

# @name: tea.php
# @version: 0.1
# @creation_date: 2021-10-03
# @license: The MIT License <https://opensource.org/licenses/MIT>
# @author: Simon Bowie <simon.bowie.19@gmail.com>
# @purpose: Perform functions for tea site including randomisation of tea strings from file

function randomise_tea(){
   $tea_array = file('../teas.txt', FILE_IGNORE_NEW_LINES);

   $random_key = array_rand($tea_array, 1);

   return $tea_array[$random_key];
}

?>
