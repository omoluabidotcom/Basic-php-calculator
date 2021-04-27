<?php

class Stringcheck{

    public function str_starts_with($input, $char) {

        $string = ltrim($input, ' ');
        $string = substr($string, 0, 1);
        if ($char === $string) {

            return true;
        } else {

            return false;
        }
    }

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