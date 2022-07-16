<?php 

function blueOcean($a,$b){
    $array1 = $a;
    $array2 = $b;
    $result = array_diff($array1, $array2);
return $result;
};

print_r(blueOcean([1,5,5,5,5,3], [5]));

?>