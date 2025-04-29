<?php

namespace App\Http\Services\Admin;

use App\Models\User;
use App\Http\Requests\Admin\CustomerRequest;
use auth;

class CustomerService
{
    public function fillFromRequest(CustomerRequest $request, $elements = null)
    {
        if (!$elements && auth()->check()) {
            $elements = new User();
        }
        
        $elements->name = $request->name;
        $elements->email = $request->email;
        $elements->password = bcrypt($request->password);
        $elements->role = 'customer';
        $elements->created_by = auth()->user()->id;
        $elements->assign_to = $request->assign_to ?? 0;
        $elements->save();
        
        return $elements;
    }
}
