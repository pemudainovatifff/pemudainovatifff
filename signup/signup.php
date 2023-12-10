<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../csss/util.css">
    <link rel="stylesheet" type="text/css" href="../csss/main.css">
    <title>Login</title>
</head>

<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-more"
                    style="background-image: url('../img/andrey-bond-t8fEOfpVfck-unsplash.jpg');">
                    <p>
                    <h1><a style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white;"
                            href="../index.php">ini landing page</a></h1>
                    </p>
                </div>
                <form class="login100-form validate-form" action="signup_p.php" method="post">
                    <span class="login100-form-title p-b-43">
                        signUp
                    </span>


                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="username" required="">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Username</span>
                    </div>


                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" name="password" required="">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>


                    <div class="container-login100-form-btn">
                        <input type="submit" class="login100-form-btn" name="submit" value="SignUp">
                    </div>
                    <br>
                    <div class="signin">
                        <span>Sudah punya akun? silahkan <a href="../login/login.php">Login</a></span>
                    </div>
                </form>


            </div>
        </div>
    </div>
</body>


</html>