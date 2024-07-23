<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addproduct;
class Authcontroller extends Controller
{
    public function productview(){
        $data=Addproduct::all();
        return view ('Admin.addproduct')->with('data',$data);
    }

    public function Addproduct(Request $request){
        // $request->validate([
        
        //     'email' => 'required|email|unique'
        // ]);  
        $user=new Addproduct;
        $user->name=$request['name'];
        $user->slug=$request['slug'];
        $user->price=$request['price'];
        $user->size=$request['size'];
        $user->description=$request['description'];
        if($files=$request->file('profile')){  
            $profileImage = time() . "." . $files->getClientOriginalExtension(); 
            $files->move('Addproduct',$profileImage);  
            $user->profile=$profileImage;  
            }  
        $user->save();
}
}