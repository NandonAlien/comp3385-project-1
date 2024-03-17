@extends('layouts.app')

@section('content')
<div>
        <img src= "{{asset({{$product->photoPath}})}}" alt = '{{$product->title}}'>
        <h1>{{$product->title}}</h1>
        <p>{{$product->price}}</p>
        <p>{{$product->description}}<p>
        <p>{{$product->roomAmt}} Bedrooms</p>
        <p>{{$product->bathroomAmt}} Bathrooms</p>
        <p>{{$product->location}}</p>
        <button>Email Realtor</button>
        
</div>
@endsection