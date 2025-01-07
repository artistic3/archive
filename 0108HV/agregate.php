<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 1',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 4, 12',
		'unions($10)' => '4, 5, 7, 12',
		'union + favorites' => '4, 5, 7, 12',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 9',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 1, 12',
		'unions($10)' => '1, 3, 6, 11, 12',
		'union + favorites' => '1, 3, 6, 11, 12',
		'win(union 567)' => '1, 6, 11, 12',
		'win(union 871)' => '1, 3, 6, 12',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 8',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 1, 5, 10',
		'unions($10)' => '1, 3, 5, 6, 10',
		'union + favorites' => '1, 3, 5, 6, 10',
		'win(union 473)' => '1, 3, 5, 10',
		'win(union 487)' => '1, 5, 6, 10',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 1, 3, 6',
		'place(end-favorites )' => '6',
		'super sure bet' => 'super sure place 6',
		'places($10)' => '6',
		'sures($10)' => '6',
		'super sures($10)' => '6',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 3, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 10',
	],
];
