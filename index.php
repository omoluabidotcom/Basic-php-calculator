<?php

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
     Two Display Calculator
   </title>

   <link href="styles.css" type="text/css" rel="stylesheet" />

 </head>

 <body>
   <fieldset>

       <legend class="legend" id="legend"> Calculator </legend>

       <form name="form" method="GET" action="index.php" >
        <?php
        
        include 'Inc/calc.inc.php';

        

        ?>

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
        <input type="button" value="+" class="numb" id="numb" onclick="form.numberSpace.value+='+'" /> 
        <br>

        <input type="submit" name="submit" value="=" class="numb" id="numb" />
    </form>
  </fieldset>

 </body>
</html>