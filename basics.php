<?php
//BASICS
    //variable declaration
    $x = 1;
    $y = 2;

    //operators
    $sum = $x + $y;
    echo $sum;

    //strings
    //double quoted strings can take variables
    $name = "Aleksa";
    echo "Your name is $name";

    //arrays
    $odd_numbers = [1,3,5,7,9];
    $first_num = $odd_numbers[0];
    echo $first_num;

    //update arr item
    $odd_numbers[1] = 11;
    print_r($odd_numbers);

    //built in array functions

    //delete arr item
    unset($odd_numbers[3]);

    //count
    //returns number of arr items
    count($odd_numbers);

    //reset
    //gets first number of arr
    reset($odd_numbers);

    //end
    //gets last member of array
    end($odd_numbers);

    //get last index
    count($odd_numbers) - 1;
?>