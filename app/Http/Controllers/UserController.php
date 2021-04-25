<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('staff.index', compact('users'));
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'mobile' => 'required|numeric',
            'password' => 'required|string|min:8|confirmed',
            'address' => 'nullable|string',
            'department' => 'required',
            'gender' => 'required|in:Male,Female',
            'password' => 'required|string|min:8',
            'dob' => 'required|date',
            'role' => 'required|in:Admin,Manager,Staff',
        ]);

        User::create($request->all());
        return redirect('staff')->with('toast_success', 'Staff created successfully!');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return redirect('staff.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'mobile' => 'required|numeric',
            'address' => 'nullable|string',
            'department' => 'required',
            'gender' => 'required|in:Male,Female',
            'dob' => 'required|date',
        ]);

        $user->update($request->all());
        return redirect('staff')->with('toast_success', 'Staff updated successfully!');
    }
}
