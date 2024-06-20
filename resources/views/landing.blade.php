<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Citra Megah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="{{asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    <!-- Pikaday JS -->
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>

    <style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
    scroll-behavior: smooth;
    }

    header{
    width: 100%;
    height: 90vh;
    background-size: cover;
    position: relative;
    background-image:url({{asset('assets/suiteroom.jpg')}});
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
        font-size: 24px;
        font-family: 'Brush Script MT', cursive;
        margin-left: 20;
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

    .main .text{
    position: absolute;
    top: 30%;
    left: 5%;
    }

.text h2{
    font-size: 50px;
    color: white;
    font-weight: 600;
    text-transform: capitalize;
}

.text-p{
    margin-top: 10%;
    color: white;
    font-size: 1.2em;
}

/* BOOOKING */
.booking_container{
  
    margin-left: 5%;
    margin-right: 5%;
    margin-top: -4%;
}

.booking_form{
 
    padding: 2rem;
    display: flex;
    gap: 1rem;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    background-color: #00887A;
    border-radius: 10px;
    transform: translateY(-50%);
    box-shadow: 5px 5px 20px rgba(0,0,0,0.1);
}
.input_grup{
    flex: 1 1 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
}

.input_grup input{
    display: block;
    width: 50%;
    max-width: 150px;
    padding-block: 5px;
    color: var(--text-dark--);
    font-size: 0.9rem;
    outline : none;
    border: none;
}

.pointer{
    cursor: pointer;
    position: relative;
}
.input_grup select{
    display: block;
    width: 100%;
    max-width: 150px;
    padding-block: 5px;
    color: var(--text-dark--);
    font-size: 0.9rem;
    outline : none;
    border: none;
}

.input_grup input{
    display: block;
    width: 50%;
    max-width: 150px;
    padding-block: 5px;
    color: var(--text-dark--);
    font-size: 0.9rem;
    outline : none;
    border: none;
}

.input_grup input::placeholder{
    color: var(--text-light--);
} 
 .input_grup button{
    border-radius: 40px;
    width: 60%;
    height: 5%;
    background-color: #1a1a1d;
    color: #ddd;
 }

    /* REKOMENDASI */
    .carousel-item img {
      width: 70%;
      height: 70%;
      object-fit: cover;
    }

    .container h2{
        font-size: 40px;
    }
    .container p{
        font-size: 20px;
    }
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
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
            margin-bottom: 20px;
        }

        .textt h4 {
            margin: 0;
            font-size: 1.5em;
            color: #00887A;
        }

        .textt h2 {
            margin: 10px 0 0 0;
            font-size: 2em;
        }

        .title img {
            width: 100%;
            max-width: 400px;
            height: auto;
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
    </style>
</head>
<body>


    <header>
        <nav class="navbar">
            <div class="logo">Hotel Citra Megah</div>
            <ul class="nav-links">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#rooms">Rooms</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="login-signup">
                <button class="login-btn">Login/Sign Up</button>
            </div>
        </nav>

        <div class="main" id="home">
            <div class="text">
                <h2><span>Hotel Citra Megah - Nikmati <br>Pengalaman Manginap <br>yang Luar Biasa</span></h2>
                <p class="text-p">Jadikan Liburan Anda Luar Biasa di Hotel Citra Megah,<br> Dapatkan Kenyamanan dan Pelayanan Terbaik!</p>
            </div>
        </div>
    </header>
            <section class="section_container booking_container">
                <h2 class="text-primary">Booking Sekarang!</h2>
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
                        <label for="promo-code">Kode Promo:</label>
                        <input type="text" id="promo-code" name="promo-code">
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

            <div class="container my-5">
                <h2 class="text-left mb-4">Rekomendasi</h2>
                <p class="text-left mb-4">Dibawah ini adalah kamar yang kami rekomendasikan <br>untuk anda dan pastinya memiliki kualitas terbaik.</p>
                <div id="roomCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="row">
                        <div class="col-md-4">
                          <img src="{{asset('assets/standar.jpg')}}" alt="Standard Room">
                            <h6>Standard Room</h6>
                        </div>
                        <div class="col-md-4">
                          <img src="{{asset('assets/super room.jpg')}}" alt="Superior Room">
                            <h6>Superior Room</h6>
                        </div>
                        <div class="col-md-4">
                          <img src="{{asset('assets/twinroom.jfif')}}" alt="Twin Room">
                            <h6>Twin Room</h6>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col-md-4">
                          <img src="{{asset('assets/duluxeroom.jpg')}}" alt="Deluxe Room">
                            <h6>Deluxe Room</h6>
                        </div>
                        <div class="col-md-4">
                          <img src="{{asset('assets/suiteroom.jpg')}}" alt="Suite Room">
                            <h6>Suite Room</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#roomCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                  </a>
                  <a class="carousel-control-next" href="#roomCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                  </a>
                </div>
              </div>
            <section class="section4" id="aboutus">
                <div class="title">
                    <img src="{{asset('assets/about.jpg')}}" alt="Hotel Room">
                </div>
                   
                <div class="textt">
                    <h4>About Us</h4>
                    <h2>Selamat Datang di Hotel Citra Megah</h2>
                    <br><br>
                    <p>Kami adalah hotel mewah dengan layanan yang tak tertandingi dan keramahan yang hangat. Dengan lokasi strategis di pusat kota, kami menawarkan pengalaman menginap yang tak terlupakan bagi para tamu kami. Staf kami yang profesional dan berpengalaman siap membantu Anda menjadikan setiap kunjungan Anda menjadi istimewa.</p>

                    <div class="icons">
                        <i class="fa-solid fa-martini-glass-citrus"></i>
                        <i class="fa-solid fa-dumbbell"></i>
                        <i class="fa-solid fa-calendar"></i>
                    </div>
                    <div class="Read">
                        <button type="button" class="btn btn-dark">Read More</button>
                    </div>
                </div>
            </section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
