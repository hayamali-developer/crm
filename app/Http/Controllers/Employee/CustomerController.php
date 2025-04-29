<?php

namespace App\Http\Controllers\Employee;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index()
    {
        $elements = User::where('assign_to', auth()->id())->get();
        return view('dash.crm.emp-customers.index',compact('elements'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'nullable|email',
         
        ]);

        Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'assign_to' => auth()->id(),
            'created_by' => auth()->id(),
        ]);

        return redirect()->route('my-customers.index')->with('success', 'Customer added successfully.');
    }
}
