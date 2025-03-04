<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 8, 9',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 1, 2, 10, 12',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 1, 3, 6',
		'qin(union )' => '1, 3, 4, 6',
		'unions($10)' => '1, 3, 4, 6',
		'union + favorites' => '1, 3, 4, 6',
		'count union + favorites' => '4',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 2, 4',
		'qin(union )' => '2, 4, 5, 11',
		'unions($10)' => '2, 4, 5, 11',
		'union + favorites' => '2, 4, 5, 11',
		'count union + favorites' => '4',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 1, 7',
		'qin(union 10)' => '1, 5, 7, 8',
		'unions($10)' => '1, 3, 5, 7, 8',
		'union + favorites' => '1, 3, 5, 7, 8',
		'count union + favorites' => '5',
		'qin(union 1000)' => '1, 3, 5, 7',
		'qin(union 1036)' => '1, 3, 7, 8',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 4, 5',
		'qin(union 1009)' => '1, 2, 4, 5',
		'unions($10)' => '1, 2, 4, 5, 11',
		'union + favorites' => '1, 2, 4, 5, 11',
		'count union + favorites' => '5',
		'qin(union 101)' => '2, 4, 5, 11',
		'qin(union 1024)' => '1, 4, 5, 11',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 3, 8',
		'qin(union 1026)' => '2, 3, 7, 8',
		'unions($10)' => '2, 3, 6, 7, 8, 9',
		'union + favorites' => '2, 3, 6, 7, 8, 9',
		'count union + favorites' => '6',
		'qin(union 1035)' => '3, 7, 8, 9',
		'qin(union 1048)' => '2, 3, 8, 9',
		'qin(union 322)' => '3, 6, 7, 8',
		'qin(union 343)' => '3, 6, 8, 9',
		'qin(union 55)' => '2, 3, 6, 8',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 3, 7, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 2, 4, 6',
		'qin(union 102)' => '2, 4, 6, 7',
		'unions($10)' => '2, 4, 5, 6, 7',
		'union + favorites' => '2, 4, 5, 6, 7',
		'count union + favorites' => '5',
		'qin(union 1021)' => '2, 4, 5, 6',
		'qin(union 1023)' => '4, 5, 6, 7',
	],
];
