<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Citra Megah - Keranjang Pemesanan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/keranjang pemesanan/styles.css">
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Hotel Citra Megah</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Rooms</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Robert Delwyn
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('keranjang-pemesanan.index')}}">Keranjang Pemesanan</a>
                        <a class="dropdown-item" href="#">Profil Setting</a>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </header>

    @yield('content')

    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Hotel Citra Megah</h5>
                    <p>Hotel Citra Megah, hotel bintang lima terbaik di indonesia dengan lokasi yg strategis</p>
                    <p>Follow Us</p>
                    <a href="#" class="text-light"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-light"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="text-light"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-light"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="col-md-2">
                    <h5>Navigation</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">Help Center</a></li>
                        <li><a href="#" class="text-light">Careers</a></li>
                        <li><a href="#" class="text-light">Terms & Conditions</a></li>
                        <li><a href="#" class="text-light">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Recent Post</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">Menemukan Kesempurnaan dalam Kesenangan Mengin...</a></li>
                        <li><a href="#" class="text-light">Menjadi Tuan Rumah yang Tepat: Konfensi dan Acara Bisnis di...</a></li>
                        <li><a href="#" class="text-light">Mengenal Dapur Lezat Hotel Citra Megah: Sebuah Petualangan...</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone"></i> 1234-567-890</li>
                        <li><i class="fa fa-envelope"></i> hotelcitramegah@gmail.com</li>
                        <li><i class="fa fa-map-marker-alt"></i> Jl. Raya Krapyak, Jl. Karanganyar Raya No.RT.05, Karanganyar, Wedomartani, Kec. Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
