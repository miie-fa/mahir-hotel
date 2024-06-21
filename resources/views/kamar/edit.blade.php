@extends('layouts.master')

@section('title', 'Update Kamar')

@section('content')
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Edit Kamar</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('kamar.update', $kamar->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="room_description">Room Description</label>
                            <textarea class="form-control" id="room_description" name="room_description" required>{{ $kamar->room_description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="feutured_photo">Featured Photo</label>
                            <input type="file" class="form-control" id="feutured_photo" name="feutured_photo">
                            <img src="{{ asset('storage/' . $kamar->feutured_photo) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label for="room_number">Room Number</label>
                            <input type="text" class="form-control" id="room_number" name="room_number" value="{{ $kamar->room_number }}" required>
                        </div>
                        <div class="form-group">
                            <label for="room_type">Room Type</label>
                            <input type="text" class="form-control" id="room_type" name="room_type" value="{{ $kamar->room_type }}" required>
                        </div>
                        <div class="form-group">
                            <label for="price_per_night">Price Per Night</label>
                            <input type="number" step="0.01" class="form-control" id="price_per_night" name="price_per_night" value="{{ $kamar->price_per_night }}" required>
                        </div>
                        <div class="form-group">
                            <label for="capacity">Capacity</label>
                            <input type="number" class="form-control" id="capacity" name="capacity" value="{{ $kamar->capacity }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection