<?php
$level = 5;
$assignment = 1; //Switch 
$blank = "  ";
$star = "* ";
for ($i = 1; $i <= $level; $i++) {
    // Top
	echo str_repeat($blank, $level - $i) . str_repeat($star, 2 * $i - 1) . "\n";
    // Bottom
	if ($i == $level && $assignment == 2){
    	for ($j = $i - 1; $j > 0; $j--){
    		echo str_repeat($blank, $level - $j) . str_repeat($star, 2 * $j - 1) . "\n";	
    	}
    }
}