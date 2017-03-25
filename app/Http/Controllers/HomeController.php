<?php

namespace App\Http\Controllers;
use Input;
use Twilio;
use Illuminate\Support\Facades\Request;
use DB;
use App\User;
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
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function sent()
    {
      Twilio::message('+201091950488', 'Search on google yahongie');
        return view('Sms.index');
    }

   public function Profile(){

        return view('website.profile');
    }

    public function info(){
        $id = Request::segment(4);
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
