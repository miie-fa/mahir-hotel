@extends('layouts.master')

@section('title', 'Kamar')

@section('content')
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Manajemen Kamar</h3>
                    <a href="{{ route('kamar.create') }}" class="btn btn-primary">Tambah Kamar</a>
                    
                </div>
                <div class="table-responsive py-4">
                    <table class="table table-flush" id="datatable-basic">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Room Description</th>
                                <th>Featured Photo</th>
                                <th>Room Number</th>
                                <th>Room Type</th>
                                <th>Price Per Night</th>
                                <th>Capacity</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kamars as $kamar)
                                <tr>
                                    <td>{{ $kamar->id }}</td>
                                    <td>{{ $kamar->room_description }}</td>
                                    <td><img src="{{ asset('storage/' . $kamar->feutured_photo) }}" width="50"></td>
                                    <td>{{ $kamar->room_number }}</td>
                                    <td>{{ $kamar->room_type }}</td>
                                    <td>{{ $kamar->price_per_night }}</td>
                                    <td>{{ $kamar->capacity }}</td>
                                    <td>
                                        <a href="{{ route('kamar.edit', $kamar->id) }}" class="btn btn-warning">Edit</a>
                                        
                                        <form action=" {{ route('kamar.destroy', $kamar->id) }}" method="POST" style="display:inline;">
                                            
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection