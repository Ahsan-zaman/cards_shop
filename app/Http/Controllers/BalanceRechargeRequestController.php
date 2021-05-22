<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalanceRechargeRequestController extends Controller
{
    public function index()
    {
        # code...
    }
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'amount' => [ 'required', 'numeric' ],
            'comment' => [ 'nullable', 'string' ],
            'file' => [ 'required', 'file', 'mimes:jpg,jpeg,png,pdf' ],
        ]);
        $file = $request->file('file');
        $path = $file->store('bank_receipts');

        $data['file'] = $path;
        $data['type'] = 'Bank';

        auth()->user()->requests()->create($data);

        return redirect('profile')->with('new_req', 'New request has been successfully submitted.');
    }
}
