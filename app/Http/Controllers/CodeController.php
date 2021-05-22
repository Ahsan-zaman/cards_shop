<?php

namespace App\Http\Controllers;

use App\Exports\SampleExport;
use App\Imports\CodesImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CodeController extends Controller
{
    public function sample()
    {
        return Excel::download(new SampleExport, 'sample_codes.xlsx');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'card_id' => [ 'required', 'integer', 'exists:cards,id' ],
            'file' => [ 'file', 'mimes:xlsx' ]
        ]);

        Excel::import(new CodesImport($request->card_id), request()->file('file'));

        return back()->with('success', 'Codes are uploaded successfully!');
    }
}
