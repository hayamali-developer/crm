<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\AdminRequest;

class DashboardController extends Controller
{




    //protected AdminService $adminService;


 
    public function login(){
     return view('dash.login');
    }


    public function postLogin(AdminRequest $request)
    {
        // Attempt login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
    
            $user = Auth::user(); // get logged-in user
    
            if ($user->role == 'admin') {
                return redirect()->route('admin')->with('success', 'Welcome Admin!');
            } elseif ($user->role == 'employee') {
                return redirect()->route('emp-customers.index')->with('success', 'Welcome Employee!');
            } else {
                Auth::logout(); // logout if role is not allowed
                return redirect()->route('login')->with('error', "You don't have permission to access.");
            }
    
        } else {
            return redirect()->route('login')->with('error', "Wrong credentials.");
        }
    }
    public function index(){

        return view('dash.index');
    }



    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
