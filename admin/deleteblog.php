<?php
include "../database/db.php";

if ($IsAuth === false) {
    Redirect("../login.php");
}

if (!isset($_GET["id"])) {
    header("Location: blogs.php");
    exit();
}

$id = $_GET["id"];
Delete_Blog($id);
header("Location: blogs.php");