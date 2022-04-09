<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\UserModel;
use Hash;

class AuthController extends Controller

{

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function index()

    {

        return view('auth.login');

    }  

      

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function registration()

    {

        return view('auth.registration');

    }

      

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function postLogin(Request $request)

    {

        // dd($request);
        $request->validate([

            'email' => 'required',
            'password' => 'required',

        ]);

        $user = UserModel::where([
            ['email', $request->email],
            ['password', $request->password],
        ])->first();

        if (!empty($user)) {
            return view('dashboard')
                        ->with('success','You have Successfully loggedin');

        }

        else{

        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
        }
    }

      

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function postRegistration(Request $request)

    {  
        $data=[
            'username' => $request->input('name'),
            'email'    => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ];
           
        $check = UserModel::create($data);
        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');

    }

    

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function dashboard()

    {
        if(Auth::check()){
            
            return view('dashboard');

        } else{
        return redirect("login")->with('Opps! You do not have access');
        }

    }

    

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function create(array $data)

    {

      return UserModel::create([

        'username' => $data['name'],

        'email' => $data['email'],

        'password' => Hash::make($data['password'])

      ]);

    }

    

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function logout() {

        Session::flush();

        Auth::logout();

  

        return redirect()->route('login');

    }

}