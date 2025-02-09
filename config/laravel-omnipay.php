<?php

return [

	// The default gateway to use
	'default' => 'paypal',

	// Add in each gateway here
	'gateways' => [
		'paypal' => [
			'driver'  => 'PayPal_Express',
			'options' => [
				'username'  => 'xtana-test@gmail.com',
				'password'  => 'renzcabato123096',
				'signature' => 'ELpfAZ-lqvLD5ZW4hu6AM4V8fATMN2hflSINM5GALv3o5fffmKe6q20H-yy_RjVs8-cDBkJeIP372olN',
				'solutionType' => '',
				'landingPage'    => '',
				'headerImageUrl' => '',
				'brandName' =>  'Xtana',
				'testMode' => true
			]
		],
	]

];