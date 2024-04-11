<?php

namespace App\Exports;

use App\Models\ticket_order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportTicket implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // dd(ticket_order::select(
        //     'ticket_orders.created_at',
        //     'ticket_orders.code_ticket',
        //     'users.ser',
        //     'users.ser_othher',
        //     'users.fname',
        //     'users.lname',
        //     'users.phone',
        //     'users.vet_id',
        //     'users.clinic_type',
        //     'users.province',
        //     'users.address',
        //     'users.representative',
        //     'users.representative2',
        //     'users.representative2',
        //     'open_tickets.name_ticket',
        //     'open_tickets.age_ticket',
        //     'open_tickets.sex_ticket',
        //     'open_tickets.breed_ticket',
        //     'open_tickets.other_breed_ticket',
        //     'open_tickets.disease_ticket',
        //     'open_tickets.other_disease_ticket',
        //     'open_tickets.objective_ticket',
        //     'open_tickets.other_objective_ticket',
        //     'open_tickets.img_1',
        //     'open_tickets.img_2',
        //     'open_tickets.img_3',
        //     'close_tickets.c_img1',
        //     'close_tickets.c_img2',
        //     'close_tickets.c_img3',
        //     'ask_close_tickets.detail',
        //     'add_tickets.add_img1',
        //     'add_tickets.add_img2',
        //     'add_tickets.add_img3',
        //     'add_tickets.detail',
        //     'users.pdpa',
        //     'users.policy',
        //     'ask_open_tickets.ark1',
        //     'ask_open_tickets.ark2',
        //     'ask_open_tickets.ark3',
        //     'ask_open_tickets.ark4',
        //     'ask_close_tickets.ark1',
        //     'ask_close_tickets.ark2',
        //     )
        //     ->orderby('ticket_orders.created_at', 'desc')
        //     ->leftjoin('users', 'users.id',  'ticket_orders.user_id')
        //     ->leftjoin('open_tickets', 'open_tickets.id',  'ticket_orders.open_ticket')
        //     ->leftjoin('close_tickets', 'close_tickets.id',  'ticket_orders.close_ticket')
        //     ->leftjoin('ask_close_tickets', 'ask_close_tickets.ticket_orders_id',  'ticket_orders.close_ticket')
        //     ->leftjoin('add_tickets', 'add_tickets.id',  'ticket_orders.add_ticket')
        //     ->leftjoin('ask_open_tickets', 'ask_open_tickets.ticket_orders_id',  'ticket_orders.open_ticket')
        //     ->get()
        // );

        return ticket_order::select(
            'ticket_orders.created_at',
            'ticket_orders.code_ticket',
            'users.email',
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
            'open_tickets.name_ticket',
            'open_tickets.age_ticket',
            'open_tickets.sex_ticket',
            'open_tickets.breed_ticket',
            'open_tickets.other_breed_ticket',
            'open_tickets.disease_ticket',
            'open_tickets.other_disease_ticket',
            'open_tickets.objective_ticket',
            'open_tickets.other_objective_ticket',
            'open_tickets.img_1',
            'open_tickets.img_2',
            'open_tickets.img_3',
            'ask_open_tickets.ark1',
            'ask_open_tickets.ark2',
            'ask_open_tickets.ark3',
            'ask_open_tickets.ark4',
            'close_tickets.c_img1',
            'close_tickets.c_img2',
            'close_tickets.c_img3',
            'ask_close_tickets.ark1 as c_ark1',
            'ask_close_tickets.ark2 as c_ark2',
            'ask_close_tickets.detail as c_detail',
            'add_tickets.add_img1',
            'add_tickets.add_img2',
            'add_tickets.add_img3',
            'add_tickets.detail',
            'users.pdpa',
            'users.policy',
            )
            ->orderby('ticket_orders.created_at', 'desc')
            ->leftjoin('users', 'users.id',  'ticket_orders.user_id')
            ->leftjoin('open_tickets', 'open_tickets.id',  'ticket_orders.open_ticket')
            ->leftjoin('close_tickets', 'close_tickets.id',  'ticket_orders.close_ticket')
            ->leftjoin('ask_close_tickets', 'ask_close_tickets.ticket_orders_id',  'ticket_orders.close_ticket')
            ->leftjoin('add_tickets', 'add_tickets.id',  'ticket_orders.add_ticket')
            ->leftjoin('ask_open_tickets', 'ask_open_tickets.ticket_orders_id',  'ticket_orders.open_ticket')
            ->get();
    }

    public function headings(): array
    {
        return [
            'date',
            'no.case',
            'Username/email',
            'Prefix_name',
            'other_Prefix_name',
            'Name',
            'Surname',
            'Tel',
            'VET ID',
            'Job_Type',
            'Province',
            'Name_clinic',
            'Name_Ref',
            'other_Name_Ref',
            'Pet_Name',
            'Pet_Age',
            'Pet_sex',
            'Pet_type',
            'other_Pet_type',
            'Pet_Disease',
            'other_Pet_Disease',
            'Perpose',
            'other_Perpose',
            'Photo_link_before1',
            'Photo_link_before2',
            'Photo_link_before3',
            'Quiz1_01',
            'Quiz1_02',
            'Quiz1_03',
            'Quiz1_04',
            'Photo_link_After1',
            'Photo_link_After2',
            'Photo_link_After3',
            'Quiz2_01',
            'Quiz1_02',
            'Addition_Text',
            'Photo_link_Addon1',
            'Photo_link_Addon2',
            'Photo_link_Addon3',
            'Addition_Text_addon',
            'PDPA',
            'PHOTO Allowed'
        ];
    }
}
