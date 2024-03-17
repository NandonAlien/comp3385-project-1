@extends('layouts.app')

@section('content')
<h1>Properties</h1>
@foreach($properties as $property)
    <div>
        <img src= "{{asset({{$property->photoPath}})}}" alt = '{{$property->title}}'>
        <h1>{{$roomAmt}} Bedroom {{$property->title}} </h1>
        <p>{{$property->location}}</p>
        <p>{{$property->price}}</p>
        <a href ='{{url('/properties/{{$property->id}}')}}'>View Property</a>
    </div>
@endforeach
@endsection