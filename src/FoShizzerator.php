<?php

    class FoShizzer {

        function translate($input) {
            $words = explode(" ", $input);
            foreach($words as $word){
                $letters = str_split($word);
                $letter_storage = array();

                foreach ($letters as $letter){
                    if ($letter == "s") {
                        array_push($letter_storage, "z");
                    }
                    else {
                        array_push($letter_storage, $letter);
                    }
                    $string_output = implode($letter_storage);
                }
            }

            return $string_output;

        }

    }

/*
ACT
SIMPLEST:  convert all esses (except first [or " s"])
? process full sentence
 skip if " s" or "S"
loop through each word of exploded array
CAN'T explode word
loop through letters
if not first letter OR capitalized
    convert s to z
*/



?>
