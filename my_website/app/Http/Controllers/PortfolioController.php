<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class PortfolioController extends Controller
{
    //
    public function getPortfolioHome(){
        $users = Users::all();
        return view('home/index', compact('users'));
    }

    public function getSignUp(){
        return view('users/sign_up');
    }

    public function postSignUp(Request $request){
        $this->validate($request, [
            'firstNameInput' => 'required|min: 3'
        ]);
        // $users = Users::all();
        // $users['firstName'] = $request->input('firstNameInput');
        // $users['lastName'] = $request->input('lastNameInput');
        // $users['username'] = $request->input('userNameInput');
        // $users['email'] = $request->input('emailInput');
        // $users['password'] = $request->input('passwordInput'); 

        $user = new Users([
            'firstName'=>$request->input('firstNameInput'),
            'lastName'=>$request->input('lastNameInput'),
            'username'=>$request->input('userNameInput'),
            'email'=>$request->input('emailInput'),
            'password'=>$request->input('passwordInput'),
            'isAdmin'=>$request->input('hiddenIsAdminInput'),
            'isLoggedIn'=>$request->input('hiddenIsLoggedInInput')
        ]);
        $user->save();

        return redirect()
        ->route('index')
        ->with('firstName', $request->input('firstNameInput'))
        ->with('lastName', $request->input('lastNameInput'))
        ->with('username', $request->input('userNameInput'))
        ->with('email', $request->input('emailInput'))
        ->with('password', $request->input('passwordInput'));
    }

    public function getLogin(){
        $users = Users::all();
        return view('/login/index', compact('users'));
    }

    public function postLogin(Request $request){
        $this->validate($request, [
            'userSignInNameInput' => 'required|min: 3',
            'passwordSignInInput' => 'required|min:3',
        ]);

        $signedInUser = Users::find($request->input('hiddenId'));
        $signedInUser['isLoggedIn'] = $request->input('hiddenIsLoggedInInput');
        $signedInUser['username'] = $request->input('userSignInNameInput');
        $signedInUser['password'] = $request->input('passwordSignInInput');
            // $username = $request->input('userSignInNameInput');
        //   $password = $request->input('passwordSignInInput');
        $credentials = $request->only('username');

        if (!Auth::attempt($credentials)){

            $signedInUser->save();
            return redirect()
            ->route('index')
            ->with('username', $request->input('userSignInNameInput'))
            ->with('password', $request->input('passwordSignInInput'));
            // echo 'SUCCESS!';
        }else{
        return redirect()
        ->route('sign_up');
        }
    }

}
