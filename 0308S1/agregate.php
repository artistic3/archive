<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 1, 3, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 1, 6, 7, 8',
		'qin(union )' => '1, 2, 3, 8',
		'unions($10)' => '1, 2, 3, 8',
		'union + favorites' => '1, 2, 3, 6, 7, 8',
		'count union + favorites' => '6',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 1, 2, 4, 5, 6, 8',
		'qin(union )' => '1, 3, 4, 5',
		'unions($10)' => '1, 3, 4, 5',
		'union + favorites' => '1, 2, 3, 4, 5, 6, 8',
		'count union + favorites' => '7',
	],
];
