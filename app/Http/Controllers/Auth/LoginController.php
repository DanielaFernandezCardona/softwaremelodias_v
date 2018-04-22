<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Input;
use Auth;
use View;
use Crypt;

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
    protected $redirectTo = '/crear_cliente';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
    *devuelve datos showlogin blade
    *@return  string direccion login o al panel
    *
    */
     public function showLogin()
     {

        
            if (Auth::check())
                {
                    // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
                    return Redirect::to('/crear_cliente');
                }
                return View::make('/login');
     
     }

    /**
    *devuelve datos a la vista welcome blade
    *@return  string direccion  al panel  o manda mensaje de error
    *
    */
    public function postLogin(){

        $email=Input::get('email');
        $password=Input::get('password');
        $remember=Input::get('lg_remember');





        if(Auth::attempt(['email'=>$email,'password'=>$password],$remember))
            {
                return redirect()->intended('/crear_cliente');
            }else{
                return Redirect::back()->with('error','datos Invalidos')->withInput();

                // return redirect()->intended('/crear_cliente');
                //var_dump("ingreso2");

           }

       }

    /**
    *cierra logout
    *@return  string direccion login
    *
    */
    public function logout(){
        Auth::logout();
        return Redirect::to('/login');
    } 

}
