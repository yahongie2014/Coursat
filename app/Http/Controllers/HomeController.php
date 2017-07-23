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

        try {
            $sms = Twilio::message($Zip.''.$phone ,'Hey yasser how are you ');
        }
        catch (Exception $e) {
       }

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

        /*$real = Mssg::select('')
        ->leftjoin('users','users.name','=','message.user_name')
        ->select('message.user_name as mms_name','users.name as use_name')
        ->where('message.user_name',$single_user->name)
        ->paginate(10);*/
        
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
