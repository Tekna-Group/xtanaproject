<?php

namespace App\Http\Controllers;
use App\Invoice;
use App\InvoiceItem;
use App\UserProfile;
use App\Payment;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\ServerController;

class CheckOutController extends Controller
{
    //
    public function index()
    {
        return view('checkout');
    }

    public function postPayment(Request $request)
    {
        $user = UserProfile::where('user_id',auth()->user()->id)->delete();

        $new_user = new UserProfile;
        $new_user->user_id = auth()->user()->id;
        $new_user->first_name = $request->first_name;
        $new_user->middle_name = $request->middle_name;
        $new_user->last_name = $request->last_name;
        $new_user->company = $request->company;
        $new_user->address = $request->address;
        $new_user->country = $request->country;
        $new_user->city = $request->city;
        $new_user->state = $request->state;
        $new_user->zipcode = $request->zipcode;
        $new_user->contact_number = $request->contact_number;
        $new_user->save();

        // dd($request->all());
        $invoice = new Invoice;
        $invoice->user_id = auth()->user()->id;
        $invoice->date_invoice = date('Y-m-d');
        $invoice->amount = 300.00;
        $invoice->service = "Xtana";
        $invoice->description = "Xtana Subscription";
        $invoice->save();

        $invoiceItem = new InvoiceItem;
        $invoiceItem->user_id = auth()->user()->id;
        $invoiceItem->invoice_id = $invoice->id;
        $invoiceItem->service = "Xtana";
        $invoiceItem->description = "Xtana Subscription";
        $invoiceItem->amount = 300.00;
        $invoiceItem->qty = 1;
        $invoiceItem->total_amount = 300.00;
        $invoiceItem->save();

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        $charge = $stripe->charges->create([

            'amount' => 30000,
            'currency' => 'usd',
            'source' => $request->stripeToken,
            'description' => 'First Payment for Xtana Subscription'
        ]);

        $payment = new Payment;
        $payment->invoice_id = $invoice->id;
        $payment->user_id = auth()->user()->id;
        $payment->token_id = $request->stripeToken;
        $payment->amount = 300.00;
        $payment->last = $request->last;
        $payment->save();
        $ServerController = new ServerController;
        $ServerController->create();
        Alert::success('Successfully posted payment! Your server is in the process of being created. Please wait.')->persistent('Dismiss');
        return redirect('invoices');
    }
}
