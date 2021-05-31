<?php

class Calculator extends Stringcheck{
    
   //  Below is method
    public function slimCase($value)     {

        switch($value) {
            // Below case check if the inputs starts with a "/" or not
            case ($this->str_starts_with($value, '/')):
                echo "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
                echo  "<hr>";
                 break;
                 // Below case check if the inputs starts with a "*" or not
                 case ($this->str_starts_with($value, '*')):
                echo  "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
                echo  "<hr>";
                 break;
                  // Below case check if the inputs starts with a "." or not
                  case ($this->str_starts_with($value, '.')):
                    echo "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
                    echo  "<hr>";
                     break;
                 // Below case check if the inputs ends with a "/" or not
                 case ($this->str_ends_with($value, '/')):
                echo  "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
                echo  "<hr>";
                 break;
                 //Below case check if the inputs ends with a "*" or not
                 case ($this->str_ends_with($value, '*')):
                 echo  "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
                 echo  "<hr>";
                    break;
                 // Below case check if the inputs ends with a "-" or not
                    case ($this->str_ends_with($value, '-')):
                 echo  "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
                 echo  "<hr>";
                    break;
                 // Below case check if the inputs ends with a "+" or not
                    case ($this->str_ends_with($value, '+')):
                 echo  "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
                 echo  "<hr>";
                    break;

                    default: 
                 //Because the input is a string, convert it to integer and evaluate   
                    $ans = eval('return '.$value.';');
                
                 //Below the question is been saved    
                   $input = $_GET["numberSpace"];
                   echo $input;
                   echo "<hr>";

                 //Below reduce input to 13
                 $ans = substr($ans, 0, 13);
                 echo ("<span class='answer'>$ans</span>");
        }
        
    }
}