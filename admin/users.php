<?php
include "../jdf.php";
include "../database/db.php";

if ($IsAuth === false) {
    Redirect("../login.php");
}

$users = Get_User();
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
</head>
<body dir="rtl">
<?php include "header.php"; ?>
<div class="container">
    <h1 id="welcome">کاربران وبسایت شما</h1>
    <form action="" method="get">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">نام کاربر</th>
            <th scope="col">ایمیل کاربر</th>
            <th scope="col">رمزعبور</th>
            <th scope="col">عملیات</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user_item) {?>
        <tr>
            <th scope="row"><?= $user_item["id"] ?></th>
            <td><?= $user_item["name"] ?></td>
            <td><?= $user_item["email"] ?></td>
            <td><?= $user_item["pass"] ?></td>
            <td><a class="btn btn-danger" href="delete.php?id=<?= $user_item['id'] ?>">حذف</a> <a class="btn btn-warning" href="editblog.php?id=<?= $user_item['id'] ?>">ویرایش</a>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
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