<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function orders()
    {
        $page_title = 'Orders';
        $empty_message = 'No Data found.';
        $items = Order::latest()->paginate(getPaginate());

        // Fetch orders with related product data using Query Builder
        // $items = DB::table('orders')
        // ->join('product_models', 'orders.product_model_id', '=', 'product_models.id')
        // ->select('orders.*', 'product_models.name as product_name', 'product_models.description as product_description') // Add fields from product_models as needed
        // ->orderBy('orders.created_at', 'desc')
        // ->paginate(getPaginate());

        // dd($items);

        return view('admin.order.orders', compact('items', 'page_title','empty_message'));
    }

    public function changeStatus(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'status' => 'required|in:Pending,Completed',
        ]);

        $order = Order::findOrFail($request->order_id);
        $order->status = $request->status;
        $order->save();

        return back()->with('success', 'Order status updated successfully.');
    }

    public function pendingOrder()
    {
        $page_title = 'Pending Orders';
        $empty_message = 'No Data found.';
        $items = Order::where('status', 'Pending')->paginate(getPaginate());
        return view('admin.order.orders', compact('items', 'page_title','empty_message'));
    }

    public function completedOrders()
    {
        $empty_message = 'No Data found.';
        $page_title = 'Completed Orders';
        $items = Order::where('status', 'Completed')->paginate(getPaginate());
        return view('admin.order.orders', compact('items', 'page_title','empty_message'));
    }

}
