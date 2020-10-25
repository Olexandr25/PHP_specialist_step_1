<?php

echo "A $color $fruit <br>"; // A

include 'test.inc.php';

echo "A $color $fruit <br>"; // A green apple

include 'test.inc.php';

echo "A  $fruit <br>"; // A green apple

?>


<?php
/*
function nums($x, $y, &$a, &$b, &$c){
    $a = $x * $y;
    $b = $x / $y;
    $c = $x - $y;
    return $x + $y;
}
$sum = nums(2,3, $mult, $div, $sub);
echo $sum, " ", $mult, " ", $sub;
*/

//list($one, $two, $three) = nums();
//$two = nums()[1];
//echo $two;
/*
function sum($n1, $n2){
    return $n1 + $n2;
}
$result = sum(2,3);
echo $result;
*/

/*
//$name = "Jake";
//$GLOBALS['name']="Jake";

function say(&$name, $h=1){
    //global $name;
    echo "<h$h>Hello, $name!</h$h>";
    //unset($name);
    //$GLOBALS['name'] = "Vita";
    $name = "Vita";
}


//say("John");
$name = "Oleksandr";
say($name);
echo $name;
*/