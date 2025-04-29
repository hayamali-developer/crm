<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CustomerRequest;
use App\Http\Requests\Admin\EmployeeRequest;
use App\Http\Services\Admin\CustomerService;
use App\Http\Services\Admin\EmployeeService;

class AdminController extends Controller
{

    protected EmployeeService $empService;

    protected CustomerService $cusService;

    public function __construct(EmployeeService $empService,CustomerService $cusService){

        $this->empService = $empService;
        $this->cusService = $cusService;
    }
    public function employee(){
       $elements=User::where('role','employee')->get();
       return view('dash.crm.employee',compact('elements'));
        
       }
   public function storeEmployee(EmployeeRequest $request){

    $request->validated();
    $this->empService->fillFromRequest($request);
    return back()->with('success', 'Employee added successfully.');
   }





   public function customers(){
    $elements=User::where('role','customer')->get();
    $employes=User::where('role','employee')->get();
    return view('dash.crm.customers',compact('elements','employes'));
     
    }
public function storeCustomers(CustomerRequest $request){

 $request->validated();
 $this->cusService->fillFromRequest($request);
 return back()->with('success', 'customers added successfully.');
}
}
