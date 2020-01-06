<?php

namespace App\Http\Controllers;

use App\customer;
use App\District;
use App\Division;
use Mail;
use Session;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(){
        $divisions = Division::orderBy('priority','asc')->get();
        $districts = District::orderBy('name','asc')->get();
        return view('pages.checkout.checkout-product',compact('divisions','districts'));
    }
    public function customerRegistration(Request $request){
        $customer = new customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->phone_no = $request->phone_no;
        $customer->division_id = $request->division_id;
        $customer->district = $request->district;
        $customer->street_address = $request->street_address;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->save();

        Session::put('customer_id',$customer->id);
        Session::put('customer_name',$customer->first_name.' '.$customer->last_name);

        $data = $customer->toArray();
        Mail::send('pages.mail.send-mail',$data,function ($message) use ($data){
            $message->to($data['email']);
            $message->subject('Welcome to Eshop');
        });

        return back();

    }
    public function customerLogin(Request $request){
        $customer = customer::where('email',$request->email)->first();
        if(password_verify($request->password,$customer->password)){
            Session::put('customer_id',$customer->id);
            Session::put('customer_name',$customer->first_name.' '.$customer->last_name);
            return redirect('/');
        }
        else{
            return back()->with('message','Invalid Email or Password!');
        }

    }
    public function loginFirst(){
        return view('pages.checkout.login');
    }
   /* public function loginCustomer(Request $request){
        $customer = customer::where('email',$request->email)->first();
        if(password_verify($request->password,$customer->password)){
            Session::put('customer_id',$customer->id);
            Session::put('customer_name',$customer->first_name.' '.$customer->last_name);
            return redirect('/');
        }
        else{
            return back()->with('message','Invalid Email or Password!');
        }
    }*/
}
