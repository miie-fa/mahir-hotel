<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Citra Megah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    <!-- Pikaday JS -->
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            scroll-behavior: smooth;
        }

        header {
            width: 100%;
            height: 90vh;
            background-size: cover;
            position: relative;
            background-image: url({{ asset('assets/room1.jpg') }});
            ;
        }


        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: white;
            border-bottom: 1px solid #ddd;
        }

        .logo {
            font-size: 35px;
            font-family: "Great Vibes", cursive;
            margin-left: 10%;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .nav-links li {
            position: relative;
        }

        .nav-links li a {
            text-decoration: none;
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            color: #000;
            font-size: 16px;
        }

        .nav-links li a.active {
            color: #00aaff;
        }

        .nav-links li a:hover {
            color: #00aaff;
        }

        .nav-links li a.active::after {
            content: '';
            display: block;
            width: 100%;
            height: 2px;
            background-color: #00aaff;
            position: absolute;
            bottom: -5px;
            left: 0;
        }

        .login-signup {
            display: flex;
            align-items: center;
        }

        .login-btn {
            padding: 10px 20px;
            background-color: #1a1a1d;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-btn:hover {
            background-color: #333;
        }

        .main .text {
            position: absolute;
            top: 30%;
            left: 5%;
        }

        .text h2 {
            font-size: 50px;
            color: white;
            font-weight: 600;
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
            text-transform: capitalize;
        }

        .text-p {
            margin-top: 10%;
            color: white;
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
            font-size: 1.2em;
        }

        /* Media query untuk layar berukuran kecil (misalnya, smartphone) */
        @media screen and (max-width: 768px) {
            header {
                height: auto;
                /* Ubah tinggi menjadi dinamis */
                min-height: 100vh;
                /* Set minimal tinggi agar tetap penuh layar */
                padding-top: 20px;
                /* Tambahkan ruang atas */
            }

            .navbar {
                flex-direction: column;
                /* Tampilkan item nav dalam satu kolom */
                align-items: flex-start;
                /* Mulai dari kiri */
                padding: 10px;
                /* Sesuaikan padding */
            }

            .logo {
                margin-left: 10px;
                /* Sesuaikan margin */
                font-size: 30px;
                /* Sesuaikan ukuran font */
                text-align: left;
                /* Tekstur kiri */
            }

            .nav-links {
                flex-direction: column;
                /* Tampilkan link dalam satu kolom */
                gap: 10px;
                /* Sesuaikan jarak antar link */
                margin-top: 10px;
                /* Tambahkan margin atas */
                padding-left: 10px;
                /* Sesuaikan padding */
            }

            .nav-links li {
                margin-left: 0;
                /* Hapus margin kiri */
                text-align: left;
                /* Tekstur kiri */
            }

            .login-signup {
                margin-top: 10px;
                /* Tambahkan margin atas */
                margin-right: 10px;
                /* Tambahkan margin kanan */
                justify-content: flex-end;
                /* Posisi ke kanan */
            }

            .main .text {
                top: 10%;
                /* Sesuaikan posisi teks */
                left: 5%;
                /* Sesuaikan posisi teks */
                text-align: center;
                /* Teks ke tengah */
            }

            .text h2 {
                font-size: 30px;
                /* Sesuaikan ukuran font */
                text-align: center;
                /* Teks ke tengah */
            }

            .text-p {
                margin-top: 5%;
                /* Sesuaikan margin atas */
                text-align: center;
                /* Teks ke tengah */
            }
        }

        /* BOOOKING */
        .booking_container {
            margin-left: 5%;
            margin-right: 5%;
            margin-top: -4%;
        }

        .booking_form {
            padding: 2rem;
            display: flex;
            gap: 1rem;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            background-color: #00887A;
            border-radius: 10px;
            transform: translateY(-50%);
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.1);
            margin-top: 10%;
            margin-bottom: -2%;
        }

        .input_grup {
            flex: 1 1 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .input_grup input {
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            display: block;
            width: 50%;
            max-width: 150px;
            padding-block: 5px;
            color: var(--text-dark--);
            font-size: 0.9rem;
            outline: none;
            border: none;
        }

        .pointer {
            cursor: pointer;
            position: relative;
        }

        .input_grup select {
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            display: block;
            width: 100%;
            max-width: 150px;
            padding-block: 5px;
            color: var(--text-dark--);
            font-size: 0.9rem;
            outline: none;
            border: none;
        }

        .input_grup input::placeholder {
            color: var(--text-light--);
        }

        .input_grup button {
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            border-radius: 40px;
            width: 60%;
            height: 5%;
            background-color: #1a1a1d;
            color: #ddd;
        }

        /* Media query untuk tampilan responsif */
        @media (max-width: 767px) {
            .booking_form {
                flex-direction: column;
                align-items: stretch;
            }

            .input_grup {
                width: 100%;
                max-width: none;
                justify-content: flex-start;
            }

            .input_grup input,
            .input_grup select {
                width: 100%;
                max-width: none;
            }

            .input_grup button {
                width: 100%;
                height: 10vh;
                font-family: "Outfit", sans-serif;
                font-optical-sizing: auto;
                font-weight: <weight>;
                font-style: normal;
            }
        }

        /* FOOTER */
        .footer {
            background-color: #1a1a1d;
            color: white;
            padding: 40px 0;
        }

        .footer h4 {
            font-family: "Outfit", sans-serif;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .footer .icons {
            margin-top: 10%;
        }

        .footer .icons p {
            font-size: 20px;
        }

        .footer .icons i {
            font-size: 25px;
            /* Besarkan ukuran ikon */
            transition: transform 0.3s;
            /* Animasi untuk efek hover */
            color: #00887A;
        }

        .icons i:hover {
            transform: scale(1.2);
            /* Membesarkan ikon saat dihover */

        }

        .footer p,
        .footer ul,
        .footer li,
        .footer a {
            font-family: "Outfit", sans-serif;
            font-size: 16px;
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
            color: white;
        }

        .footer ul {
            padding-left: 0;
        }

        .footer ul li {
            margin-bottom: 10px;
        }

        .footer ul li a {
            color: white;
            transition: color 0.3s;
        }

        .footer ul li a:hover {
            color: #00887A;
        }

        .footer .social-icons {
            margin-top: 20px;
        }

        .footer .social-icons a {
            display: inline-block;
            margin-right: 10px;
            transition: opacity 0.3s;

        }


        .footer .social-icons a:hover {
            opacity: 0.7;
        }

        .social-icons ul {
            list-style-type: none;
            /* Menghapus bullet points dari daftar */
            padding: 0;
            margin: 0;
        }

        .social-icons ul li {
            margin-bottom: 20px;
            /* Ruang antara setiap item */
        }

        .social-icons img {
            width: 50px;
            /* Ukuran gambar */
            height: 50px;
            /* Ukuran gambar */
            object-fit: cover;
            /* Memastikan gambar mengisi area tanpa distorsi */
            margin-right: 15px;
            /* Ruang antara gambar dan teks */
            float: left;
            /* Membuat gambar berada di sebelah kiri */
        }

        .social-icons p {
            font-size: 14px;
            /* Ukuran teks */
            line-height: 1.5;
            /* Spasi baris */
            margin: 0;
            /* Menghapus margin bawaan */
            float: right;
        }

        /* Clear float untuk mengatasi overflow */
        .social-icons:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive styling */
        @media (max-width: 768px) {
            .footer {
                text-align: center;
            }

            .footer .container .row {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .footer .container .row .col-md-4 {
                margin-bottom: 30px;
            }
        }

        .contact-list {
            list-style-type: none;
            /* Menghapus bullet points dari daftar */
            padding: 0;
            margin: 0;
        }

        .contact-list li {
            margin-bottom: 10px;
            /* Ruang antara setiap item daftar */
            display: flex;
            align-items: center;
            /* Memastikan ikon dan teks sejajar secara vertikal */
        }

        .contact-list li i {
            margin-right: 10px;
            /* Ruang antara ikon dan teks */
            font-size: 18px;
            /* Ukuran ikon */
            color: #00887A;
            /* Warna ikon */
        }

        .contact-list li span {
            display: inline-block;
            vertical-align: middle;
            /* Memastikan teks sejajar dengan ikon */
            max-width: calc(100% - 30px);
            /* Menghindari teks meluber keluar dari kolom */
        }

        .contact-list li i.fa-phone,
        .contact-list li i.fa-envelope,
        .contact-list li i.fa-location-dot {
            min-width: 20px;
            /* Lebar minimum untuk ikon, memastikan konsistensi jarak */
        }

        .contact-list li {
            font-size: 16px;
            /* Ukuran teks */
            color: white;
            /* Warna teks */
        }

        .footer .copyright {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #ccc;
        }

        .resize {
            margin-left: 5%;
            margin-top: 2%;
        }

        .btn-secondary,
        .btn-secondary:hover,
        .btn-secondary:active {
            background-color: #00887a;
        }

        .filter {
            margin-top: -3%;
            margin-left: 60%;
        }

        .topcard {
            margin-left: 5%;
            margin-bottom: 1%;
        }

        .roomlistgroup {

            display: flex;
        }

        .roomlist {
            margin-left: 5%;
            background-color: #f6f6f6;
        }

        .roomlist div {
            background-color: #f6f6f6;
        }

        ul.split-list {
            display: flex;
            flex-wrap: wrap;
        }

        ul.split-list li {
            width: 50%;
        }

        .flex {
            display: flex;
        }

        .flex button {
            margin-left: 30%;
        }

        .blue-text {
            color: #00887a;
        }

        .star-rating {
            color: orange;
            display: flex;
        }

        .star-amount {
            color: #a0a0a0;
            margin-left: 2px;
        }

        .roomavail {
            color: #00887a;
            padding-left: 30%;
        }

        .roomout {
            color: #ff0000;
            padding-left: 30%;
        }

        .btn-selected {
            color: white;
            background-color: #00887a;
            border: none;
            border-radius: 5px;
        }

        .btn-out {
            color: white;
            background-color: #a0a0a0;
            border: none;
            border-radius: 5px;
        }

        .img-out {
            filter: opacity(50%);
        }

        .orderdetail {
            margin-left: 0.5%;
            width: 28.5rem;
        }

        .orderdetail div {
            background-color: #f6f6f6;
        }

        .underlined-text {
            position: relative;
            display: inline-block;
            padding-bottom: 5px;
        }

        .underlined-text::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 26rem;
            height: 1px;
            background-color: black;
        }

        .flex-a {
            display: flex;
            justify-content: space-between;
            max-width: 26rem;
        }

        .btna {

            margin-top: 30.5%;
            margin-left: 5%;
            font-size: 250%;
            color: white;
            background-color: #162034;
            border-radius: 10px;
            width: 13.5rem;
            height: 6rem;

        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo">Hotel Citra Megah</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#rooms" class="active">Rooms</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="login-signup">
                <button class="login-btn">Login/Sign Up</button>
            </div>
        </nav>
        <button type="button" class="btna">
            Kamar
        </button>

    </header>
    <section class="resize">
        <div class="text">
            <h3>Ruangan Hotel Citra Megah</h3>
            <p>
                Hotel Citra Megah menyediakan beberapa ruangan yang tentunya
                sangat cocok dengan selera anda, dengan tampilan, kualitas
                dan fasilitas yang sangat terjamin <br />untuk menunjang
                berbagai kebutuhan sehari hari anda, dan kami siap 24 jam
                melayani anda jika membutuhkan bantuan apapun, ayo segera
                pesan kamar di bawah ini<br />
                dan dapatkan diskonya di pemesanan pertama anda!
            </p>
        </div>
    </section>
    <section class="section_container booking_container">
        <form action="{{ route('rooms.search') }}" method="GET" class="booking_form">
            <div class="input_grup">
                <div>
                    <select id="room-type" name="room_type" required>
                        <option selected>Pilihan Kamar</option>
                        <option value="standard">Standard Room</option>
                        <option value="superior">Superior Room</option>
                        <option value="twin">Twin Room</option>
                        <option value="deluxe">Deluxe Room</option>
                        <option value="suite">Suite Room</option>
                    </select>
                </div>
            </div>
            <div class="input_grup">
                <input type="text" id="check-in" name="check_in" value="Check In" required class="pointer" readonly>
            </div>
            <div class="input_grup">
                <input type="text" id="check-out" name="check_out" value="Check Out" required class="pointer" readonly>
            </div>
            <div class="input_grup">
                <input type="text" id="promo-code" name="promo_code" placeholder="Kode Promo">
            </div>
            <div class="input_grup input_btn">
                <button type="submit" class="btn btn-light">BOOKING</button>
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var checkIn = new Pikaday({
                    field: document.getElementById('check-in')
                });
                var checkOut = new Pikaday({
                    field: document.getElementById('check-out')
                });
            });
        </script>
    </section>

    <!-- Hasil Pencarian -->
    @if(isset($rooms))
        <h1>Room List</h1>
        <ul>
            @foreach($rooms as $room)
                <li>
                    Room Number: {{ $room->room_number }} <br>
                    Room Type: {{ $room->room_type }} <br>
                    Price: {{ $room->price }} <br>
                    Available: {{ $room->is_available ? 'Yes' : 'No' }} <br>
                </li>
            @endforeach
        </ul>
    @endif
</section>
<section class="topcard">
    <div class="text">
        <h3>pilih kamar</h3>
    </div>
    <div class="filter">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Filter:
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('rooms.search', ['sort_by' => 'highest_price']) }}">Termahal</a></li>
            <li><a class="dropdown-item" href="{{ route('rooms.search', ['sort_by' => 'popularity']) }}">Populer</a></li>
            <li><a class="dropdown-item" href="{{ route('rooms.search', ['sort_by' => 'lowest_price']) }}">Termurah</a></li>
        </ul>
    </div>
