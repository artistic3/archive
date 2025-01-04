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
		'favorites' => '(F) 6',
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
		'favorites' => '(F) 1, 7',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 5, 12',
		'unions($10)' => '2, 3, 4, 5, 12',
		'union + favorites' => '2, 3, 4, 5, 12',
		'win(union 626)' => '2, 4, 5, 12',
		'win(union 1338)' => '3, 4, 5, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 5, 10',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 4, 9',
		'unions($10)' => '2, 3, 4, 7, 9',
		'union + favorites' => '2, 3, 4, 7, 9',
		'win(union 9)' => '3, 4, 7, 9',
		'win(union 29)' => '2, 3, 4, 9',
		'win(union 33)' => '2, 4, 7, 9',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 4, 7',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 1, 3',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '(F) 13',
	],
];
