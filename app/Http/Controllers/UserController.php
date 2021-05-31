<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\DeclareDeclare;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserController extends Controller
{
    public function getLogin()
    {
        return view('user.auth.login');
    }

    public function postLogin(Request $request)
    {
       // dd($request);
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        
       
            if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
            {
                $user= DB::table('users')->where('id', Auth::user()->id)->first();
                    if($user->status==1){
                        if($user->role == 3){
                             return redirect('/');
                        }
                        return redirect('view-stats');
                    }
                    else
                    {
                        return redirect()->back()->with('badInfo', "You are not confirmed");
                    }
            }
            else return redirect()->back()->with('badInfo', "Incorrect Password");
    }

    public function getRegister()
    {
        return view('user.auth.register');
    }

    public function postRegister(Request $request)
    {
         $this->validate($request, [
            'email' => 'required|unique:users',
            'username' => 'required',
            'password' => 'required|min:6|required_with:confirm_password|same:confirm_password',

        ]);
       // dd($request);

      
             DB::Table('users')->insert([
                'email' => $request->email,
                'username' => $request->username,
                'password' => bcrypt($request->password),
                'role' => '3',
            ]);

             return redirect('/login')->with('success','Successfully Registered');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function getChangePassword()
    {
        $opt['opt'] = 'change-password';
        return view('home.change-password')->with($opt);
    }
    public function getUserChangePassword()
    {
        $opt['opt'] = 'user-change-password';
        return view('user.change-password')->with($opt);
    }

    public function postChangePassword(Request $request)
    {
        if (Auth::guard('web')->attempt(['username' => Auth::user()->username, 'password' => $request['oldPassword']])){
            Log::channel('stderr')->info('Something happened!');
            $this->validate($request, [

                'newPassword' => 'required',
                'confirmNewPassword' => 'required|same:newPassword',
            ]);
            DB::table('users')->where('id', Auth::user()->id)->update([
                'password' => bcrypt($request['newPassword']),
            ]);
            return redirect()->back()->with('info', 'Password Changed Successfully');
        }
        else
        {
            return redirect()->back()->with('badInfo', 'Old Password did not match');
        }
    }

    public function postUserChangePassword(Request $request)
    {
        if (Auth::guard('web')->attempt(['username' => Auth::user()->username, 'password' => $request['oldPassword']]))
        {
            Log::channel('stderr')->info('Something happened!');
            $this->validate($request, [

                'newPassword' => 'required',
                'confirmNewPassword' => 'required|same:newPassword',
            ]);
            DB::table('users')->where('id', Auth::user()->id)->update([
                'password' => bcrypt($request['newPassword']),
            ]);
            return redirect()->back()->with('info', 'Password Changed Successfully');
        }
        else
        {
            return redirect()->back()->with('badInfo', 'Old Password did not match');
        }
    }
}
