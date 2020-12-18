<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Classes\HelperManager as Common;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\MessageBag;
use App\SocialIdentity;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Mail\UserRegistration;
use Illuminate\Support\Facades\Mail;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/account';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function redirectToProvider($provider)
    {   
        dump($provider);
        $abc = Socialite::driver($provider)->redirect();
        dd($abc);
        //return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider) {
       
       try {
           $user = Socialite::driver($provider)->user();
       } catch (Exception $e) {
           return redirect('/login');
       }

       if($user->getemail()== null){
        return redirect()->route('register');
    }

       $authUser = $this->findOrCreateUser($user, $provider);
       Auth::login($authUser, true);
       return redirect()->back();
   }
   public function findOrCreateUser($providerUser, $provider)
   {
       $account = SocialIdentity::whereProviderName($provider)
                  ->whereProviderId($providerUser->getId())
                  ->first();

       if ($account) {
           return $account->user;
       } else {
           $user = User::whereEmail($providerUser->getEmail())->first();

           if (! $user) {
               $user = User::create([
                   'email' => $providerUser->getEmail(),
                   'name'  => $providerUser->getName(),
               ]);

               Mail::to($user->email)->send(new UserRegistration($user));
           }

           $user->identities()->create([
               'provider_id'   => $providerUser->getId(),
               'provider_name' => $provider,
           ]);

           return $user;
       }
   }

    protected function getCredentials(Request $request)
    {
        return [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'menuroles' => 'user'
        ];
    }

    public function login(Request $request)
    {   
        $this->validate($request, ['email' => 'required|email', 'password' => 'required']);

        if (\Auth::attempt($this->getCredentials($request))) {
            $redirectUrl = url()->previous();
            if(strpos($redirectUrl, 'cart') || strpos($redirectUrl, 'checkout')) {
               // 
            } else {
                $redirectUrl = route('account');
            }

            return Common::response('success', 'Logged in successfully!', ['redirect' => $redirectUrl] );
        }

        return Common::response('error', 'These credentials do not match our records.!');
    }
}
