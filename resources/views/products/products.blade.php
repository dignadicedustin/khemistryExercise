@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-sm-6 col-md-3">
                    <a href="products/{{$product->id}}">
                        <div style="border:1px solid #ddd;background-color:#f5f8fa;padding:5px">
                            <div class="thumbnail">
                                <img src="{{$product->image}}" alt="Picture">
                            </div>
                            <div class="caption">
                                <h3>
                                    {{$product->title}}
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>       
    </div>
@endsection