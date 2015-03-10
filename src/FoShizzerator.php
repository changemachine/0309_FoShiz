<?php

    class FoShizzer {

        function translate($input) {
            $words = explode(" ", $input);
            $wordz = array();

            foreach($words as $word){
                $letters = str_split($word);
                $letterz = array();

                foreach ($letters as $letter){
                    if ($letter == "s") {
                        array_push($letterz, "z");
                    }
                    else {
                        array_push($letterz, $letter);
                    }
                    $string_letterz = implode($letterz);
                }

                array_push($wordz, $string_letterz);
            }

            $string_wordz = implode(" ", $wordz);
            return $string_wordz;

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
