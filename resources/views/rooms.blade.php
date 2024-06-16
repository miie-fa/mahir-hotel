@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center mb-4">Kamar</h1>
            <p class="text-center">Hotel Citra Megah menyediakan beberapa ruangan yang tentunya sangat cocok dengan selera anda, dengan tambahan fasilitas dan fasilitas yang sangat terjamin untuk menunjang berbagai kebutuhan sehari-hari anda, dan kami siap melayani anda jika membutuhkan bantuan apapun, ayo segera pesan kamar di bawah ini dan dapatkan diskonnya di pemesanan pertama anda!</p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-3">
            <select class="form-control" id="roomType">
                <option value="all">Semua Kamar</option>
                @foreach ($rooms as $room)
                    <option value="{{ $room->type }}">{{ $room->type }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            <input type="date" class="form-control" id="checkinDate">
        </div>
        <div class="col-md-3">
            <input type="date" class="form-control" id="checkoutDate">
        </div>
        <div class="col-md-3">
            <button class="btn btn-primary" id="filterButton">Filter</button>
        </div>
    </div>

    <div class="row mt-5" id="roomsContainer">
        @foreach ($rooms as $room)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/'.$room->image) }}" class="card-img-top" alt="{{ $room->type }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $room->type }}</h5>
                        <p class="card-text">
                            <b>Fasilitas:</b>
                            <ul>
                                <li>{{ $room->facilities }}</li>
                            </ul>
                        </p>
                        <p class="card-text">
                            <b>Harga:</b> Rp {{ number_format($room->price) }}</p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#roomModal{{ $room->id }}">Pesan Kamar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@foreach ($rooms as $room)
    <!-- Modal -->
    <div class="modal fade" id="roomModal{{ $room->id }}" tabindex="-1" aria-labelledby="roomModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="roomModalLabel">{{ $room->type }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('storage/'.$room->image) }}" class="img-fluid" alt="{{ $room->type }}">
                    <p>
                        <b>Fasilitas:</b>
                        <ul>
                            <li>{{ $room->facilities }}</li>
                        </ul>
                    </p>
                    <p>
                        <b>Harga:</b> Rp {{ number_format($room->price) }}
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Pesan Sekarang</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

<script>
    $(document).ready(function() {
        $('#filterButton').click(function() {
            var roomType = $('#roomType').val();
            var checkinDate = $('#checkinDate').val();
            var checkoutDate = $('#checkoutDate').val();

            $.ajax({
                url: '{{ route('rooms.filter') }}',
                type: 'GET',
                data: {
                    roomType: roomType,
                    checkinDate: checkinDate,
                    checkoutDate: checkoutDate
                },
                success: function(data) {
                    $('#roomsContainer').html(data);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>
@endsection
