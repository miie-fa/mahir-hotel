<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
       .body{
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
.input-box a{
    margin-left: 40%;
    color:red;
}

.input-group{
    margin-left: 10%;
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
.label-sign{
    margin-left: 40%;
    margin-top: 5%;
}

.icons{
    margin-left: 30%;
    margin-top: 5%;
}
.icons i{
    font-size: 25px;
    padding: 0 10px;
}

.register-link {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
}

.register-link a {
    color: #1a1a1d;
    text-decoration: none;
}

.register-link a:hover {
    text-decoration: underline;
}
 </style>
</head>
<body class="body">
    <div class="text">
        <h4>Hotel Citra Megah</h4>
        <h1>Selamat Datang Di Hotel Citra Megah</h1>
        <p>Hotel Citra Megah - Hotel bintang lima terbaik di Indonesia</p>
    </div>

    <div class="form-box">
        <h1>Hotel Citra Megah</h1>
        <p>Please log in to your account</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-box">
                <label for="email">Username or Email</label><br>
                <input type="email" id="email" name="email" placeholder="Enter your email" required autofocus>
            </div>

            <div class="input-box">
               <label for="password">Password</label>
               <a href="{{ route('password.request') }}" id="forgot-password-link">Forgot password?</a>
               <br>
               <input type="password" id="password" name="password" placeholder="Make your password" required>
            </div>

            <div class="input-group">
                <input type="checkbox" id="remember_me" name="remember">
                <label for="remember_me">Remember Me</label>
            </div>

            <button type="submit" class="sign-btn">Sign In</button>
        </form>

        <div class="label-sign">
            <label for="">Or Sign With</label>
        </div>
        <div class="icons">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-google"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-github"></i>
        </div>

        <div class="register-link">
            <p>Don't have an account? <a href="{{ route('register') }}">Click to register</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
