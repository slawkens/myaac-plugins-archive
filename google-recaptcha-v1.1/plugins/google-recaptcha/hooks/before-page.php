<?php
defined('MYAAC') or die('Direct access not allowed!');

require_once __DIR__ . '/../init.php';

global $template_place_holders;
if(!isset($template_place_holders['head_end'])) {
	$template_place_holders['head_end'] = array();
}

$configRecaptcha = config('google_recaptcha');
if(getBoolean($configRecaptcha['enabled'])) {
	if (PAGE != 'account/create' && PAGE != 'account/manage') {
		return;
	}

	// insert into page head
	$template_place_holders['head_end'][] = '<script src="https://www.google.com/recaptcha/api.js' .
		($configRecaptcha['type'] == 'v3' ? '?render=' . $configRecaptcha['site_key'] : '') . '"></script>';

	if ($configRecaptcha['type'] == 'v3') {
		$template_place_holders['body_end'][] = $twig->render('google-recaptcha/templates/recaptcha-v3.html.twig', [
				'action' => (PAGE == 'account/create' ? 'register' : 'login')
			]
		);
	}
}


