<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Mona - Model Agency HTML5 Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Mona - Model Agency HTML5 Template</title>

  <!-- Favicon -->
  {{-- <link rel="icon" href="./img/core-img/favicon.ico"> --}}
  <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="{{ asset('customstyle.css') }}">

</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="wrapper">
      <div class="cssload-loader"></div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area">
    <!-- Main Header Start -->
    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
        <!-- Classy Menu -->
        <nav class="classy-navbar justify-content-between" id="monaNav">

          <!-- Background Curve -->
          <div class="bg-curve" style="background-image: url(./img/core-img/curve.png);"></div>

          <!-- Logo -->
          <a class="nav-brand" href="./"><img src="./img/core-img/logo.png" alt=""></a>

          <!-- Navbar Toggler -->
          <div class="classy-navbar-toggler">
            <span class="navbarToggler"><span></span><span></span><span></span></span>
          </div>

          <!-- Menu -->
          <div class="classy-menu">
            <!-- Menu Close Button -->
            <div class="classycloseIcon">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>

            <!-- Nav Start -->
            <div class="classynav">
              <ul id="nav">
                <li class="current-item"><a href="./">Home</a></li>
                <li><a href="#">Pages</a>
                  <ul class="dropdown">
                    <li><a href="./">- Home</a></li>
                    <li><a href="./about.html">- About Us</a></li>
                    <li><a href="./projects.html">- Projects</a></li>
                    <li><a href="./models.html">- Models</a></li>
                    <li><a href="./casting.html">- Casting</a></li>
                    <li><a href="./blog.html">- Blog</a></li>
                    <li><a href="./single-blog.html">- Blog Details</a></li>
                    <li><a href="./contact.html">- Contact</a></li>
                    <li><a href="#">- Dropdown</a>
                      <ul class="dropdown">
                        <li><a href="#">- Dropdown Item</a></li>
                        <li><a href="#">- Dropdown Item</a>
                          <ul class="dropdown">
                            <li><a href="#">- Even Dropdown</a></li>
                            <li><a href="#">- Even Dropdown</a></li>
                            <li><a href="#">- Even Dropdown</a></li>
                            <li><a href="#">- Even Dropdown</a></li>
                          </ul>
                        </li>
                        <li><a href="#">- Dropdown Item</a></li>
                        <li><a href="#">- Dropdown Item</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="./projects.html">Project</a></li>
                <li><a href="./models.html">Models</a></li>
                <li><a href="./casting.html">Casting</a></li>
                <li><a href="#">Blog</a>
                  <ul class="dropdown">
                    <li><a href="./blog.html">- Blog</a></li>
                    <li><a href="./single-blog.html">- Blog Details</a></li>
                  </ul>
                </li>
                <li><a href="./contact.html">Contact</a></li>
              </ul>

              <!-- Search Icon -->
              <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                <i class="icon_search"></i>
              </div>
            </div>
            <!-- Nav End -->

          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Top Search Area Start ***** -->
  <div class="top-search-area">
    <!-- Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <!-- Close Button -->
            <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
            <!-- Form -->
            <form action="index.html" method="post">
              <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
              <button type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Top Search Area End ***** -->

  <!-- ***** Welcome Area Start ***** -->
  <section class="welcome-area">
    <!-- Welcome Slides -->
    <div class="welcome-slides owl-carousel">

      <!-- Single Welcome Slide -->
      <div class="single-welcome-slide">
        <!-- Background Curve -->
        <div class="bg-curve" style="background-image: url(./img/core-img/curve.png);"></div>
        <!-- Main Background Image -->
        <div class="main-bg-img bg-img" data-animation="fadeInUpBig" data-delay="200ms" style="background-image: url(./img/bg-img/18.jpg);"></div>
        <!-- Welcome Text -->
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <div class="welcome-text">
                <h2 data-animation="bounceInUp" data-delay="400ms">Jesse <br>
                  Edwards</h2>
                <h5 data-animation="bounceInUp" data-delay="600ms">Star Model 2019</h5>
                <a href="#" class="btn" data-animation="bounceInUp" data-delay="800ms">Model details <i class="arrow_right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Social Info -->
        <div class="social-info">
          <a href="#" data-animation="bounceInDown" data-delay="1000ms"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1100ms"><i class="fa fa-twitter"></i> <span>Twitter</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1200ms"><i class="fa fa-instagram"></i> <span>Instagram</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1300ms"><i class="fa fa-youtube-play"></i> <span>Youtube</span></a>
        </div>
        <!-- Pager -->
        <div class="slide-pager">
          <a href="#">Next: Naznin Niloy</a>
        </div>
      </div>

      <!-- Single Welcome Slide -->
      <div class="single-welcome-slide">
        <!-- Background Curve -->
        <div class="bg-curve" style="background-image: url(./img/core-img/curve.png);"></div>
        <!-- Main Background Image -->
        <div class="main-bg-img bg-img" data-animation="fadeInUpBig" data-delay="200ms" style="background-image: url(./img/bg-img/19.jpg);"></div>
        <!-- Welcome Text -->
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <div class="welcome-text">
                <h2 data-animation="bounceInUp" data-delay="400ms">Naznin <br>
                  Niloy</h2>
                <h5 data-animation="bounceInUp" data-delay="600ms">Star Model 2019</h5>
                <a href="#" class="btn" data-animation="bounceInUp" data-delay="800ms">Model details <i class="arrow_right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Social Info -->
        <div class="social-info">
          <a href="#" data-animation="bounceInDown" data-delay="1000ms"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1100ms"><i class="fa fa-twitter"></i> <span>Twitter</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1200ms"><i class="fa fa-instagram"></i> <span>Instagram</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1300ms"><i class="fa fa-youtube-play"></i> <span>Youtube</span></a>
        </div>
        <!-- Pager -->
        <div class="slide-pager">
          <a href="#">Next: Shaila Ritu</a>
        </div>
      </div>

      <!-- Single Welcome Slide -->
      <div class="single-welcome-slide">
        <!-- Background Curve -->
        <div class="bg-curve" style="background-image: url(./img/core-img/curve.png);"></div>
        <!-- Main Background Image -->
        <div class="main-bg-img bg-img" data-animation="fadeInUpBig" data-delay="200ms" style="background-image: url(./img/bg-img/20.jpg);"></div>
        <!-- Welcome Text -->
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <div class="welcome-text">
                <h2 data-animation="bounceInUp" data-delay="400ms">Shaila <br>
                  Ritu</h2>
                <h5 data-animation="bounceInUp" data-delay="600ms">Star Model 2019</h5>
                <a href="#" class="btn" data-animation="bounceInUp" data-delay="800ms">Model details <i class="arrow_right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Social Info -->
        <div class="social-info">
          <a href="#" data-animation="bounceInDown" data-delay="1000ms"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1100ms"><i class="fa fa-twitter"></i> <span>Twitter</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1200ms"><i class="fa fa-instagram"></i> <span>Instagram</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1300ms"><i class="fa fa-youtube-play"></i> <span>Youtube</span></a>
        </div>
        <!-- Pager -->
        <div class="slide-pager">
          <a href="#">Next: Jesse Edwards</a>
        </div>
      </div>

    </div>
  </section>
  <!-- ***** Welcome Area End ***** -->

  <!-- ***** About Us Area Start ***** -->
  <section class="mona-about-us-area mb-30 section-padding-80-0">
    <div class="container">
      <div class="row">

        <!-- About Us Thumbnail -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="about-us-thumbnail mb-50 wow fadeInUp" data-wow-delay="100ms">
            <span class="line"></span>
            <img src="./img/bg-img/16.jpg" alt="">
            <span class="line2"></span>
          </div>
        </div>

        <!-- About Us Thumbnail -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="about-us-thumbnail mb-50 wow fadeInUp" data-wow-delay="400ms">
            <span class="line"></span>
            <img src="./img/bg-img/17.jpg" alt="">
            <span class="line2"></span>
          </div>
        </div>

        <!-- About Us Content -->
        <div class="col-12 col-lg-4">
          <div class="about-us-content mb-50 wow fadeInUp" data-wow-delay="700ms">
            <h2>We Have 20+ Years Practical Experience in Agency</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet ipsumlor eut consetetur sadipscing elitr.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Single Service Area -->
    <div class="container">
      <div class="service-area mt-80">
        <div class="row">

          <!-- Single Service Area -->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="100ms">
              <i class="icon_film"></i>
              <h5>Fashion Shows</h5>
              <p>At vero eos et accusam et justo duo dolores et ea rebum.</p>
            </div>
          </div>

          <!-- Single Service Area -->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="300ms">
              <i class="icon_calendar"></i>
              <h5>Special Events</h5>
              <p>At vero eos et accusam et justo duo dolores et ea rebum.</p>
            </div>
          </div>

          <!-- Single Service Area -->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="500ms">
              <i class="icon_camera_alt"></i>
              <h5>Commercial Photo</h5>
              <p>At vero eos et accusam et justo duo dolores et ea rebum.</p>
            </div>
          </div>

          <!-- Single Service Area -->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="700ms">
              <i class="icon_house_alt"></i>
              <h5>Model School</h5>
              <p>At vero eos et accusam et justo duo dolores et ea rebum.</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- ***** About Us Area End ***** -->

  <!-- ***** Model Area Start ***** -->
  <section class="mona-model-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="model-tab-area">

            <ul class="nav nav-tabs mb-50" id="mona_modelTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">All</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Model</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Actor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab4" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Singer</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Mona Tab Content -->
    <div class="mona-tab-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="tab-content" id="mona_modelTabContent">
              <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                <!-- All Model Slide -->
                <div class="mona-all-model-slide owl-carousel">
                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/10.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/9.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Willie Figueroa</h3>
                      <h6>Model</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/11.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/12.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Della Martinez</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/12.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/13.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Peter Alvarez</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/9.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/14.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Olive Ross</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/13.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/14.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Louise Ray</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/10.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/9.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Willie Figueroa</h3>
                      <h6>Model</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/11.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/12.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Della Martinez</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/12.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/13.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Peter Alvarez</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/9.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/14.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Olive Ross</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/13.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/14.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Louise Ray</h3>
                      <h6>actor</h6>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                <!-- All Model Slide -->
                <div class="mona-models-slide owl-carousel">
                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/10.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/9.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Willie Figueroa</h3>
                      <h6>Model</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/11.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/12.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Della Martinez</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/12.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/13.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Peter Alvarez</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/9.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/14.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Olive Ross</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/13.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/14.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Louise Ray</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/10.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/9.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Willie Figueroa</h3>
                      <h6>Model</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/11.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/12.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Della Martinez</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/12.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/13.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Peter Alvarez</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/9.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/14.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Olive Ross</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/13.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/14.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Louise Ray</h3>
                      <h6>actor</h6>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab3">
                <!-- All Model Slide -->
                <div class="mona-actor-slide owl-carousel">
                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/10.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/9.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Willie Figueroa</h3>
                      <h6>Model</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/11.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/12.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Della Martinez</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/12.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/13.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Peter Alvarez</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/9.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/14.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Olive Ross</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/13.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/14.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Louise Ray</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/10.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/9.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Willie Figueroa</h3>
                      <h6>Model</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/11.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/12.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Della Martinez</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/12.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/13.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Peter Alvarez</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/9.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/14.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Olive Ross</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/13.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/14.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Louise Ray</h3>
                      <h6>actor</h6>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab4">
                <!-- All Model Slide -->
                <div class="mona-singer-slide owl-carousel">
                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/10.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/9.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Willie Figueroa</h3>
                      <h6>Model</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/11.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/12.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Della Martinez</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/12.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/13.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Peter Alvarez</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/9.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/14.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Olive Ross</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/13.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/14.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Louise Ray</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/10.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/9.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Willie Figueroa</h3>
                      <h6>Model</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/11.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/12.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Della Martinez</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/12.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/13.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Peter Alvarez</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/9.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/14.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Olive Ross</h3>
                      <h6>actor</h6>
                    </div>
                  </div>

                  <!-- Single Model Item -->
                  <div class="single-model-item">
                    <div class="model-thumbnail">
                      <!-- First Thumbnail -->
                      <img class="first-thumbnail" src="./img/bg-img/13.jpg" alt="">
                      <!-- Second Thumbnail -->
                      <img class="second-thumbnail" src="./img/bg-img/14.jpg" alt="">
                      <!-- Share Info -->
                      <div class="share-info">
                        <!-- Share Icon -->
                        <div class="share-icon">
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <!-- Others Icon -->
                        <div class="others-icon">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="model-info">
                      <h3>Louise Ray</h3>
                      <h6>actor</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Model Area End ***** -->

  <!-- ***** Client Feedback Area Start ***** -->
  <section class="clients-feedback-area section-padding-80 clearfix">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10">
          <div class="slider slider-for">

            <!-- Client Feedback Text -->
            <div class="client-feedback-text text-center">
              <div class="quote-icon">
                <i class="icon_quotations" aria-hidden="true"></i>
              </div>
              <div class="client-description text-center">
                <h4>“Success Agency is, hands down, one of the best companies that we have worked with! The company has either met or exceeded all of the goals that we initially set for all of the projects that they implemented for us.”</h4>
              </div>
              <div class="ratings text-center">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="client-name text-center">
                <h5>Rodney Williams</h5>
                <span>Producer</span>
              </div>
            </div>

            <!-- Client Feedback Text -->
            <div class="client-feedback-text text-center">
              <div class="quote-icon">
                <i class="icon_quotations" aria-hidden="true"></i>
              </div>
              <div class="client-description text-center">
                <h4>“Success Agency is, hands down, one of the best companies that we have worked with! The company has either met or exceeded all of the goals that we initially set for all of the projects that they implemented for us.”</h4>
              </div>
              <div class="ratings text-center">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="client-name text-center">
                <h5>Nazrul Islam</h5>
                <span>Producer</span>
              </div>
            </div>

            <!-- Client Feedback Text -->
            <div class="client-feedback-text text-center">
              <div class="quote-icon">
                <i class="icon_quotations" aria-hidden="true"></i>
              </div>
              <div class="client-description text-center">
                <h4>“Success Agency is, hands down, one of the best companies that we have worked with! The company has either met or exceeded all of the goals that we initially set for all of the projects that they implemented for us.”</h4>
              </div>
              <div class="ratings text-center">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="client-name text-center">
                <h5>Williams Rodney</h5>
                <span>Producer</span>
              </div>
            </div>

            <!-- Client Feedback Text -->
            <div class="client-feedback-text text-center">
              <div class="quote-icon">
                <i class="icon_quotations" aria-hidden="true"></i>
              </div>
              <div class="client-description text-center">
                <h4>“Success Agency is, hands down, one of the best companies that we have worked with! The company has either met or exceeded all of the goals that we initially set for all of the projects that they implemented for us.”</h4>
              </div>
              <div class="ratings text-center">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="client-name text-center">
                <h5>Rodney Williams</h5>
                <span>Producer</span>
              </div>
            </div>

            <!-- Client Feedback Text -->
            <div class="client-feedback-text text-center">
              <div class="quote-icon">
                <i class="icon_quotations" aria-hidden="true"></i>
              </div>
              <div class="client-description text-center">
                <h4>“Success Agency is, hands down, one of the best companies that we have worked with! The company has either met or exceeded all of the goals that we initially set for all of the projects that they implemented for us.”</h4>
              </div>
              <div class="ratings text-center">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="client-name text-center">
                <h5>Rodney Williams</h5>
                <span>Producer</span>
              </div>
            </div>

          </div>
        </div>

        <!-- Client Thumbnail Area -->
        <div class="col-12 col-md-6 col-lg-5">
          <div class="slider slider-nav">
            <div class="client-thumbnail">
              <img src="./img/bg-img/6.jpg" alt="">
            </div>
            <div class="client-thumbnail">
              <img src="./img/bg-img/7.jpg" alt="">
            </div>
            <div class="client-thumbnail">
              <img src="./img/bg-img/8.jpg" alt="">
            </div>
            <div class="client-thumbnail">
              <img src="./img/bg-img/6.jpg" alt="">
            </div>
            <div class="client-thumbnail">
              <img src="./img/bg-img/7.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Client Feedback Area End ***** -->

  <!-- ***** CTA Area Start ***** -->
  <section class="mona-cta-area section-padding-80">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="cta-content">
            <h2>Do You Want To Be A Model?</h2>
            <h6>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor.</h6>
            <a href="#" class="btn mona-btn">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** CTA Area End ***** -->

  <!-- ***** Blog Area Start ***** -->
  <section class="mona-blog-area mb-50 section-padding-80-0">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center">
            <h2>Latest News</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- Single Blog Post -->
        <div class="col-12 col-lg-4">
          <div class="single-blog-post mb-30 wow fadeInUp" data-wow-delay="100ms">
            <div class="post-thumbnail slide-post owl-carousel">
              <a href="#"><img src="./img/bg-img/3.jpg" alt=""></a>
              <a href="#"><img src="./img/bg-img/4.jpg" alt=""></a>
            </div>
            <div class="post-content">
              <a href="#" class="post-title">How To Use Eye Shadow Like The Stars</a>
              <span class="post-date">30 Aug 2018</span>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-8">
          <div class="row">

            <!-- Single Blog Post -->
            <div class="col-12">
              <div class="single-blog-post featured-post mb-30 wow fadeInUp" data-wow-delay="300ms">
                <div class="post-thumbnail">
                  <a href="#"><img src="./img/bg-img/5.jpg" alt=""></a>
                </div>
                <div class="post-content">
                  <div>
                    <a href="#" class="post-title">What Curling Irons Are The Best Ones</a>
                    <span class="post-date">30 Aug 2018</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Single Blog Post -->
            <div class="col-12 col-sm-6">
              <div class="single-blog-post mb-30 wow fadeInUp" data-wow-delay="500ms">
                <div class="post-thumbnail">
                  <a href="#"><img src="./img/bg-img/1.jpg" alt=""></a>
                </div>
                <div class="post-content">
                  <a href="#" class="post-title">What Curling Irons Are The Best Ones</a>
                  <span class="post-date">30 Aug 2018</span>
                </div>
              </div>
            </div>

            <!-- Single Blog Post -->
            <div class="col-12 col-sm-6">
              <div class="single-blog-post mb-30 wow fadeInUp" data-wow-delay="700ms">
                <div class="post-thumbnail">
                  <a href="#"><img src="./img/bg-img/2.jpg" alt=""></a>
                </div>
                <div class="post-content">
                  <a href="#" class="post-title">How To Save Money On Beauty Products</a>
                  <span class="post-date">30 Aug 2018</span>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Blog Area End ***** -->

  <!-- ***** Footer Area Start ***** -->
  <footer class="footer-area section-padding-80-0">
    <div class="container">
      <div class="row justify-content-between">

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
          <div class="single-footer-widget mb-60">
            <!-- Logo -->
            <a href="#" class="d-block mb-4"><img src="./img/core-img/logo.png" alt=""></a>
            <p>Integer vehicula mauris libero, at molestie eros imperdiet sit amet. Suspendisse mattis ante sit amet ante.</p>
            <div class="copywrite-text">
              <p>&copy; 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
          <div class="single-footer-widget mb-60">
            <!-- Widget Title -->
            <h4 class="widget-title">Our Link</h4>

            <!-- Catagories Nav -->
            <nav>
              <ul class="our-link">
                <li><a href="#">New Faces</a></li>
                <li><a href="#">Model Of the Week</a></li>
                <li><a href="#">Classic Women</a></li>
                <li><a href="#">Privacy Terms</a></li>
                <li><a href="#">Classic Men</a></li>
                <li><a href="#">Conditions</a></li>
                <li><a href="#">Hair & Styles</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-lg-4 col-xl-3">
          <div class="single-footer-widget mb-60">
            <!-- Widget Title -->
            <h4 class="widget-title">Contact</h4>
            <!-- Footer Content -->
            <div class="footer-content mb-30">
              <h4>+01-3-8888-6868</h4>
              <h6>40 Baria Sreet 133/2 NewYork City</h6>
            </div>
            <!-- Social Info -->
            <div class="footer-social-info">
              <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
              <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </footer>
  <!-- ***** Footer Area End ***** -->

  <!-- ******* All JS ******* -->
  <!-- jQuery js -->
  <script src="js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- All js -->
  <script src="js/mona.bundle.js"></script>
  <!-- Active js -->
  <script src="js/default-assets/active.js"></script>

</body>

</html>