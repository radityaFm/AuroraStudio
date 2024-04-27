<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>umkm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* warna navbar */
        @font-face{
        font-family: "font";
        src: url(font.ttf);
    }
        .navbar-custom {
            background: linear-gradient(70deg, rgb(135,206, 250) 20%, rgb(0,191,255));
        }
        tubuh login
        body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-container {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 350px;
    }
    /* input */
    input[type="text"],
    input[type="password"] {
        width: calc(100%);
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    input[type="submit"] {
        width: 90%;
        background-color:#474446;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        border-radius: 20px; 
    }

    input[type="submit"]:hover {
        background-color: #474446;
    }
  /* forgot password */
    .forgot-password {
        text-align: center;
        margin-top: 10px;
        color: grey;
    }
    .forgot-password a {
        text-decoration: none;
        color: grey;
        font-style: bold;
    }
    .email{
        text-align: left;
    }
    .password{
        text-align: left;
    }
    .login{
        margin-bottom: 15px;
    }
    .logo{
      width: 12%;
      height:fill;
    }
</style>
</style>
</head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container-fluid">
        <a class="navbar-brand"  href="#"><img src="logo.png"alt="" class="logo"></a>
        </div>
      </nav>
      <br>
      <br>
      <div class="container text-center">
        <div class="row g-2">
          <div class="col-6">
            <div class="p-3">
                <img src="" alt="">
            </div>
          </div>
          <!-- login / sign in -->
        <div class="login-container col-6 p-3 " style="box-shadow:1px";>
            <h2 class="mb-4">Register</h2>
            <form id="loginForm" onsubmit="return validateForm()" class="form">
                <p class="username" style="text-align:left;">
                 Username
                    <input type="text" id="username" placeholder="username" class="mb-1">
                </p>
                <p class="email">
                    Email
                    <input type="text" id="email" placeholder="Email" class="mb-2" style="margin-bottom: 10px;">
                </p>
                <p class="password">
                    Password
                    <input type="password" id="password" placeholder="Password" class="mb-2" style="margin-bottom: 10px;">
                </p>
                <br>
                 <input type="submit" value="Login" class="login mb-3">

                <div class="forgot-password mb-4" style="text-decoration: none;">
                <a href="login" onclick="login()"><B>kembali</B></a>
            </div>
        </div>
            </form>
        </div>
        
        <script>
            function validateForm() {
                var usernameEmail = document.getElementById('usernameEmail').value.trim();
                var password = document.getElementById('password').value.trim();
        
                // Basic validation
                if (Email === '1' || password === '1') {
                    alert('Username/Email and password are required.');
                    return false;
                }
                if (Email === '1' || password === '1' || username === 'null') {
                    alert('Username Email and password are required.');
                    return false;
                }
                return true;
            }
        </script>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>
