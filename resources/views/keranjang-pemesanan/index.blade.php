@extends('layouts.custom')

@section('content')
<main class="container my-5">
    <h2 class="mb-4">Keranjang Pemesanan</h2>
    @foreach ($reservations as $reservation)
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{ $reservation->kamar->featured_photo }}" class="card-img" alt="Standard Room">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $reservation->kamar->room_type }} <span class="badge badge-secondary">735 Reviews</span></h5>
                    <p class="card-text"><strong>Rp{{ number_format($reservation->kamar->price_per_night, 0, ',', '.') }}</strong>/malam</p>
                    <p class="card-text">{{ $reservation->kamar->room_description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="text-muted mb-0">Status: Menunggu konfirmasi</p>
                        <p class="text-muted mb-0">Total Pembayaran: <strong>Rp {{ number_format($reservation->total_cost, 0, ',', '.') }}</strong></p>
                    </div>
                    <form action="{{ route('keranjang-pemesanan.destroy', $reservation->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-2">Batalkan Pemesanan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="detail-pemesanan">
        <h4>Detail Pemesanan</h4>
        <ul class="list-unstyled">
            <li><strong>Check In:</strong>{{ $reservation->check_in_date->format ('l, H:i - d F Y') }}</li>
            <li><strong>Check Out:</strong> {{ $reservation->check_out_date->format('l, H:i - d F Y') }}</li>
            <li><strong>Hotel:</strong> Hotel Citra Megah Bali, {{ $reservation->kamar->room_type }}</li>
            <li><strong>Tambahan rencana penginapan:</strong> Spa dan Gebugaran - Dewasa (2)</li>
            <li><strong>Jumlah orang:</strong>  {{ $reservation->kamar->capacity }}</li>
        </ul>
    </div>
    @endforeach
    
    @if($reservations->isEmpty())
            <p>Anda belum memiliki pemesanan kamar.</p>
    @endif
</main>
@endsection