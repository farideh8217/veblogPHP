<?php 
include "../jdf.php";
include "../database/db.php";
$id=$_GET['writer'];
$select=$conn->prepare("SELECT * FROM writers WHERE writer=?");
$select->bindValue(1,$id);
$select->execute();
$writer=$select->fetch(PDO::FETCH_ASSOC);

$date=jdate('Y/m/d');

if (isset($_POST['sub'])){
    $name=$_POST['username'];
    $bio=$_POST['editor1'];
    $image=$_POST['image'];
    $insert=$conn->prepare("UPDATE writers SET username=? , bio=? , image=? WHERE writer=$id");
    $insert->bindValue(1,$name);
    $insert->bindValue(2,$bio);
    $insert->bindValue(3,$image);
    $insert->execute();
}
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
        <h1 id="welcome">بخش ویرایش نویسنده</h1>
        <?= $date ?>
        <form method="POST">

                <input name="username" type="text" placeholder="موضوع مقاله" class="form-control" value="<?=$writer['username'] ?>">
                <textarea name="editor1" id="editor1"></textarea>
                <script src="//cdn.ckeditor.com/4.19.0/full/ckeditor.js"></script>
                <script>
                    CKEDITOR.replace( 'editor1' );
                </script>
                <br><br>
                <input name="image" type="text" value="<?= $writer['image']?>"placeholder="لینک عکس" class="form-control">
                <input name="sub" type="submit" class="btn btn-success" value="ثبت">
           
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>