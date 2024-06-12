<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Citra Megah</title>
    <link rel="stylesheet" href="{{asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
    background-image:url({{asset('assets/room1.jpg')}});
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

 .recom .text{
    margin-left: 5%;
 }
.resize{
    margin-left: 5%;
}

.img-thumbnail{
    width: 20%;
    border-radius: 10%;
}
.text-p{
    color: #ddd;
    font-family: Arial, Helvetica, sans-serif;
}

.dropdown-icon {
    position: absolute;
    right: 10px;
    pointer-events: none; /* Ikon tidak akan mengganggu klik pada input */
    font-size: 16px;
    z-index: 2; /* Pastikan ikon berada di atas input */
    color: #00887A;
}
#date-input {
    padding: 5px;
    font-size: 16px;
    width: 200px;
    text-align: center;
    cursor: pointer;
}

.calendar {
    position: absolute;
    top: 100px;
    border: 1px solid #ccc;
    background-color: #fff;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    z-index:1000;
}

.hidden {
    display: none;
}

.calendar-header {
    display: flex;
    justify-content: space-between;
    padding: 10px;
    background-color: #f0f0f0;
}

.calendar-header span {
    cursor: pointer;
}

.calendar-body {
    padding: 10px;
}

.calendar-weekdays, .calendar-days {
    display: flex;
    flex-wrap: wrap;
}

.calendar-weekdays div, .calendar-days div {
    width: 10%;
    text-align: center;
    padding: 10px 0;
}

.calendar-weekdays div {
    font-weight: bold;
}

.calendar-days div {
    cursor: pointer;
}

.calendar-days div:hover {
    background-color: #f0f0f0;
}      
    </style>
</head>
<body>

<!-- Hero Section -->
    <!-- Navigation -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const dateInput = document.getElementById('date-input');
    const calendar = document.getElementById('calendar');
    const monthYear = document.getElementById('month-year');
    const prevMonth = document.getElementById('prev-month');
    const nextMonth = document.getElementById('next-month');
    const weekdaysContainer = document.querySelector('.calendar-weekdays');
    const daysContainer = document.querySelector('.calendar-days');

    const weekdays = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    let date = new Date();

    function renderCalendar() {
        date.setDate(1);
        const firstDayIndex = date.getDay();
        const lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();
        const prevLastDay = new Date(date.getFullYear(), date.getMonth(), 0).getDate();
        const lastDayIndex = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDay();
        const nextDays = 7 - lastDayIndex - 1;

        monthYear.innerText = `${date.toLocaleString('default', { month: 'long' })} ${date.getFullYear()}`;

        let days = '';

        for (let x = firstDayIndex; x > 0; x--) {
            days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
        }

        for (let i = 1; i <= lastDay; i++) {
            days += `<div>${i}</div>`;
        }

        for (let j = 1; j <= nextDays; j++) {
            days += `<div class="next-date">${j}</div>`;
        }

        daysContainer.innerHTML = days;
    }

    function renderWeekdays() {
        let weekdaysHTML = '';
        weekdays.forEach(day => {
            weekdaysHTML += `<div>${day}</div>`;
        });
        weekdaysContainer.innerHTML = weekdaysHTML;
    }

    dateInput.addEventListener('click', () => {
        calendar.classList.toggle('hidden');
    });

    prevMonth.addEventListener('click', () => {
        date.setMonth(date.getMonth() - 1);
        renderCalendar();
    });

    nextMonth.addEventListener('click', () => {
        date.setMonth(date.getMonth() + 1);
        renderCalendar();
    });

    daysContainer.addEventListener('click', (e) => {
        if (e.target.textContent !== '') {
            dateInput.value = `${e.target.textContent} ${monthYear.textContent}`;
            calendar.classList.add('hidden');
        }
    });

    renderWeekdays();
    renderCalendar();
});

</script>
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
                            </select>
                        </div>
                    </div>

                    <div class="input_grup">
                        <input type="enabled" id="date-input" placeholder="Check in" required>
                    </div>
                        <div id="calendar" class="calendar hidden">
                            <div class="calendar-header">
                                <span id="prev-month">&#9664;</span>
                                <span id="month-year"></span>
                                <span id="next-month">&#9654;</span>
                            </div>
                            <div class="calendar-body">
                                <div class="calendar-weekdays"></div>
                                <div class="calendar-days"></div>
                            </div>
                        </div>
                   

                    <div class="input_grup">
                        <input type="" id="check-out" name="check-out" value="Check Out" required>
                    </div>

                    <div class="input_grup">
                        <label for="promo-code">Kode Promo:</label>
                        <input type="text" id="promo-code" name="promo-code">
                    </div>

                    <div class="input_grup input_btn">
                        <button type="button" class="btn btn-light">BOOKING</button>
                    </div>
                </form>
            </section>

            <section class="recom">
                <div class="text">
                    <h3>Rekomendasi</h3>
                    <p>Dibawah ini adalah kamar-kamar yang kami rekomendasikan <br>untuk Anda yang pastinya memiliki kualitas terbaik.</p>
                </div>
                <div class="resize">
                    <img src="{{asset('assets/standar.jpg')}}" class="img-thumbnail mx-4" alt="">
                    <img src="{{asset('assets/super room.jpg')}}" class="img-thumbnail mx-4" alt="">
                    <img src="{{asset('assets/room.jpg')}}" class="img-thumbnail mx-4" alt="">
                    <img src="{{asset('assets/room1.jpg')}}" class="img-thumbnail mx-4" alt="">
                </div>
            </section>

            <section class="aboutus" id="aboutus">
                <h4>About Us</h4>
                <h2>Selamat Datang di Hotel Citra Megah</h2>
                <div class="img">
                    <img src="{{asset('assets/frontroom.jpg')}}" alt="">
                </div>
                <div class="text">
                    <p>Kami adalah hotel mewah dengan layanan yang tak tertandingi dan keramahan yang hangat. Dengan lokasi trategis di pusat kota, kami menawarkan pengalaman menginap yang tak terlupakan bagi para tamu kami. Staf kami yang profesional dan berpengalaman siap membantu Anda menjadikan setiap kunjungan Anda menjadi istimewa.</p>
                </div>

            </section>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
