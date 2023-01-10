<?php
 
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use Stripe;
 use Session;
 
 class StripeController extends Controller
 {
     /**
      * payment view
      */
     public function handleGet()
     {
         return view('stripe');
     }
   
     /**
      * handling payment with POST
      */
     public function handlePost(Request $request)
     {
        
         // Set API secret
         Stripe\Stripe::setApiKey(config('stripe.api_keys.stripe_secret'));

         //Create a charge 
         $response = Stripe\Charge::create ([
                 "amount" => 100 * 100,
                 "currency" => "inr",
                 "source" => $request->stripeToken,
                 "description" => "Making test payment of 100 ruppes." 
         ]);

         echo "<pre>";
         print_r($response);
         die;

        //  //create full refund by charge id
        //  $response = Stripe\Refund::create ([
        //     'charge' => 'ch_1MOhPOBXq1Ys4N5RZZnv7LLr'
        //  ]);

        //  echo "<pre>";
        //  print_r($response);
        //  die;
            
        //$respomse obj if paid set to 1
         Session::flash('success', 'Payment has been successfully processed.');
           
         return back();
     }
 }