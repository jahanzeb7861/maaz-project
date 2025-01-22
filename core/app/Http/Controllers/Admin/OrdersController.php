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
        // $items = Order::latest()->paginate(getPaginate());

        // Fetch orders with related product data using Query Builder
        // $items = DB::table('orders')
        // ->join('product_models', 'orders.product_model_id', '=', 'product_models.id')
        // ->select('orders.*', 'product_models.name as product_name', 'product_models.description as product_description') // Add fields from product_models as needed
        // ->orderBy('orders.created_at', 'desc')
        // ->paginate(getPaginate());

        // dd($items);


        $client = new \GuzzleHttp\Client();

        $responseModelDetails = $client->request('GET', 'https://api.reusely.com/api/v2/admin/orders?buyback_type=mail-in', [
          'headers' => [
                'accept' => 'application/json',
                'x-api-key' => '3BaXHRZ0UyiRVoB7TGCkIQfpw9VyKks4qcq21o6AUTIhI3v9X9h222qqzc4G1NMG',
                'x-secret-key' => 'sm89Bwi8bf0UPaDV4dtKKJjVbHXLkJiCYCoDKuqcZDsfUoMbggZ3W7Q7niGmb7S0',
                'x-tenant-id' => '2146eb8fc7c3b4e45bbbded7eac03dd2df3ba98824f2defde0250173b223bbd7',
            ],
        ]);


        // Parse the response body
        $response = json_decode($responseModelDetails->getBody()->getContents(), true);

        $items = $response['result']['data'];

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
