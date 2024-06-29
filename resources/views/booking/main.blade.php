@extends('layout.parent')

@section('title','Booking Form')

@section('content')

    <div class="container mt-3 py-5">
        <h3>Isi dan lengkapilah form reservasi dibawah <br> dengan baik dan benar!</h3>
        <div>
            <h5 style="font-size: 12px; color: #4ba993;">Login atau daftar untuk pemesanan lebih cepat</h5>
            <form action="{{route('booking.store')}}" method="POST" id="reservation-form">
                @csrf
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="info_kontak">Info Kontak</label>
                                    <div class="form-row">
                                        <div class="form-group-half">
                                            <input type="text" class="form-control" id="nama_depan" name="nama_depan" placeholder="Masukkan Nama Depan" required>
                                        </div>
                                        <div class="form-group-half">
                                            <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" placeholder="Masukkan Nama Belakang" required>
                                        </div>
                                    </div>
                                    <div class="form-row mt-3">
                                        <div class="form-group-half">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                                        </div>
                                        <div class="form-group-half">
                                            <input type="tel" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Masukkan Nomor Telepon" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="negara">Negara</label>
                                    <select class="form-control" id="negara" name="negara" required>
                                        <option value="" disabled selected>Pilih Negara</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Singapura">Singapura</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Filipina">Filipina</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Kamboja">Kamboja</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <!-- Tambahkan negara lain sesuai kebutuhan -->
                                    </select>
                                    <textarea class="form-control mt-3" id="alamat" name="alamat" rows="4" placeholder="Masukkan Detail Alamat" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="preferensi_tambahan">Detail dan Preferensi Tambahan (opsional)</label>
                                    <textarea class="form-control" id="preferensi_tambahan" name="preferensi_tambahan" rows="4" placeholder="Catat permintaan atau kebutuhan khusus anda"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-body">
                                <h6><strong>Kebijakan :</strong></h6>
                                <table style="font-size: 12px;">
                                    <tr>
                                        <td>Check In</td>
                                        <td>: <span id="kebijakan_checkin_day">Hari</span>, <span id="kebijakan_checkin_date">Tanggal</span></td>
                                    </tr>
                                    <tr>
                                        <td>Check Out</td>
                                        <td>: <span id="kebijakan_checkout_day">Hari</span>, <span id="kebijakan_checkout_date">Tanggal</span></td>
                                    </tr>
                                    <tr>
                                        <td>Hotel</td>
                                        <td>: <span id="kebijakan_hotel">Hotel Citra Megah, Bali</span></td>
                                    </tr>
                                </table>

                                <h6 class="py-2"><strong>Kebijakan Garansi:</strong></h6>
                                <h6 style="font-size: 12px; color: #118267;">Pay At Hotel (Bayar di Hotel)</h6>

                                <h6 class="py-2"><strong>Kebijakan Pembatalan:</strong></h6>
                                <h6 style="font-size: 12px; color: #118267;">Tidak Dapat Dikembalikan - 100% dari jumlah total akan dibebankan pada saat pemesanan.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="pemesanan">
                                <div class="card-body">
                                    <h2 class="text-center">Ringkasan Pemesanan</h2>
                                    <div class="booking-info">
                                        <div class="form-group">
                                            <i class="fa-regular fa-calendar-check"></i>
                                            <label for="tgl_checkin" style="color: #118267;"><strong>Check-In</strong></label>
                                            <input type="date" name="date" class="form-control" id="tgl_checkin" required onchange="updateTotalPrice()">
                                            <p id="ringkasan_checkin"></p> <!-- Elemen untuk menampilkan tanggal Check-In -->
                                        </div>
                                        <div class="form-group">
                                            <i class="fa-regular fa-calendar-xmark"></i>
                                            <label for="tgl_checkout" style="color: #118267;"><strong>Check-Out</strong></label>
                                            <input type="date" name="date" class="form-control" id="tgl_checkout" required onchange="updateTotalPrice()">
                                            <p id="ringkasan_checkout"></p> <!-- Elemen untuk menampilkan tanggal Check-Out -->
                                        </div>

                                        <div class="form-group">
                                            <i class="fas fa-bed icon"></i>
                                            <label for="kamar" style="color: #118267;"><strong>Kamar</strong></label>
                                            <select class="form-control" id="kamar" name="kamar" required onchange="updateTotalPrice()">
                                                <option value="" disabled selected>Pilih Kamar</option>
                                                <option value="Standard">Standard</option>
                                                <option value="SuperiorRoom">Superior Room</option>
                                                <option value="VIP">VIP</option>
                                                <option value="vip-two-bed">VIP Two Bed</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <i class="fa-regular fa-square-plus"></i>
                                            <label for="tambah_rencana" style="color: #118267;">Tambah rencana penginapan</label>
                                            <select class="form-control" id="tambah_rencana" name="tambah_rencana" onchange="updateTotalPrice()">
                                                <option value="" disabled selected>Pilih kebutuhan yang Anda inginkan</option>
                                                <option value="SPA">SPA dan Fitness - Dewasa</option>
                                                <option value="PusatKebugaran">Pusat Kebugaran</option>
                                                <option value="LayananBinatu">Layanan Binatu dan Pembersihan</option>
                                                <option value="Longue">Lounge atau Ruang Santai</option>
                                                <option value="LayananKamar24jam">Layanan Kamar 24 Jam</option>
                                            </select>
                                        </div>

                                        <div id="selected_accommodation" style="display: none;">
                                            <h6 style="color: #118267;">Rincian Biaya</h6>
                                            <hr>
                                        </div>

                                        <div>
                                            <div>
                                                <span id="nights" style="color: #4ba993;"></span>
                                            </div>
                                            <div>
                                                <span id="room_price"></span>
                                            </div>
                                            <span id="accommodation_price"></span>
                                        </div>

                                        <div style="border-top: dashed;">
                                            <strong>Total</strong>
                                            <span id="price" name="price" class="amount">Rp 0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-14 mt-3">
                            <button class="btn btn-info btn-block center" id="lanjutkan_pemesanan" type="submit">Lanjutkan Pemesanan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        @push('js')
            <script>
                const roomPrices = {
                    Standard: 300000,
                    SuperiorRoom: 400000,
                    VIP: 500000,
                    'vip-two-bed': 600000
                };

                const accommodationPrices = {
                    SPA: 100000,
                    PusatKebugaran: 80000,
                    LayananBinatu: 50000,
                    Longue: 70000,
                    LayananKamar24jam: 90000
                };

                function updateTotalPrice() {
                    const roomSelect = document.getElementById('kamar');
                    const checkInDate = new Date(document.getElementById('tgl_checkin').value);
                    const checkOutDate = new Date(document.getElementById('tgl_checkout').value);
                    const selectedRoom = roomSelect.value;
                    const roomPrice = roomPrices[selectedRoom] || 0;

                    const accommodationSelect = document.getElementById('tambah_rencana');
                    const selectedAccommodation = accommodationSelect.value;
                    const accommodationPrice = accommodationPrices[selectedAccommodation] || 0;

                    if (selectedAccommodation) {
                        document.getElementById('accommodation_price').textContent = 'Biaya Rencana: Rp ' + accommodationPrice.toLocaleString();
                    } else {
                        document.getElementById('selected_accommodation').style.display = 'none';
                        document.getElementById('accommodation_price').textContent = '';
                    }

                    if (selectedRoom && checkInDate && checkOutDate && checkInDate < checkOutDate) {
                        const nights = Math.round((checkOutDate - checkInDate) / (1000 * 60 * 60 * 24));
                        const roomTotalPrice = roomPrice * nights;
                        const totalPrice = roomTotalPrice + accommodationPrice;

                        document.getElementById('selected_accommodation').style.display = 'block';
                        document.getElementById('room_price').textContent = 'Biaya Kamar: Rp ' + roomPrice.toLocaleString();
                        document.getElementById('nights').textContent = nights + ' Malam';
                        document.getElementById('price').textContent = 'Rp ' + totalPrice.toLocaleString();

                        // Tampilkan tanggal check-in dan check-out pada ringkasan pemesanan
                        document.getElementById('ringkasan_checkin').textContent = 'Check-In: ' + checkInDate.toLocaleDateString('id-ID');
                        document.getElementById('ringkasan_checkout').textContent = 'Check-Out: ' + checkOutDate.toLocaleDateString('id-ID');

                        // Update kebijakan
                        const checkInDay = checkInDate.toLocaleDateString('id-ID', { weekday: 'long' });
                        const checkInDateStr = checkInDate.toLocaleDateString('id-ID');
                        const checkOutDay = checkOutDate.toLocaleDateString('id-ID', { weekday: 'long' });
                        const checkOutDateStr = checkOutDate.toLocaleDateString('id-ID');
                        document.getElementById('kebijakan_checkin_day').textContent = checkInDay;
                        document.getElementById('kebijakan_checkin_date').textContent = checkInDateStr;
                        document.getElementById('kebijakan_checkout_day').textContent = checkOutDay;
                        document.getElementById('kebijakan_checkout_date').textContent = checkOutDateStr;
                    } else {
                        document.getElementById('room_price').textContent = '';
                        document.getElementById('nights').textContent = '';
                        document.getElementById('price').textContent = 'Rp 0';

                        // Kosongkan tanggal check-in dan check-out pada ringkasan pemesanan
                        document.getElementById('ringkasan_checkin').textContent = '';
                        document.getElementById('ringkasan_checkout').textContent = '';

                        // Reset kebijakan
                        document.getElementById('kebijakan_checkin_day').textContent = 'Hari';
                        document.getElementById('kebijakan_checkin_date').textContent = 'Tanggal';
                        document.getElementById('kebijakan_checkout_day').textContent = 'Hari';
                        document.getElementById('kebijakan_checkout_date').textContent = 'Tanggal';
                    }
                }
                document.getElementById('lanjutkan_pemesanan').addEventListener('click', function(event) {
                event.preventDefault();

                const form = document.getElementById('reservation-form');
                if (form.checkValidity()) {
                    Swal.fire({
                        title: 'Terima kasih',
                        html: 'Pemesanan anda telah selesai.<br>Terima kasih telah memilih hotel kami sebagai tempat menginap anda.<br>Tunggu beberapa menit, kami akan segera mengirimkan konfirmasi pemesanan ke akun email anda.',
                        icon: 'success',
                        showCloseButton: true,
                        showCancelButton: true,
                        confirmButtonText: 'Cek Pemesanan',
                        cancelButtonText: 'Batalkan Pemesanan',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Logika untuk "Cek Pemesanan"
                            window.location.href = '{{ route('booking.main') }}'; // Ganti dengan URL yang sesuai
                        } else if (result.isDismissed) {
                            // Logika untuk "Batalkan Pemesanan"
                            window.location.href = '{{ route('batalkan.pemesanan') }}'; // Ganti dengan URL yang sesuai
                        } else {
                            form.submit();
                        }
                    });
                } else {
                    form.reportValidity();
                }
            });
                document.getElementById('reservation-form').addEventListener('submit', function(event) {
                    if (!this.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    this.classList.add('was-validated');
                });
            </script>
            @endpush
        </div>
    </div>

@endsection
