<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    # Manage login and roles
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $admin = [
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            'role_id' => 1,
        ];
        $manajer = [
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            'role_id' => 2,
        ];
        $pelanggan = [
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            'role_id' => 3,
        ];

        if (Auth::attempt($admin, true)) {
            $this->isLogin(Auth::id());
            return redirect()->route('list_transaksi');
        } else if (Auth::attempt($manajer, true)) {
            $this->isLogin(Auth::id());
            return redirect()->route('list_transaksi');
        } else if (Auth::attempt($pelanggan, true)) {
            $this->isLogin(Auth::id());
            return redirect()->route('list_transaksi');
        }

        return redirect()->route('login')->with('error', 'Email atau password salah!');
    }

    # Logout function
    public function logout(Request $request)
    {
        $user = User::findOrFail(Auth::id());

        Auth::logout();

        return redirect('login');
    }
}
