<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body{
            width: 100%;
            height:100% ;
            background-size: 100%;
            background-image: url({{ asset('assets/hotel.jpg') }});
        }
         .text{
            position: absolute;
            top: 40%;
            left: 12%;
            color: white;
        }
        .text h4{
            font-size: 30px;
        }
        .form-box{
            width: 450px;
            background:rgba(248, 240, 240, 0.863);
            margin:5%;
            margin-left: 65%;
            padding: 50px 0;
            color: black;
            box-shadow: 2 2 20px 2px rgba(238, 238, 243, 0.562);
            border-radius: 5%;
            
        }
        .form-box h1{
            text-align: center;
        }
        .form-box p{
            text-align: center;
        }
        .input-box{
            margin: 30px auto;
            border: 1px white;
            width: 80%;
            padding-top: 10px;
            padding-bottom: 5px;
        }
        .input-box input{
            background: transparent;
            padding: 10px;
            width: 90%;
        }
        ::placeholder{
            color: #0a0a0a;
            font-style:oblique;
            
        }
        .sign-btn{
        margin: 10px auto 10px;
        width: 80%;
        display: block;
        outline: none;
        padding: 10px 0;
        cursor: pointer;
        background: #1a1a1d;
        color: white;

        }
     </style>
</head>
<body>
    <div class="text">
        <h4>Hotel Citra Megah</h4>
        <h1>Selamat Datang Di Hotel Citra Megah</h1>
        <p>Hotel Citra Megah - Hotel bintang lima terbaik di Indonesia</p>
    </div>

    <div class="form-box">
        <h1>Hotel Citra Megah</h1>
        <p>Please register to create an account</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-box">
                <label for="name">Username</label><br>
                <input type="text" id="name" name="name" placeholder="Enter your username" required>
            </div>

            <div class="input-box">
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="input-box">
               <label for="password">Password</label><br>
               <input type="password" id="password" name="password" placeholder="Make your password" required>
            </div>

            <div class="input-box">
                <label for="password_confirmation">Confirm Password</label><br>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmation password" required>
            </div>
            <button type="submit" class="sign-btn">Register</button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
