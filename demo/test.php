<?
function nums(){
    return [1,2,3];
}
//list($one, $two, $three) = nums();
$two = nums()[1];
echo $two;
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