<?php
include "database/db.php";

if (isset($_POST["sub"],$_POST["email"],$_POST["pass"])) {
    $email = $_POST["email"];
    $password = $_POST["pass"];

    $login = login($email,$password);

    if ($email === "" || $password === "") {
        echo "نام کاربری یا رمز عبور نباید خالی باشد";
    }elseif($login !== null) {
        $_SESSION["user"] = $login["id"];
        header("Location: index.php");
        exit();
    } else {
        echo "نام کاربری یا رمز عبور اشتباه است";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>وبلاگ</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css"
          integrity="sha384-P4uhUIGk/q1gaD/NdgkBIl3a6QywJjlsFJFk7SPRdruoGddvRVSwv5qFnvZ73cpz" crossorigin="anonymous">
    <!-- <script src="https://cdn.rtlcss.com/bootstrap/v4.0.0/js/bootstrap.min.js" integrity="sha384-54+cucJ4QbVb99v8dcttx/0JRx4FHMmhOWi4W+xrXpKcsKQodCBwAvu3xxkZAwsH" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body dir="rtl">
<div class="container">
    <div class="register" style="text-align:center;">
        <form method="POST">
            <h4>ورود به حساب کاربری</h4>
            <input name="email" type="email" placeholder="ایمیل" class="form-control" required><br>
            <input name="pass" type="password" placeholder="رمزعبور" class="form-control" required><br>
            <input name="sub" type="submit" value="ورود به حساب" class="btn btn-info form-control" required><br>
        </form>
    </div>
</div>
</body>
</html>