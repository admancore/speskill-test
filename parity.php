<?php
 
function find($integers) {

  $oddNya = [];

  $evenNya = [];
  foreach ($integers as $item) {
    if ($item % 2) array_push($oddNya, $item);

    else array_push($evenNya, $item);
  }
  if (count($evenNya) === 1) {
    return $evenNya[0];
  }elseif(count($evenNya)!= 1) {
    return false;
  }else{
    return $oddNya[0];
  }
}

echo var_dump(find([11, 13, 15, 19, 9, 13, -21]));
?>
