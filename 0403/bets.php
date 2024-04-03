<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 12',
		'inter(fav 3, fav 12)' => '10',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '10, 6',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '10, 3, 11',
		'inter(fav 3, fav 10)' => '4, 9',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 10, 1',
		'additional favorites' => '12',
		'inter(fav 1, fav 2)' => '2, 3, 5, 10, 11',
		'inter(fav 1, fav 10)' => '10',
		'inter(fav 1, fav 12)' => '3',
		'inter(fav 2, fav 10)' => '10, 12',
		'inter(fav 2, fav 12)' => '3, 12',
		'inter(fav 10, fav 12)' => '12',
		'union' => '2, 3, 5, 10, 11, 12',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5, 4',
		'inter(fav 4, fav 5)' => '1, 3, 4, 5',
		'union' => '1, 3, 4, 5',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 2',
		'inter(fav 2, fav 3)' => '2, 3, 5',
		'union' => '2, 3, 5',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '13, 10, 5',
		'additional favorites' => '8, 6',
		'inter(fav 5, fav 6)' => '10',
		'inter(fav 5, fav 8)' => '2',
		'inter(fav 5, fav 10)' => '10',
		'inter(fav 6, fav 10)' => '10',
		'inter(fav 8, fav 10)' => '8',
		'union' => '2, 8, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '5, 6, 7',
		'additional favorites' => '4',
		'inter(fav 4, fav 5)' => '3, 4, 7, 8',
		'inter(fav 4, fav 6)' => '4, 6, 8, 9, 12',
		'inter(fav 4, fav 7)' => '1, 2, 3, 4',
		'inter(fav 5, fav 6)' => '4, 8, 11',
		'inter(fav 5, fav 7)' => '3, 4, 5',
		'inter(fav 6, fav 7)' => '4',
		'union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12',
		'win' => '4, 5, 6, 7',
	],
];
