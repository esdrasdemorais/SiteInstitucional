<?php

$vector = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$sum = 0;
for ($i = 0; $i < count($vector); $i++) {
	$sum += $vector[$i];
}

echo "<pre>";
print_r($vector);var_dump("sum=".$sum);
die;
