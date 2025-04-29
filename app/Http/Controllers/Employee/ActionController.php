<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Employee\ActionService;
use App\Http\Requests\Employee\CustomerEmployeeRequest;

class ActionController extends Controller
{
    protected ActionService $actionService;
     public function __construct(ActionService $actionService){
        $this->actionService =$actionService;
     }

    public function store(CustomerEmployeeRequest $request)
    {    
        $request->validated();
        $this->actionService->fillFromRequest($request);
        return back()->with('success', 'Action recorded successfully.');
    }
}

