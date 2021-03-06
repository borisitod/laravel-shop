@extends('layouts.app')
@section('title', '收货地址')

@section('content')
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card panel-default">
                <div class="card-header">收货地址</div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Receiver</th>
                            <th>Address</th>
                            <th>Postcode</th>
                            <th>Contact</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($addresses as $address)
                            <tr>
                                <td>{{ $address->contact_name }}</td>
                                <td>{{ $address->address }}</td>
                                <td>{{ $address->postcode }}</td>
                                <td>{{ $address->contact_phone }}</td>
                                <td>
                                    <button class="btn btn-primary">编辑</button>
                                    <button class="btn btn-danger">删除</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
