<?php
defined('MYAAC') or die('Direct access not allowed!');

$recaptchaPath = PLUGINS . 'google-recaptcha/';
if(!is_file($recaptchaPath . 'config.php')) {
	copy(
		$recaptchaPath . 'config.php.dist',
		$recaptchaPath . 'config.php'
	);
	success('Copied config.php.dist to config.php');
}
