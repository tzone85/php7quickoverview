<?php
// spaceship operator

$games = ['Mass Effect', 'Super Mario Bros', 'Zeda', 'Follout', 'Metal Gear'];

//rsort($games);

usort($games, function ($a, $b){
	var_dump('a: ' . $a . ' b: ' . $b);
	return strlen($a) <=> strlen($b); // return -1, 0, 1
});
var_dump($games);