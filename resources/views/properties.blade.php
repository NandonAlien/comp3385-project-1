@extends('layouts.app')

@section('content')
<h1>Properties</h1>
@if (session()->has('success'))
<div class="alert alert-success">
{{ session()->get('success') }}
</div>
@endif
<div class="flex-row flex-wrap">
@foreach($properties as $property)
    <div class="card w-25">
        <img class="card-img-top"src= "{{asset('storage/images/'.$property->photoName)}}" alt = '{{$property->title}}'width="400' height="200">
        <div class="card-body">
        <h1 class="card-title">{{$property->roomAmt}} Bedroom {{$property->title}} </h1>
        <div class="d-flex">
        <p class="card-text bg-secondary text-white rounded">{{$property->location}}</p>
        <p class="card-text bg-primary text-white rounded">${{$property->price}}</p>
        </div>
        </div>
        <a class="bg-success text-white card-footer" href ='/properties/{{$property->id}}'>View Property</a>
    </div>
@endforeach
</div>
@endsection