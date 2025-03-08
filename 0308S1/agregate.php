<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 1, 3, 10',
		'unions($10)' => '1, 3, 4, 7, 8, 10',
		'union + favorites' => '1, 3, 4, 7, 8, 10',
		'count union + favorites' => '6',
		'qin(union 1032)' => '1, 3, 8, 10',
		'qin(union 1046)' => '1, 3, 4, 10',
		'qin(union 245)' => '1, 3, 7, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 1, 6, 7, 8',
		'unions($10)' => '1, 2, 3, 8',
		'union + favorites' => '1, 2, 3, 6, 7, 8',
		'count union + favorites' => '6',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 5, 6, 11',
		'qin(union )' => '4, 5, 6, 11',
		'unions($10)' => '1, 4, 5, 6, 8, 11',
		'union + favorites' => '1, 4, 5, 6, 8, 11',
		'count union + favorites' => '6',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 1, 9',
		'qin(union )' => '1, 2, 3, 9',
		'unions($10)' => '1, 2, 3, 9',
		'union + favorites' => '1, 2, 3, 9',
		'count union + favorites' => '4',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 1, 2, 3, 4, 5, 6, 8',
		'unions($10)' => '1, 3, 4, 5',
		'union + favorites' => '1, 2, 3, 4, 5, 6, 8',
		'count union + favorites' => '7',
	],
];
