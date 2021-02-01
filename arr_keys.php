<?php
//php arrays are actually ordered maps
//all values of arrays have keys that can be specified

$phone_numbers = [
    "Jim" => "232-545-5454",
    "Alison" => "434-121-7937"
];

//specific values can be accessed with bracket notation
echo $phone_numbers["Alison"];

//concatenate 
echo "Alison's number is " . $phone_numbers["Alison"];

//we can also insert using brackets notation
$phone_numbers["Jessica"] = "777-343-3489";

//check if a key exists in an array
//array_key_exists
if (array_key_exists("Alison", $phone_numbers)) {
    echo "number exists";
} else {
    echo "number not there";
}

//if we want to extract only the keys od the array, we can use
//array_keys
//to get only values, we can use array_values
?>