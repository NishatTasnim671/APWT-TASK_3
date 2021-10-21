<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function ServicePage()
    {
        $product=[
            "Name"=>"Laptop",
            "Brand"=>"hp",
            "Price"=>"80000",

        ];
        return view('service')->with('product',$product);

    }
    public function HomePage()
    {
        return view('home');
    }

    public function ContactPage()
    {
        return view('contact');
    }

    public function contactSubmit(Request $request){
        
        $validate = $request->validate([
                'name'=>'required|min:5|max:10',
                'address'=>'required',
                'email'=>'email',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
                
            ],
            [
                'name.required'=>'Please put your name',
                'name.min'=>'Name must be greater than 5 charcters',
                'name.max'=>'Name must be smaller than 10 charcters',
                'address.required'=>'Please put your address',
                'email.required'=>'Please put your email',
                'email.email'=>'please put your valid email',
                'phone.required'=>'Please put your phone number',
                'phone.regex'=>'Phone number must be numbers'
            ]
        );
        

        return "OK";      
    }

    public function AboutPage()
    {
        return view('about');
    }

    public function TeamsPage()
    {
        return view('teams');
    }
 
}
