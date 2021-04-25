<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;

class LeaveAcceptController extends Controller
{
    public function index()
    {
        $leaves = Leave::all();
        return view('leave_review.index', compact('leaves'));
    }

    public function edit($id)
    {
        $leave = Leave::find($id);
        return view('leave_review.edit', compact('leave'));
    }

    public function update(Request $request, $id)
    {
        $leave = Leave::findOrFail($id);
        $request->validate([
            'request_status' => 'required',
        ]);
        $leave->update($request->all());
        return redirect()->route('leave_review.index')->with('toast_success', 'Leave reviewed successfully!');
    }
}
