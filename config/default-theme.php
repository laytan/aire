<?php
/*
 |--------------------------------------------------------------------------
 | Default Theme
 |--------------------------------------------------------------------------
 |
 | This file provides the class names for the default Aire theme. These
 | values are merged into the Aire config as defaults (if you have not set
 | a value in your project's Aire config file).
 |
 */

return [
	'default_classes' => [
		'group' => 'mb-6',
		'group_prepend' => '-mr-1 block p-2 text-base leading-normal bg-gray-100 text-gray-300 border rounded-l-sm',
		'group_append' => '-ml-1 block p-2 text-base leading-normal bg-gray-100 text-gray-300 border rounded-r-sm',
		'group_help_text' => 'block mt-1 text-sm font-normal',
		'group_errors' => 'list-reset mt-2 mb-3',
		'label' => 'inline-block mb-2 font-semibold',
		'input' => 'block w-full p-2 text-base leading-normal bg-white border rounded-sm',
		'checkbox' => 'pr-2',
		'checkbox_label' => 'flex items-baseline',
		'checkbox_wrapper' => 'ml-2 flex-1',
		'checkbox_group_label' => 'flex items-baseline mb-2 ml-2 border-transparent border-l',
		'checkbox_group_label_wrapper' => 'flex-1 ml-2',
		'radio_group_label' => 'flex items-baseline mb-2 ml-2 border-transparent border-l',
		'radio_group_label_wrapper' => 'flex-1 ml-2',
		'summary' => 'border border-red-500 bg-red-100 text-red-500 font-bold rounded p-4 my-4',
		'button' => 'inline-block font-normal text-center whitespace-no-wrap align-middle select-none border
			rounded font-normal leading-normal text-white bg-blue-600 border-blue-700 hover:bg-blue-700
			hover:border-blue-900 p-2 px-4',
		'select' => 'block w-full p-2 leading-normal border rounded-sm bg-white appearance-none',
		'textarea' => 'block w-full p-2 text-base leading-normal bg-white border rounded-sm h-auto',
	],
	'validation_classes' => [
		'none' => [
			'input' => 'text-gray-900',
			'select' => 'text-gray-900',
			'textarea' => 'text-gray-900', // TODO: This probably needs to be generalized better
			'group_errors' => 'hidden',
			'group_help_text' => 'text-gray-600',
		],
		'valid' => [
			'label' => 'text-green-600',
			'input' => 'border-green-600 text-green-700',
			'select' => 'border-green-600 text-green-700',
			'textarea' => 'border-green-600 text-green-700',
			'group_errors' => 'hidden',
			'group_help_text' => 'text-green-600 opacity-50',
		],
		'invalid' => [
			'label' => 'text-red-600',
			'input' => 'border-red-600 text-red-700',
			'select' => 'border-red-600 text-red-700',
			'textarea' => 'border-red-600 text-red-700',
			'group_help_text' => 'text-red-600 opacity-50',
		],
	],
];