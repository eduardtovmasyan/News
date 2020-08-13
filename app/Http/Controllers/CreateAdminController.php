<?php

namespace App\Http\Controllers;

use Create;
use Illuminate\Http\Request;
use App\Http\Requests\CreateAdminValidationRequest;

class CreateAdminController extends Controller
{
    public function showCreateAdminPage()
    {
       return view('admin.create');
    }

    public function store(CreateAdminValidationRequest $request)
    {
        $users = Create::store($request);
        
        return redirect()->route('admin-list');
    }
}
