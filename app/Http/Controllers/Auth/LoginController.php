<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Socialize;

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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider($provider) {

        return Socialize::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider) {

        $user = Socialize::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);

        if (!$authUser) {
            return redirect(route('register'))->with([
                'name' => $user->name,
                'email' => $user->email,
                'avatar' => $user->avatar_original
            ]);
        }

        Auth::loginUsingId($authUser->id, true);

        return redirect($this->redirectTo);
    }

    public function findOrCreateUser($user, $provider) {

        $authUser = User::query()->where('email', $user->email)->first();
        if ($authUser) {
            return $authUser;
        }

        return false;
    }
}
