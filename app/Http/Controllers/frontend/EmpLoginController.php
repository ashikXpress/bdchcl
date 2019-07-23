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

        $request->session()->put('empId', $empId);

        if ($users_email == $email && $users_password == $password) {
            return view('members.profile');
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
