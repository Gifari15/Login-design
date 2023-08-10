<html>
    <head>
        <title>Login Form By Gifari</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" href="assets/image/logo.png">
        
        <!-- FILE CSS $ BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css"/>

        <!-- LINK ICON DARI FLATICON -->
        <!-- https://www.flaticon.com/icon-fonts-most-downloaded -->
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
        <style>
            .display{
                display: none;
                transition: ease-in-out 10.5s;
            }
        </style>
    </head>
    <body>
    <div class="containerr">
        <!-- FORM LOGIN -->
        <div class="card" id="target4">
            <div class="container-in">
                <div class="card-left">
                    <div class="card-left-in">
                        <div class="nav">
                            <div class="active" id="target2">Login</div> <!--class="text-login"-->
                            <a href="#" class="text-login display" id="target">Login</a>
                            <div class="vertical-line"></div>
                            <a href="#" class="text-pass" onclick="displayregis(), clearInput()">Register</a>
                        </div>
                        <h2 class="title-login">Selamat Datang</h2>
                        <div class="title-login-small">Silahkan login terlebih dahulu !</div>
                        <form method="POST" action="">
                            <div class="input-group username-margin">
                                <span class="input-icon">
                                    <i class="fi fi-rs-user" style="font-size: 1.2rem;"></i>
                                </span>
                                <input type="text" id="email" class="..." style="border-radius: 4px;" required />
                                <label for="email" class="input-group__label">Username</label>
                            </div>
                            <div class="input-group pass-margin">
                                <span class="input-icon">
                                    <i class="fi fi-rr-key" style="font-size: 1.2rem;"></i>
                                </span>
                                <input type="password" id="password" class="..." style="border-radius: 4px;" required />
                                <label for="email" class="input-group__label">Password</label>
                            </div>
                        </form>
                        <a href="#" class="text-forgot">Lupa Password ?</a>
                        <button class="btnlogin">Login</button>

                    </div>
                </div>
                <img src="image/autumn.jpg" class="card-right"/>
            </div>
        </div>

        <!-- FORM REGISTER -->
        <div class="card display" id="target3">
            <div class="container-in">
                <div class="card-left">
                    <div class="card-left-in">
                        <div class="nav2">
                            <a href="#" class="text-login" id="target" onclick="displaylogin()">Login</a>
                            <!-- <a href="#" class="text-pass" onclick="displaylogin(), clearInput()">Register</a> -->
                            <div class="vertical-line"></div>
                            <div href="#" class="active">Register</div>
                        </div>
                        <h2 class="title-login">Selamat Datang</h2>
                        <div class="title-login-small">Silahkan daftar terlebih dahulu !</div>
                        <form method="POST" action="">
                        <div class="input-group username-margin">
                            <span class="input-icon">
                                <i class="fi fi-rs-user" style="font-size: 1.2rem;"></i>
                            </span>
                            <input type="text" id="username_r" class="..." style="border-radius: 4px;" required />
                            <label for="username_r" class="input-group__label">Username</label>
                        </div>
                        <div class="input-group pass-margin">
                            <span class="input-icon">
                                <i class="fi fi-rr-key" style="font-size: 1.2rem;"></i>
                            </span>
                            <input type="password" id="password_r" class="..." style="border-radius: 4px;" required />
                            <label for="password_r" class="input-group__label">Password</label>
                        </div>
                        <div class="input-group pass-margin">
                            <span class="input-icon">
                            <i class="fi fi-rr-lock" style="font-size: 1.2rem;"></i>
                            </span>
                            <input type="password" id="password_v" class="..." style="border-radius: 4px;" required />
                            <label for="password_v" class="input-group__label">Confirm Password</label>
                        </div>
                        </form>
                        <!-- <a href="#" class="text-forgot">l</a> -->
                        <button class="btnlogin">Sign Up</button>

                    </div>
                </div>
                <img src="image/rain-plant.jpg" class="card-right"/>
            </div>
        </div>
    </div>
    <script>
    function displayregis() {
      var target3 = document.getElementById('target3');
      var target4 = document.getElementById('target4');
    
      target4.classList.add('display');
      target3.classList.remove('display');
    }

    function displaylogin() {
      var target3 = document.getElementById('target3');
      var target4 = document.getElementById('target4');
    
      target4.classList.remove('display');
      target3.classList.add('display');
    }

    function clearInput() {
      var inputElement = document.getElementById('username_r');
      var inputElement2 = document.getElementById('password_r');

      inputElement.value = ''; 
      inputElement2.value = '';
    }
  </script>
    </body>
</html>