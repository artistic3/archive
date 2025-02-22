<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 2, 7, 11',
		'qin(union )' => '2, 5, 7, 11',
		'unions($10)' => '2, 5, 7, 11',
		'union + favorites' => '2, 5, 7, 11',
		'count union + favorites' => '4',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 1, 7',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 1, 2, 4',
		'unions($10)' => '1, 2, 7, 11',
		'union + favorites' => '1, 2, 4, 7, 11',
		'count union + favorites' => '5',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 8, 12',
		'qin(union )' => '3, 8, 11, 12',
		'unions($10)' => '3, 8, 11, 12',
		'union + favorites' => '3, 8, 11, 12',
		'count union + favorites' => '4',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 1, 4',
		'qin(union )' => '1, 3, 4, 5',
		'unions($10)' => '1, 3, 4, 5',
		'union + favorites' => '1, 3, 4, 5',
		'count union + favorites' => '4',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 4, 8, 11',
		'unions($10)' => '1, 2, 4, 8',
		'union + favorites' => '1, 2, 4, 8, 11',
		'count union + favorites' => '5',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 1, 2',
		'unions($10)' => '1, 2, 4, 5, 10',
		'union + favorites' => '1, 2, 4, 5, 10',
		'count union + favorites' => '5',
		'qin(union 100)' => '1, 2, 4, 10',
		'qin(union 1012)' => '1, 2, 4, 5',
		'qin(union 1025)' => '1, 2, 5, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 3, 8, 9, 13',
		'sevens($10)' => '2, 3, 4, 5, 7, 8, 12',
		'count sevens' => '7',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 2, 3, 7, 11, 12, 13',
		'unions($10)' => '7, 9, 11, 12',
		'union + favorites' => '2, 3, 7, 9, 11, 12, 13',
		'count union + favorites' => '7',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '(F) 5, 8, 14',
	],
];
