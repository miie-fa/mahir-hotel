<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Hotel Citra Megah</title>
        <link rel="stylesheet" href="{{asset('css/app.css') }}" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        />
        <style>
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
                font-family: "Brush Script MT", cursive;
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
                content: "";
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
                text-transform: capitalize;
            }
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
                background-color: #00887a;
                border-radius: 10px;
                margin-top: 5%;
                margin-bottom: 2%;
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
                display: block;
                width: 50%;
                max-width: 150px;
                padding-block: 5px;
                color: var(--text-dark--);
                font-size: 0.9rem;
                outline: none;
                border: none;
            }
            .input_grup select {
                display: block;
                width: 100%;
                max-width: 150px;
                padding-block: 5px;
                color: var(--text-dark--);
                font-size: 0.9rem;
                outline: none;
                border: none;
            }

            .input_grup input {
                display: block;
                width: 50%;
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
                border-radius: 40px;
                width: 60%;
                height: 5%;
                background-color: #1a1a1d;
                color: #ddd;
            }

            .recom .text {
                margin-left: 5%;
            }
            .resize {
                margin-left: 5%;
                margin-top: 2%;
            }

            .img-thumbnail {
                width: 20%;
                border-radius: 10%;
            }
            .text-p {
                color: #ddd;
                font-family: Arial, Helvetica, sans-serif;
            }

            .dropdown-icon {
                position: absolute;
                right: 10px;
                pointer-events: none; /* Ikon tidak akan mengganggu klik pada input */
                font-size: 16px;
                z-index: 2; /* Pastikan ikon berada di atas input */
                color: #00887a;
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
                top: 840px;
                border: 1px solid #ccc;
                background-color: #fff;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                z-index: 1000;
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

            .calendar-weekdays,
            .calendar-days {
                display: flex;
                flex-wrap: wrap;
            }

            .calendar-weekdays div,
            .calendar-days div {
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
                margin-top: 5%;
            }
            .roomlistgroup{
                
                display: flex;
            }
           
            .roomlist {
                margin-left: 5%;
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
            .orderdetail{
                margin-left: 0.5%;
                width: 28.5rem;
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
            .flex-a{
                display: flex;
                justify-content: space-between;
                max-width: 26rem;
            }
            .flex-b{
                display: flex;
                justify-content: space-between;
                max-width: 60rem;
            }
            .footer {
            background-color: #162034;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            width: 100%;
            bottom: 0;
            }
            .btna{
               
                margin-top: 31%;
                margin-left: 5%;
                font-size: 250%;
                color: white;
                background-color: #162034;
                border-radius: 10px;
                width: 13.5rem;
                height: 6rem;
                
            }
            .roomdetail {
                margin-left: 5%;
            }
            .roomdetail ul {
                list-style-type: none;
            }


      

           
        </style>
    </head>
    <body>
        <!-- Hero Section -->
        <!-- Navigation -->
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const dateInput = document.getElementById("date-input");
                const calendar = document.getElementById("calendar");
                const monthYear = document.getElementById("month-year");
                const prevMonth = document.getElementById("prev-month");
                const nextMonth = document.getElementById("next-month");
                const weekdaysContainer =
                    document.querySelector(".calendar-weekdays");
                const daysContainer = document.querySelector(".calendar-days");

                const weekdays = [
                    "Sun",
                    "Mon",
                    "Tue",
                    "Wed",
                    "Thu",
                    "Fri",
                    "Sat",
                ];
                let date = new Date();

                function renderCalendar() {
                    date.setDate(1);
                    const firstDayIndex = date.getDay();
                    const lastDay = new Date(
                        date.getFullYear(),
                        date.getMonth() + 1,
                        0
                    ).getDate();
                    const prevLastDay = new Date(
                        date.getFullYear(),
                        date.getMonth(),
                        0
                    ).getDate();
                    const lastDayIndex = new Date(
                        date.getFullYear(),
                        date.getMonth() + 1,
                        0
                    ).getDay();
                    const nextDays = 7 - lastDayIndex - 1;

                    monthYear.innerText = `${date.toLocaleString("default", {
                        month: "long",
                    })} ${date.getFullYear()}`;

                    let days = "";

                    for (let x = firstDayIndex; x > 0; x--) {
                        days += `<div class="prev-date">${
                            prevLastDay - x + 1
                        }</div>`;
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
                    let weekdaysHTML = "";
                    weekdays.forEach((day) => {
                        weekdaysHTML += `<div>${day}</div>`;
                    });
                    weekdaysContainer.innerHTML = weekdaysHTML;
                }

                dateInput.addEventListener("click", () => {
                    calendar.classList.toggle("hidden");
                });

                prevMonth.addEventListener("click", () => {
                    date.setMonth(date.getMonth() - 1);
                    renderCalendar();
                });

                nextMonth.addEventListener("click", () => {
                    date.setMonth(date.getMonth() + 1);
                    renderCalendar();
                });

                daysContainer.addEventListener("click", (e) => {
                    if (e.target.textContent !== "") {
                        dateInput.value = `${e.target.textContent} ${monthYear.textContent}`;
                        calendar.classList.add("hidden");
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
       

        <section class="topcard">
            <div class="text">
                <h3>Kamar Superior</h3>
            </div>

        </section>
       
        <span class="roomlistgroup">
    <section class="roomdetail">
        <div class="card mb-3" style="max-width: 900px">
            <div class="row g-0">
                <div class="col-md-12">
                    <img
                        src="{{asset('assets/superior.jpg')}}"
                        class="img-fluid"
                        alt="..."
                    />
                </div>
                <div class="col-md-12">
                    <div class="card-body">
                        
                        <div class="flex-b">
                            <h5 class="card-title">Superior Room</h5>
                            <div class="star-rating">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <h6 class="star-amount">(735)</h6>
                            </div>
                        </div>
                       
                        <p>Nikmati kenyamanan superior di kamar Superior kami. Desain interior yang elegan dan mewah menciptakan suasana yang sempurna untuk melepas penat setelah hari yang panjang. kamar luad dengan area tidur dan tempat duduk yang terpisah memberikan privasi dan ruang yang lapang</p>
                        <b class="card-text">Fasilitas</b>
                        <ul class="split-list">
                            <li>
                                <i class="fa fa-bath" aria-hidden="true"></i> 1 kamar mandi
                            </li>
                            <li>
                                <i class="fa fa-archive" aria-hidden="true"></i>
                                 Kulkas mini</li>
                            <li>
                                <i class="fa fa-bed" aria-hidden="true"></i>
                                 1 tempat tidur double</li>
                            <li>
                                <i class="fa fa-wifi" aria-hidden="true"></i>
                                 High Speed WiFi</li>
                            <li>
                                <i class="fa fa-coffee" aria-hidden="true"></i>

                                 Sarapan</li>
                            <li>
                                <i class="fa fa-tablet" aria-hidden="true"></i>
                                TV</li>
                        </ul>
                      
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
                <label for="exampleFormControlInput1" class="form-label"><i class="fa fa-calendar-check"></i> Check in</label>
               
                <input type="" class="form-control" id="exampleFormControlInput1" placeholder="Minggu, 20.00 - 16 July 2023">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><i class="fa fa-calendar-minus"></i> Check Out</label>
                <input type="" class="form-control" id="exampleFormControlInput1" placeholder="Senin, 20.00 - 17 July 2023">
              </div>
              <p> <i class="fa fa-building" ></i> Kamar</p>
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
            <div class="logo">Hotel Citra Megah</div>
            <p>Copyright &copy; 2023 Hotel Citra Megah</p>
            </footer>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