</section>

<!-- Hasil Pencarian -->
@if(isset($rooms))
    <h1>Room List</h1>
    <ul>
        @foreach($rooms as $room)
            <li>
                Room Number: {{ $room->room_number }} <br>
                Room Type: {{ $room->room_type }} <br>
                Price: {{ $room->price }} <br>
                Available: {{ $room->is_available ? 'Yes' : 'No' }} <br>
            </li>
        @endforeach
    </ul>
@endif
</section>
    <span class="roomlistgroup">
        <section class="roomlist">
            <div class="card mb-3" style="max-width: 900px">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="{{ asset('assets/single.jpg') }}" class="img-fluid" alt="..." />
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">Single Room</h5>
                            <div class="star-rating">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <h6 class="star-amount">(735)</h6>
                                <h6 class="roomavail">
                                    | Tersisa 4 kamar lagi
                                </h6>
                            </div>
                            <b class="card-text">Fasilitas</b>
                            <ul class="split-list">
                                <li>1 kamar mandi</li>
                                <li>Kulkas mini</li>
                                <li>1 tempat tidur double</li>
                                <li>High Speed WiFi</li>
                                <li>Sarapan</li>
                                <li>TV</li>
                            </ul>
                            <div class="flex">
                                <h3 class="card-text">Rp 350.000</h3>

                                <h6><span class="blue-text">/malam</span></h6>
                                <button type="button" class="btn btn-dark">
                                    Pesan Kamar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 900px">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="{{ asset('assets/standard.jpg') }}" class="img-fluid" alt="..." />
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">Standard Room</h5>
                            <div class="star-rating">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <h6 class="star-amount">(735)</h6>
                                <h6 class="roomavail">
                                    | Tersisa 3 kamar lagi
                                </h6>
                            </div>
                            <b class="card-text">Fasilitas</b>
                            <ul class="split-list">
                                <li>1 kamar mandi</li>
                                <li>Kulkas mini</li>
                                <li>1 tempat tidur double</li>
                                <li>High Speed WiFi</li>
                                <li>Sarapan</li>
                                <li>TV</li>
                            </ul>
                            <div class="flex">
                                <h3 class="card-text">Rp 400.000</h3>

                                <h6><span class="blue-text">/malam</span></h6>
                                <button type="button" class="btn-selected">
                                    Dipilih
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 900px">
                <div class="row g-0">
                    <div class="col-md-5">
                        <span class="img-out"><img src="{{ asset('assets/superior.jpg') }}" class="img-fluid"
                                alt="..." /></span>
                    </div>

                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">Superior Room</h5>
                            <div class="star-rating">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <h6 class="star-amount">(735)</h6>
                                <h6 class="roomout">
                                    | Habis, tunggu di lain hari
                                </h6>
                            </div>
                            <b class="card-text">Fasilitas</b>
                            <ul class="split-list">
                                <li>1 kamar mandi</li>
                                <li>Kulkas mini</li>
                                <li>1 tempat tidur double</li>
                                <li>High Speed WiFi</li>
                                <li>Sarapan</li>
                                <li>TV</li>
                            </ul>
                            <div class="flex">
                                <h3 class="card-text">Rp 600.000</h3>

                                <h6><span class="blue-text">/malam</span></h6>
                                <button type="button" class="btn-out">
                                    Pesan Kamar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 900px">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="{{ asset('assets/deluxe.jpg') }}" class="img-fluid" alt="..." />
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">Deluxe Twin Bed</h5>
                            <div class="star-rating">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <h6 class="star-amount">(735)</h6>
                                <h6 class="roomavail">
                                    | Tersisa 5 kamar lagi
                                </h6>
                            </div>
                            <b class="card-text">Fasilitas</b>
                            <ul class="split-list">
                                <li>1 kamar mandi</li>
                                <li>Kulkas mini</li>
                                <li>2 tempat tidur</li>
                                <li>High Speed WiFi</li>
                                <li>Sarapan</li>
                                <li>TV</li>
                            </ul>
                            <div class="flex">
                                <h3 class="card-text">Rp 800.000</h3>

                                <h6><span class="blue-text">/malam</span></h6>
                                <button type="button" class="btn btn-dark">
                                    Pesan Kamar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="orderdetail">
            <div class="card border-secondary mb-3" style="max-width: 28.5rem;">
                <div class="card-header"><b>Ringkasan Pemesanan</b></div>
                <div class="card-body text-secondary">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><i class="fa fa-calendar-check"></i>
                            Check in</label>

                        <input type="" class="form-control" id="exampleFormControlInput1"
                            placeholder="Minggu, 20.00 - 16 July 2023">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><i class="fa fa-calendar-minus"></i>
                            Check Out</label>
                        <input type="" class="form-control" id="exampleFormControlInput1"
                            placeholder="Senin, 20.00 - 17 July 2023">
                    </div>
                    <p> <i class="fa fa-building"></i> Kamar</p>
                    <div class="underlined-text">Superior Room</div>
                    <div class="flex-a">
                        <p>1 malam</p>
                        <h6>Rp 400.000</h6>
                    </div>
                    <div class="flex-a">
                        <p class="underlined-text">Jumlah kamar :</p>

                        <h6>1 Kamar</h6>
                    </div>
                    <div class="flex-a">
                        <b>Total</b>
                        <h5>Rp 700.000</h5>
                    </div>
                    <div class="input_grup input_btn">
                        <button type="button" class="btn btn-light">Lanjutkan Pemesanan</button>
                    </div>
                </div>
        </section>
    </span>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4 style="font-family:Great Vibes, cursive;font-size: 35px;">Hotel Citra Megah</h4>
                    <p>Hotel Citra Megah, hotel bintang lima terbaik <br> di Indonesia dengan lokasi yang statergis</p>

                    <div class="icons">
                        <p>Follow Us</p>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-linkedin"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                    </div>


                </div>
                <div class="col-md-3">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Term & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4>Recent Post</h4>
                    <div class="social-icons">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('assets/hotel.jfif') }}" alt="post">
                                    <p>Menemukan <br>Kesempurnaan dalam <br>Kesenangan Mengin...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('assets/interior.jpg') }}" alt="Twitter">
                                    <p>Menjadi Tuan Rumah <br>yang Tepat: Konferensi <br>dan Acara Bisnis di...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('assets/resto.jpg') }}" alt="Instagram">
                                    <p>Mengenal Dapur Lezat <br>Hotel Citra Megah: <br>Sebuah Petualangan...</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <h4>Contact Us</h4>
                    <ul class="contact-list">
                        <li><i class="fa-solid fa-phone"></i><span>123-567-890</span></li>
                        <li><i class="fa-regular fa-envelope"></i><span>hotelcitramegah@gmail.com</span></li>
                        <li><i class="fa-solid fa-location-dot"></i><span>Jl. Raya Krapyak, Jl. Karanganyar Raya,
                                Wedomartani, Kec. Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 555584</span>
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <hr>
                        <p class="copyright"> Copyright <span> &copy;</span> 2024 Hotel Citra Megah</p>
                    </div>
                </div>
            </div>
    </footer>

    {{-- ======================================================================================= --}}
    {{-- ----------------------------------------SCRIPT-------------------------------- --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
