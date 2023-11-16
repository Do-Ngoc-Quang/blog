<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function view_user(){
        $user_id_current = Auth::id();
        $user = User::all();
        return view('admin.pages-account-settings-account',['users'=>$user], ['user_id_current'=>$user_id_current]);
    }

    public function create_user(Request $request){
        // Kiểm tra thông tin Username và Password
        $data = $request->validate(['username'=>'required', 'email'=>'required', 'password'=>'required']);
        // Mã hóa
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        return redirect('/auth-login')->with('success', 'Register account successfully.');
    }

    public function check_login(Request $request){
        // Kiểm tra thông tin Username và Password
        $data = $request->validate(['username'=>'required', 'password'=>'required']);

        if(auth()->attempt(['username'=>$data['username'], 'password'=>$data['password']]) 
           || auth()->attempt(['email'=>$data['username'], 'password'=>$data['password']])){
            $request->session()->regenerate();

            return redirect('/dashboard')->with('success', 'Login succeesfully.');
        }else{
            return redirect('/auth-login')->with('failed', 'Login Failure.');
        }
    }

    public function edit_user(Request $request, $id){
        $users = User::all();
        $user_id_current = Auth::id();

        $user = User::find($id);

        $user->email = $request['new_email'];
        $user->firstname = $request['new_firstName'];
        $user->lastname = $request['new_lastName'];
        $user->	phonenumber = $request['new_phoneNumber'];
        $user->	address = $request['new_address'];

        if(isset($request->avatar)){
            $img_temp = pathinfo($request->avatar->getClientOriginalName());
            $request->avatar->storeAs('public/upload_avatars/',$img_temp['basename']);
            $user->avatar = $img_temp['basename'];
        }
        else{
            // $img_temp = 'default-avatar.jpg';
            // $user->avatar = $img_temp;
        }
        
        $user->save();
        return redirect('/pages-account-settings-account')->with('success', 'Information have changed.');
    }

    public function logout() {
        auth()->logout();
        return redirect('/auth-login')->with('success', 'You are now logged out.');
    }
}