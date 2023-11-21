<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class Printer extends Controller
{

public function index($orderId)
{
    $order = Order::findOrFail($orderId);

    // Fetch order items with product details
    $orderItems = $order->items()->with('product')->get();

    return view('orders.print', compact('orderItems'));
}
}
