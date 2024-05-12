<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ticket_order;
use App\Models\open_ticket;
use App\Exports\ExportTicket;
use App\Exports\ExportUser;
use App\Models\img_open_ticket;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    //

    public function index(){

        $count_user = User::where('shop_id', '!=', 0)->count();
        $ticket_order_close = ticket_order::where('close_ticket', '!=', 0)->count();
        $ticket_order = ticket_order::count();

        $objs = ticket_order::with('users','open_tickets', 'open_tickets.img_open_tickets', 'open_tickets.ask_open_tickets' ,'close_tickets', 'close_tickets.img_close_tickets', 'close_tickets.ask_close_tickets','add_tickets', 'add_tickets.img_add_tickets')->orderby('id', 'desc')->paginate(20);
      //  dd($objs[1]->add_tickets->img_add_tickets);
        $objs->setPath('');



        return view('admin.case.index', compact('count_user','count_user', 'ticket_order', 'ticket_order_close', 'objs'));
    }

    public function getData($id){

        $objs = ticket_order::with('users','open_tickets', 'open_tickets.img_open_tickets', 'open_tickets.ask_open_tickets' ,'close_tickets', 'close_tickets.img_close_tickets', 'close_tickets.ask_close_tickets','add_tickets', 'add_tickets.img_add_tickets')->where('id', $id)->orderby('id', 'desc')->first();

        return view('admin.case.modal', compact('objs'));
    }

    public function userx(){

        return Excel::download(new ExportUser , 'users.xlsx');
    }


    public function exportCSVFile()
    {
        return Excel::download(new ExportTicket , 'ticket.xlsx');
    }


    public function sace_search(Request $request){

        $this->validate($request, [
            'search' => 'required'
          ]);


        $search = $request->get('search');

        $count_user = User::where('shop_id', '!=', 0)->count();
        $ticket_order_close = ticket_order::where('close_ticket', '!=', 0)->count();
        $ticket_order = ticket_order::count();

        $objs = ticket_order::with('users','open_tickets', 'open_tickets.img_open_tickets', 'open_tickets.ask_open_tickets' ,'close_tickets', 'close_tickets.img_close_tickets', 'close_tickets.ask_close_tickets','add_tickets', 'add_tickets.img_add_tickets')
        ->where('code_ticket', 'like', "%$search%")
        ->orwhere('name_ticket', 'like', "%$search%")
        ->whereRelation('users', 'fname', 'like', "%$search%")
        ->whereRelation('users', 'lname', 'like', "%$search%")
        ->paginate(15);
        //dd($objs[1]->add_tickets->img_add_tickets);


        if($search == null){


            $objs = ticket_order::with('users','open_tickets', 'open_tickets.img_open_tickets', 'open_tickets.ask_open_tickets' ,'close_tickets', 'close_tickets.img_close_tickets', 'close_tickets.ask_close_tickets','add_tickets', 'add_tickets.img_add_tickets')
            ->paginate(15);
        }else{

            $objs = ticket_order::with('users','open_tickets', 'open_tickets.img_open_tickets', 'open_tickets.ask_open_tickets' ,'close_tickets', 'close_tickets.img_close_tickets', 'close_tickets.ask_close_tickets','add_tickets', 'add_tickets.img_add_tickets')
            ->where('code_ticket', 'like', "%$search%")
            ->orwhere('name_ticket', 'like', "%$search%")
            ->orwhereRelation('users', 'fname', 'like', "%$search%")
            ->paginate(15);

        }

        $objs->setPath('');

        return view('admin.case.search', compact('count_user','count_user', 'ticket_order', 'ticket_order_close', 'objs', 'search'));

    }


}
