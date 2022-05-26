<?php 
include "../jdf.php";
include "../database/db.php";
if(isset($_POST['sub'])){
    $title=$_POST['title'];
    $caption=$_POST['editor1'];
    $writer=$_POST['writer'];
    $time=$_POST['time'];
    $image=$_POST['image'];
    $tags=$_POST['tags'];
    $insert=$conn->prepare("INSERT INTO blogs SET title=? , caption=? , writer=? , date=? , readtime=? , image=? , tags=? ");
    $insert->bindValue(1,$title);
    $insert->bindValue(2,$caption);
    $insert->bindValue(3,$writer);
    $insert->bindValue(4,"");
    $insert->bindValue(5,$time);
    $insert->bindValue(6,$image);
    $insert->bindValue(7,$tags);
    $insert->execute();
}
$date=jdate('Y/m/d');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل ادمین</title>
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css" integrity="sha384-P4uhUIGk/q1gaD/NdgkBIl3a6QywJjlsFJFk7SPRdruoGddvRVSwv5qFnvZ73cpz" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        input{
            margin: 30px 0px;
        }
    </style>

</head>
<body dir="rtl">
<?php include "header.php";?>
    <div class="container">
        <h1 id="welcome">بخش افزودن مقاله</h1>
        <?= $date ?>
        <form method="POST">
            <input name="title" type="text" placeholder="موضوع مقاله" class="form-control">
            <script src="//cdn.ckeditor.com/4.19.0/full/ckeditor.js"></script>
            <textarea name="editor1" id="editor1"></textarea>
                <script>
                    CKEDITOR.replace( 'editor1' );
                </script>
                <br><br>
            <select name="writer" class="form-control">
                <option value="1">رامین پورمحمدی</option>
            </select>
            <input name="time" type="number" placeholder="زمان تقریبی مطالعه" class="form-control">
            <input name="image" type="text" placeholder="لینک عکس" class="form-control">
            <input name="tags" type="text" placeholder="تگ ها" class="form-control">
            <input name="sub" type="submit" class="btn btn-success" value="ثبت">
        </form>
    </div>
    
    <footer>
        
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>