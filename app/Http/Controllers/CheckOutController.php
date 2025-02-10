<?php

namespace App\Http\Controllers;
use App\Invoice;
use App\InvoiceItem;
use App\Payment;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CheckOutController extends Controller
{
    //
    public function index()
    {
        return view('checkout');
    }

    public function postPayment(Request $request)
    {
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
        Alert::success('Successfully Payment Posted')->persistent('Dismiss');
        return redirect('invoices');
    }
}
