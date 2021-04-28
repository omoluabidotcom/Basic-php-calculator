<?php

// Here the function that load all classes into the index.php file
include 'inc/autoload.inc.php';

?>

<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8" />
   <meta name="descriptions" content="" />
   <meta name="keywords" content="" />
   <meta name="author" content="Yahaya Yusuf" />
   <meta name="robots" content="nofollow" />
   <meta httq-equiv="refresh" content="" />
   <meta name="expires" content="" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <title>
     
   </title>

   <link href="styles.css" type="text/css" rel="stylesheet" />

 </head>

 <body>

  <div class="container" id="container" >
   <fieldset class="field_container">

       <legend class="legend" id="legend"> Calculator </legend>

       <form name="form" method="GET" action="index.php" >
        <?php
        
        // Here the file that perform some part of calculation
        include 'Inc/calc.inc.php';

        ?>

        <!-- Below the button for the numbers and operators are added -->
        <input type="button" value="7" class="numb" id="numb" onclick="form.numberSpace.value+='7'" />
        <input type="button" value="8" class="numb" id="numb" onclick="form.numberSpace.value+='8'" />
        <input type="button" value="9" class="numb" id="numb" onclick="form.numberSpace.value+='9'" />
        <input type="button" value="/" class="numb" id="numb" onclick="form.numberSpace.value+='/'" /> 
        <br>

        <input type="button" value="4" class="numb" id="numb" onclick="form.numberSpace.value+='4'" />
        <input type="button" value="5" class="numb" id="numb" onclick="form.numberSpace.value+='5'" />
        <input type="button" value="6" class="numb" id="numb" onclick="form.numberSpace.value+='6'" />
        <input type="button" value="*" class="numb" id="numb" onclick="form.numberSpace.value+='*'" /> 
        <br>

        <input type="button" value="1" class="numb" id="numb" onclick="form.numberSpace.value+='1'" />
        <input type="button" value="2" class="numb" id="numb" onclick="form.numberSpace.value+='2'" />
        <input type="button" value="3" class="numb" id="numb" onclick="form.numberSpace.value+='3'" />
        <input type="button" value="-" class="numb" id="numb" onclick="form.numberSpace.value+='-'" /> 
        <br>

        <button href="index.php" class="refresh"> C </button>
        <input type="button" value="0" class="numb" id="numb" onclick="form.numberSpace.value+='0'" />
        <input type="button" value="." class="numb" id="numb" onclick="form.numberSpace.value+='.'" />
        <input type="button" value="+" class="numb" id="numb" onclick="form.numberSpace.value='+'" /> 
        <br>

        <!-- Below the submit button is added -->
        <input type="submit" name="submit" value="=" class="submit" id="submit" />

    </form>

    <p class="sub_header" > Simple 2-Display Calculator </p>
   </fieldset>
  </div>
 </body>
</html>