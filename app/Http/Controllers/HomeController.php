<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
use App\Models\Addproduct;
use Hash;
use Illuminate\Support\Facades\Validator;
class HomeController extends Controller
{
 
    public function index(){
        $data=Addproduct::all();
        return view ('index')->with('data',$data);
    }
    public function indexview(){
        return view ('Admin.index');
    }
  
    public function register(){
        return view ('register');
    }
    public function postregister(Request $request){
        // $request->validate([
        
        //     'email' => 'required|email|unique'
        // ]);  
        $user=new Register;
        $user->type=$request['type'];
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->gender=$request['gender'];
        $user->phone=$request['address'];
        $user->password=Hash::make($request['password']);
        if($files=$request->file('profile')){  
            $name=$files->getClientOriginalName();  
            $files->move('images',$name);  
            $user->profile=$name;  
            }  
        $user->save();
    }
    public function login(){
        return view ('login');
    }
    public function loginUser(Request $request){
        $user=Register::where('email','=', $request->email)->first();
        if($user){
               if(Hash::check($request->password,$user->password)){
                 $request->session()->put('user',$user->email);
                //  $request->session()->put('userid',$user->id);
                // if($user->type=="A")
               }else{
                return back()->with('fail','Password not matches');
               }
        }else{
            return back()->with('fail','The email is not registered.');
        }
    }
}
