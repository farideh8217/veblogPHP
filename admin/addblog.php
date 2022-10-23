<?php
include "../jdf.php";
include "../database/db.php";

if ($IsAuth === false) {
    Redirect("../login.php");
}

if (isset($_POST["sub"], $_POST["title"], $_POST["editor"], $_POST["time"], $_POST["tags"], $_FILES["file"])) {
    $title = trim($_POST["title"]);
    $editor = trim($_POST["editor"]);
    $writer = Select_Name_Writer($_SESSION["user"])["name"];
    $time = trim($_POST["time"]);
    $tags = trim($_POST["tags"]);
    $date = jdate('Y/m/d');
    $file = $_FILES["file"];

    $file_name = rand(100000, 999999) . "_" . $_FILES["file"]["name"];
    $file_path = "file/" . $file_name;

    if ($title === "" || $editor === "" || $writer === "") {
        $status = 1;
    } elseif ($file["error"] === 4) {
        Add_Blog($title, $editor, $writer, $time, "", $tags, $date);
        $status = 2;
    } elseif ($file["error"] === 0) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $file_path)) {
            Add_Blog($title, $editor, $writer, $time, $file_name, $tags, $date);
        } else {
            $status = 3;
        }
    } else {
        $status = 4;
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
    <h1 id="welcome">بخش افزودن مقاله</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <input name="title" type="text" placeholder="موضوع مقاله" class="form-control">
        <script src="//cdn.ckeditor.com/4.19.0/full/ckeditor.js"></script>
        <textarea name="editor" id="editor1"></textarea>
        <script>
            CKEDITOR.replace('editor1');
        </script>
        <br><br>
        <select class="form-control">
            <option><?= Select_Name_Writer($_SESSION["user"])["name"] ?></option>
        </select>
        <input name="time" type="number" placeholder="زمان تقریبی مطالعه" class="form-control">
        <input name="file" type="file" class="form-control">
        <input name="tags" type="text" placeholder="تگ ها" class="form-control">
        <input name="sub" type="submit" class="btn btn-success" value="ثبت">
    </form>
    <?php if (isset($status)) { ?>
        <?php if ($status === 2) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo "اطلاعات با موفقیت ثبت شد" ?>
            </div>
        <?php } elseif ($status === 1) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo "وارد کردن عنوان مقاله و متن مقاله و نویسنده اجباری است" ?>
            </div>
        <?php } elseif ($status === 3) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo "خطا در آپلود فایل" ?>
            </div>
        <?php } elseif ($status === 4) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo "خطا در درج اطلاعات" ?>
            </div>
        <?php } ?>
    <?php } ?>
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