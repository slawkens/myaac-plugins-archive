<?php

require __DIR__ . '/libs/GoogleReCAPTCHA.php';

$configRecaptcha = config('google_recaptcha');
if (!$configRecaptcha) {
	config(['google_recaptcha', require __DIR__ . '/config.php']);
}

$twig->addGlobal('config', $config);
