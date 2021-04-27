<?php

class Stringcheck{

    // Below is a function I define, which grab the first character from a set of characters
    // Note: This function exit in the just released  PHP8 but not available on any below 8. Which is why I had to define mine
    public function str_starts_with($input, $char) {

        $string = ltrim($input, ' ');
        $string = substr($string, 0, 1);
        if ($char === $string) {

            return true;
        } else {

            return false;
        }
    }

    // Below is a function I define, which grab the last character from a set of characters
    // Note: This function exit in the just released  PHP8 but not available on any below 8. Which is why I had to define mine
    public function str_ends_with($input, $char) {

        $string = rtrim($input, ' ');
        $string_len = strlen($string);
        $length = $string_len - 1;
        $stringMain = $string[$length];
        if ($char === $stringMain) {

            return true;
        } else {

            return false;
        }
    }

}

?>