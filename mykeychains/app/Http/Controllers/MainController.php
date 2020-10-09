<?php

namespace App\Http\Controllers;

use App\Models\contactform;
use App\Models\order;
use App\Models\price;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use App\Payment\Crypto;


class MainController extends Controller
{
    //
    public function index() {

        return view('welcome');
    }

    public function imageupload() {
        $qty = request('quantity');
        if($qty >= 1 && $qty <= 3){
            return view('upload')->with('qty', $qty);
        }else{
            return view('welcome');
        }
    }

    public function imageuploadpost(Request $request, $qty) {
        if ($qty == 1) {
            $uuid = Uuid::generate()->string;
            $imageone = $request->file('file');
            $imageoneName = $uuid.' - one'.'.'.$imageone->extension();
            $imageone->move(public_path('images'), $imageoneName);

            $order = new order();
            $order->UNumber = $uuid;
            $order->FileName = $imageoneName;
            $order->qty = $qty;
            $order->save();
            return redirect('/information?qty='.$qty.'&uuid='.$uuid);

        } elseif($qty == 2) {
            $uuid = Uuid::generate()->string;
            $imageone = $request->file('file');
            $imagetwo = $request->file('filetwo');
            $imageoneName = $uuid.' - one'.'.'.$imageone->extension();
            $imagetwoName = $uuid.' - two'.'.'.$imagetwo->extension();
            $imageone->move(public_path('images'), $imageoneName);
            $imagetwo->move(public_path('images'), $imagetwoName);

            $order = new order();
            $order->UNumber = $uuid;
            $order->FileName = $imageoneName.', '.$imagetwoName;
            $order->qty = $qty;
            $order->save();
            return redirect('/information?qty='.$qty.'&uuid='.$uuid);

        } elseif($qty == 3) {
            $uuid = Uuid::generate()->string;

            $imageone = $request->file('file');
            $imagetwo = $request->file('filetwo');
            $imagethree = $request->file('filethree');

            $imageoneName = $uuid.' - one'.'.'.$imageone->extension();
            $imagetwoName = $uuid.' - two'.'.'.$imagetwo->extension();
            $imagethreeName = $uuid.' - two'.'.'.$imagethree->extension();

            $imageone->move(public_path('images'), $imageoneName);
            $imagetwo->move(public_path('images'), $imagetwoName);
            $imagethree->move(public_path('images'), $imagethreeName);

            $order = new order();
            $order->UNumber = $uuid;
            $order->FileName = $imageoneName.', '.$imagetwoName.', '.$imagethreeName;
            $order->qty = $qty;
            $order->save();
            return redirect('/information?qty='.$qty.'&uuid='.$uuid);

        }

    }

    public function information() {
        $qty = request('qty');
        $uuid = request('uuid');
        return view('information', [
            'qty' => $qty,
            'uuid' => $uuid
            ]);
        }

        public function orderinfordet(Request $request, $qty, $uuid) {
            $price = price::where('id',1)->pluck('Price');
            if($price->isEmpty()){
                return view('welcome');
            }

            $id = DB::table('order')
            ->where('UNumber', '=', $uuid)
            ->where('qty', '=', $qty)
            ->pluck('id');
            if($id->isEmpty()){
                return view('welcome');
            }

            $orderinfo = order::find($id[0]);
            $orderinfo->Name = $request->input('name');
            $orderinfo->email = $request->input('email');
            $orderinfo->number = $request->input('phone');
            $orderinfo->TotPrice = $price[0] * $qty;
            $orderinfo->Price = $price[0]   ;
            $orderinfo->Company = $request->input('company');
            $address = $request->input('apartment').', '.$request->input('address').', '.$request->input('city').', '.$request->input('state').', '.$request->input('zipcode');
            $orderinfo->Address = $address;
            $orderinfo->AddNote = $request->input('extranote');
            $orderinfo->OrderDate =  Carbon::now()->toDateString();
            $orderinfo->paymentStatus = "NotPaid";
            $orderinfo->paymentStatusDet = "NotPaid";
            $orderinfo->save();

            $working_key=env('CC_WORKING_KEY');//Shared by CCAVENUES
            $access_code=env('CC_ACCESS_KEY');//Shared by CCAVENUES
            $cc_merchant_id=env('CC_MERCHANT_ID');
            $redirect_url=env('REDIRECT_URL');
            $cancel_url=env('CANCEL_URL');
            $country=env('COUNTRY');
            $currency=env('CURRENCY');
            $language=env('LANGUAGE');


            $data =
            '&order_id=' . $uuid .
            '&amount=' . $price[0] * $qty .
            '&merchant_id=' . $cc_merchant_id .
            '&redirect_url=' . $redirect_url .
            '&cancel_url=' . $cancel_url .
            '&language=' . $language .
            '&currency=' . $currency .
            '&merchant_param2=' . $uuid .
            '&merchant_param3=' . $qty  .
            '&billing_email=' . $request->input('email') .
            '&billing_tel=' . $request->input('phone') .
            '&billing_zip=' . $request->input('zipcode') .
            '&billing_state=' . $request->input('state').
            '&billing_address=' . $address.
            '&billing_city=' . $request->input('city').
            '&billing_country=' . $country;

            $merchant_data='';


            $merchant_data .= $data;

            foreach ($_POST as $key => $value){
                $merchant_data.=$key.'='.$value.'&';
            }

            $encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.

            $response = Http::asForm()->post('https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction', [
                'encRequest' => $encrypted_data,
                'access_code' => $access_code,
            ]);

            return view('payment.success');
        }

        public function paymentsuccess() {

            return view('payment.success');
        }

    public function trackorder() {
        return 'trackorder';
    }

    public function contactus() {
        return view('relation.contact');
    }

    public function refundcan() {
        return view('relation.refundandcancellation');
    }

    public function privacypol() {
        return view('relation.privacy');
    }

    public function termsandcon() {
        return view('relation.termsandcondition');
    }

    public function contactinfoform(Request $request){
        // return $request;
        $contactForm = new contactform();
        $contactForm->email = $request->input('email');
        $contactForm->number = $request->input('number');
        $contactForm->subject = $request->input('subject');
        $contactForm->message = $request->input('message');
        $contactForm->save();

        $details = [
            'title' => 'Your Message is Submitted',
            'body' => 'Thanks for your message & Keep shopping with us'
        ];

        \Mail::to($request->input('email'))->send(new \App\Mail\contactMail($details));

        alert()->success('SuccessAlert','Message Submitted Successfully');
        return view('relation.contact');
    }

}
