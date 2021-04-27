<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class LoanAcceptController extends Controller
{
    public function index()
    {
        $loans = Loan::with('user')->get();
        return view('loan_review.index', compact('loans'));
    }

    public function edit($id)
    {
        $loan = Loan::find($id);
        return view('loan_review.edit', compact('loan'));
    }

    public function update(Request $request, $id)
    {
        $loan = Loan::findOrFail($id);
        $request->validate([
            'request_status' => 'required',
        ]);
        $loan->update($request->all());
        return redirect()->route('loan_review.index')->with('toast_success', 'Loan reviewed successfully!');
    }
}
