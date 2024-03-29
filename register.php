<?php
include "database/db.php";

if (isset($_POST["sub"],$_POST["name"],$_POST["email"],$_POST["pass"])) {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["pass"]);

    if($name === "" && $email === "" && $password === "") {
        $status = false;
    }else {
        $register = register($name,$email,$password);
        $status = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
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
            <h4>ثبت نام کنید</h4>
            <input name="name" type="text" placeholder="نام ونام خانوادگی" class="form-control" required><br>
            <input name="email" type="email" placeholder="ایمیل" class="form-control" required><br>
            <input name="pass" type="password" placeholder="رمزعبور" class="form-control" required><br>
            <input name="sub" type="submit" value="ثبت نام" class="btn btn-info form-control"><br>
        </form>
        <?php if(isset($status)) { ?>
            <?php if($status === true) { ?>
                <div class="alert alert-success" role="alert">
                    <?php echo "اطلاعات با موفقیت ثبت شد" ?>
                </div>
            <?php }elseif($status === false){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo "وارد کردن نام و ایمیل و رمزعبور اجباری است" ?>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>
</body>
</html>