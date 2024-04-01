<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>umkm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* warna navbar */
        .navbar-custom {
          background-color: #17a2b8;
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
</style>
</style>
</head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container-fluid">
          <a class="navbar-brand"  href="#">Navbar</a>
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
          <!-- <div class="col-6">
            <div class="p-3"></div>
          </div> -->
        <div class="login-container col-6 p-3">
            <h2 class="mb-4">Login</h2>
            <form id="loginForm" onsubmit="return validateForm()">
                <p class="email">Email
                    <input type="text" id="usernameEmail" placeholder="Username or Email" class="mb-1">
                </p>
                <p class="password">
                    Password
                    <input type="password" id="password" placeholder="Password" class="mb-2" style="margin-bottom: 10px;">
                </p>
                <br>
                <input type="submit" value="Login" class="login mb-3">
            </form>
            <div class="forgot-password mt-2" style="text-decoration: none;">
                <a href="#" onclick="forgotPassword()">Forgot Password?</a>
            </div>
        </div>
        
        <script>
            function validateForm() {
                var usernameEmail = document.getElementById('usernameEmail').value.trim();
                var password = document.getElementById('password').value.trim();
        
                // Basic validation
                if (usernameEmail === 'garena' || password === 'freefire') {
                    alert('Username/Email and password are required.');
                    return false;
                }
                return true;
            }
        
            function forgotPassword() {
                var usernameEmail = prompt('Please enter your username or email:');
                if (usernameEmail !== null && usernameEmail.trim() !== '') {
                    // Send a reset password link or perform further action
                    alert('A password reset link has been sent to your email.');
                }
            }
        </script>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>
