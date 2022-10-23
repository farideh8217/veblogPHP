<?php

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="http://toplearn.com"><img src="image/1.jpg" height="50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">خانه <span class="sr-only"></span></a>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    نبض بازار
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">اقتصاد خانواده</a>
                    <a class="dropdown-item" href="#">اخبار اقتصادی</a>
                </div>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">دانستنی</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">اخباراکالا</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">راهنمای خرید</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">درباره ما</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">اکالا رنک</a>
            </li>
            <?php if (!isset($_SESSION['name'], $_SESSION['email'])) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">ثبت نام</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">ورود</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">خروج</a>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>