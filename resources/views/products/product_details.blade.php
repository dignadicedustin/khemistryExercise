@extends('layouts.app')

@section('content')
    <div class="container">
        @guest()
            <div class="alert alert-warning">
                <strong>Warning!</strong> You must first <a href="{{ route('login') }}">Login</a> to view item price.
            </div>
        @endguest
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="{{$product->image}}" alt="{{$product->title}}" />
            </div>
            <div class="col-md-6" style="padding:40px;">
                <h2>{{$product->title}}</h2>
                <ul class="list-group">
                    @guest
                    @else
                        <li class="list-group-item"><label>Price:</label> ${{$product->price}}</li>
                    @endguest

                    <li class="list-group-item"><label>Description:</label> {{$product->description}}</li>
                </ul>
            </div>
        </div>       
    </div>
@endsection