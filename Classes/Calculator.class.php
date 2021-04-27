<?php

class Calculator extends Stringcheck{

    public function slimCase($value)     {

        switch($value) {
            //check if the inputs starts with a "/" and display and error
            case ($this->str_starts_with($value, '/')):
                echo "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
                echo  "<hr>";
                 break;
                 //check if the inputs starts with a "*" and display and error
                 case ($this->str_starts_with($value, '*')):
                echo  "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
                echo  "<hr>";
                 break;
                  //check if the inputs starts with a "." and display and error
                  case ($this->str_starts_with($value, '.')):
                    echo "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
                    echo  "<hr>";
                     break;
                 //check if the inputs ends with a "/" and display and error
                 case ($this->str_ends_with($value, '/')):
                echo  "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
                echo  "<hr>";
                 break;
                 //check if the inputs ends with a "*" and display and error
                 case ($this->str_ends_with($value, '*')):
                 echo  "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
                 echo  "<hr>";
                    break;
                 //check if the inputs ends with a "-" and display and error
                    case ($this->str_ends_with($value, '-')):
                 echo  "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
                 echo  "<hr>";
                    break;
                 //check if the inputs ends with a "+" and display and error
                    case ($this->str_ends_with($value, '+')):
                 echo  "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
                 echo  "<hr>";
                    break;
                 //If all the validation is passed process the answer
                    default: 
                 //Because the input is a string, convert to inter and evaluate   
                    $ans = eval('return '.$value.';');
                 //Save and display the question   
                   $input = $_GET["numberSpace"];
                 echo $input;
                 echo "<hr>";
                 //Display process answer (Limit to 13)
                 $ans = substr($ans,0,13);
                 echo ("<span class='answer'>$ans</span>");
        }
        
    }
}