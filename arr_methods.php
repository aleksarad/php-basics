<?php
//stack and queue functions
$numbers = [1,2,3];

//push to end of arr
array_push($numbers, 4);

//pop item from end 
array_pop($numbers);

//push to beginning
array_unshift($numbers, 5);

//pop from beginning
array_shift($numbers);

//concatenating/merging arrays
$arr1 = ["cat", "hat", "bat"];
$arr2 = ["dog", "log", "fog"];
$combined = array_merge($arr1, $arr2);

//sorting arrays
//mutates existing array
//rsort - will sort in reverse

$nums = [12, 8, 1, 27, 5, 3];
$sorted = sort($nums);
$reverse_sorted = rsort($nums);

//array_slice
//returns a new array that contains a subset of existing array
//does not mutate original array
$new_array = ["hey", "there", "buddy", "!"];

print_r(array_slice($new_array, 0, 2));
print_r($new_array);

//array_splice - same as slice but mutates

?>