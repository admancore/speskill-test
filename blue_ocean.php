<?php 
// function blueOcean($a,$b){

//     $bCopy = $b;
// $c = array_filter($a, function($item) use(&$bCopy) {
//     $idx = array_search($item, $bCopy);
//     // remove it from $b if found
//     if($idx !== false) unset($bCopy[$idx]);
//     // keep the item if not found
//     return $idx === false;
// });
// return $c;
// };
// echo var_dump(blueOcean([1,5,5,5,5,3], [5]));

function blueOcean($a,$b){
    $array1 = $a;
    $array2 = $b;
    $result = array_diff($array1, $array2);
return $result;
};

print_r(blueOcean([1,5,5,5,5,3], [5]));

?>