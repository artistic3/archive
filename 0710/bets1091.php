<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'win inter' => '1, 3, 4, 6, 7, 10',
		'count sets' => 9,
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'diff' => '2, 5, 8, 9',
		'bets' => [
			'win(allValues 1091, $30)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		],
		'total bets' => 300,
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '7, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'win inter' => '7',
		'count sets' => 6,
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 10, 11',
		'diff' => '1, 2, 3, 4, 5, 6, 10, 11',
		'bets' => [
			'win(allValues 1091, $30)' => '1, 2, 3, 4, 5, 6, 7, 10, 11',
		],
		'total bets' => 270,
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'win inter' => '1, 3, 5',
		'count sets' => 4,
		'allValues' => '1, 2, 3, 5, 6, 7',
		'diff' => '2, 6, 7',
		'bets' => [
			'win(allValues 1091, $30)' => '1, 2, 3, 5, 6, 7',
		],
		'total bets' => 180,
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '4, 8, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'win inter' => '1, 11',
		'count sets' => 14,
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12',
		'diff' => '2, 3, 4, 5, 6, 7, 8, 10, 12',
		'bets' => [
			'win(allValues 1091, $30)' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12',
			'win(wp 1091, 30)' => '4, 8, 12',
			'place(end-wp 1091, $60)' => '12',
		],
		'total bets' => 480,
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '2, 5, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'win inter' => '2',
		'count sets' => 6,
		'allValues' => '1, 2, 3, 4, 5, 10, 11',
		'diff' => '1, 3, 4, 5, 10, 11',
		'bets' => [
			'win(allValues 1091, $30)' => '1, 2, 3, 4, 5, 10, 11',
		],
		'total bets' => 210,
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 3, 5, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'win inter' => '1, 2, 5, 6',
		'count sets' => 17,
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'diff' => '3, 4, 7, 8, 9, 10',
		'bets' => [
			'win(allValues 1091, $30)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
			'place(end-favorites 1091, $60)' => '6',
		],
		'total bets' => 360,
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 4, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'win inter' => '2, 3, 10',
		'count sets' => 22,
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'diff' => '1, 4, 5, 6, 7, 8, 9',
		'bets' => [
			'win(allValues 1091, $30)' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
			'place(end-favorites 1091, $60)' => '10',
		],
		'total bets' => 330,
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 3, 7, 8, 10',
		'runners' => '1, 3, 4, 5, 7, 8, 9, 10, 11',
		'win inter' => '3',
		'count sets' => 3,
		'allValues' => '1, 3, 4, 5, 7, 8',
		'diff' => '1, 4, 5, 7, 8',
		'bets' => [
			'win(allValues 1091, $30)' => '1, 3, 4, 5, 7, 8',
		],
		'total bets' => 180,
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 2, 3, 5, 8, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'win inter' => '3, 5',
		'count sets' => 16,
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'diff' => '1, 2, 4, 6, 7, 8, 9, 10, 11',
		'bets' => [
			'win(allValues 1091, $30)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		],
		'total bets' => 330,
	],
];
//total wp: 0
//total win: -2460
//total place: -180
//total qin: 0
//total trio: 0
//total: 0