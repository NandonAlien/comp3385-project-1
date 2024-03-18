@extends('layouts.app')

@section('content')
<h1 id="form">Add New Property</h1>
<form class="bg-white" action = {{ url('/properties/add')}} method="post" enctype="multipart/form-data" >
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
        <input class="form-control-lg mw-100" type="text" id="property-title" name="property-title">
    </div>
    <div>
        <label for='description'>Description</label><br>
        <textarea class="form-control-lg" id="description" name="description"></textarea>
    </div>
    <div>
        <label for='room-amt'>No. of Rooms</label><br>
        <input class="form-control-sm" type="number" id="room-amt" name="room-amt">
    </div>
    <div>
        <label for='bathroom-amt'>No. of Bathrooms</label><br>
        <input class="form-control-sm" type="number" id="bathroom-amt" name="bathroom-amt">
    </div>
    <div>
        <label for='price'>Price</label><br>
        <input class="form-control-sm" type="number" id="price" name="price">
    </div>
    <div>
        <label for='property-type'>Property Type</label><br>
        <select class="form-control-sm" id="property-type" name="property-type">
        <option value="House" >House</option>
        <option value="Apartment" >Apartment</option>
        </select>
    </div>
    <div>
        <label for='location'>Location</label><br>
        <input class="form-control-sm" type="text" id="location" name="location">
    </div>
    <div>
        <label for='photo'>Photo</label><br>
        <input type="file" id="photo" name="photo" accept ="image/*">
    </div>
    <button class="btn btn-Secondary" type="submit">Add Property</button>
</form>
@endsection