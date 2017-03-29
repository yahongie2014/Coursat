<?php

namespace App\Http\Controllers;
use Input;
use Twilio;
use Illuminate\Support\Facades\Request;
use DB;
use App\User;
use Auth;
use App\Mssg;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $id = Request::segment(3);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function sent()
    {
        $Zip = '+2';
        $phone = Input::get('phone');
        $mssg = Input::get('message');
        $title = Input::get('title');

        Twilio::message($Zip.''.$phone,'Hi Seri are u Ready To go New Service');

        $Sen = new Mssg();
        $Sen->id = input::get('id');
        $Sen->Title = Input::get('Title');
        $Sen->user_name = Auth::user()->name;
        $Sen->phone = Input::get('phone');
        $Sen->mssg = Input::get('mssg');
        $Sen->save();

        return view('website.confirm')->with('phone',$phone)->with('mssg',$mssg)->with('title',$title);
    }
   public function message()
    {
        $mg = Mssg::select('*')->get();

        return view('website.message')->with('mg',$mg);
    }


   public function Profile(){
       $friend = User::select('*')->get();
        return view('website.profile')->with('friend',$friend);
    }

    public function info($id){
        $id = intval($id);
        $users = User::find($id);
        return view('website.profile')
         ->with('users', $users);
    }

    public function info_edit(){
        $id = Request::segment(4);
        $users = User::find($id);
		   $success = Input::get('success');
        if ($users) {

            return view('website.profile')
                ->with('success', $success)
                ->with('users', $users);
        } else {
            return View('website.profile',['user' => User::findOrFail($id)])
                ->with('title', 'Error Page Not Found');
        }

    }

}
