
<?php 



function hasPairWithSum($arr, $sum) {
    $size = count($arr);

    for ($i = 0; $i < $size; $i++) {
        for ($j = $i + 1; $j < $size; $j++) {
            if ($arr[$i] + $arr[$j] == $sum) {
                return true;
            }
        }
    }

    return false;
}


$arr = [5, 7, 1, 2, 8, 4, 3];
$sum = 8;

if (hasPairWithSum($arr, $sum)) {
    echo "There exists a pair of integers in the array that add up to the target sum.";
} else {
    echo "There does not exist a pair of integers in the array that add up to the target sum." ;
}
echo "<br>";

function check_even_odd($num) {
    if($num % 2 == 0) {
      return "The number is even.";
    } else {
      return "The number is odd.";
    }
  }
  $num = 5;
echo check_even_odd(20);
echo  "<br>";
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
  $sum += $i;
}
echo "The sum of the series 1 + 2 + 3 + ... + 100 is: $sum";

echo " <br>";

$sebtense = "A quick bround Fox Jump Over The lazy Dog";

$word = explode(" " , $sebtense);

print_r($word);

echo "\n";

$students = array ("rohim => 20", "korim => 40", "salam => 30");

// echo count($students);
// echo "\n";

$n = count($students);
for($i = 0; $i < $n; $i++){
  echo $students[$i]."\n";
}
  



