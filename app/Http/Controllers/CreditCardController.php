<?php

namespace App\Http\Controllers;
use Omnipay\Omnipay;
use Omnipay\RestGateway\Gateway;
use Illuminate\Http\Request;

class CreditCardController extends Controller
{
    //

    public function index(Request $request)
    {
        return view('credit_cards');
    }

    public function payment()

    {
        $gateway = Omnipay::create('RestGateway');

        // Initialise the gateway
        $gateway->initialize(array(
            'clientId' => 'AZfC9RdOD2K3towDrdosnSjC00qLH4CQNRO4XhnLIeNF7Y_eFa7dVASPEcGn604XXO4VFWA4SADWJcCi',
            'secret'   => 'ELpfAZ-lqvLD5ZW4hu6AM4V8fATMN2hflSINM5GALv3o5fffmKe6q20H-yy_RjVs8-cDBkJeIP372olN',
            'testMode' => true, // Or false when you are ready for live transactions
        ));
        
        // Create a credit card object
        // DO NOT USE THESE CARD VALUES -- substitute your own
        // see the documentation in the class header.
        $card = new CreditCard(array(
                    'firstName' => 'Example',
                    'lastName' => 'User',
                    'number' => '4111111111111111',
                    'expiryMonth'           => '01',
                    'expiryYear'            => '2020',
                    'cvv'                   => '123',
                    'billingAddress1'       => '1 Scrubby Creek Road',
                    'billingCountry'        => 'AU',
                    'billingCity'           => 'Scrubby Creek',
                    'billingPostcode'       => '4999',
                    'billingState'          => 'QLD',
        ));
        
        $card = Omnipay::creditCard($cardInput);
        dd($card);
        $response = Omnipay::purchase([
            'amount'    => '100.00',
            'returnUrl' => 'http://bobjones.com/payment/return',
            'cancelUrl' => 'http://bobjones.com/payment/cancel',
            'card'      => $cardInput
        ])->send();
        
        dd($response->getMessage());
    }
}
