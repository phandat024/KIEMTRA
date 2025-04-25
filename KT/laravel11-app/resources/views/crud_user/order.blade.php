@extends('dashboard')

@section('content')

    <div class="container">
        <h3>List of order</h3>
        <div class="row justify-content-center">
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Order List</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user->orders as $order)
                    <tr>
                        <th>{{$order->id}}</th>
                        <th>{{$order->order_list}}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection