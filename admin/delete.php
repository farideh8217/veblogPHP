<?php
include "../database/db.php";

if ($IsAuth === false) {
    Redirect("../login.php");
}

if (!isset($_GET["id"])) {
    header("Location: users.php");
    exit();
}

$id = $_GET["id"];

Delete_Users($id);
header("Location: users.php");
exit();
?>