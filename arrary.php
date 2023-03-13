<?php

function sort_strings_by_length_asc($arr) {
    usort($arr, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $arr;
}

$array = array("apple", "banana", "cherry", "date", "elderberry");
$sorted_array = sort_strings_by_length_asc($array);
print_r($sorted_array);

echo "\n";
?>


<?php

function concatenate_from_end($str1, $str2) {
    $str2_start = strlen($str1) - strlen($str2);
    $str2_length = strlen($str2);
    $result = substr($str1, 0, $str2_start) . $str2 . substr($str1, $str2_start, $str2_length);
    return $result;
}



$string1 = "hello world";
$string2 = "123";
$result = concatenate_from_end($string1, $string2);
echo $result;

?>


<?php

function remove_first_and_last($arr) {
    array_shift($arr); // remove the first element
    array_pop($arr); // remove the last element
    return $arr; // return the remaining elements
}

$array = array(1, 2, 3, 4, 5);
$result = remove_first_and_last($array);
print_r($result);



?>


<?php

function contains_only_letters_and_whitespace($str) {
    return preg_match('/^[a-zA-Z\s]+$/', $str);
}

$string = "Hello world";
$result = contains_only_letters_and_whitespace($string);
echo $result ? "The string contains only letters and whitespace." : "The string contains other characters as well.";



?>



<?php


function find_second_largest($arr) {
    $largest = $arr[0];
    $second_largest = null;
    foreach ($arr as $num) {
        if ($num > $largest) {
            $second_largest = $largest;
            $largest = $num;
        } else if ($num != $largest && ($second_largest == null || $num > $second_largest)) {
            $second_largest = $num;
        }
    }
    return $second_largest;
}

$array = array(3, 5, 2, 8, 1);
$result = find_second_largest($array);
echo "The second largest number is: " . $result;



?>

