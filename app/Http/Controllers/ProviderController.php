<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Provider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Gate;
use phpDocumentor\Reflection\Types\Null_;
use Symfony\Contracts\Service\Attribute\Required;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store_provider(Request $request)
    {
        
       
        //dd ($request->file('pic')->getPathname());
        if ($request['phone']) {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|min:8',
                'adress' => 'required',
                'role' => 'required',
                'phone' => 'required|min:11|max:11',
                'pic' => 'required',
                'pic2' => 'required',
            ]);
           // dd($request);
            $user = User::Create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'adress' => $request['adress'],
                'role' => $request['role']
            ]);
            // $request->pic->storeAs('imgs', $request->file('pic')->getClientOriginalName());
            // $request->pic2->storeAs('imgs', $request->file('pic2')->getClientOriginalName());

            $path=$request->file('pic')->getClientOriginalName();
            move_uploaded_file($request->file('pic')->getPathname(),"usersImgs/$path");
            $pathh=$request->file('pic2')->getClientOriginalName();
            move_uploaded_file($request->file('pic2')->getPathname(),"usersImgs/$pathh");
            Provider::create([
                'user_id' => $user['id'],
                'phone' => $request['phone'],
                'Profile_pic' => $request->file('pic')->getClientOriginalName(),
                'ID_pic' => $request->file('pic2')->getClientOriginalName()
                
            ]);

        }
        
         else {

            
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|min:8',
                'adress' => 'required',
                'role' => 'required',
            ]);

            $user = User::Create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'adress' => $request['adress'],
                'role' => $request['role']
            ]);

        }
        
        //dd($request);
        auth()->login($user);
        return redirect("Home");
    }
    function login()
    {
        return view("Home");
    }
    function logout()
    {
        auth()->logout();
        return view("Home");
    }

    use AuthenticatesUsers;
    public function myLogin(Request $request)
    {
        
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];


        if (Auth::attempt($credentials)) {

            $usertype=Auth::user()->usertype;
            if($usertype=='1'){

                return redirect("dashboard");
            }
            
            else{
                return view('Home');
                }
        }
            //return redirect()->route('login');

        // return back();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $provider)
    {
     //   dd($provider);
        return view('contactOffer',compact('provider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
      //  dd($provider);
        return view('editProfile', compact('provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update( Provider $provider, Request $request)
    {
        //dd($request);
        $provider->user->update(['name' => $request['name'],
        'password' => Hash::make($request['password']),
        'adress' => $request['adress'],
        'phone' => $request['phone'],
        // 'Profile_pic' => $request->file('pic')->getClientOriginalName(),        
        ]);

         return redirect('/Home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $provider)
    {
        //
    }

    public function boot()
    {
        $this->registerPolicies();

        Gate::define("is_provider", function () {
            $n = Auth::user()->provider != null;
            //dd($n);
            return $n;
        });
    }
}
