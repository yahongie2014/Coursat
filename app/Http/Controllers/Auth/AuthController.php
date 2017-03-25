<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Input;
use Event;
use Session;
use Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite as Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/profile';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Socialite $socialite)
    {
        $this->middleware('guest', ['except' => 'logout']);
        $this->socialite = $socialite;

    }

        public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    //facebook
    public function handleProviderCallback()
    {
            try  {
                $user = Socialite::driver('facebook')->user();
            } catch (Exception $e) {
                return Redirect::to('auth/facebook');
            }

        $authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);

        return Redirect::to('/');
    }

    private function findOrCreateUser($facebookUser)
    {
        if ($authUser = User::where('email', $facebookUser->email)->first()) {
            return $authUser;
        }
        return User::create([
            'name' => $facebookUser->name,
            'email' => $facebookUser->email,
            'fb_id' => $facebookUser->id,
            'pic' => $facebookUser->avatar
        ]);
        $token = Session::get('remember_token');
        $fb->setDefaultAccessToken($token);
    }

    //twitter
    public function redirectToProvidertwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function handleProvidetwitter()
    {
        try  {
            $user = Socialite::driver('twitter')->user();
        } catch (Exception $e) {
            return Redirect::to('auth/twitter');
        }

        $authUser = $this->findOrCreateUsertwitter($user);

        Auth::login($authUser, true);

        return Redirect::to('/');
    }

    private function findOrCreateUsertwitter($twitterUser)
    {
        if ($authUser = User::where('name', $twitterUser->name)->first()) {
            return $authUser;
        }
        return User::create([
            'name' => $twitterUser->name,
            'nickname' => $twitterUser->nickname,
            'twitter_id' => $twitterUser->id,
            'pic' => $twitterUser->avatar
        ]);
    }

    //github
    public function redirectToProvidergit()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleProvidegit()
    {

        try  {
            $user = Socialite::driver('github')->user();
        } catch (Exception $e) {
            return Redirect::to('auth/github');
        }
        $authUser = $this->findOrCreateUsergit($user);

        Auth::login($authUser, true);

        return Redirect::to('/');
    }

    private function findOrCreateUsergit($gitUser)
    {
        if ($authUser = User::where( 'email' ,$gitUser->email )->first()) {
            return $authUser;
        }
        return User::create([
            'name' => $gitUser->name,
            'email' => $gitUser->email,
            'github_id' => $gitUser->id,
            'pic' => $gitUser->avatar
        ]);
    }

    //google
    public function redirectToProviderGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProvideGoogle()
    {

        try  {
            $user = Socialite::driver('google')->user();
        } catch (Exception $e) {

            return Redirect::to('auth/google');
        }
        $authUser = $this->findOrCreateUsergoogle($user);

        Auth::login($authUser, true);

        return Redirect::to('/');
    }

    private function findOrCreateUsergoogle($googleUser)
    {
        if ($authUser = User::where('email', $googleUser->email)->first()) {
            return $authUser;
        }
        return User::create([
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'google_id' => $googleUser->id,
            'pic' => $googleUser->avatar
        ]);
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'pic' => '',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
            return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'pic' => $data['pic'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
