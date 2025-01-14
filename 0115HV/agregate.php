<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 2, 5, 6',
		'unions($10)' => '1, 2, 5, 6',
		'union + favorites' => '1, 2, 5, 6',
		'early 5' => '1, 2, 5, 6',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 9',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 8, 11',
		'unions($10)' => '1, 3, 8, 11, 12',
		'union + favorites' => '1, 3, 8, 11, 12',
		'early 5' => '1, 3, 8, 11, 12',
		'win(union 1845)' => '1, 3, 8, 11',
		'win(union 1855)' => '1, 8, 11, 12',
		'win(union 1876)' => '3, 8, 11, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 6',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 1, 3, 10',
		'place(end-favorites )' => '10',
		'super sure bet' => 'super sure place 10',
		'places($10)' => '10',
		'sures($10)' => '10',
		'super sures($10)' => '10',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 1, 3, 9, 11',
		'place(end-favorites )' => '11',
		'places($10)' => '9, 11',
		'sures($10)' => '11',
		'unions($10)' => '3, 5, 7, 11, 12',
		'union + favorites' => '1, 3, 5, 7, 9, 11, 12',
		'early 5' => '3, 5, 7, 11, 12',
		'place(end-wp 1)' => '9',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 2',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 2, 4, 11, 12',
		'unions($10)' => '2, 4, 8, 12',
		'union + favorites' => '2, 4, 8, 11, 12',
		'early 5' => '2, 4, 8, 11, 12',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 1, 4, 6, 9, 12',
	],
];
