<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '2, 13',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '5',
			'qin' => '5, 6',
			'trio' => '2, 5, 6',//count trio: 3
			'inter' => '',
		],
		'win inter' => '5',
		'win inter 2' => '5',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2',//count wp: 1
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1, 4, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 9',
			'qin' => '1, 2, 3, 4, 5, 8, 9, 10, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '1, 4',
		],
		'win inter' => '2, 4, 9',
		'win inter 2' => '4, 5',
		'allValues' => '2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
			'place(end-favorites 1213)' => '8',
		],
		'total bets' => 100,
		'wp' => '4, 8',//count wp: 2
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 3, 4, 5, 6, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 7, 8',
			'qin' => '1, 2, 3, 4, 5, 7, 8',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8',//count trio: 8
			'inter' => '2, 3, 4, 5, 8',
		],
		'win inter' => '2',
		'allValues' => '1, 2, 3, 4, 5, 6',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 3, 4, 5, 6',//count wp: 5
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '4, 5, 11, 12',
			'qin' => '1, 3, 4, 5, 6, 7, 9, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12',//count trio: 11
			'inter' => '',
		],
		'win inter' => '3, 4, 5, 10, 11, 12',
		'win inter 2' => '4, 5, 11, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 6',//count wp: 2
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '2, 5, 13',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 9',
			'qin' => '1, 2, 3, 4, 5, 6, 9, 11',
			'trio' => '1, 2, 3, 4, 5, 6, 8, 9, 11',//count trio: 9
			'inter' => '2, 5',
		],
		'win inter' => '1',
		'win inter 2' => '1, 2, 3, 5, 6, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
			'win(union 1213)' => '1, 2, 5, 13',
		],
		'total bets' => 400,
		'wp' => '2, 5',//count wp: 2
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 3, 4, 5, 6, 8, 9, 11',
		'allValues' => '1, 2, 3, 4, 6, 7, 8, 9, 10',
		'all fav history' => [[2, 3, 10]],
		'all fav history values' => '2, 3, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2',//count wp: 1
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '2, 4, 7, 10, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 14',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 14',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 14',//count trio: 12
			'inter' => '2, 4, 7, 10, 11',
		],
		'win inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 4, 7',//count wp: 3
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '3, 4, 5, 6, 7, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3',//count wp: 1
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 6, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
		'suggestions' => [
			'win' => '2, 4, 5, 7, 8, 9, 11, 12',
			'qin' => '1, 2, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',//count trio: 13
			'inter' => '2, 7',
		],
		'win inter' => '1, 5, 6, 8, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 6, 7',//count wp: 3
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '6, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '3, 9',
			'qin' => '1, 3, 8, 9',
			'trio' => '1, 3, 5, 8, 9, 10',//count trio: 6
			'inter' => '9',
		],
		'win inter' => '3, 10',
		'win inter 2' => '3, 9',
		'allValues' => '',
		'bets' => [
			'win(union 1213)' => '3, 6, 9, 10',
		],
		'total bets' => 400,
		'wp' => '',//count wp: 0
	],
	'11' => [
		/**
		Race 11
		*/
		'favorites' => '5, 6, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '1, 5, 12',
			'qin' => '1, 5, 6, 9, 11, 12',
			'trio' => '1, 5, 6, 8, 9, 11, 12',//count trio: 7
			'inter' => '5',
		],
		'win inter' => '',
		'allValues' => '',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '',//count wp: 0
	],
];
//total place end favorites: -100
//total place end wp: 0
//total place wp: 0
//total sure place: 0
//total win: -800
//total: 0
