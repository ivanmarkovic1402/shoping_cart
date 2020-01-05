<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Session;

class UserController extends Controller
{
    public function getSignUp(){
        return view('users.signup');
    }

    public function postSignUp(Request $request){
        $this->validate($request, [
            'email'=>'email|required|unique:users',
            'password'=> 'required|min:4'
        ]);

        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();

        Auth::login($user);    
        if(Session::has('oldUrl')){
            $oldUrl = Session::get('oldUrl');\
            Session::forget('oldUrl');
            return redirect()->to($oldUrl);
        }

        // return redirect()->route('product.index');
        return redirect()->route('user.profile');

    }

    public function getSignIn(){
        return view('users.signin');
    }

    public function postSignIn(Request $request){
        $this->validate($request, [
            'email'=>'email|required',
            'password'=> 'required|min:4'
        ]);

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            if(Session::has('oldUrl')){
                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
            }
            return redirect()->route('user.profile');
        }
            return redirect()->back();
    }

    public function getProfile(){
        return view('users.profile');
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('user.signin');
    }
}




