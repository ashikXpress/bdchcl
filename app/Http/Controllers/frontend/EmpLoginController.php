<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Keytoken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpLoginController extends Controller
{

    public function __construct()
    {
        return $this->middleware('guest');
    }

    public function getLogin()
    {

        return view('frontend.account.emp_login');
    }

    public function getEmpLogin(Request $request)
    {


       $this->validate($request, [
           'email' => 'required|email',
           'password' => 'required|min:6'
       ]);

        $users_email = $request->input('email');
        $users_password = $request->input('password');
        $email = DB::table('employees')->where('email', $request->input('email'))->value('email');
        $password = DB::table('employees')->where('password', $request->input('password'))->value('password');
        $empId = DB::table('employees')->where('email', $request->input('email'))->value('id');
        $empPhoto = DB::table('employees')->where('email', $request->input('email'))->value('photo');
        $empFirstName = DB::table('employees')->where('email', $request->input('email'))->value('first_name');
        $empLastName = DB::table('employees')->where('email', $request->input('email'))->value('last_name');

        $request->session()->put('empId', $empId);
        $request->session()->put('empPhoto', $empPhoto);
        $request->session()->put('empFirstName', $empFirstName);
        $request->session()->put('empLastName', $empLastName);

        if ($users_email == $email && $users_password == $password) {
            return redirect()->route('member.profile');
        } else {
            session()->flash('message', 'email or password does not match');
            return redirect()->back()->withInput($request->only('email', 'remember'));
        }


//       if(Auth::guard('Employee')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))){
//           return redirect()->route('member.profile');
//       }
//       session()->flash('message', 'email or password does not match');
//       return redirect()->back()->withInput($request->only('email', 'remember'));





    }

}
