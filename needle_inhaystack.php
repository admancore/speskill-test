<?php 
function strposa(array $needles,string $haystack,  int $offset = 0): bool 
{
    foreach($needles as $needle) {
        if(strpos($haystack, $needle, $offset) !== false) {
            return true; 
        }
    }

    return false;
}

function findNeedle($array,$needle){

    if (strposa($array,$needle)) {
        echo '1';
    }else{
        echo '0';
    }
}

var_dump(findNeedle(["red", "blue", "yellow", "black", "grey"], "orange"));
?>