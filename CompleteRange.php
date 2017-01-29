<?php

class CompleteRange {
   
    public function build($numbers){
        if($numbers == null || count($numbers) == 0){
            $result = "ERROR: Array incorrecto o sin elementos.";
        } else {
            $last = end($numbers);
            for ($index = $numbers[0]; $index <= $last; $index++) {
                if (array_search($index, $numbers) === FALSE){
                    $lost[] = $index;
                }
            }
            $result = array_merge($numbers, $lost);
            sort($result);
        }
        return $result;
    }
}   
?>