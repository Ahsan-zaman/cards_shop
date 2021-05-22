<?php

namespace App\Imports;

use App\Models\Code;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;

class CodesImport implements ToModel, WithBatchInserts
{
    protected $card_id;

    public function __construct($card_id)
    {
        $this->card_id= $card_id;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Code([
            'code' => $row[0],
            'expiry_date' => now(),
            'card_id' => $this->card_id
        ]);
    }
    
    public function batchSize(): int
    {
        return 1000;
    }
}
