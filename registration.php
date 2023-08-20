<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-registration-page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>registration Page</title>
</head>

<body>
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
    <div class="container">
        <div class="title">Registration Form</div>
        <form action="register_query.php" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <label class="details">Firstname</label>
                    <input type="text" name="firstname" />
                </div>
                <div class="input-box">
                    <label class="details">Lastname</label>
                    <input type="text" name="lastname" />
                </div>
                <div class="input-box">
                    <label class="details">Username</label>
                    <input type="text" name="username" />
                </div>
                <div class="input-box">
                    <label class="details">Password</label>
                    <input type="password" name="password" />
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Register" name="register">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>
</body>

</html>