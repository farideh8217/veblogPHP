<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>وبلاگ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body dir="rtl">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://toplearn.com"><img src="image/1.jpg" height="50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">خانه <span class="sr-only"></span></a>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          سبک زندگی
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">روانشناسی</a>
          <a class="dropdown-item" href="#">ورزش</a>
          <a class="dropdown-item" href="#">سلامت و زیبایی</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          آشپزی
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">فست فود</a>
          <a class="dropdown-item" href="#">میوه</a>
          <a class="dropdown-item" href="#">شیرینی</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    </ul>
  </div>
</nav>
<div class="container">
    <div class="d-none d-lg-block">
      <div class="search">
        <form method="POST">
            <input type="text" placeholder="دنبال چی میگردی" class="form-control input">
            <input type="submit" value="جستجو" class="btn btn-info sub">
        </form>  
      </div>
    </div>
    <div class="d-block d-lg-none">
      <div class="mobile-search">
        <form method="POST">
            <input type="text" placeholder="دنبال چی میگردی" class="form-control mobile">
            <input type="submit" value="جستجو" class="btn btn-info sub">
        </form>  
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="head-image">
          <img src="image/2.jpg" width="100%">
        </div>
      </div>
      <div class="col-12 col-lg-3">
        <div class="head-image">
          <img src="image/2.jpg" width="100%">
        </div>
      </div>
      <div class="col-12 col-lg-3">
        <div class="head-image">
          <img src="image/2.jpg" width="100%">
        </div>
      </div>
    </div>
    <div class="content-text">
     <span>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزاره گیرد.</span>
    <a href="">بیشتر...</a>
    </div>
    <div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="image/2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="image/2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="image/2.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="image/2.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor" src="image/2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column">
      <img class="demo cursor" src="image/2.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
  </div>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>  
</div>
<div class="footer">
  <p>لینک های مفید</p>
  <ul>
    <a href=""><li>درباره اکابلاگ</li></a>
    <a href=""><li>سوپرمارکت اینترنتی اکالا</li></a>
    <a href=""><li>کد تخفیف خرید از اکالا</li></a>
  </ul>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>