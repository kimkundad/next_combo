<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tambon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function service(){
      return User::all();
    }

    public function create_account2(){

      $provinces = Tambon::select('province')
            ->distinct()
            ->get();

      $data['provinces'] = $provinces;
      
      return view('create_account2', $data);
    }

    public function account_setting(){

      $provinces = Tambon::select('province')
            ->distinct()
            ->get();

      $data['provinces'] = $provinces;
      
      return view('account_setting', $data);

    }

    
}
