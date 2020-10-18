<?
function say($name, $h=1){
    global $name;
    echo "<h$h>Hello, $name!</h$h>";
    $name = "Vita";
}

say("John");
$name = "Oleksandr";
say($name);
echo $name;
