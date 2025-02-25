<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 3',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 5, 12',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 2, 3',
		'qin(union )' => '2, 3, 5, 7',
		'unions($10)' => '2, 3, 5, 7',
		'union + favorites' => '2, 3, 5, 7',
		'count union + favorites' => '4',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 1, 4',
		'qin(union 21)' => '1, 4, 5, 11',
		'unions($10)' => '1, 2, 4, 5, 11',
		'union + favorites' => '1, 2, 4, 5, 11',
		'count union + favorites' => '5',
		'qin(union 96)' => '1, 2, 4, 5',
		'qin(union 433)' => '1, 2, 4, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 4, 6',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 2',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 7',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 5, 6',
		'qin(union 141)' => '5, 6, 8, 9',
		'unions($10)' => '4, 5, 6, 8, 9, 10',
		'union + favorites' => '4, 5, 6, 8, 9, 10',
		'count union + favorites' => '6',
		'qin(union 145)' => '5, 6, 8, 10',
		'qin(union 433)' => '4, 5, 6, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 7, 12',
		'qin(union )' => '4, 7, 9, 12',
		'unions($10)' => '4, 7, 9, 12',
		'union + favorites' => '4, 7, 9, 12',
		'count union + favorites' => '4',
	],
];
