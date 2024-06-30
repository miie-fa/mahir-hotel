<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Hotel Citra Megah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap');
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
            background-image: url({{ asset('assets/room.webp') }});
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

        .user-name {
            font-family: "Outfit", sans-serif;
            font-size: 16px;
            color: #000;
            margin-right: 10px;
        }

        .logout-btn {
            padding: 10px 20px;
            background-color: #1a1a1d;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout-btn:hover {
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
                height: auto; /* Ubah tinggi menjadi dinamis */
                min-height: 100vh; /* Set minimal tinggi agar tetap penuh layar */
                padding-top: 20px; /* Tambahkan ruang atas */
            }

            .navbar {
                flex-direction: column; /* Tampilkan item nav dalam satu kolom */
                align-items: flex-start; /* Mulai dari kiri */
                padding: 10px; /* Sesuaikan padding */
            }

            .logo {
                margin-left: 10px; /* Sesuaikan margin */
                font-size: 30px; /* Sesuaikan ukuran font */
                text-align: left; /* Tekstur kiri */
            }

            .nav-links {
                flex-direction: column; /* Tampilkan link dalam satu kolom */
                gap: 10px; /* Sesuaikan jarak antar link */
                margin-top: 10px; /* Tambahkan margin atas */
                padding-left: 10px; /* Sesuaikan padding */
            }

            .nav-links li {
                margin-left: 0; /* Hapus margin kiri */
                text-align: left; /* Tekstur kiri */
            }

            .login-signup {
                margin-top: 10px; /* Tambahkan margin atas */
                margin-right: 10px; /* Tambahkan margin kanan */
                justify-content: flex-end; /* Posisi ke kanan */
            }

            .main .text {
                top: 10%; /* Sesuaikan posisi teks */
                left: 5%; /* Sesuaikan posisi teks */
                text-align: center; /* Teks ke tengah */
            }

            .text h2 {
                font-size: 30px; /* Sesuaikan ukuran font */
                text-align: center; /* Teks ke tengah */
            }

            .text-p {
                margin-top: 5%; /* Sesuaikan margin atas */
                text-align: center; /* Teks ke tengah */
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

        /* REKOMENDASI */
        .item-carousel img {
            width: 70%;
            height: 70%;
            object-fit: cover;
        }

        .rekomendasi h2 {
            font-size: 40px;
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }

        .rekomendasi p {
            font-size: 20px;
            font-family: "Outfit", sans-serif;
            font-style: normal;
        }

        .rekomendasi h6 {
            font-size: 20px;
            font-family: "Outfit", sans-serif;
            font-style: normal;
        }

        .control-carousel,
        .control-carousel-next {
            background-color: #00887A; /* Ubah warna ikon panah di sini */
        }

        /* ABOUT US */
        .section4 {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            margin-top: 10%;
        }

        .title {
            text-align: center;
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
            margin-bottom: 20px;
        }

        .textt h4 {
            margin: 0;
            font-size: 1.5em;
            color: #00887A;
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }

        .textt h2 {
            margin: 10px 0 0 0;
            font-size: 2em;
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }

        .title img {
            width: 500px;
            max-width: 900px;
            height: 500px;
            border-radius: 8px;
        }

        .textt {
            text-align: center;
            margin-top: 20px;
            max-width: 800px;
        }

        .textt p {
            font-size: 1em;
            line-height: 1.5;
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }

        .textt .icons {
            font-family: "Outfit", sans-serif;
            font-size: 20px;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }

        .Read {
            margin-top: 20px;
        }

        .btn {
            padding: 10px 20px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }

        .btn-dark {
            background-color: #333;
            color: #fff;
        }

        /* Responsive Design */
        @media (min-width: 768px) {
            .section4 {
                flex-direction: row;
                justify-content: space-around;
                align-items: flex-start;
            }

            .textt {
                text-align: left;
                margin-top: 0;
                max-width: 600px;
            }

            .img {
                flex: 1;
                text-align: right;
                margin-right: 20px;
            }

            .img img {
                max-width: 400px;
            }
        }

        @media (min-width: 1200px) {
            .title h4 {
                font-size: 2em;
            }

            .title h2 {
                font-size: 3em;
            }

            .textt p {

            }

            .btn {
                font-size: 1.2em;
            }
        }

        /* WHY US */
        .section5 {
            background-size: cover;
            position: relative;
            background-image: url({{ asset('assets/backcer.webp') }});
        }

        .section5 p {
            color: white;
            font-size: 1rem;
            font-family: "Outfit", sans-serif;
            font-size: 20px;
            font-optical-sizing: auto;
            font-style: normal;
        }

        .section5 h2 {
            color: white;
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
            border-radius: 10%;
            min-height: 300px; /* Atur tinggi minimum kartu */
        }

        .card-body {
            text-align: center;
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }

        .icon {
            font-size: 2rem;
            color: #007bff;
        }

        .card-icon {
            font-size: 2rem;
            margin-bottom: 2rem;
        }

        @media (max-width: 767px) {
            .section5 {
                padding: 40px 0;
            }
        }

        /* KAMAR TERPOPULER */
        .card-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-left: 5%;
            margin-right: 5%;
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }

        /* Label styling */
        .card-head label {
            font-size: 2rem;
            font-weight: bold;
        }

        .section6 .card {
            min-width: 300px;
            background-color: #f8f8f8;
            margin: 2%;
        }

        .card-img-top {
            width: 110%;
            height: auto;
            object-fit: cover;
            margin-left: -5%;
        }

        .section6 h5 {
            text-align: left;
            font-weight: 600;
        }

        .section6 p {
            text-align: left;
        }

        .section6 .label {
            font-size: 1rem;
            text-align: left;
        }

        .section6 .btn-color {
            background-color: #00887A;
            color: white;
            font-size: 1rem;
            position: relative;
            width: 40%;
            height: 22%;
            padding: 2%;
        }

        .section6 .icons {
            text-align: left;
        }

        .icons i {
            font-size: 12px;
            margin: 5px; /* Memberikan margin ke semua sisi */
        }

        /* Button styling */
        .card-head .btn {
            padding: 0.5rem 1rem;
            text-decoration: none;
            color: white;
            background-color: #333;
            border: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .card-head .btn:hover {
            background-color: #555;
        }

        /* Responsive adjustments */
        @media (max-width: 600px) {
            .card-head {
                flex-direction: column;
                align-items: flex-start;
            }

            .card-head label {
                margin-bottom: 0.5rem;
            }

            .card-head .btn {
                align-self: stretch;
                text-align: center;
            }
        }

        /* FOTURED */
        .section8 {
            background-color: #f8f8f8;
        }

        .section8 h4 {
            padding-top: 5%;
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }

        .section8 img {
            margin-left: 20%;
            width: 400px;
            height: 300px;
            border-radius: 20px;
        }

        .paragraph h2 {
            font-family: "Great Vibes", cursive;
            font-size: 40px;
            font-weight: <weight>;
            font-style: normal;
        }

        .paragraph p {
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }

        .overlap-paragraph {
            position: absolute;
            top: 50%;
            left: 25%;
            transform: translate(20%, -50%);
            z-index: 1;
            background-color: white; /* Adjust as needed for readability */
            padding: 20px; /* Adjust padding as needed */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional for better visual */
            max-width: 600px; /* Set maximum width */
            width: 100%; /* Ensure it is responsive */
            border-radius: 20px;
        }

        @media (max-width: 768px) {
            .section7, .section8 {
                padding: 50px 0; /* Atur kembali padding untuk perangkat seluler */
            }

            .section8 .paragraph {
                padding: 20px; /* Atur ruang isian paragraf di kolom */
            }

            .section8 .overlap-paragraph {
                padding: 20px; /* Perluas isi ke jarak jauh */
            }

            .section8 img {
                margin-left: 0; /* Clear spacing when compressed */
                margin-bottom: 20px; /* Space between images */
            }
        }

        /* FACILITY */
        .card-title {
            text-align: center;
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400; /* Sesuaikan dengan bobot font yang diinginkan */
            font-style: normal;
        }

        .section9 .btn {
            background-color: #00887A;
            width: 15%;
            height: 10%;
            border-radius: 20px;
            color: white;
            font-size: 20px;
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400; /* Sesuaikan dengan bobot font yang diinginkan */
            font-style: normal;
            margin-left: 5%;
            margin-top: 2%;
            text-align: center;
            display: inline-block;
            padding: 10px;
        }

        @media (max-width: 1200px) {
            .section9 .btn {
                width: 20%;
                font-size: 18px;
            }
        }

        @media (max-width: 992px) {
            .section9 .btn {
                width: 25%;
                font-size: 16px;
            }
        }

        @media (max-width: 768px) {
            .section9 .btn {
                width: 40%;
                font-size: 14px;
                margin-left: 2%;
            }
        }

        @media (max-width: 576px) {
            .section9 .btn {
                width: 80%;
                font-size: 14px;
                margin-left: 10%;
            }

            .row {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
        }

        /* GALERI */
        .container.text-center {
            margin-top: 10%;
            align-content: center;
            justify-content: center;
            text-align: center;
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }

        .container.text-center .row.mb-4 {
            margin-top: 5%;
        }

        .container.text-center .row .col {
            padding: 0 0; /* Menambahkan padding horizontal pada kolom untuk jarak antar gambar */
        }

        .container.text-center .row .col img {
            max-height: 300px; /* Mengatur tinggi maksimum gambar */
            object-fit: cover; /* Memastikan gambar mengisi area tanpa distorsi */
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #00887A; /* Ubah warna latar belakang panah */
            background-size: 100%, 100%; /* Memastikan ikon panah memenuhi kontainer */
        }

        .carousel-control-prev-icon {
            background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns="http://www.w3.org/2000/svg" fill="%23fff" viewBox="0 0 8 8"%3E%3Cpath d="M0 4l4 4 1-1.06L2.94 4 5 1.06 4 0 0 4z"/%3E%3C/svg%3E');
        }

        .carousel-control-next-icon {
            background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns="http://www.w3.org/2000/svg" fill="%23fff" viewBox="0 0 8 8"%3E%3Cpath d="M4.5 0L3.5.94 6.56 4 3.5 7.06 4.5 8 8 4.5z"/%3E%3C/svg%3E');
        }

        /* Tambahkan media queries untuk membuat tampilan responsif */
        @media (max-width: 1200px) {
            .container.text-center .row .col img {
                width: 90%; /* Atur ulang lebar gambar untuk layar besar */
            }
        }

        @media (max-width: 992px) {
            .container.text-center .row .col img {
                width: 80%; /* Atur ulang lebar gambar untuk layar sedang */
            }
        }

        /* AJAKAN */
        .section10 {
            background-color: #00887A;
            text-align: center;
            font-family: "Outfit", sans-serif;
            font-size: 20px;
            font-style: normal;
            color: white;
            padding: 20px;
        }

        .section10 .btn-parag {
            color: white;
            background-color: #1a1a1d;
            margin-top: 5%;
            width: 250px;
            height: 50px;
            padding: 2px;
        }

        /* Tambahkan media queries untuk membuat tampilan responsif */
        @media (max-width: 1200px) {
            .section10 {
                font-size: 18px; /* Sesuaikan ukuran font untuk layar besar */
            }

            .section10 .btn-parag {
                width: 220px; /* Sesuaikan lebar tombol untuk layar besar */
                height: 45px; /* Sesuaikan tinggi tombol untuk layar besar */
            }
        }

        @media (max-width: 992px) {
            .section10 {
                font-size: 16px; /* Sesuaikan ukuran font untuk layar sedang */
                padding: 15px; /* Sesuaikan padding untuk layar sedang */
            }

            .section10 .btn-parag {
                width: 200px; /* Sesuaikan lebar tombol untuk layar sedang */
                height: 40px; /* Sesuaikan tinggi tombol untuk layar sedang */
            }
        }

        @media (max-width: 768px) {
            .section10 {
                font-size: 14px; /* Sesuaikan ukuran font untuk tablet */
                padding: 10px; /* Sesuaikan padding untuk tablet */
            }

            .section10 .btn-parag {
                width: 180px; /* Sesuaikan lebar tombol untuk tablet */
                height: 35px; /* Sesuaikan tinggi tombol untuk tablet */
            }
        }

        @media (max-width: 576px) {
            .section10 {
                font-size: 12px; /* Sesuaikan ukuran font untuk layar kecil */
                padding: 10px; /* Sesuaikan padding untuk layar kecil */
            }

            .section10 .btn-parag {
                width: 160px; /* Sesuaikan lebar tombol untuk layar kecil */
                height: 30px; /* Sesuaikan tinggi tombol untuk layar kecil */
                font-size: 14px; /* Sesuaikan ukuran font tombol untuk layar kecil */
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
            font-size: 25px; /* Besarkan ukuran ikon */
            transition: transform 0.3s; /* Animasi untuk efek hover */
            color: #00887A;
        }

        .icons i:hover {
            transform: scale(1.2); /* Membesarkan ikon saat dihover */
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
            list-style-type: none; /* Menghapus bullet points dari daftar */
            padding: 0;
            margin: 0;
        }

        .social-icons ul li {
            margin-bottom: 20px; /* Ruang antara setiap item */
        }

        .social-icons img {
            width: 50px; /* Ukuran gambar */
            height: 50px; /* Ukuran gambar */
            object-fit: cover; /* Memastikan gambar mengisi area tanpa distorsi */
            margin-right: 15px; /* Ruang antara gambar dan teks */
            float: left; /* Membuat gambar berada di sebelah kiri */
        }

        .social-icons p {
            font-size: 14px; /* Ukuran teks */
            line-height: 1.5; /* Spasi baris */
            margin: 0; /* Menghapus margin bawaan */
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
            list-style-type: none; /* Menghapus bullet points dari daftar */
            padding: 0;
            margin: 0;
        }

        .contact-list li {
            margin-bottom: 10px; /* Ruang antara setiap item daftar */
            display: flex;
            align-items: center; /* Memastikan ikon dan teks sejajar secara vertikal */
        }

        .contact-list li i {
            margin-right: 10px; /* Ruang antara ikon dan teks */
            font-size: 18px; /* Ukuran ikon */
            color: #00887A; /* Warna ikon */
        }

        .contact-list li span {
            display: inline-block;
            vertical-align: middle; /* Memastikan teks sejajar dengan ikon */
            max-width: calc(100% - 30px); /* Menghindari teks meluber keluar dari kolom */
        }

        .contact-list li i.fa-phone,
        .contact-list li i.fa-envelope,
        .contact-list li i.fa-location-dot {
            min-width: 20px; /* Lebar minimum untuk ikon, memastikan konsistensi jarak */
        }

        .contact-list li {
            font-size: 16px; /* Ukuran teks */
            color: white; /* Warna teks */
        }

        .footer .copyright {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #ccc;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">Dashboard Admin</div>
            <ul class="nav-links">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#rooms">Rooms</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="login-signup">
                <span class="user-name">{{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            </div>
        </nav>

        <div class="main" id="home">
            <div class="text">
                <h2><span>Hotel Citra Megah - Nikmati <br>Pengalaman Menginap <br>yang Luar Biasa</span></h2>
                <p class="text-p">Jadikan Liburan Anda Luar Biasa di Hotel Citra Megah,<br> Dapatkan Kenyamanan dan Pelayanan Terbaik!</p>
            </div>
        </div>
    </header>

    <section class="section_container booking_container">
        <h2 class="text-primary text-center">Booking Sekarang!</h2>
        <form action="" class="booking_form">
            <div class="input_grup">
                <div>
                    <select id="room-type" name="room-type" required>
                        <option selected>Pilihan Kamar</option>
                        <option value="standard">Standard Room</option>
                        <option value="superior">Superior Room</option>
                        <option value="twin">Twin Room</option>
                        <option value="twin">Deluxe Room</option>
                        <option value="twin">Suite Room</option>
                    </select>
                </div>
            </div>
            <div class="input_grup">
                <input type="text" id="check-in" name="check-in" value="Check In" required class="pointer" readonly>
            </div>
            <div class="input_grup">
                <input type="text" id="check-out" name="check-out" value="Check Out" required class="pointer" readonly>
            </div>
            <div class="input_grup">
                <input type="text" id="promo-code" name="promo-code" placeholder="Kode Promo">
            </div>
            <div class="input_grup input_btn">
                <button type="button" class="btn btn-light">BOOKING</button>
            </div>
        </form>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var checkIn = new Pikaday({ field: document.getElementById('check-in') });
                var checkOut = new Pikaday({ field: document.getElementById('check-out') });
            });
        </script>
    </section>

    <div class="container my-5 rekomendasi">
        <h2 class="text-left mb-4">Rekomendasi</h2>
        <p class="text-left mb-4">Dibawah ini adalah kamar yang kami rekomendasikan <br>untuk anda dan pastinya memiliki kualitas terbaik.</p>
        <div id="roomCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active item-carousel">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/standar.jpg') }}" alt="Standard Room">
                            <h6>Standard Room</h6>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('assets/super room.jpg') }}" alt="Superior Room">
                            <h6>Superior Room</h6>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('assets/twinroom.jfif') }}" alt="Twin Room">
                            <h6>Twin Room</h6>
                        </div>
                    </div>
                </div>
                <div class="carousel-item item-carousel">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/duluxeroom.jpg') }}" alt="Deluxe Room">
                            <h6>Deluxe Room</h6>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('assets/suiteroom.jpg') }}" alt="Suite Room">
                            <h6>Suite Room</h6>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#roomCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon control-carousel" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next" href="#roomCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon control-carousel-next" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
        </div>
    </div>

    <section class="section4" id="aboutus">
        <div class="title">
            <img src="{{ asset('assets/kamaar.jpg') }}" alt="Hotel Room">
        </div>

        <div class="textt">
            <h4>About Us</h4>
            <h2>Selamat Datang di Hotel Citra Megah</h2>
            <br><br>
            <p>Kami adalah hotel mewah dengan layanan yang tak tertandingi dan keramahan yang hangat. Dengan lokasi strategis di pusat kota, kami menawarkan pengalaman menginap yang tak terlupakan bagi para tamu kami. Staf kami yang profesional dan berpengalaman siap membantu Anda menjadikan setiap kunjungan Anda menjadi istimewa.</p>

            <div class="icons">
                <i class="fa fa-cutlery"></i> Restaurant &nbsp;&nbsp;
                <i class="fa fa-dumbbell"></i> Gym &nbsp;&nbsp;
                <i class="fa fa-calendar"></i> Event
            </div>
            <div class="Read">
                <button type="button" class="btn btn-dark">Read More</button>
            </div>
        </div>
    </section>

    <section class="section5 md-4 mb-4 my-5 ">
        <p class="text-center mb-4 mt-5" style="font-size: 2rem;">Why Us</p>
        <h2 class="text-center mb-4">Apa yang kami tawarkan di hotel ini untuk anda?</h2>
        <div class="row justify-content-center d-flex ">
            <div class="col-md-4 mb-4">
                <div class="card mx-2 my-2 mt-5">
                    <div class="card-body text-center">
                        <i class="fas fa-star card-icon"></i>
                        <h5 class="card-title">Kualitas Terbaik</h5>
                        <p class="card-text text-dark">Kami selalu berkomitmen untuk menyediakan kualitas tempat tinggal terbaik, lengkap dengan segala hal, mulai dari pelayanan hingga fasilitas yang kami tawarkan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card mx-2 my-2 mt-5">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marker-alt card-icon"></i>
                        <h5 class="card-title">Lokasi yang Strategis</h5>
                        <p class="card-text text-dark">Terletak di pusat kota, kami memposisikan lokasi mudah ke tempat-tempat penting, seperti pusat perbelanjaan, wisata, dan atraksi wisata terkenal.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card mx-2 my-2 mt-5 mb-5">
                    <div class="card-body text-center">
                        <i class="fas fa-bed card-icon"></i>
                        <h5 class="card-title">Kenyamanan yang Luar Biasa</h5>
                        <p class="card-text text-dark">Kamar-kamar kami dilengkapi dengan segala fasilitas modern yang Anda butuhkan untuk tinggal yang nyaman.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section6 md-4 mb-4 my-5 ">
        <div class="card-head">
            <label class="text-left mb-4">Kamar Terpopuler</label>
            <a href="" class="btn btn-right btn-dark">See More</a>
        </div>

        <div class="row justify-content-center d-flex ">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/standar.jpg') }}" class="card-img-top" alt="Standard">
                <div class="card-body">
                    <h5 class="card-title text-left">Standard Room</h5>
                    <p class="card-text">Kenyamanan sederhana dengan fasilitas lengkap.</p>
                    <div class="icons">
                        <i class="fas fa-user"><span>1</span></i>
                        <i class="fas fa-bath"><span>1</span></i>
                        <i class="fas fa-bed"><span>1</span></i>
                    </div>
                    <label for="" class="label"> <strong>400K </strong><small style="color: #00887A">/malam</small></label>
                    <a href="#" class="btn btn-color">Booking</a>
                </div>
            </div>

            <div class="card" style="width: 19rem;">
                <img src="{{ asset('assets/super room.jpg') }}" class="card-img-top" alt="Suite">
                <div class="card-body">
                    <h5 class="card-title text-left">Superior Room</h5>
                    <p class="card-text">Ruangan yang lebih luas dan pemandangan yang indah.</p>
                    <div class="icons">
                        <i class="fas fa-user"></i><span>1</span></i>
                        <i class="fas fa-bath"><span>1</span></i>
                        <i class="fas fa-bed"><span>1</span></i>
                    </div>
                    <label for="" class="label"> <strong>600K</strong> <small style="color: #00887A">/malam</small></label>
                    <a href="#" class="btn btn-color">Booking</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/duluxeroom.jpg') }}" class="card-img-top" alt="Deluxe" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title text-left">Deluxe Twin Bed</h5>
                    <p class="card-text">Kenyamanan dengan tempat tidur yang terpisah.</p>
                    <div class="icons">
                        <i class="fas fa-user"></i><span>2</span></i>
                        <i class="fas fa-bath"><span>1</span></i>
                        <i class="fas fa-bed"><span>2</span></i>
                    </div>
                    <label for="" class="label"> <strong>700K</strong> <small style="color: #00887A">/malam</small></label>
                    <a href="#" class="btn btn-color">Booking</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section7 container mt-5 my-5">
        <p class="text-center text-success">Hotel Service</p>
        <h2 class="text-center mb-4">Layanan Hotel Citra Megah</h2>
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="image text-center">
                    <img src="{{ asset('assets/layanan.jfif') }}" class="rounded mx-auto d-block" alt="Layanan Kamar 24 Jam" width="300" height="150">
                    <p class="mt-2">Layanan Kamar 24 Jam</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="image text-center">
                    <img src="{{ asset('assets/resto.jpg') }}" class="rounded mx-auto d-block" alt="Restoran Mewah" width="300" height="150">
                    <p class="mt-2">Restoran Mewah</p>
                </div>
            </div>
            <div class="col-md{ Debugger - User interaction required: response is too long (must not exceed 20480 characters) }
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="image text-center d-flex flex-column align-items-center">
                    <div class="d-flex">
                        <img src="{{ asset('assets/spa.jpg') }}" class="rounded" alt="Spa" width="200" height="150">
                        <img src="{{ asset('assets/kebugaran.jpg') }}" class="rounded ml-2" alt="Kebugaran" width="200" height="150">
                    </div>
                    <p class="mt-2">Spa dan Kebugaran</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section8 my-5">
        <h4 class="text-center mb-4" style="color: #00887A;">Fatured</h4>
        <h2 class="text-center mb-4">Apa Yang Membuat Hotel Kami Sangat Cocok Untuk Anda?</h2>
        <div class="row mb-4 my-5 mt-5 position-relative">
            <div class="col-md-6">
                <img src="{{ asset('assets/pemandangan.webp') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="paragraph p-4 overlap-paragraph">
                    <h2>Pemandangan kota yang memukau</h2>
                    <p>Hotel Citra Megah adalah destinasi yang sempurna bagi <br>Anda yang menginginkan pengalaman menginap dengan <br> pemandangan kota yang memukau. Kami berada di jantung <br>kota, memberikan Anda pemandangan yang spektakuler, <br>memadukan keindahan arsitektur modern dengan lanskap perkotaan yang gemerlap.</p>
                </div>
            </div>
        </div>
        <div class="row mb-4 my-5 mt-5 position-relative">
            <div class="col-md-6">
                <img src="{{ asset('assets/lok.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="paragraph p-3 overlap-paragraph">
                    <h2>Lokasi hotel yang strategis</h2>
                    <p>Lokasi yang strategis merupakan salah satu <br>keunggulan utama. Terletak di pusat kota, Anda akan <br>menemukan diri Anda dikeilingi oleh kehidupan perkotaan  <br>yang dinamis. Hanya beberapa langkah dari hotel, Anda <br>dapat menjelajahi atraksi lokal, mengeksplorasi tempat-tempat <br> wisata populer dan menikmati kehidupan malam yang berwarna. </p>
                </div>
            </div>
        </div>
        <div class="row mb-4 my-5 mt-5 position-relative">
            <div class="col-md-6">
                <img src="{{ asset('assets/interior.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="paragraph p-3 overlap-paragraph">
                    <h2>Interior yang elegan dan modern</h2>
                    <p>Di Hotel Citra Megah, kami menghadirkan keindahan interior yang <br>elegan dan modern untuk memenuhi selera para tamu yang menghargai <br>sentuhan keanggunan dan kemewahan. Setiap ruangan kami dirancang <br>dengan penuh perhatian terhadap detail, menciptakan atsmofer yang <br>mewah dan memikat. Bersiaplah untuk merasakan pengalaman menginap yang tak terlupakan di lingkungan yang begitu indah dan menginspirasi.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section9 my-5">
        <div class="card-title">
            <p style="color: #00887A; font-size:20px;">Facility</p>
            <h2>Beberapa Fasilitas Hotel Kami</h2>
        </div>
        
        <div class="row justify-content-center d-flex">
            <a href="" class="btn">
                <i class="fa fa-bed"></i> 145 Kamar
            </a>

            <a href="" class="btn">
                <i class="fa fa-utensils"></i> Restoran
            </a>

            <a href="" class="btn">
                <i class="fa fa-person-swimming"></i> Kolam Renang
            </a>
            <a href="" class="btn">
                <i class="fa fa-mosque"></i> Mushola
            </a>
        </div>

        <div class="row justify-content-center d-flex">
            <a href="" class="btn">
                <i class="fa fa-wifi"></i> Wi-fi
            </a>

            <a href="" class="btn">
                <i class="fa-regular fa-clock"></i> Layanan 24 jam
            </a>

            <a href="" class="btn">
                <i class="fa fa-water"></i> Laundry
            </a>
            <a href="" class="btn">
                <i class="fa fa-car"></i> Antar jemput
            </a>
        </div>
    </section>

    <div class="container text-center">
        <div class="title-h2">
            <h2>Galeri Kami</h2>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row mb-4">
                        <div class="col mb-3">
                            <img src="{{ asset('assets/mushola.jpg') }}" alt="" style="width: 250px;height:300px;">
                        </div>
                        <div class="col mb-3">
                            <img src="{{ asset('assets/backec.jfif') }}" alt="" style="width: 230px;height:300px;">
                        </div>
                        <div class="col mb-3">
                            <img src="{{ asset('assets/resto.jpg') }}" alt="" style="width: 400px;height:300px;">
                        </div>
                        <div class="col mb-3">
                            <img src="{{ asset('assets/laundry.jfif') }}" alt="" style="width: 200px;height:300px;">
                        </div>
                        <div class="col mb-3">
                            <img src="{{ asset('assets/spa.jpg') }}" alt="" style="width: 250px;height:300px;">
                        </div>
                        <div class="col mb-3">
                            <img src="{{ asset('assets/twinroom.jfif') }}" alt="" style="width: 350px;height:300px;">
                        </div>
                        <div class="col mb-3">
                            <img src="{{ asset('assets/lobi.jfif') }}" alt="" style="width: 300px;height:300px;">
                        </div>
                        <div class="col mb-3">
                            <img src="{{ asset('assets/kebugaran.jpg') }}" alt="" style="width: 200px;height:300px;">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row mb-4">
                        <div class="col mb-3">
                            <img src="{{ asset('assets/about.jpg') }}" alt="" style="width: 250px;height:300px;">
                        </div>
                        <div class="col mb-3">
                            <img src="{{ asset('assets/kolam.jfif') }}" alt="" style="width: 350px;height:300px;">
                        </div>
                        <div class="col mb-3">
                            <img src="{{ asset('assets/interior.jpg') }}" alt="" style="width: 300px;height:300px;">
                        </div>
                        <div class="col mb-3">
                            <img src="{{ asset('assets/super room.jpg') }}" alt="" style="width: 200px;height:300px;">
                        </div>
                        <div class="col mb-3">
                            <img src="{{ asset('assets/standar.jpg') }}" alt="" style="width: 250px;height:300px;">
                        </div>
                        <div class="col mb-3">
                            <img src="{{ asset('assets/hotel.jfif') }}" alt="" style="width: 230px;height:300px;">
                        </div>
                        <div class="col mb-3">
                            <img src="{{ asset('assets/lok.jpg') }}" alt="" style="width: 400px;height:300px;">
                        </div>
                        <div class="col mb-3">
                            <img src="{{ asset('assets/balroom.jfif') }}" alt="" style="width: 200px;height:300px;">
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <section class="section10">
        <div class="text-prag">
            Jangan lewatkan kesempatan untuk menginap di Hotel Citra Megah <br> dan rasakan pengalaman menginap yang tak terlupakan. Pesan sekarang <br> untuk mendapatkan harga spesial dan penawaran terbatas!.
        </div>
        <a href="" class="btn btn-parag">Booking Sekarang!</a>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4 style="font-family:Great Vibes, cursive;font-size: 35px;">Hotel Citra Megah</h4>
                    <p>Hotel Citra Megah, hotel bintang lima terbaik <br> di Indonesia dengan lokasi yang strategis</p>
                    
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
                                    <img src="{{ asset('assets/hotel.jpg') }}" alt="post">
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
                        <li><i class="fa-solid fa-location-dot"></i><span>Jl. Raya Krapyak, Jl. Karanganyar Raya, Wedomartani, Kec. Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 555584</span></li>
                    </ul>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <hr>
                        <p class="copyright">Copyright <span>&copy;</span> 2024 Hotel Citra Megah</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{--======================================================================================= --}}
    {{-- ----------------------------------------SCRIPT-------------------------------- --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
