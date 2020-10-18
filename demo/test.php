<?
function say($name, $h=1){
    echo "<h$h>Hello, $name!</h$h>";
    global $name;
    $name = "Vita";
}

say("John");
$name = "Oleksandr";
say($name);
echo $name;
