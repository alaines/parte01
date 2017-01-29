<?php

class ClearPar {
    public function build($string) {
        $result = '';
        preg_match_all('/[^()]/', $string, $con);
        if(count($con[0]) > 0){
            $result = 'ERROR: La cadena solo debe contener parentesis.';
        } else {
            $sub = '()';
            $c = substr_count($string, $sub);
            for ($index = 0; $index < $c; $index++) {
                $pos = strrpos($string, $sub);
                if($pos !== FALSE){
                    $result .= substr($string, $pos);
                }
            }
        }
     
        return $result;
    }
}
