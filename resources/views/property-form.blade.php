@extends('layouts.app')

@section('content')
<h1>Create Client</h1>
<form action = {{ url('/client')}} method="post" enctype="multipart/form-data" >
    @csrf
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <label for='property-title'>Property Title</label><br>
        <input type="text" id="property-title" name="property-title">
    </div>
    <div>
        <label for='description'>Description</label><br>
        <textarea id="description" name="description"></textarea>
    </div>
    <div>
        <label for='room-amt'>No. of Rooms</label><br>
        <input type="number" id="room-amt" name="room-amt">
    </div>
    <div>
        <label for='bathroom-amt'>No. of Bathrooms</label><br>
        <input type="number" id="bathroom-amt" name="bathroom-amt">
    </div>
    <div>
        <label for='price'>Price</label><br>
        <input type="number" id="price" name="price">
    </div>
    <div>
        <label for='property-type'>Property Type</label><br>
        <input type="text" id="property-type" name="property-type">
    </div>
    <div>
        <label for='location'>Location</label><br>
        <input type="text" id="location" name="location+">
    </div>
    <div>
        <label for='photo'>Photo</label><br>
        <input type="file" id="photo" name="photo" accept ="image/*">
    </div>
    <button type="submit">Add Property</button>
</form>
@endsection