<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 4, 10',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 4, 9',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 3, 7, 9, 13',
		'unions($10)' => '2, 6, 7, 9, 13',
		'union + favorites' => '2, 3, 6, 7, 9, 13',
		'early 4' => '',
		'early 5' => '2, 6, 7, 9, 13',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 6',
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
		'favorites' => '(F) 4, 8, 9',
		'unions($10)' => '3, 4, 7, 8, 9',
		'union + favorites' => '3, 4, 7, 8, 9',
		'early 4' => '',
		'early 5' => '3, 4, 7, 8, 9',
		'qin(union 1)' => '4, 7, 8, 9',
		'qin(union 1002)' => '3, 4, 8, 9',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 2, 9',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 1, 5, 7',
		'unions($10)' => '1, 5, 7, 11',
		'union + favorites' => '1, 5, 7, 11',
		'early 4' => '1, 5, 7, 11',
		'early 5' => '1, 5, 7, 11',
	],
];
