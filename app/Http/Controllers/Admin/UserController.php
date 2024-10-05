<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(); // User::all();

        return view('admin.users.index', compact('users'));
        // return view('admin.users.index', compact('users'));
    }
    
    public function create()
    {
        return view('admin.users.create');
    }
    
    public function store(StoreUserRequest $request)
    {
        User::create($request->all());

        return redirect()->route('users.index')
        ->with('success', 'Usuario criado com sucesso');
    }
}

