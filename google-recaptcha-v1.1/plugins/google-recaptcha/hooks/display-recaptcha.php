<?php
defined('MYAAC') or die('Direct access not allowed!');

require_once __DIR__ . '/../init.php';

/**
 * @var $configRecaptcha array
 */
$configRecaptcha = config('google_recaptcha');
if(getBoolean($configRecaptcha['enabled'])) {
	$twig->display('google-recaptcha/templates/recaptcha-display.html.twig');
}
