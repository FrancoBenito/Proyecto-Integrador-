<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function data(){
      $user =[
        'name' => Auth::user()->name,
        'email' => Auth::user()->email,
        'password' => Auth::user()->password
      ] ;

      return view('profile',[
        'user' => $user
      ]);
    }

    public function update(Request $form){
      $this->validate(request(), [
          'name' => 'required',
          'email' => 'required|email|unique:users',
          'password' => 'required|min:6|confirmed'
      ]);

      $user = Auth::user();
      $user->name = $form['name'];
      $user->email = $form['email'];
      $user->password = bcrypt($form['password']);

      $user->save();

      return redirect('profile');
    }
}
