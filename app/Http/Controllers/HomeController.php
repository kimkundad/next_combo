<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tambon;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Auth;

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

    public function create_user_profile(Request $request){


      $objs = User::find(Auth::user()->id);
      $objs->shop_id = 2;
      $objs->ser = $request['ser'];
      $objs->fname = $request['fname'];
      $objs->lname = $request['lname'];
      $objs->phone = $request['phone'];
      $objs->code_user = $request['code_user'];
      $objs->clinic_type = $request['clinic_type'];
      $objs->province = $request['province'];
      $objs->address = $request['address'];
      $objs->representative = $request['representative'];
      $objs->representative2 = $request['representative2'];
      $objs->save();

      return redirect('/create_complete')->with('success', "Account successfully registered.");

    }

    public function create_new_user(Request $request){

      $this->validate($request, [
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      ]);

        $invID = User::count();
        $invID++;
        $characters = 'Vet'.str_pad($invID, 4, '0', STR_PAD_LEFT);

      $user = User::create([
        'name' => $request->email,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'is_admin' => false,
        'provider' => 'email',
        'code_user' => $characters,
        'shop_id' => 1,
        'status' => 0,
        'pdpa' => $request->pdpa,
        'policy' => $request->policy,
      ]);

      $user
      ->roles()
      ->attach(Role::where('name', 'user')->first());

      auth()->login($user);

      return redirect('/create_account2')->with('success', "Account successfully registered.");

    }

    public function create_account(Request $request){
      
    //  dd($request->all());
      $data['pdpa'] = $request->pdpa;
      $data['policy'] = $request->policy;

      if($request->policy == null || $request->pdpa == null){
        return redirect(url('/'));
      }

      return view('create_account', $data);
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
