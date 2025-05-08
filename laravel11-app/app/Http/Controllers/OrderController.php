<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function order(Request $request) {
        $user_id = $request->get('id');
        $order = Order::find($user_id);
        $user = User::find($user_id);

       $data = [
           'orders' => $order,
           'user' => $user
       ];

        return view('crud_user.order', $data);
    }
}
