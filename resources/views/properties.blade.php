@extends('layouts.app')

@section('content')
<h1>Properties</h1>
@if (session()->has('success'))
<div class="alert alert-success">
{{ session()->get('success') }}
</div>
@endif
<div class="flex-row">
@foreach($properties as $property)
    <div class="card w-25">
        <img class="card-img-top"src= "{{asset('storage/'.$property->photoName)}}" alt = '{{$property->title}}'>
        <div class="card-body">
        <h1 class="card-title">{{$property->roomAmt}} Bedroom {{$property->title}} </h1>
        <div class="d-flex">
        <p class="card-text mt-2 px-2">{{$property->location}}</p>
        <p class="card-text mt-2 px-2">$ {{$property->price}}</p>
        </div>
        </div>
        <a class="bg-success text-white card-footer" href ='/properties/{{$property->id}}'>View Property</a>
    </div>
@endforeach
</div>
@endsection