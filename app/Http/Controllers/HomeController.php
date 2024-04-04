<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tambon;
use App\Models\Role;
use App\Models\open_ticket;
use App\Models\ticket_order;
use App\Models\img_open_ticket;
use App\Models\ask_open_ticket;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic as Image;
use Input;
use Auth;
use Illuminate\Support\Facades\Storage;

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

  public function service()
  {
    return User::all();
  }

  public function servey_before($id){
    $data['id_ticket'] = $id;

    return view('servey_before', $data);
  }

  
  public function post_servey_before(Request $request)
  {
    $objs = new ask_open_ticket();
    $objs->user_id = Auth::user()->id;
    $objs->ticket_orders_id = $request['ticket_orders_id'];
    $objs->ark1 = $request['ark1'];
    $objs->ark2 = $request['ark2'];
    $objs->ark3 = $request['ark3'];
    $objs->ark4 = $request['ark4'];
    $objs->save();

    return view('success_1');

  }

  public function case_list(){

    $objs = ticket_order::where('user_id', '=', Auth::user()->id)->get();

    $data['ticket'] = $objs;

    return view('case_list', $data);
  }

  public function post_open_ticket(Request $request)
  {

   // dd($request->file('img'));

    $this->validate($request, [
      'name_ticket' => 'required'
    ]);

    if (isset($request->disease_ticket)) {
      $disease_ticket = implode(',', $request->disease_ticket);
      $input['disease_ticket'] = $disease_ticket;
    } else {
        $input['disease_ticket'] = null; // Use = for assignment
    }

    if(isset($request->objective_ticket)){
      $objective_ticket= implode(',', $request->objective_ticket);
      $input['objective_ticket'] = $objective_ticket;
    }else{
      $input['objective_ticket'] = null;
    }

    $objs = new open_ticket();
    $objs->name_ticket = $request['name_ticket'];
    $objs->age_ticket = $request['age_ticket'];
    $objs->sex_ticket = $request['sex_ticket'];
    $objs->breed_ticket = $request['breed_ticket'];
    $objs->other_breed_ticket = $request['other_breed_ticket'];
    $objs->disease_ticket = $input['disease_ticket'];
    $objs->other_disease_ticket = $request['other_disease_ticket'];
    $objs->objective_ticket = $input['objective_ticket'];
    $objs->other_objective_ticket = $request['other_objective_ticket'];
    $objs->save();

    $objs->id;

    $invID = ticket_order::where('user_id', Auth::user()->id)->count();
    $invID++;

    $code_ticket = Auth::user()->code_user.'-'.str_pad($invID, 4, '0', STR_PAD_LEFT);

    $obj = new ticket_order();
    $obj->name_ticket = $request['name_ticket'];
    $obj->code_ticket = $code_ticket;
    $obj->user_id = Auth::user()->id;
    $obj->open_ticket = $objs->id;
    $obj->save();

    $gallary = $request->file('img');
  //  dd(($gallary));
    if (count($gallary) > 0) {
      for ($i = 0; $i < sizeof($gallary); $i++) {

            if(isset($gallary[$i])){

            $img = Image::make($gallary[$i]->getRealPath());
            $img->resize(800, 800, function ($constraint) {
            $constraint->aspectRatio();
            });
            $img->stream();
            Storage::disk('do_spaces')->put('next_combo/open_ticket/'.$gallary[$i]->hashName(), $img, 'public');


        $data1[] = [
            'img' => $gallary[$i]->hashName(),
            'code_ticket' => $code_ticket,
            'open_ticket_id' => $objs->id
        ];

            }
    
      }
      img_open_ticket::insert($data1);
    }

    return redirect('servey_before/'.$obj->id)->with('success', "Account successfully registered.");

  }

  public function create_user_profile(Request $request)
  {


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

  public function create_new_user(Request $request)
  {

    $this->validate($request, [
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    ]);

    $invID = User::count();
    $invID++;
    $characters = 'Vet' . str_pad($invID, 4, '0', STR_PAD_LEFT);

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

  public function create_account(Request $request)
  {

    //  dd($request->all());
    $data['pdpa'] = $request->pdpa;
    $data['policy'] = $request->policy;

    if ($request->policy == null || $request->pdpa == null) {
      return redirect(url('/'));
    }

    return view('create_account', $data);
  }

  public function create_account2()
  {

    $provinces = Tambon::select('province')
      ->distinct()
      ->get();

    $data['provinces'] = $provinces;

    return view('create_account2', $data);
  }

  public function account_setting()
  {

    $provinces = Tambon::select('province')
      ->distinct()
      ->get();

    $data['provinces'] = $provinces;

    return view('account_setting', $data);
  }
}
