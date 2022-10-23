<?php
session_start();
$servername = "localhost";
$dbname = "blog";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

function register(string $name, string $email, string $password)
{
    global $conn;

    $sql = "INSERT INTO `users`(`name`, `email`, `pass`) VALUES (:name,:email,:password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();
}

function login(string $email, string $password): ?array
{
    global $conn;

    $sql = "SELECT * FROM users WHERE email = :email and pass = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();

    $login = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($login === false) return null;
    else return $login;
}

function Add_Blog(string $title, string $editor, string $writer, int $time, string $file_name, string $tags, string $date)
{
    global $conn;

    $sql = "INSERT INTO `blogs`(`title`, `caption`, `writer`, `readtime`, `image`, `tags`, `date`) VALUES (:title,:editor,:writer,:time,:image,:tags,:date)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":editor", $editor);
    $stmt->bindParam(":writer", $writer);
    $stmt->bindParam(":time", $time);
    $stmt->bindParam(":image", $file_name);
    $stmt->bindParam(":tags", $tags);
    $stmt->bindParam(":date", $date);
    $stmt->execute();
//    if($stmt->execute()) {
//        return true;
//    }
//    return false;
}

function Get_Blogs(): array
{
    global $conn;

    $sql = "SELECT * FROM `blogs`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $blogs;
}

function Get_User(): array
{
    global $conn;

    $sql = "SELECT * FROM `users`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}

function Delete_Users(int $id)
{
    global $conn;

    $sql = "DELETE FROM `users` WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}

function Select_Name_Writer(string $writer): ?array
{
    global $conn;

    $sql = "SELECT name FROM users WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $writer);
    $stmt->execute();
    $writerName = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($writerName === false) return null;
    else return $writerName;
}

function Delete_Blog(int $id)
{
    global $conn;

    $sql = "DELETE FROM `blogs` WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}

function Edit_Blogs(int $id): ?array
{
    global $conn;

    $sql = "SELECT * FROM `blogs` WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $blogs = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($blogs === false) return null;
    else return $blogs;
}

function Update_Blog(int $id, string $title, string $editor, string $writer, int $time, string $tags, string $date, ?string $file_name)
{
    global $conn;

    $sql = "UPDATE `blogs` SET `title` =:title, `caption` =:editor, `writer` =:writer, date =:date,`tags` =:tags, `readtime` =:time";
    if ($file_name !== null) {
        $sql .= ", image =:file_name";
    }
    $sql .= " WHERE `id`=:id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":editor", $editor);
    $stmt->bindParam(":writer", $writer);
    $stmt->bindParam("date", $date);
    if ($file_name !== null) {
        $stmt->bindParam(":file_name", $file_name);
    }
    $stmt->bindParam(":tags", $tags);
    $stmt->bindParam(":time", $time);
    $stmt->execute();
}

function addwriter(string $username, string $editor, string $file)
{
    global $conn;

    $sql = "INSERT INTO `writers`(`username`, `image`, `bio`) VALUES (:username,:image,:bio)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":image", $file);
    $stmt->bindParam(":bio", $editor);
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

function getwriter(): array
{
    global $conn;

    $sql = "SELECT * FROM writers";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $writers = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $writers;
}

function Redirect(string $path)
{
    header("Location: $path");
    exit();
}

if (isset($_SESSION["user"])) {
    $IsAuth = true;
} else {
    $IsAuth = false;
}

if ($IsAuth === true) {
    $a = $_SESSION["user"];
    $user = IsUser($a);
    if ($user === null) {
        $IsAuth = false;
    }
}

function IsUser(int $a)
{
    global $conn;

    $sql = "SELECT * FROM users WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $a);
    $stmt->execute();

    $IsUser = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($IsUser === false) return null;
    else return $IsUser;
}

function Get_Writer(int $writer): ?array
{
    global $conn;

    $sql = "SELECT * FROM writers WHERE writer = :writer";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":writer",$writer);
    $stmt->execute();

    $writer = $stmt->fetch(PDO::FETCH_ASSOC);
    if($writer === false) return null;
    else return $writer;
}

function Update_Writer($writer, $username, $editor, $file_name)
{
    global $conn;

    $sql = "UPDATE `writers` SET `username`= :username,`bio`= :editor";
    if ($file_name !== null) {
        $sql .= ", image =:file_name";
    }
    $sql .= " WHERE `writer`=:writer";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":writer", $writer);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":editor", $editor);
    if ($file_name !== null) {
        $stmt->bindParam(":file_name", $file_name);
    }
    $stmt->execute();
}