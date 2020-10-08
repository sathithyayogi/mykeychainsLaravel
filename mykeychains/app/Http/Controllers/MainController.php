<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\price;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

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
            $orderinfo->Address = $request->input('apartment').', '.$request->input('address').', '.$request->input('city').', '.$request->input('state').', '.$request->input('zipcode');
            $orderinfo->AddNote = $request->input('extranote');
            $orderinfo->OrderDate =  Carbon::now()->toDateString();
            $orderinfo->paymentStatus = "NotPaid";
            $orderinfo->paymentStatusDet = "NotPaid";
            $orderinfo->save();
            return view('payment.success');
        }

        public function paymentsuccess() {
            alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.');
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







}
