<?php

return [
	'name' => 'Google ReCaptcha',
	'settings' =>
	[
		'enabled' => [
			'name' => 'Enable ReCaptcha',
			'type' => 'boolean',
			'desc' => 'Enable ReCaptcha on login and create account.<br/><a href="https://www.google.com/recaptcha" target="_blank">https://www.google.com/recaptcha</a>',
			'default' => true,
		],
		'type' => [
			'name' => 'Enable ReCaptcha',
			'type' => 'options',
			'options' => ['v2-checkbox' => 'v2-checkbox', 'v2-invisible' => 'v2-invisible', 'v3' => 'v3'],
			'desc' => 'Type of ReCaptcha',
			'default' => 'v3',
		],
		'site_key' => [
			'name' => 'Site Key',
			'type' => 'text',
			'desc' => 'get your own site and secret keys at https://www.google.com/recaptcha',
			'default' => '',
		],
		'secret_key' => [
			'name' => 'Secret Key',
			'type' => 'text',
			'desc' => 'get your own site and secret keys at https://www.google.com/recaptcha',
			'default' => '',
		],
		'v2_theme' => [
			'name' => 'v2 Theme',
			'type' => 'options',
			'options' => ['light' => 'light', 'dark' => 'dark'],
			'desc' => 'This option apply only for type ReCaptcha v2-checkbox',
			'default' => 'light',
		],
		'v3_min_score' => [
			'name' => 'Secret Key',
			'type' => 'number',
			'desc' => 'This option apply only for ReCaptcha v3.<br/>Min score for validation, between 0 - 1.0<br/>https://developers.google.com/recaptcha/docs/v3#interpreting_the_score',
			'default' => 0.5,
		],
	]
];
