<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="./admin/vendor/fontawesome-free/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="img/heading_logo.png">
  <title>Luigi's</title>
</head>

<body>

  <!-- NAVBAR  -->

  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a href="#home" class="navbar-brand">
        <img src="img/logo-white.png" alt="Logo">
      </a>
      <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
        <span><img height="40px" width="40px" src="img/menu.png" alt=""></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index.php" class="nav-link active">HOME</a>
          </li>
          <li class="nav-item">
            <a href="about.php" class="nav-link">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a href="menu.php" class="nav-link">MENU</a>
          </li>

          <li class="nav-item">
            <a href="contact.php" class="nav-link">CONTACT</a>
          <li>
            <?php
            // if (!isset($_SESSION['name'])) {
            //   echo '<a class="btn" href="./login.php">LOGIN</a>';
            // } else {
            //   // echo ' <a href="" class="nav-link"> <i class="fas fa-user-circle  fa-fw" style="font-size: 17px;"></i>$_SESSION[name]</a>';
            //   echo '<a href="" class="nav-link text-uppercase"><i class="fas fa-user-circle  fa-fw" style="font-size: 17px;"></i> '.$_SESSION["name"].'</a>';
            // }
            ?>
          </li>
        </ul>
      </div>
      <?php
            if (!isset($_SESSION['name'])) {
              echo '<a class="btn" href="./login.php">LOGIN</a>';
            } else {
              // echo ' <a href="" class="nav-link"> <i class="fas fa-user-circle  fa-fw" style="font-size: 17px;"></i>$_SESSION[name]</a>';
              echo '<a href="" class="nav-link text-uppercase mr-3"><i class="fas fa-user-circle  fa-fw" style="font-size: 17px;"></i> '.$_SESSION["name"].'</a><a href="inc/logout.php" class="btn py-2 d-none d-lg-block" href="#">Logout</a>';
            }
            ?>
      
    </div>
  </nav>


  <!-- HOME -->

  <section id="banner">
    <div class="dark-overlay">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center inner-content">
            <h6>BEST IN TOWN</h6>
            <h1 class="display-1">Pizza & Pasta</h1>
            <a class="btn btn-lg" href="#">SEE TODAYS MENU</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="ourStory" class="py-5">
    <div class="left-img d-none d-lg-block">
      <img src="img/story_bg_1.png" alt="">
    </div>
    <div class="right-img d-none d-lg-block">
      <img src="img/story_bg_2.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <div class="storyTitle">
            <img height="52px" src="img/heading_logo.png" alt="logo">
            <h2 class="mt-4">Our Story</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md -6">
          <p class="">
            Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. Morbi maximus lobortis ipsum, ut blandit augue ullamcorper vitae. Nulla dignissim leo felis, eget cursus elit aliquet ut. Curabitur vel convallis massa. Morbi tellus tortor, luctus et lacinia non, tincidunt in lacus. Vivamus sed ligula imperdiet, feugiat magna vitae, blandit ex. Vestibulum id dapibus dolor, ac cursus nulla.
          </p>
        </div>
        <div class="col-md-6">
          <p class="">
            Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst.Morbi maximus lobortis ipsum, ut blandit augue ullamcorper vitae. Nulla dignissim leo felis, eget cursus elit aliquet ut. Curabitur vel convallismassa. Morbi tellus tortor, luctus et lacinia non, tincidunt in lacus. Vivamus sed ligula imperdiet, feugiat magna vitae, blandit ex. Vestibulumidda pibus dolor, accursus nulla.
          </p>
        </div>
      </div>
    </div>

  </section>

  <section id="bestSellers" class="text-center">
    <div class="sellersOverlay py-5">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="sellersTitle">
              <img height="52px" src="img/heading_logo.png" alt="logo">
              <h2 class="mt-4 text-light">Food</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <?php include('./inc/connection.php');
          $product_data = mysqli_query($connect, "SELECT * FROM products");
          while ($product_slice = mysqli_fetch_array($product_data)) : ?>

            <div class="col-sm-6 col-md-4 col-lg-3 mb-5 text-center">
              <div class="item text-light">
                <img src="./admin/images/<?php echo  $product_slice['pimg']; ?>" alt="item" style="width:200px;height:200px;border-radius: 50%;">
                <h5><?php echo  $product_slice['pname']; ?></h5>
                <h4>&dollar;<?php echo  $product_slice['pprice']; ?></h4>
                <?php
                if (isset($_SESSION['name'])) {
                  echo '<a class="btn" href="#">Order Now</a>';
                } else { }
                ?>
              </div>
            </div>
          <?php endwhile; ?>

        </div>

      </div>
    </div>
  </section>

  <section id="ourMenu" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <div class="menuTitle">
            <img height="52px" src="img/heading_logo.png" alt="logo">
            <h2 class="mt-4">Our menu</h2>
            <div id="portfolio" class="portfolioSection section">
              <div class="container">
                <div class="row">
                  <div class="filter">
                    <ul class="filters">
                      <li>
                        <a class="current" data-filter="*" href="#">ALL</a>
                      </li>
                      <li>
                        <a data-filter=".pizza" href="#">PIZZA</a>
                      </li>
                      <li>
                        <a data-filter=".pasta" href="#">PASTA</a>
                      </li>
                      <li>
                        <a data-filter=".salads" href="#">SALADS</a>
                      </li>
                      <li>
                        <a data-filter=".deserts" href="#">DESERTS</a>
                      </li>
                      <li>
                        <a data-filter=".drinks" href="#">DRINKS</a>
                      </li>
                    </ul>
                  </div>
                  <div class="itemsContainer">
                    <ul class="items">
                      <li class="pizza col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/40.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/40.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="pizza col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/41.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/41.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="pizza col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/42.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/42.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="pizza col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/40.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/40.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="pasta col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/30.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/30.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="pasta col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/31.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/31.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="pasta col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/30.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/30.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="salads col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/22.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/22.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="salads col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/20.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/20.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="salads col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/20.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/20.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="salads col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/21.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/21.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="salads col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/22.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/22.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="pizza col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/42.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/42.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="pizza col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/41.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/41.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="pizza col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/40.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/40.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>

                      <li class="deserts col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/10.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/10.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="deserts col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/11.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/11.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="deserts col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/13.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/13.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="deserts col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/14.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/14.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="deserts col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/10.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/10.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>

                      <li class="deserts col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/13.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/13.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>

                      <li class="drinks col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/2.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/2.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="drinks col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/5.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/5.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="drinks col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/6.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/6.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="drinks col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/9.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/9.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>
                      <li class="drinks col-xs-6 col-sm-4 col-md-3">
                        <div class="item">
                          <img class="portfolioImage" src="img/portfolio/5.jpg" alt="Bitcoin">
                          <div class="icon">
                            <a class="openButton" href="img/portfolio/5.jpg" data-fancybox data-caption="This is Bitcoin"><i class="fa fa-search"></i></a>
                            <a class="projectLink" href=""><i class="fa fa-link"></i></a>
                          </div>
                          <div class="imageOverlay"></div>
                        </div>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer id="footer" class="bg-dark">
    <div class="footer-overlay">
      <div class="footer-content">
        <div class="container">
          <div class="row text-center">
            <div class="col-12">
              <img width="220px" src="img/logo-white.png" alt="">
              <h5 class="text-success mt-4"><u>Address:</u></h5>
              <h5 class="text-light mt-3">Dhaka, Bangladesh</h5>
              <h5 class="text-success mt-4"><u>Phone:</u></h5>
              <h5 class="mt-3"><a class="contact" href="#">+8805 7953 32453</a></h5>
              <h5 class="text-success mt-4"><u>Email:</u></h5>
              <h5 class="mt-3"><a class="contact" href="#">yourmail@gmail.com</a></h5>
              <ul class="p-4">
                <li class="d-inline p-3">
                  <a class="text-light" href="#"><i class="fa fa-pinterest"></i></a>
                </li>
                <li class="d-inline p-3">
                  <a class="text-light" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="d-inline p-3">
                  <a class="text-light" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="d-inline p-3">
                  <a class="text-light" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li class="d-inline p-3">
                  <a class="text-light" href="#"><i class="fa fa-vimeo"></i></a>
                </li>

                <li class="d-inline p-3">
                  <a class="text-light" href="#"><i class="fa fa-youtube"></i></a>
                </li>
              </ul>
              <p class="lead text-light">
                Copyright &copy;2019 All rights reserved | Made by aminul islam
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>



  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
  <script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>