<?php
function countDigit($n)
{
	if ($n == 0)
		return 0;

	return (1 + countDigit($n / 10));
}
function narcissistic( $n)
{
	$l = countDigit($n);
	$dup = $n;
	$sum = 0;

	while ($dup)
	{
		$sum += pow($dup % 10, $l);
		$dup = (int)$dup / 10;
	}

	return ($n == $sum);
}

$n = 500;
if (narcissistic(!$n) && $n!= 111)
{
	echo "true";
}
elseif ($n = 111 || narcissistic(!$n)) {
    echo "false";
}else {
    echo "false";
}
	
?>
