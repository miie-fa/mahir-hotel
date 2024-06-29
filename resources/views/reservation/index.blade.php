<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Citra Megah | Room Detail</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <style>
        #main-navbar {
            border-bottom: 5px solid #f8f9fa;
        }

        #main-navbar a:hover,
        #main-navbar .active {
            border-bottom-color: black;
            transition: border-color 500ms;
        }

        #showcase {
            background: url("assets/1.png") no-repeat center center/cover;
            height: 300px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .bottom-left {
            bottom: 0px;
            left: 50px;
            background-color: rgb(0, 52, 52);
            padding: 10px;
            height: 50px;
            /* adjust as needed */
            width: 150px;
            /* adjust as needed */
        }

        .bottom-left h1 {
            position: absolute;
            bottom: 0px;
            /* distance from the bottom of the parent */
            left: 10px;
            /* distance from the left of the parent */
            font-size: 40px;
            /* make text smaller */
            color: white;
            margin: 0;
            padding: 0;
        }

        .room-gallery img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
        }

        .custom-font {
            font-family: 'Dancing Script', sans-serif;
            font-weight: bold;
            font-size: 30px;
        }

        .rating {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-right: 20px;
            margin-top: 10px;
        }

        .stars {
            display: flex;
        }

        .rating i {
            font-size: 1.5em;
            color: gold;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .item {
            flex: 1 1 50%;
            /* Membagi elemen menjadi dua kolom */
            margin-bottom: 10px;
            /* Jarak antara elemen */
        }

        .pemesanan {
            background-color: #F2F2F2;
        }

        .booking-info {
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            margin: 10px;
            margin-top: 0;
            padding: 20px;
        }

        .booking-info div {
            margin-bottom: 10px;
        }

        .booking-info .icon {
            margin-right: 5px;
        }

        .booking-info strong {
            display: inline-block;
            width: 100px;
        }

        .booking-info .amount {
            text-align: right;
            float: right;
        }

        .cek {
            display: flex;
            align-items: center;
            justify-content: center;
            height: auto;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        hr {
            border: 0;
            height: 1px;
            background: #e3e2e2;
            margin: 0px 0;
        }

        .white-hr {
            border: 1px solid rgb(0, 0, 0);
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
        }

        .form-group-half {
            flex: 0 0 50%;
            max-width: 50%;
            padding-right: 15px;
            padding-left: 15px;
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target="navbarNav" data-bs-offset="200">
    <!-- NAVBAR -->
    <nav id="main-navbar" class="navbar navbar-expand-md navbar-light bg-light fixed-top py-2 py-md-0">
        <div class="container">
            <a class="navbar-brand custom-font" href="#">Hotel Citra Megah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link p-3 " aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3 active" href="#rooms">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- ROOM DETAILS -->
    <section>
        <div class="container mt-3 py-5">
            <h3>Isi dan lengkapilah form reservasi dibawah <br> dengan baik dan benar!</h3>
            <div>
                <h5 style="font-size: 12px; color: #4ba993;">Login atau daftar untuk pemesanan lebih cepat</h5>
                <form action="{{ route('reservation.store') }}" method="POST" id="reservationForm">
                @csrf
                    <div class="row">
                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="infoKontak">Info Kontak</label>
                                        <div class="form-row">
                                            <div class="form-group-half">
                                                <input type="text" class="form-control" id="namaDepan"
                                                    placeholder="Masukkan Nama Depan" required>
                                            </div>
                                            <div class="form-group-half">
                                                <input type="text" class="form-control" id="namaBelakang"
                                                    placeholder="Masukkan Nama Belakang" required>
                                            </div>
                                        </div>
                                        <div class="form-row mt-3">
                                            <div class="form-group-half">
                                                <input type="text" class="form-control" id="Email"
                                                    placeholder="Masukkan Email" required>
                                            </div>
                                            <div class="form-group-half">
                                                <input type="text" class="form-control" id="NomorTelepon"
                                                    placeholder="Masukkan Nomor Telepon" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="negara">Negara</label>
                                        <select class="form-control" id="negara" required>
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
                                        <textarea class="form-control mt-3" id="alamat" rows="4"
                                            placeholder="Masukkan Detail Alamat" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat">Detail dan Preferensi Tambahan (opsional)</label>
                                        <textarea class="form-control" id="detailPreferensi" rows="4"
                                            placeholder="Catat permintaan atau kebutuhan khusus anda"></textarea>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h6><strong>Kebijakan :</strong></h6>
                                                    <table style="font-size: 12px;">
                                                        <tr>
                                                            <td>Check In</td>
                                                            <td>: <span id="kebijakanCheckInDay">Hari</span>, <span
                                                                    id="kebijakanCheckInDate">Tanggal</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Check Out</td>
                                                            <td>: <span id="kebijakanCheckOutDay">Hari</span>, <span
                                                                    id="kebijakanCheckOutDate">Tanggal</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hotel</td>
                                                            <td>: <span id="kebijakanHotel">Hotel Citra Megah,
                                                                    Bali</span></td>
                                                        </tr>
                                                    </table>
                                                    <h6 class="py-2"><strong>Kebijakan Pembatalan:</strong></h6>
                                                    <h6 style="font-size: 12px; color: #118267;">Tidak Dapat
                                                        Dikembalikan - 100% dari jumlah total akan dibebankan pada saat
                                                        pemesanan.</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                                <label for="tglCheckin"
                                                    style="color: #118267;"><strong>Check-In</strong></label>
                                                <input type="date" class="form-control" id="tglCheckin" required
                                                    onchange="updateTotalPrice()">
                                                <p id="ringkasanCheckIn"></p>
                                                <!-- Elemen untuk menampilkan tanggal Check-In -->
                                            </div>
                                            <div class="form-group">
                                                <i class="fa-regular fa-calendar-xmark"></i>
                                                <label for="tglCheckout"
                                                    style="color: #118267;"><strong>Check-Out</strong></label>
                                                <input type="date" class="form-control" id="tglCheckout" required
                                                    onchange="updateTotalPrice()">
                                                <p id="ringkasanCheckOut"></p>
                                                <!-- Elemen untuk menampilkan tanggal Check-Out -->
                                            </div>

                                            <div class="form-group">
                                                <i class="fas fa-bed icon"></i>
                                                <label for="Kamar"
                                                    style="color: #118267;"><strong>Kamar</strong></label>
                                                <select class="form-control" id="Kamar" required
                                                    onchange="updateTotalPrice()">
                                                    <option value="" disabled selected>Pilih Kamar</option>
                                                    <option value="SingleRoom">Single Room</option>
                                                    <option value="Standard">Standard</option>
                                                    <option value="Superior">Superior</option>
                                                    <option value="DeluxeTwinBed">Deluxe Twin Bed</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <i class="fa-regular fa-square-plus"></i>
                                                <label for="tambahrencana" style="color: #118267;">Tambah rencana
                                                    penginapan</label>
                                                <select class="form-control" id="tambahrencana"
                                                    onchange="updateTotalPrice()">
                                                    <option value="" disabled selected>Pilih kebutuhan yang Anda
                                                        inginkan</option>
                                                    <option value="SPA">SPA dan Fitness - Dewasa</option>
                                                    <option value="PusatKebugaran">Pusat Kebugaran</option>
                                                    <option value="LayananBinatu">Layanan Binatu dan Pembersihan
                                                    </option>
                                                    <option value="Longue">Lounge atau Ruang Santai</option>
                                                    <option value="LayananKamar24jam">Layanan Kamar 24 Jam</option>
                                                </select>
                                            </div>

                                            <div id="selected-accommodation" style="display: none;">
                                                <h6 style="color: #118267;">Rincian Biaya</h6>
                                                <hr>
                                            </div>

                                            <div>
                                                <div>
                                                    <span id="nights" style="color: #4ba993;"></span>
                                                </div>
                                                <div>
                                                    <span id="room-price"></span>
                                                </div>
                                                <span id="accommodation-price"></span>
                                            </div>

                                            <div style="border-top: dashed;">
                                                <strong>Total</strong>
                                                <span id="total-price" class="amount">Rp 0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-14 mt-3">
                                <button type="submit" class="btn btn-info btn-block center"
                                    id="lanjutkanPemesanan">Lanjutkan Pemesanan</button>
                            </div>
                        </div>
                    </div>
                </form>

                <script>
                    const roomPrices = {
                        SingleRoom: 350000,
                        Standard: 400000,
                        Superior: 600000,
                        DeluxeTwinBed: 800000
                    };

                    const accommodationPrices = {
                        SPA: 100000,
                        PusatKebugaran: 80000,
                        LayananBinatu: 50000,
                        Longue: 70000,
                        LayananKamar24jam: 90000
                    };

                    function updateTotalPrice() {
                        const roomSelect = document.getElementById('Kamar');
                        const checkInDate = new Date(document.getElementById('tglCheckin').value);
                        const checkOutDate = new Date(document.getElementById('tglCheckout').value);
                        const selectedRoom = roomSelect.value;
                        const roomPrice = roomPrices[selectedRoom];
                        const selectedAccommodation = document.getElementById('tambahrencana').value;
                        const accommodationPrice = accommodationPrices[selectedAccommodation] || 0;

                        if (selectedAccommodation) {
                            document.getElementById('accommodation-price').textContent = 'Biaya Rencana: Rp ' + accommodationPrice.toLocaleString();
                        } else {
                            document.getElementById('selected-accommodation').style.display = 'none';
                            document.getElementById('accommodation-price').textContent = '';
                        }

                        if (selectedRoom && checkInDate && checkOutDate && checkInDate < checkOutDate) {
                            const nights = Math.round((checkOutDate - checkInDate) / (1000 * 60 * 60 * 24));
                            const roomTotalPrice = roomPrice * nights;
                            const totalPrice = roomTotalPrice + accommodationPrice;

                            document.getElementById('selected-accommodation').style.display = 'block';
                            document.getElementById('room-price').textContent = 'Biaya Kamar: Rp ' + roomPrice.toLocaleString();
                            document.getElementById('nights').textContent = nights + ' Malam';
                            document.getElementById('total-price').textContent = 'Rp ' + totalPrice.toLocaleString();

                            // Tampilkan tanggal check-in dan check-out pada ringkasan pemesanan
                            document.getElementById('ringkasanCheckIn').textContent = 'Check-In: ' + checkInDate.toLocaleDateString('id-ID');
                            document.getElementById('ringkasanCheckOut').textContent = 'Check-Out: ' + checkOutDate.toLocaleDateString('id-ID');
                        } else {
                            document.getElementById('room-price').textContent = '';
                            document.getElementById('nights').textContent = '';
                            document.getElementById('total-price').textContent = 'Rp 0';

                            // Kosongkan tanggal check-in dan check-out pada ringkasan pemesanan
                            document.getElementById('ringkasanCheckIn').textContent = '';
                            document.getElementById('ringkasanCheckOut').textContent = '';
                        }
                    }

                    document.getElementById('lanjutkanPemesanan').addEventListener('click', function (event) {
                        event.preventDefault();
                        const checkInDate = document.getElementById('tglCheckin').value;
                        const checkOutDate = document.getElementById('tglCheckout').value;
                        const selectedRoom = document.getElementById('Kamar').options[document.getElementById('Kamar').selectedIndex].text;

                        // Format tanggal menjadi hari dan tanggal
                        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                        const checkInDateFormatted = new Date(checkInDate).toLocaleDateString('id-ID', options);
                        const checkOutDateFormatted = new Date(checkOutDate).toLocaleDateString('id-ID', options);

                        // Update elements
                        document.getElementById('kebijakanCheckInDay').textContent = checkInDateFormatted.split(",")[0];
                        document.getElementById('kebijakanCheckInDate').textContent = checkInDateFormatted.split(",")[1].trim();
                        document.getElementById('kebijakanCheckOutDay').textContent = checkOutDateFormatted.split(",")[0];
                        document.getElementById('kebijakanCheckOutDate').textContent = checkOutDateFormatted.split(",")[1].trim();
                        document.getElementById('kebijakanHotel').textContent = 'Hotel Citra Megah, Bali ' + selectedRoom;

                        // Menampilkan pesan setelah pemesanan selesai
                        alert('Terima kasih\nPemesanan anda telah selesai\nTerima kasih telah memilih hotel kami sebagai tempat menginap anda\nTunggu beberapa menit, kami akan segera mengirimkan konfirmasi pemesanan ke akun email anda.\nBatalkan Pemesanan\nCek Pemesanan');
                    });
                </script>
                </form>
            </div>
        </div>
    </section>








    <!-- FOOTER -->
    <footer id="main-footer" class="text-white bg-dark py-5 mt-md-0">
        <div class="container">
            <div class="row">
                <!-- Hotel Info Section -->
                <div class="text-md-start col-md-3 me-auto">
                    <h5 class="custom-font">Hotel Citra Megah</h5>
                    <h6 style="font-size: 12px;">Hotel Citra Megah, hotel bintang lima terbaik di Indonesia dengan
                        lokasi yang strategis</h6>
                    <!-- <small>&copy; Hotel Citra Megah 2024</small> -->
                </div>

                <!-- Navigation Section -->
                <div class="text-md-start col-md-3 mt-3 mt-md-0">
                    <h5>Navigation</h5>
                    <div style="font-size: 14px;">
                        Help center <br>
                        Careers <br>
                        Terms & Condition <br>
                        Privacy Policy <br>
                    </div>
                </div>

                <!-- Recent Post Section -->
                <div class="text-md-start col-md-3 mt-3 mt-md-0">
                    <h5>Recent Post</h5>
                    <div class="d-flex align-items-center mt-1">
                        <img src="assets/1.jpeg" style="width: 50px; height: 50px;">
                        <p style="font-size: 12px; margin-left: 5px;">Menemukan kesempurnaan <br>dalam kesenangan
                            mengin...</p>
                    </div>
                    <div class="d-flex align-items-center mt-1">
                        <img src="assets/1.jpeg" style="width: 50px; height: 50px;">
                        <p style="font-size: 12px; margin-left: 5px;">Menemukan kesempurnaan <br>dalam kesenangan
                            mengin...</p>
                    </div>
                    <div class="d-flex align-items-center mt-1">
                        <img src="assets/1.jpeg" style="width: 50px; height: 50px;">
                        <p style="font-size: 12px; margin-left: 5px;">Menemukan kesempurnaan <br>dalam kesenangan
                            mengin...</p>
                    </div>
                </div>

                <!-- Contact Us Section -->
                <div class="text-md-start col-md-3 mt-3 mt-md-0">
                    <h5>Contact Us</h5>
                    <div style="font-size: 12px;">
                        <div class="mt-3">
                            <i class="fa-solid fa-phone-volume"></i>
                            +123-456-789
                        </div>
                        <div class="mt-3">
                            <i class="fa-solid fa-envelope"></i>
                            hotelcitramewah@gmail.com
                        </div>
                        <div class="mt-3">
                            <i class="fa-solid fa-location-dot"></i>
                            Jl. Raya Krapyak, Jl. Karanganyar Raya No.RT.05, Karanganyar, Wedomartani, Kec. Ngemplak,
                            Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <hr class="white-hr">
                </div>
                <div class="col-12 d-flex align-items-center justify-content-center text-center py-3">
                    <h6 style="font-size: 12px;">Copyright &copy; 2023 Hotel Citra Megah</h6>
                </div>
            </div>
        </div>
    </footer>