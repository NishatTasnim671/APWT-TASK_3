<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    
    public function loginform(Request $request)
    {
        $validate=$request->validate([

             'name'=>'required',
             'password'=>'required'
        ],
        [
            'name.required'=>'Please put your name',
            'password.required'=>'Please put your password'
        ]
        
        );
        $name=$request->name;
        $password=$request->password;
        $User = User::select('*')->where('name',$name)->where('password',$password)->get();
        $count=$User->count();


        if ($count>0) {
            $User = User::select('*')->where('name',$name)->where('password',$password)->first();

            $request->session()->put('name',$User->Username);

            return view("pages.userview",['user'=>$User]);
        
        }
       else {
        return view("pages.login");
       }
        
        
    }
    public function logout(){
        session()->forget('name');
        return view("pages.login");
    }


    public function create(){
        return view('pages.registration');
    }
    public function createSubmit(Request $request){
        
        $validate = $request->validate([
                'name'=>'required|min:5|max:10',
                'dob'=>'required',
                'email'=>'required|email',
                'password'=>'required|min:8'
                              
            ],
            [
                'name.required'=>'Please put your name',
                'name.min'=>'Name must be greater than 5 charcters',
                'name.max'=>'Name must be smaller than 10 charcters',
                'dob.required'=>'Please put your date of birth',
                'email.required'=>'Please put your email',
                'email.email'=>'please put your valid email',
                'password.required'=>'Please put your password',
                'password.min'=>'Password must be greater than 8 charcters'
            
               


            ]
        );
        $var = new User();
       $var->name= $request->name;
       $var->dob= $request->dob;
       $var->email= $request->email;
       $var->password= $request->password;
       $var->save();
     return view("pages.registration");
        

             
    }
    public function profile(Request $request){
      
        $id = $request->id;
        $User = User::where('id',$id)->first();
        $x=$User->assignedinfo();
        return view('pages.profile')->with('user', $User)
        ->with('infos',$x);

    }

    public function editSubmit(Request $request){
        $User = User::where('id',$request->id)->first();
        $User->name= $request->name;
        $User->email= $request->email;
        $User->save();
        return view("pages.profile")->with('user', $User);

    }

    public function Home(Request $request){
      
        $User = User::where('id',$request->id)->first();

            $request->session()->put('name',$User->name);

            return view("pages.userview",['user'=>$User]);

    }

    
    

}
