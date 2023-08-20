<!DOCTYPE html>
<html lang="en">
<?php
require 'conn.php';
session_start();

if (!isset($_SESSION['user'])) {
    header('location:index.php');
}
?>

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
        <h3 class="title">Welcome!</h3>
        <br />
        <?php
        $id = $_SESSION['user'];
        $sql = $conn->prepare("SELECT * FROM `member` WHERE `mem_id`='$id'");
        $sql->execute();
        $fetch = $sql->fetch();
        ?>

        <h4 class="first-last-name">
            <?php echo $fetch['firstname'] . " " . $fetch['lastname'] ?>
        </h4>

        <a href="logout.php" class="log-out">Logout</a>
    </div>
</body>

</html>