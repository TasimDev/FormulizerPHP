<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style-login-page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
 
    <title>Login Page</title>
</head>

<body>
    <div class="container">

        <div class="write">
            <div id="background-wrap">
                <div class="x1">
                    <div class="cloud"></div>
                </div>

                <div class="x2">
                    <div class="cloud"></div>
                </div>

                <div class="x3">
                    <div class="cloud"></div>
                </div>

                <div class="x4">
                    <div class="cloud"></div>
                </div>

                <div class="x5">
                    <div class="cloud"></div>
                </div>
            </div>
            <div class="write-content">
                <div class="title">
                    <h1>HTML CSS Login Form </h1>
                </div>
                <div class="param">
                    <p>
                        This login form is created using pure HTML and CSS. For social icons, FondAwesomes is used
                    </p>
                </div>
            </div>
        </div>
        <div class="login">
            <?php if (isset($_SESSION['message'])): ?>
                <div class="alert alert-<?php echo $_SESSION['message']['alert'] ?> msg">
                    <?php echo $_SESSION['message']['text'] ?>
                </div>
                <script>
                    (function () {
                        // removing the message 3 seconds after the page load
                        setTimeout(function () {
                            document.querySelector('.msg').remove();
                        }, 3000)
                    })();
                </script>
                <?php
            endif;
            // clearing the message
            unset($_SESSION['message']);
            ?>
            <div class="title-login">
                <h1>Login</h1>
            </div>
            <div class="social-media">
                <ul>
                    <li><a href=""><i class="fa-brands fa-google"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-apple"></i></a></li>
                </ul>
            </div>
            <div class="or-item">
                <div class="or"></div>
                <div class="param">or</div>
                <div class="or"></div>
            </div>
            <form action="login_query.php" method="POST">
                <div class="form-content">
                    <div class="title">Continue whit Email</div>
                    <div class="inputs">
                        <div class="input useremail">
                            <input type="text" class="form-control" name="username" />
                        </div>
                        <div class="input password">
                            <input type="password" class="form-control" name="password" />
                        </div>
                    </div>
                    <div class="forgot">
                        <a href="#">Forgot your password ?</a>
                        <br> or <br>
                        <a href="registration.php" target="_blank">Register now !</a>
                    </div>
                    <div class="button">
                        <button type="submit" name="login">LOG IN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>