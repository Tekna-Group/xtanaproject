<?php

namespace App\Http\Controllers;
use App\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //

    public function index()
    {
        $invoices = Invoice::where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        return view('invoices',
            array(
                'invoices' => $invoices,
            )
        );
    }
}
