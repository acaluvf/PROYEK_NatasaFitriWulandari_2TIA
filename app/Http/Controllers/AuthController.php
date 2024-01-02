<?php

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.custom-login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Memeriksa apakah pengguna adalah admin
            if (Auth::user()->isAdmin()) {
                return redirect()->route('admin.home');
            } else {
                return redirect()->route('user.home');
            }
        }

        return redirect()->route('login')->with('error', 'Login failed, please check your credentials.');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'user', // Atur role sebagai user secara default
        ]);

        // Memeriksa apakah pengguna adalah admin
        if ($user->isAdmin()) {
            Auth::login($user);
            return redirect()->route('admin.home');
        } else {
            Auth::login($user);
            return redirect()->route('user.home');
        }
    }

    public function home()
    {
        $admin = Auth::user();
        Log::info('Admin data:', ['admin' => $admin]);
    }
}
