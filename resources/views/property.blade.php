@extends('layouts.app')

@section('content')
<div>
        <img src= "{{asset('storage/'.$product->photoName)}}" alt = '{{$product->title}}'>
        <h2>{{$product->title}}</h2>
        <p>{{$product->price}}</p>
        <p>{{$product->description}}<p>
        <p>{{$product->roomAmt}} Bedrooms</p>
        <p>{{$product->bathroomAmt}} Bathrooms</p>
        <p>{{$product->location}}</p>
        <button>Email</button>
        
</div>
@endsection