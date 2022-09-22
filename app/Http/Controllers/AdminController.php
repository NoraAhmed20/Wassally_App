<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Provider;
use App\Models\Order;
use App\Models\Offer;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    
    public function create(){

       return view('admin.dashboard');
    }

    //registered users crud(admin)
    public function registered(){

        //  $user = User :: where('role', 'user');
        $user = User :: all();
        return view('admin.GetUsers', ['data'=>$user]);

    }

    public function destroy_User(User $user){
         $user -> delete();
         return redirect('/GetUsers');
    } 
    



   // provider crud(admin)
    public function registered_provider()
    {
      $provider = Provider :: all();
      // $provider = Provider:: where('role' , 'provider')->paginate(5);
      
      return view('admin.GetProvider', ['data'=>$provider]);

    }

    public function destroy_provider(Provider $provider){
        
      // $provider = Provider :: find($id);
      $provider -> delete();
      return redirect('/GetProvider');
   }

//order dashboard crud(admin)
public function getorder()
{

    $data = Order ::  all();
    return view('admin.DelOrder', ['data'=> $data ]);
   
}

public function Destroy_Order (Order $order)
{
  //$order = Order ::  find($id);
 $order -> delete();
 return redirect ('/DelOrder');

}



//offer dashboard crud(admin)
public function getoffer()
{

  $dataoffer = Offer ::  all();
  return view('admin.DelOffer', ['data'=> $dataoffer]);
 
}


public function Delete_Offer (Offer $offer)
{
 // $offer = Offer ::  find($id);
 $offer -> delete();
 return redirect ('/DelOffer');

}

  }



