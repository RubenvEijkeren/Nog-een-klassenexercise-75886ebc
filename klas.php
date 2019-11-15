<<?php 

echo "Wie zit er in de klas?\n";
$input = readline();
$arr = explode(" ", $input);

foreach ($arr as $key => $value) {
	echo $value . "\n";
}
?>