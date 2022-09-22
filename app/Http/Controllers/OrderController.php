<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addOrder');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'from' => 'required',
            'to' => 'required',
            'date' => 'required',
            'weight' => 'required',
            'information' => 'required',
        ]);

        //dd($request);
        Order::create(["from"=>$request['from'], 
        "to"=>$request['to'],
         "date"=>$request['date'],
         "weight"=>$request['weight'],
         "information"=>$request['information'], 
         "user_id"=>$request['user_id']
        ]);
         return redirect('post');
    }

    public function index()
    {
         $data= auth()->user()->orders;
         return view('post',compact('data'));
    }

   public function allOrders()
   {
      $order= Order::all();
      return view('orders', compact('order'));
   }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('offer',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update( Order $order, Request $request)
    {
        $request->validate([
            'from' => 'required',
            'to' => 'required',
            'date' => 'required',
            'weight' => 'required',
            'information' => 'required',
        ]);

        $order->update(["from"=>$request['from'], 
        "to"=>$request['to'],
         "date"=>$request['date'],
         "weight"=>$request['weight'],
         "information"=>$request['information']]);
         return redirect('/post');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $order=Order::find($id);
        $order->delete();
        return redirect('/post');

    }

    public function search()
    {
        $search_text = $_GET['search'];
        $text = $_GET['search2'];
        
        $order = Order::where('from','like', '%'.$search_text.'%')->where('to','like', '%'.$text.'%')->get();
        //dd($order);
        return view('search', compact('order'));
        
    }
}
