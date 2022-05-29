<?php 
include "../jdf.php";
include "../database/db.php";
$number=1;
$select=$conn->prepare("SELECT * FROM writers");
$select->execute();
$writers=$select->fetchAll(PDO::FETCH_ASSOC);

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
        <h1 id="welcome">مشاهده نویسندگان</h1>
        <?= $date ?>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">نام نویسنده</th>
            <th scope="col">عکس نویسنده</th>
            <th scope="col">عملیات</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($writers as $writer) :?>
            <tr>
                <th scope="row"><?= $number++; ?></th>
                <td><?= $writer['username']?></td>
                <td><img src="<?= $writer['image']?>" alt="" height="100px"></td>
                <td><a class="btn btn-danger" href="deletewriter.php?writer=<?= $writer['writer'] ?>">حذف</a> <a class="btn btn-warning" href="editwriter.php?writer=<?= $writer['writer'] ?>">ویرایش</a></td>
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