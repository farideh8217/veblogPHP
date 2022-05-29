<?php 
include "../jdf.php";
include "../database/db.php";
$number=1;
$select=$conn->prepare("SELECT * FROM blogs");
$select->execute();
$blog=$select->fetchAll(PDO::FETCH_ASSOC);

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
</head>
<body dir="rtl">
<?php include "header.php";?>
<div class="container">
        <h1 id="welcome">بخش مشاهده مقاله</h1>
        <?= $date ?>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">موضوع</th>
            <th scope="col">تاریخ انتشار</th>
            <th scope="col">عکس مقاله</th>
            <th scope="col">نویسنده</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($blog as $bloginfo) :?>
            <tr>
                <th scope="row"><?= $number++; ?></th>
                <td><?= $bloginfo['title']?></td>
                <td><?= $bloginfo['date']?></td>
                <td><img src="<?= $bloginfo['image']?>" alt="" height="100px"></td>
                <td><?= $bloginfo['writer']?></td>
            </tr>
        <?php endforeach; ?>   
        </tbody>
    </table>
</div>
    
    <footer>
        
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>