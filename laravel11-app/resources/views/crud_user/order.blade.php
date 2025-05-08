@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
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
                        <th>{{$order->order_name}}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection