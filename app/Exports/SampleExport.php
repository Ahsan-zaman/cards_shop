<?php
namespace App\Exports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SampleExport implements
    FromArray
// , WithHeadings
{
    public function array(): array
    {
        $data = [];
        for ($i=0; $i < 5000; $i++) {
            $data[$i][] = Str::random();
        }
        return $data;
    }
    // public function headings(): array
    // {
    //     return [
    //         'code'
    //     ];
    // }
}
