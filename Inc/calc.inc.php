<?php

// Below the calculator class is instantiated
$calculate = new Calculator();

// Below the submit button is check if it has been clicked
if (isset($_GET['submit'])) {
    
    // Below the input for number is checked if it empty
    if(empty($_GET['numberSpace'])) {

        // Below is an html tag that is been outputted whenever the input is found empty
        echo "<span class='error'> Input Error: <span class='c'> C </span> </span>";
        echo "<hr >";
    } else {

        // Below a method from the calculator class that was instantiated above was called 
       $calculate->slimCase($_GET['numberSpace']);
    }

} else {

    // Below is the field that is shown whenever the page load
    $numberSpace = "<input type='text' name='numberSpace' class='numberSpace' id='numberSpace' />";
    echo $numberSpace;
    echo "<hr >";
}

?>