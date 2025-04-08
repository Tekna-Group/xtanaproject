<?php

namespace App\Http\Controllers;
use App\Invoice;
use App\InvoiceItem;
use App\UserProfile;
use App\Payment;
use Goutte\Client;
use Smalot\PdfParser\Parser;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\ServerController;
use App\Group;
use App\Document;
use Spatie\Browsershot\Browsershot;

use Illuminate\Support\Facades\Validator;

class CheckOutController extends Controller
{
    //
   
    public function input(Request $request)
    {
        return view('input');
    }
    public function upload(Request $request)
    {
        $groups = Group::get();
        return view('upload_data',
        array(
            'groups' => $groups,
        )
        );
    }
    public function uploadLink(Request $request)
    {
        $content = $this->scrape($request);
  
        $content = $content->getData();

        // Now, you have the data part of the response, which is a PHP object or array
        // If you want to convert it to an array, you can use (if it's an object):
        $dataArray = (array) $content;
        // dd($content);
        // Or you can directly access it as an object
        // return $data;
        // Add the scraped content to the request data
        $request->merge([
            'content' => json_encode($content),
        ]);
    
        // Call the store method with the original request
       $this->store($request);
       Alert::success('Successfully Uploaded')->persistent('Dismiss');
       return back();
    }
    public function uploadPdf(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pdf' => 'required|file|mimes:pdf|max:10240', // Max size 10MB
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422); // 422 = Unprocessable Entity
        }

        // Get the uploaded file
        $pdf = $request->file('pdf');
        $content = $this->extractContentFromPdf($pdf);
        // dd($content);
  
        // $content = $content->getData();

        // Now, you have the data part of the response, which is a PHP object or array
        // If you want to convert it to an array, you can use (if it's an object):
        // $dataArray = (array) $content;
        // dd($content);
        // Or you can directly access it as an object
        // return $data;
        // Add the scraped content to the request data
        $request->merge([
            'content' => json_encode($content),
        ]);
    
        // Call the store method with the original request
       $this->store($request);
       Alert::success('Successfully Uploaded')->persistent('Dismiss');
       return back();
    }
    private function extractContentFromPdf($pdf)
    {
        // Instantiate the PDF parser
        $parser = new Parser();

        // Parse the uploaded PDF file
        $pdfContent = $parser->parseFile($pdf->getRealPath());

        // Extract text content from the PDF
        $text = $pdfContent->getText();

        // Return the extracted text (You can also perform additional cleaning if needed)
        return $text;
    }
    public function scrape(Request $request)
    {
        $url = $request->url; // Replace with the website you want to scrape
        
        // Initialize Goutte Client
        $client = new Client();

        // Make a request to the website
        $crawler = $client->request('GET', $url);

        // Example: Get the page title
        $title = $crawler->filter('title')->text();

        // Example: Get the first paragraph's text
        $firstParagraph = $crawler->filter('p')->first()->text();

        // Example: Get all links on the page
        $links = $crawler->filter('a')->each(function ($node) {
            return $node->link()->getUri();
        });

        // Example: Get all headings (h1, h2, h3, etc.)
        $headings = $crawler->filter('h1, h2, h3')->each(function ($node) {
            return $node->text();
        });

        return response()->json([
            'title' => $title,
            'first_paragraph' => $firstParagraph,
            'links' => $links,
            'headings' => $headings,
        ]);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'group' => 'required|string',
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422); // 422 = Unprocessable Entity
        }

        // Store document in MySQL
        $document = Document::create([
            'title' => $request->input('title'),
            'group' => $request->input('group'),
            'content' => $request->input('content'),
        ]);
        Alert::success('Successfully Uploaded')->persistent('Dismiss');
        return back();


    }
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
