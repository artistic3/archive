<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 2, 3',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 1',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 1',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 5, 6, 9',
		'unions($10)' => '4, 5, 6, 9',
		'union + favorites' => '4, 5, 6, 9',
		'early 4' => '4, 5, 6, 9',
		'early 5' => '4, 5, 6, 9',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 4, 7, 12',
		'place(end-favorites )' => '12',
		'places($10)' => '12',
		'sures($10)' => '12',
		'unions($10)' => '3, 4, 5, 7, 12',
		'union + favorites' => '3, 4, 5, 7, 12',
		'early 4' => '',
		'early 5' => '3, 4, 5, 7, 12',
		'win(union 1095)' => '4, 5, 7, 12',
		'win(union 1195)' => '3, 4, 7, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 1',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 9',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 1, 3, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 4',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '(F) 2, 3, 6',
		'unions($10)' => '1, 2, 3, 6, 10',
		'union + favorites' => '1, 2, 3, 6, 10',
		'early 4' => '1, 2, 3, 10',
		'early 5' => '1, 2, 3, 6, 10',
		'win(union 1002)' => '1, 2, 3, 6',
		'win(union 1059)' => '2, 3, 6, 10',
	],
	'11' => [
		/**
		Race 11
		*/
		'favorites' => '(F) 3, 14',
	],
];
