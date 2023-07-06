<?php


$array = [
	'a' => 10,
	'b' => 20,
	'c' => 40,
	'd' => 50,
	'e' => 60,
	'r' => 80,
	't' => 100,
];


function getRandomElement(array $array): string
{
	// We calculate the total sum of probabilities and
	// generate a random number from 1 to the sum of probabilities
	
	$random = mt_rand(1, (int) array_sum($array));
	// Looping through the array and seeing the probabilities of the generated number
	foreach ($array as $key => $value) {
		$random = $random - $value;
		if ($random <= 0) {
			return $key;
		}
	}
	// When the random number is too large and sampling fails
	
	return 'Play again';
}

$key = getRandomElement($array);

echo $key . PHP_EOL;

//After much brainstorming, I came up with the following method
//Our function mast items [t]

function getRandomRanksElement(array $array): string
{
	foreach ($array as $key => $value) {
		if ($value === 100) {
			return $key;
		}
	}
	
	$random = mt_rand(1, (int) array_sum($array));
	
		$random = $random - $value;
		if ($random <= 0) {
			return $key;
		}

	return 'Play again';
}

$key2 = getRandomRanksElement($array);

echo $key2 . PHP_EOL;
