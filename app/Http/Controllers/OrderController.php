<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponce;
use Illuminate\Http\Responce;
use App\Models\Order;
use Illuminate\View\View;


class OrderController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $orders = Order::all();
        return view ('orders.index')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Order::create($input);
        return redirect('orders')->with('flash_message', 'Order Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $orders = Order::find($id);
        return view ('orders.show')->with('orders', $orders);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $orders = Order::find($id);
        return view ('orders.edit')->with('orders', $orders);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::find($id);
        $input = $request->all();
        $order->update($input);
        return redirect('orders')->with('flash_message', 'Order Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Order::destroy($id);
        return redirect('orders')->with('flash_message', 'Order Deleted!');
    }
}
