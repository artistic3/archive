<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 10, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 8, 12',
			'qin' => '1, 2, 3, 4, 7, 8, 9, 10, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12',//count trio: 11
			'inter' => '3, 12',
		],
		'win inter' => '1, 8, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 10',//count wp: 2
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1, 4',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '4, 5, 9',
			'qin' => '1, 2, 4, 5, 9',
			'trio' => '1, 2, 3, 4, 5, 7, 9',//count trio: 7
			'inter' => '4',
		],
		'win inter' => '2, 4, 8, 9',
		'win inter 2' => '4, 5, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 4',//count wp: 2
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '7, 10, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 5, 7, 11',
			'qin' => '1, 3, 4, 5, 7, 11, 12',
			'trio' => '1, 3, 4, 5, 7, 10, 11, 12',//count trio: 8
			'inter' => '7',
		],
		'win inter' => '5',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'bets' => [
			'win(union 702)' => '5, 7, 10, 12',
		],
		'total bets' => 400,
		'wp' => '7',//count wp: 1
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 7, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 10, 11',
			'qin' => '1, 2, 3, 4, 5, 6, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12',//count trio: 11
			'inter' => '1, 11',
		],
		'win inter' => '1, 2, 5, 11',
		'win inter 2' => '1',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
			'place(end-favorites 702)' => '11',
			'place(end-wp 702)' => '11',
			'super sure bet' => 'super sure place 11',
		],
		'total bets' => 300,
		'wp' => '1, 7, 11',//count wp: 3
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 3, 4, 5, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'all fav history' => [[5, 2, 6], [5, 6, 12], [3, 2, 1]],
		'all fav history values' => '1, 2, 3, 5, 6, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '5',//count wp: 1
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '4, 5, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 6, 7, 8, 9, 11',
			'qin' => '1, 2, 3, 5, 6, 7, 8, 9, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12',//count trio: 11
			'inter' => '9',
		],
		'win inter' => '1, 2, 6, 9, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 5, 9',//count wp: 3
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 5, 6, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 6, 7, 8, 9, 10, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '3, 6, 8',
		],
		'win inter' => '2, 3, 6',
		'win inter 2' => '6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
			'place(end-favorites 702)' => '8',
			'super sure bet' => 'super sure place 8',
		],
		'total bets' => 200,
		'wp' => '3, 5, 6, 8',//count wp: 4
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '2, 10, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '2, 7, 8, 10, 12',
			'qin' => '2, 4, 6, 7, 8, 9, 10, 12',
			'trio' => '1, 2, 3, 4, 6, 7, 8, 9, 10, 12',//count trio: 10
			'inter' => '2, 10, 12',
		],
		'win inter' => '2, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 10',//count wp: 2
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 4',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 4, 7, 9, 11',
			'qin' => '1, 2, 4, 5, 6, 7, 9, 10, 11',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',//count trio: 11
			'inter' => '1, 4',
		],
		'win inter' => '1, 2, 4, 5, 6, 9, 12',
		'win inter 2' => '1, 4, 7, 9, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 4',//count wp: 2
	],
];
//total place end favorites: -200
//total place end wp: -100
//total place wp: 0
//total sure place: -200
//total win: -400
//total: 0
