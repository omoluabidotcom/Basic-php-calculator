<?php

$calculate = new Calculator();
// $value = $_GET['numberSpace'];

if (isset($_GET['submit'])) {
    
    if(empty($_GET['numberSpace'])) {

        echo "<span class='error' > Input Error: <span class='c' > C </span> </span>";
        echo "<hr >";
    } else {

       $calculate->slimCase($_GET['numberSpace']);
    }

} else {
    $numberSpace = "<input type='text' name='numberSpace' class='numberSpace' id='numberSpace' />";
        echo $numberSpace;
        echo "<hr >";
}

?>