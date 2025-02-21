<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 1, 2',
		'unions($10)' => '1, 2, 5, 6, 8',
		'union + favorites' => '1, 2, 5, 6, 8',
		'count union + favorites' => '5',
		'qin(union 1015)' => '1, 2, 6, 8',
		'qin(union 1021)' => '1, 2, 5, 8',
		'qin(union 110)' => '1, 2, 5, 6',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 1, 4',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 1, 4',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 1, 5',
		'unions($10)' => '1, 2, 5, 6, 11',
		'union + favorites' => '1, 2, 5, 6, 11',
		'count union + favorites' => '5',
		'qin(union 1009)' => '1, 2, 5, 11',
		'qin(union 1014)' => '1, 5, 6, 11',
		'qin(union 1024)' => '1, 2, 5, 6',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 5, 8, 10',
		'qin(union )' => '4, 5, 8, 10',
		'unions($10)' => '1, 4, 5, 8, 10',
		'union + favorites' => '1, 4, 5, 8, 10',
		'count union + favorites' => '5',
	],
];
