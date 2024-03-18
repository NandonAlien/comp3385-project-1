@extends('layouts.app')

@section('content')
<div class = "card w-30 flex-row">
        <img src= "{{asset('storage/images/'.$product->photoName)}}" alt = '{{$product->title}} width="600' height="400">

<div class="card-body">
        <h2>{{$product->title}}</h2>
        <div class="row">
        <p class="w-10 col-*-* bg-primary text-white rounded">${{$product->price}}</p>
        <p class="w-10 col-*-* bg-secondary text-white rounded">{{$product->type}}</p>
        </div>
        <p>{{$product->description}}<p>
        <div class="row">
        <p class="col-*-*">{{$product->roomAmt}} Bedrooms</p>
        <p class="col-*-*">{{$product->bathroomAmt}} Bathrooms</p>
        </div>
        <p>{{$product->location}}</p>
        <button class="btn btn-primary">Email Realtor</button>
</div>
<div class="card-footer">
        
</div>
</div>
@endsection