<?php

namespace App\Http\Services\Employee;
use auth;
use App\Models\Action;
use App\Http\Requests\Employee\CustomerEmployeeRequest;

class ActionService
{
    public function fillFromRequest(CustomerEmployeeRequest $request, $elements = null)
    {
        if (!$elements && auth()->check()) {
            $elements = new Action();
        }
        
        $elements->customer_id = $request->customer_id;
        $elements->employee_id = $request->employee_id;
        $elements->type = $request->type;
        $elements->result = $request->result;
        $elements->save();
        
        return $elements;
    }
}
