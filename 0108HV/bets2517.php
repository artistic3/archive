<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 3, 4, 6, 7, 8, 10, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'all fav history' => [[3, 4, 5], [1, 4, 3], [1, 7, 5]],
		'all fav history values' => '1, 3, 4, 5, 7',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1',//count wp: 1
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '4, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '2',
			'qin' => '2, 10',
			'trio' => '2, 6, 10',//count trio: 3
			'inter' => '',
		],
		'win inter' => '5, 7',
		'win inter 2' => '2',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
			'win(union 2517)' => '4, 5, 7, 12',
		],
		'total bets' => 400,
		'wp' => '4',//count wp: 1
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '4, 6, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '2, 3, 4, 5, 7, 8, 9, 12',
			'qin' => '1, 2, 3, 4, 5, 7, 8, 9, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 12',//count trio: 10
			'inter' => '4, 9',
		],
		'win inter' => '7',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'bets' => [
			'win(union 2517)' => '4, 6, 7, 9',
		],
		'total bets' => 400,
		'wp' => '4, 6',//count wp: 2
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 7, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 5, 6, 11',
			'qin' => '1, 2, 3, 4, 5, 6, 9, 10, 11',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11',//count trio: 10
			'inter' => '1',
		],
		'win inter' => '1, 3, 6, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 7, 12',//count wp: 3
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '2, 5, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 6, 8, 9, 10',
			'qin' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 11',
			'trio' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 11',//count trio: 10
			'inter' => '2, 8',
		],
		'win inter' => '1, 4',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 5, 8',//count wp: 3
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 3, 5, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 8, 9, 10, 11, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '1, 3, 5, 10',
		],
		'win inter' => '1, 3, 6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 3, 5, 10',//count wp: 4
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 3, 6, 10, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 8, 10, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '1, 3, 6, 10',
		],
		'win inter' => '10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 3, 6',//count wp: 3
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '3, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '5, 6, 7, 8, 12',
			'qin' => '1, 4, 5, 6, 7, 8, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 12',//count trio: 10
			'inter' => '8',
		],
		'win inter' => '3, 4, 5, 6, 8, 12',
		'win inter 2' => '5, 6, 7, 8, 12',
		'allValues' => '1, 3, 4, 5, 6, 7, 8, 10, 11, 12',
		'all fav history' => [[8, 4, 10]],
		'all fav history values' => '4, 8, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 8',//count wp: 2
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 6, 9, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '1, 6, 9, 10',
		],
		'win inter' => '2, 4, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 6, 9, 10',//count wp: 4
	],
];
//total place end favorites: 0
//total place end wp: 0
//total place wp: 0
//total sure place: 0
//total win: -800
//total: 0
