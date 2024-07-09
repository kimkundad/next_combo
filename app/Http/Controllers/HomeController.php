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
use App\Models\close_ticket;
use App\Models\ask_close_ticket;
use App\Models\img_close_ticket;
use App\Models\add_ticket;
use App\Models\img_add_ticket;
use Intervention\Image\ImageManagerStatic as Image;
use Input;
use Auth;
use Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

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

  public function welcome(){

    if (Auth::check()) {
      return Redirect::to('case_list');
    } else {
          return view('welcome');
    }
  }

  public function add_ticket($id){
    $data['id_ticket'] = $id;

    return view('add_ticket', $data);
  }

  public function servey_before($id)
  {
    $data['id_ticket'] = $id;

    return view('servey_before', $data);
  }

  public function servey_after($id){
    $data['id_ticket'] = $id;

    return view('servey_after', $data);
  }

  public function close_ticket($id)
  {
    $data['id_ticket'] = $id;

    return view('close_ticket', $data);
  }

  public function detail_ticket($id){

    $objs = ticket_order::where('id', $id)->first();
    $open = open_ticket::where('id', $objs->open_ticket)->first();
    $add = add_ticket::where('id', $objs->add_ticket)->first();
   $imgf = img_open_ticket::where('open_ticket_id', $objs->open_ticket)->get();
   $imgb = img_close_ticket::where('close_ticket_id', $objs->close_ticket)->get();
   $ask1 = ask_open_ticket::where('ticket_orders_id', $objs->open_ticket)->first();
   $ask2 = ask_close_ticket::where('ticket_orders_id', $objs->close_ticket)->first();
   $img_add = img_add_ticket::where('add_ticket_id', $objs->add_ticket)->get();

   $data['img_add'] = $img_add;
   $data['add'] = $add;
    $data['ask1'] = $ask1;
    $data['ask2'] = $ask2;
   $data['imgf'] = $imgf;
   $data['imgb'] = $imgb;
   $data['open'] = $open;
   $data['head'] = $objs;
   $data['id_ticket'] = $id;
    return view('detail_ticket', $data);

  }

  public function post_change_newpass(Request $request){

    $this->validate($request, [
      'new_password' => 'required',
      'con_password' => 'required'
  ]);

        $user =  User::find(Auth::user()->id);
        $user->password =  Hash::make($request->new_password);
        $user->save();

        return redirect('/create_complete2')->with('success', "Account successfully registered.");


  }

  public function post_servey_before(Request $request)
  {

    $this->validate($request, [
      'ark1' => 'required',
      'ark2' => 'required',
      'ark3' => 'required',
      'ark4' => 'required'
  ]);


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

  public function post_servey_after(Request $request)
  {

    $this->validate($request, [
      'ark1' => 'required',
      'ark2' => 'required',
      'detail' => 'required'
  ]);
    $objs = new ask_close_ticket();
    $objs->user_id = Auth::user()->id;
    $objs->ticket_orders_id = $request['ticket_orders_id'];
    $objs->ark1 = $request['ark1'];
    $objs->ark2 = $request['ark2'];
    $objs->detail = $request['detail'];
    $objs->save();

    return view('success_2');
  }

  public function case_list_seaarch(Request $request){


    $objs = ticket_order::where('user_id', '=', Auth::user()->id);

    if($request->filled('search_name')){
      $objs = $objs->where('code_ticket', 'like', "%" . $request->search_name . "%")->orwhere('name_ticket', 'like', "%" . $request->search_name . "%");
    }

    $objs = $objs->get();
  //  dd($objs);
    $data['ticket'] = $objs;
    $data['search_name'] = $request->search_name;

    return view('case_list_seaarch', $data);

  }

  public function case_list()
  {

    $objs = ticket_order::where('user_id', '=', Auth::user()->id)->orderby('id', 'desc')->get();

    $data['ticket'] = $objs;

    return view('case_list', $data);
  }

  public function api_post_case(){

    $user = User::findOrFail(Auth::user()->id);

              if($user->point == 1){
                  $user->point = 0;
              } else {
                  $user->point = 1;
              }


      return response()->json([
      'data' => [
        'success' => $user->save(),
        'up' => $user->point
      ]
    ]);

  }

  public function post_add_ticket(Request $request){

    $this->validate($request, [
      'img' => 'required',
    ]);

    $id = $request->ticket_orders_id;
  //  dd($id);
   // add_ticket

    $objs = new add_ticket();
    $objs->user_id = Auth::user()->id;
    $objs->detail = $request->detail;
    $objs->save();

    $obj = ticket_order::find($id);
    $obj->add_ticket = $objs->id;
    $obj->save();

    $gallary = $request->file('img');
    //  dd(($gallary));
    $data1 = [];
    $s = 1;
    if (count($gallary) > 0) {
      foreach ($request->file('img') as $image){

        if (isset($image)) {

          $type_img = $image->getClientOriginalExtension();

          if($type_img == 'jpeg' || $type_img == 'png' || $type_img == 'jpg' || $type_img == 'gif' || $type_img == 'JPEG' || $type_img == 'PNG' || $type_img == 'JPG' || $type_img == 'GIF' || $type_img == 'heic' || $type_img == 'heif' || $type_img == 'hevc' || $type_img == 'HEIF' || $type_img == 'HEVC' || $type_img == 'HEIC'){

            if($type_img == 'jpeg' || $type_img == 'png' || $type_img == 'jpg' || $type_img == 'gif' || $type_img == 'JPEG' || $type_img == 'PNG' || $type_img == 'JPG' || $type_img == 'GIF'){

                $img = Image::make($image->getRealPath());
            $img->orientate();
            $img->resize(800, 800, function ($constraint) {
            $constraint->aspectRatio();
            });
            $img->stream();
            Storage::disk('do_spaces')->put('next_combo/add_ticket/' . $image->hashName(), $img, 'public');

            }else{

            $my_file = file_get_contents($image);
            Storage::disk('do_spaces')->put('next_combo/add_ticket/' . $image->hashName(), $my_file, 'public');

            }

          }else{
            return Redirect::back()->with('img', 'รูปภาพไม่ถูกต้อง');
          }





          if($s == 1){
            $objx = add_ticket::find($objs->id);
            $objx->add_img1 = url('/images/next_combo/add_ticket/').'/'.$image->hashName();
            $objx->save();
          }
          if($s == 2){
            $objx = add_ticket::find($objs->id);
            $objx->add_img2 = url('/images/next_combo/add_ticket/').'/'.$image->hashName();
            $objx->save();
          }
          if($s == 3){
            $objx = add_ticket::find($objs->id);
            $objx->add_img3 = url('/images/next_combo/add_ticket/').'/'.$image->hashName();
            $objx->save();
          }

          $data1[] = [
            'img' => $image->hashName(),
            'add_ticket_id' => $objs->id
          ];
          $s++;
        }
      }
      img_add_ticket::insert($data1);
    }



    return redirect('servey_success/')->with('success', "Account successfully registered.");

  }

  public function post_close_ticket(Request $request)
  {
 //   dd($request->all());

    $this->validate($request, [
        'img' => 'required',
    ]);

    $id = $request->ticket_orders_id;
    $objs = new close_ticket();
    $objs->user_id = Auth::user()->id;
    $objs->ticket_orders_id = $id;
    $objs->save();

    $obj = ticket_order::find($id);
    $obj->close_ticket = $objs->id;
    $obj->save();

    $gallary = $request->file('img');
    //  dd(($gallary));

    $data1 = [];
    $s = 1;
    if (count($gallary) > 0) {
      foreach ($request->file('img') as $image){

        if (isset($image)) {

            $type_img = $image->getClientOriginalExtension();

            if($type_img == 'jpeg' || $type_img == 'png' || $type_img == 'jpg' || $type_img == 'gif' || $type_img == 'JPEG' || $type_img == 'PNG' || $type_img == 'JPG' || $type_img == 'GIF' || $type_img == 'heic' || $type_img == 'heif' || $type_img == 'hevc' || $type_img == 'HEIF' || $type_img == 'HEVC' || $type_img == 'HEIC'){

                if($type_img == 'jpeg' || $type_img == 'png' || $type_img == 'jpg' || $type_img == 'gif' || $type_img == 'JPEG' || $type_img == 'PNG' || $type_img == 'JPG' || $type_img == 'GIF'){

                    $img = Image::make($image->getRealPath());
                $img->orientate();
                $img->resize(800, 800, function ($constraint) {
                $constraint->aspectRatio();
                });
                $img->stream();
                Storage::disk('do_spaces')->put('next_combo/close_ticket/' . $image->hashName(), $img, 'public');

                }else{

                $my_file = file_get_contents($image);
                Storage::disk('do_spaces')->put('next_combo/close_ticket/' . $image->hashName(), $my_file, 'public');

                }

              }else{
                return Redirect::back()->with('img', 'รูปภาพไม่ถูกต้อง');
              }


          if($s == 1){
            $objx = close_ticket::find($objs->id);
            $objx->c_img1 = url('/images/next_combo/close_ticket/').'/'.$image->hashName();
            $objx->save();
          }
          if($s == 2){
            $objx = close_ticket::find($objs->id);
            $objx->c_img2 = url('/images/next_combo/close_ticket/').'/'.$image->hashName();
            $objx->save();
          }
          if($s == 3){
            $objx = close_ticket::find($objs->id);
            $objx->c_img3 = url('/images/next_combo/close_ticket/').'/'.$image->hashName();
            $objx->save();
          }

          $data1[] = [
            'img' => $image->hashName(),
            'close_ticket_id' => $objs->id
          ];
          $s++;
        }
      }
      img_close_ticket::insert($data1);
    }

    return redirect('servey_after/' . $objs->id)->with('success', "Account successfully registered.");

  }

  public function post_open_ticket(Request $request)
  {

    $this->validate($request, [
      'name_ticket' => 'required',
      'img' => 'required',
      'age_ticket' => 'required',
      'sex_ticket' => 'required',
      'breed_ticket' => 'required',
      'objective_ticket' => 'required',
      'disease_ticket' => 'required',
    ]);


    if (isset($request->disease_ticket)) {
      $disease_ticket = implode(',', $request->disease_ticket);
      $input['disease_ticket'] = $disease_ticket;
    } else {
      $input['disease_ticket'] = null; // Use = for assignment
    }

    if (isset($request->objective_ticket)) {
      $objective_ticket = implode(',', $request->objective_ticket);
      $input['objective_ticket'] = $objective_ticket;
    } else {
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

    $code_ticket = Auth::user()->code_user . '-' . str_pad($invID, 4, '0', STR_PAD_LEFT);

    $obj = new ticket_order();
    $obj->name_ticket = $request['name_ticket'];
    $obj->code_ticket = $code_ticket;
    $obj->user_id = Auth::user()->id;
    $obj->open_ticket = $objs->id;
    $obj->save();

    $gallary = $request->file('img');
    //  dd(($gallary));
    $data1 = [];
    $s = 1;
    if (count($gallary) > 0) {
      foreach ($request->file('img') as $image){

        if (isset($image)) {

            $type_img = $image->getClientOriginalExtension();
          if($type_img == 'jpeg' || $type_img == 'png' || $type_img == 'jpg' || $type_img == 'gif' || $type_img == 'JPEG' || $type_img == 'PNG' || $type_img == 'JPG' || $type_img == 'GIF' || $type_img == 'heic' || $type_img == 'heif' || $type_img == 'hevc' || $type_img == 'HEIF' || $type_img == 'HEVC' || $type_img == 'HEIC'){

            if($type_img == 'jpeg' || $type_img == 'png' || $type_img == 'jpg' || $type_img == 'gif' || $type_img == 'JPEG' || $type_img == 'PNG' || $type_img == 'JPG' || $type_img == 'GIF'){

                $img = Image::make($image->getRealPath());
            $img->orientate();
            $img->resize(800, 800, function ($constraint) {
            $constraint->aspectRatio();
            });
            $img->stream();
            Storage::disk('do_spaces')->put('next_combo/open_ticket/' . $image->hashName(), $img, 'public');

            }else{

            $my_file = file_get_contents($image);
            Storage::disk('do_spaces')->put('next_combo/open_ticket/' . $image->hashName(), $my_file, 'public');

            }



          }else{
            return Redirect::back()->with('img', 'รูปภาพไม่ถูกต้อง');
          }

                if($s == 1){
                  $objx = open_ticket::find($objs->id);
                  $objx->img_1 = url('/images/next_combo/open_ticket/').'/'.$image->hashName();
                  $objx->save();
                }
                if($s == 2){
                  $objx = open_ticket::find($objs->id);
                  $objx->img_2 = url('/images/next_combo/open_ticket/').'/'.$image->hashName();
                  $objx->save();
                }
                if($s == 3){
                  $objx = open_ticket::find($objs->id);
                  $objx->img_3 = url('/images/next_combo/open_ticket/').'/'.$image->hashName();
                  $objx->save();
                }


          $data1[] = [
            'img' => $image->hashName(),
            'code_ticket' => $code_ticket,
            'open_ticket_id' => $objs->id
          ];
          $s++;
        }
      }
      img_open_ticket::insert($data1);
    }

    return redirect('servey_before/' . $objs->id)->with('success', "Account successfully registered.");
  }

  public function create_user_profile2(Request $request)
  {
   // dd($request->all());

   $this->validate($request, [
    'ser' => 'required',
    'fname' => 'required',
    'lname' => 'required',
    'phone' => 'required',
    'clinic_type' => 'required',
    'province' => 'required',
    'address' => 'required',
    'representative' => 'required'
  ]);

    if($request['representative'] == 'อื่นๆ (โปรดระบุ)'){

      $objs = User::find(Auth::user()->id);
      $objs->representative = $request['representative'];
      $objs->representative2 = $request['representative2'];
      $objs->save();

    }else{

      $objs = User::find(Auth::user()->id);
      $objs->representative = $request['representative'];
      $objs->representative2 = null;
      $objs->save();

    }

    if($request['ser'] == 'อื่นๆ (โปรดระบุ)'){

    $objs = User::find(Auth::user()->id);
    $objs->shop_id = 2;
    $objs->ser = $request['ser'];
    $objs->ser_othher = $request['ser_othher'];
    $objs->fname = $request['fname'];
    $objs->lname = $request['lname'];
    $objs->phone = $request['phone'];
    $objs->vet_id = $request['vet_id'];
    $objs->clinic_type = $request['clinic_type'];
    $objs->province = $request['province'];
    $objs->address = $request['address'];
    $objs->save();

    }else{

      $objs = User::find(Auth::user()->id);
    $objs->shop_id = 2;
    $objs->ser = $request['ser'];
    $objs->ser_othher = null;
    $objs->fname = $request['fname'];
    $objs->lname = $request['lname'];
    $objs->phone = $request['phone'];
    $objs->vet_id = $request['vet_id'];
    $objs->clinic_type = $request['clinic_type'];
    $objs->province = $request['province'];
    $objs->address = $request['address'];
    $objs->save();

    }


    return redirect('/create_complete2')->with('success', "Account successfully registered.");
  }

  public function create_user_profile(Request $request)
  {

    $this->validate($request, [
      'ser' => 'required',
      'fname' => 'required',
      'lname' => 'required',
      'phone' => 'required',
      'clinic_type' => 'required',
      'province' => 'required',
      'address' => 'required',
      'representative' => 'required'
    ]);


    if($request['representative'] == 'อื่นๆ (โปรดระบุ)'){

      $objs = User::find(Auth::user()->id);
      $objs->representative = $request['representative'];
      $objs->representative2 = $request['representative2'];
      $objs->save();

    }else{

      $objs = User::find(Auth::user()->id);
      $objs->representative = $request['representative'];
      $objs->representative2 = null;
      $objs->save();

    }

    if($request['ser'] == 'อื่นๆ (โปรดระบุ)'){

    $objs = User::find(Auth::user()->id);
    $objs->shop_id = 2;
    $objs->ser = $request['ser'];
    $objs->ser_othher = $request['ser_othher'];
    $objs->fname = $request['fname'];
    $objs->lname = $request['lname'];
    $objs->phone = $request['phone'];
    $objs->vet_id = $request['vet_id'];
    $objs->clinic_type = $request['clinic_type'];
    $objs->province = $request['province'];
    $objs->address = $request['address'];
    $objs->save();

    }else{

    $objs = User::find(Auth::user()->id);
    $objs->shop_id = 2;
    $objs->ser = $request['ser'];
    $objs->ser_othher = null;
    $objs->fname = $request['fname'];
    $objs->lname = $request['lname'];
    $objs->phone = $request['phone'];
    $objs->vet_id = $request['vet_id'];
    $objs->clinic_type = $request['clinic_type'];
    $objs->province = $request['province'];
    $objs->address = $request['address'];
    $objs->save();

    }

    return redirect('/create_complete')->with('success', "Account successfully registered.");
  }

  public function create_new_user(Request $request)
  {

    $this->validate($request, [
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    ]);

    $invID = User::count();
    $invID++;
    $characters = 'VET' . str_pad($invID, 4, '0', STR_PAD_LEFT);

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
