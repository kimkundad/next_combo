<?php

namespace App\Exports;

use App\Models\ticket_order;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportTicket implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        dd(ticket_order::select(
            'ticket_orders.created_at',
            'ticket_orders.code_ticket',
            'users.ser',
            'users.ser_othher',
            'users.fname',
            'users.lname',
            'users.phone',
            'users.vet_id',
            'users.clinic_type',
            'users.province',
            'users.address',
            'users.representative',
            'users.representative2',
            'users.representative2',
            'open_tickets.name_ticket',
            'open_tickets.age_ticket',
            'open_tickets.sex_ticket',
            'open_tickets.breed_ticket',
            'open_tickets.other_breed_ticket',
            'open_tickets.disease_ticket',
            'open_tickets.other_disease_ticket',
            'open_tickets.objective_ticket',
            'open_tickets.other_objective_ticket',
            )
            ->orderby('ticket_orders.created_at', 'desc')
            ->leftjoin('users', 'users.id',  'ticket_orders.user_id')
            ->leftjoin('open_tickets', 'open_tickets.id',  'ticket_orders.open_ticket')
            ->with('open_tickets.img_open_tickets')
            ->get()
        );

        return ticket_order::all();
    }
}
