<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Login\LoginRequest;
use App\Http\Requests\Login\RegisterRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;
use App\Mail\NotifyMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function getLogin(){
        return view('login.login');
    }

    public function postLogin(LoginRequest $request){

        $login = [
            'email' => $request->email,
            'password' => $request->password,      
        ];
        
        $user = User::where('email', $request->email)->first();
        
        if ($user) {
            if ($user->email_verified_at != null) {
                if (Auth::attempt($login)) {
                    if (Auth::user()->level == 1) {
                        $request->session()->regenerate();
                        return redirect()->route('admin.categories.index');
                    } else {
                        return redirect()->route('website.index');
                    }
                } else {
                    return back()->with([
                        'error' => 'Email or password wrong, Please enter again',
                    ]);
                }
            } else {
                return back()->with([
                    'error' => 'Please confirm your email',
                ]);
            }
        } else {
            return back()->with([
                'error' => 'This account does not exit',
            ]);
        }
        

      
    }

    public function getRegister()
    {
         return view ('login.register');
    }

    public function sendMail()
    {
         return view ('login.send-mail');
    }

    public function postRegister(RegisterRequest $request)
    {   
        $data = $request->except('_token', 'password_confirmation', 'avatar');

        $data['password'] = bcrypt($request->password);
        $data['created_at'] = new \DateTime();
        $data['uuid'] = Str::uuid();
        $data['avatar'] = '';
        $data['status_user'] =1;
             $result = DB::table('users')->insert($data);
        if($result){
            Mail::to($request->email)->send(new NotifyMail($data));
            return view('login/send-mail');
        }
    }
     public function verify($uuid)
        {
            $data =DB::table('users')->where('uuid', $uuid)->first();
            if($data->email_verified_at == null){
                DB::table('users')->where('uuid', $uuid)->update(['email_verified_at' => new \DateTime()]);
                return redirect()->route('website.getLogin')->with('success', 'Email verification successful');
        }else {
            return redirect()->route('website.index');
        }
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();

        
        return redirect()->route('getLogin');
    }
}
