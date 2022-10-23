<?php
include "../database/db.php";
include "../jdf.php";

if (!isset($_SESSION["user"])) {
    header("Location: ../login.php");
    exit();
}

if(isset($_POST["sub"],$_POST["username"],$_POST["editor"])) {

    $username = $_POST["username"];
    $editor = $_POST["editor"];
    $file = $_FILES["file"];

    $file_name = rand(100000,999999)."_".$_FILES["file"]["name"];
    $file_path = "file/".$file_name;

    if ($username === "" && $editor === "") {
        echo "نام نویسنده یا توضیحات نویسینده نباید خالی باشد";
    }else {
        move_uploaded_file($_FILES["file"]["tmp_name"],$file_path);
        $write = addwriter($username,$editor,$file_name);
        if ($write === true) {
            echo "اطلاعات با موفقیت ثبت شد";
        }else {
            echo "مشکلی در درج اطلاعات رخ داده است";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل ادمین</title>
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css"
          integrity="sha384-P4uhUIGk/q1gaD/NdgkBIl3a6QywJjlsFJFk7SPRdruoGddvRVSwv5qFnvZ73cpz" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        input {
            margin: 30px 0px;
        }
    </style>
</head>
<body dir="rtl">
<?php include "header.php"; ?>
<div class="container">
    <h1 id="welcome">بخش افزودن نویسنده</h1>

    <form method="POST"  enctype="multipart/form-data">
        <input name="username" type="text" placeholder="نام نویسنده" class="form-control">
        <script src="//cdn.ckeditor.com/4.19.0/full/ckeditor.js"></script>
        <textarea name="editor" id="editor1"></textarea>
        <script>
            CKEDITOR.replace('editor1');
        </script>
        <br><br>
        <input name="file" type="file" placeholder="لینک عکس" class="form-control">
        <input name="sub" type="submit" class="btn btn-success" value="افزودن نویسنده">
    </form>
</div>

<footer>

</footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>
