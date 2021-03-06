<?php

namespace App\Http\Controllers;

use App\Models\BalanceRechargeRequest;
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

    public function dl(Request $request)
    {
        $this->validate($request, [
            'id' => [ 'required', 'integer', 'exists:balance_recharge_requests,id' ]
        ]);
        $req = BalanceRechargeRequest::whereId($request->id)->first();
        
        return response()->download(storage_path('/app/'.$req->file));
    }
    
    public function accept(Request $request)
    {
        $this->validate($request, [
            'id' => [ 'required', 'integer', 'exists:balance_recharge_requests,id' ]
        ]);
        $req = BalanceRechargeRequest::whereId($request->id)->first();

        // Add balance
        $user_balance = $req->user->wallet;
        $req->user()->update([
            'wallet' => $user_balance + $req->amount
        ]);
        $req->status = 'Accepted';
        $req->save();

        return redirect('admin/dashboard')->with('success', 'Balance added to user wallet.');
    }
}
