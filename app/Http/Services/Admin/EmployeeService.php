<?php

namespace App\Http\Services\Admin;

use auth;
use App\Models\User;
use App\Http\Requests\Admin\EmployeeRequest;



class EmployeeService
{
    public function fillFromRequest(EmployeeRequest $request, $elements = null)
    {
        if (!$elements && auth()->check()) {
            $elements = new User();
        }
        
        $elements->name = $request->name;
        $elements->email = $request->email;
        $elements->password = bcrypt($request->password);
        $elements->role = 'employee';
        $elements->created_by = auth()->user()->id;
        $elements->assign_to = $request->assign_to ?? 0;
        $elements->save();
        
        return $elements;
    }
}
