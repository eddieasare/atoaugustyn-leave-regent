<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function changePassword()
    {
        return view('account.change-password');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('account.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email',
            'mobile' => 'required|numeric',
            'address' => 'nullable|string',
            'department' => 'required',
            'gender' => 'required|in:Male,Female',
            'dob' => 'required|date',
        ]);

        $user->update($request->all());
        return back()->with('success', 'Account updated successfuly');
    }
}
