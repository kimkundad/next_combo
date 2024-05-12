<?php

namespace App\Exports;

use App\Models\User;
use App\Models\ticket_order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportUser implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $ticket_order = ticket_order::groupBy('user_id')->pluck('user_id')->toArray();
        $user = User::select(
            'users.name',
            'users.email',
            'users.phone',
            'users.ser',
            'users.ser_othher',
            'users.fname',
            'users.lname',
            'users.clinic_type',
            'users.province',
            'users.representative',
            'users.representative2',
            'users.vet_id',
            'users.address',
        )
        ->whereNotin('id', $ticket_order)->get();

        return $user;
    }

    public function headings(): array
    {
        return [
            'name',
            'email',
            'phone',
            'ser',
            'ser_othher',
            'firstname',
            'lastname',
            'clinic',
            'province',
            'representative',
            'representative2',
            'vet_id',
            'addressv'
        ];
    }
}
