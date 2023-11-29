<?php


$stripe = [
	'domain' => 'https://xxx/',
	'apiKey' => 'sk_test_',
	'defaultCurrency' => 'eur',
	'offers' => [
		'usd' => [
			['price' => '10', 'currency' => 'USD', 'premium_points' => '100'],
			['price' => '20', 'currency' => 'USD', 'premium_points' => '200'],
			['price' => '30', 'currency' => 'USD', 'premium_points' => '300'],
			['price' => '40', 'currency' => 'USD', 'premium_points' => '400'],
			['price' => '50', 'currency' => 'USD', 'premium_points' => '500'],
		],
	],
];

function getStripeOfferByPrice($price, $currency)
{
	global $stripe;

	foreach ($stripe['offers'][$currency] as $offer) {
		if ($offer['price'] == round($price / 100, 2)) {
			return $offer;
		}
	}

	return null;
}

function sendError($message)
{
	http_response_code(400);

	echo json_encode([
		'error' => $message
	]);

	exit();
}
