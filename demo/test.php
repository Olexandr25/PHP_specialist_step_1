<?
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
