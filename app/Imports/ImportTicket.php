<?php

namespace App\Imports;

use App\Models\ticket_order;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportTicket implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ticket_order([
            //
        ]);
    }
}
