<?php
//Header_part
include "header.php";

?>
<!-- nav_bar Section start -->
<header class="header_wrapper">
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Devloper Nur</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <i class=" text-danger navbar-toggler-icon fa-solid fa-bars-staggered"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav menu-navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#service">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-item ">
            <a class="main-btn" href="#hire">Hire Me</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<!-- nav_bar Section End -->

<!-- Home Section Start -->
<section class="home py-5" id="home">
  <div class="container-lg">
    <div class="row  min-vh-100 align-items-center align-content-center">
      <div class="col-md-6 mt-5 mt-md-0">
        <div class="home-img text-center">
          <img src="image/PICN.jpg" alt="profile-image" class="home-imge rounded-circle mw-100">
        </div>
      </div>
      <div class="col-md-6 mt-5 mt-md-0 order-md-first">
        <div class="home-text">
          <p class="text-muted mb-1">Hello I'm</p>
          <h1 class="text-danger text-uppercase fs-1 fw-bold">Web Devloper</h1>
          <h2 class="fs-4">Abdur Nur</h2>
          <p class="mt-4 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ab officia, molestiae fugiat aliquam, iusto beatae debitis deserunt iste quae ut. Ipsam aperiam quibusdam libero, laudantium itaque sed.</p>
          <a href="#portfolio" class="main-btn">My Work</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Home Section End -->

<!-- About Section start -->
<section class="about py-5" id="about">
  <div class="container-lg py-4">
    <div class="row justify-content-center">
      <div class="col-lg-8 ">
        <div class="section-title text-center">
          <h2 class="fw-bold mb-5">About Me</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="about-text">
          <h3 class="fs-4 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque expedita, .</h3>
          <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti placeat nam ab totam esse dignissimos animi officia ad, est architecto.</p>
        </div>
        <div class="row text-center text-uppercase my-3">
          <div class="col-sm-4">
            <h4 class="fs-1 fw-bold">100</h4>
            <p class="text-muted">Porjects Completed</p>
          </div>
          <div class="col-sm-4">
            <h4 class="fs-1 fw-bold">90</h4>
            <p class="text-muted">Happy clients</p>
          </div>
          <div class="col-sm-4">
            <h4 class="fs-1 fw-bold">95</h4>
            <p class="text-muted">Positive Revew</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex align-items-center">
            <a href="#" class="btn btn-danger me-5">Dwonload Cv</a>
            <div class="social-link">
              <a href="https://www.facebook.com/profile.php?id=100050204651966" class="text-dark me-2"><i class="fab fa-facebook-f"></i></a>
              <a href="https://twitter.com/developer_nur1" class="text-dark me-2"><i class="fab fa-twitter"></i></a>
              <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
              <a href="#" class="text-dark me-2"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 ">
        <div class="skil-item mb-4">
          <h3 class="fs-6">Html</h3>
          <div class="progress" style="height: 5px;">
            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="skil-item mb-4">
          <h3 class="fs-6">Css</h3>
          <div class="progress" style="height: 5px;">
            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="skil-item mb-4">
          <h3 class="fs-6">Bootstrap</h3>
          <div class="progress" style="height: 5px;">
            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="skil-item mb-4">
          <h3 class="fs-6">Javascript</h3>
          <div class="progress" style="height: 5px;">
            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="skil-item mb-4">
          <h3 class="fs-6">Php</h3>
          <div class="progress" style="height: 5px;">
            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="skil-item mb-4">
          <h3 class="fs-6">Mysql</h3>
          <div class="progress" style="height: 5px;">
            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About Section End -->

<!-- service Section start -->
<section class="service py-5" id="service">
  <div class="container-lg py-4">
    <div class="row justify-content-center">
      <div class="col-lg-8 ">
        <div class="section-title text-center">
          <h2 class="fw-bold mb-5">Service</h2>
        </div>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-6 col-lg-4">
        <div class="service-item shadow-sm p-4 rounded bg-white">
          <div class="icon my-3 text-danger fs-2">
            <i class="fas fa-code"></i>
          </div>
          <h3 class="fs-5 py-2">Web Devlopement</h3>
          <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, explicabo!</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="service-item shadow-sm p-4 rounded bg-white">
          <div class="icon my-3 text-danger fs-2">
            <i class="fas fa-lightbulb"></i>
          </div>
          <h3 class="fs-5 py-2">Creative Design </h3>
          <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, explicabo!</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="service-item shadow-sm p-4 rounded bg-white">
          <div class="icon my-3 text-danger fs-2">
            <i class="fas fa-image"></i>
          </div>
          <h3 class="fs-5 py-2">Photoshopt</h3>
          <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, explicabo!</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- service Section End -->

<!-- Portfolio Section start -->
<section class="portfolio py-5" id="portfolio">
  <div class="container-lg py-4">
    <div class="row justify-content-center">
      <div class="col-lg-8 ">
        <div class="section-title text-center">
          <h2 class="fw-bold mb-5">Last Work</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="protfolio-item">
          <img src="image/images.jpg" class="w-100 img-thumbnail" alt="">
          <h3 class="text-capitalize fs-5 my-2">team section</h3>
          <p class="mb-4"><a href="#" class="text-danger text-decoration-none">Live Demo</a></p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="protfolio-item">
          <img src="image/hotel.jpg" class="w-100 img-thumbnail" alt="">
          <h3 class="text-capitalize fs-5 my-2">Resturent</h3>
          <p class="mb-4"><a href="#" class="text-danger text-decoration-none">Live Demo</a></p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="protfolio-item">
          <img src="image/dashbord.jpg" class="w-100 img-thumbnail" alt="">
          <h3 class="text-capitalize fs-5 my-2">Dashbord</h3>
          <p class="mb-4"><a href="#" class="text-danger text-decoration-none">Live Demo</a></p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="protfolio-item">
          <img src="image/management-web.jpg" class="w-100 img-thumbnail" alt="">
          <h3 class="text-capitalize fs-5 my-2">Management</h3>
          <p class="mb-4"><a href="#" class="text-danger text-decoration-none">Live Demo</a></p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="protfolio-item">
          <img src="image/ecommers.jpg" class="w-100 img-thumbnail" alt="">
          <h3 class="text-capitalize fs-5 my-2">Ecommers</h3>
          <p class="mb-4"><a href="#" class="text-danger text-decoration-none">Live Demo</a></p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="protfolio-item">
          <img src="image/05_preview.avif" class="w-100 img-thumbnail" alt="">
          <h3 class="text-capitalize fs-5 my-2">ticket system</h3>
          <p class="mb-4"><a href="#" class="text-danger text-decoration-none">Live Demo</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Portfolio Section End -->


<!-- Freelancer-avilable Section Start -->
<section class="freelancer-avilable py-5 bg-danger" id="hire">
  <div class="container-lg py-4">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <p class="text-light fs-5">Do you have any project</p>
        <h2 class="fs-1 text-white mb-4">I am Avialable For Freelancer Project</h2>
        <a href="https://www.upwork.com/freelancers/~01933344d962585b38" class="btn btn-outline-light">Hire Me</a>
      </div>
    </div>
  </div>
</section>
<!-- Freelancer-avilable Section End -->

<!-- Testmonials Section Start -->
<section class="testmonials bg-white py-5" id="testmonial">
  <div class="container-lg py-4">
    <div class="row justify-content-center">
      <div class="col-lg-8 ">
        <div class="section-title text-center">
          <h2 class="fw-bold mb-5">Testmonial</h2>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-7">
        <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li data-bs-target="#carousel1" data-bs-slide-to="0" class="active bg-danger" aria-current="true" aria-label="Slide 1"></li>
            <li class="bg-danger" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></li>
            <li class="bg-danger" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></li>
          </ol>
          <div class="carousel-inner">
            <!-- test item stat -->
            <div class="testi-item  carousel-item active bg-white shadow-sm rounded p-4 mb-5 ">
              <div class="testi-author-info d-flex align-items-center">
                <img src="image/PICN.jpg" alt="author img " class="author img-thumbnail rounded-circle">
                <div class="author ms-3">
                  <h3 class="fs-6 mb-1">RajHimachal</h3>
                  <p class="text-muted m-0">SeoManager</p>
                </div>
              </div>
              <p class="mt-5 text-muted ">
                Lorem ipsum dolor sit,
                amet consectetur adipisicing elit.
                Consequuntur
              </p>
              <div class="rating text-danger">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
            <!-- test item End -->
            <!-- test item stat -->
            <div class="testi-item carousel-item  bg-white shadow-sm rounded p-4 mb-5">
              <div class="testi-author-info d-flex align-items-center">
                <img src="image/PICN.jpg" alt="author img " class="author img-thumbnail rounded-circle">
                <div class="author ms-3">
                  <h3 class="fs-6 mb-1">RajHimachal</h3>
                  <p class="text-muted m-0">SeoManager</p>
                </div>
              </div>
              <p class="mt-5 text-muted ">
                Lorem ipsum dolor sit,
                amet consectetur adipisicing elit.
                Consequuntur
              </p>
              <div class="rating text-danger">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
            <!-- test item End -->
            <!-- test item stat -->
            <div class="testi-item carousel-item  bg-white shadow-sm rounded p-4 mb-5">
              <div class="testi-author-info d-flex align-items-center">
                <img src="image/PICN.jpg" alt="author img " class="author img-thumbnail rounded-circle">
                <div class="author ms-3">
                  <h3 class="fs-6 mb-1">Raj Himachal</h3>
                  <p class="text-muted m-0">Seo Manager</p>
                </div>
              </div>
              <p class="mt-5 text-muted ">
                Lorem ipsum dolor sit,
                amet consectetur adipisicing elit.
                Consequuntur
              </p>
              <div class="rating text-danger">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
            <!-- test item End -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testmonials Section End -->


<!-- Contact Section End -->
<section class="about py-5" id="contact">
  <div class="container-lg py-4">
    <div class="row justify-content-center">
      <div class="col-lg-8 ">
        <div class="section-title text-center">
          <h2 class="fw-bold mb-5">Contact Me</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5">
        <div class="conten-item d-flex mb-3">
          <div class="icon fs-4 text-danger">
            <i class="fas fa-envelope"></i>

          </div>
          <div class="text ms-3">
            <h2 class="fs-5">Email</h2>
            <p class="text-muted ">polashmondol151@gmail.com</p>

          </div>
        </div>
        <div class="conten-item d-flex mb-3">
          <div class="icon fs-4 text-danger">
            <i class="fas fa-phone"></i>

          </div>
          <div class="text ms-3">
            <h2 class="fs-5">Phone</h2>
            <p class="text-muted ">+880172402644</p>

          </div>
        </div>
        <div class="conten-item d-flex mb-3">
          <div class="icon fs-4 text-danger">
            <i class="fas fa-map-marker-alt"></i>

          </div>
          <div class="text ms-3">
            <h2 class="fs-5">Visit Office</h2>
            <p class="text-muted ">Motijheel,Dhaka,1203</p>

          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="contact-from">
          <form action="">
            <div class="row">
              <div class="col-lg-6 mb-4">
                <input type="text" placeholder="Enter Your Name" class="form-control form-control-lg fs-6 border-0 shadow-sm">
              </div>
              <div class="col-lg-6 mb-4">
                <input type="text" placeholder="Enter Your Email" class="form-control form-control-lg fs-6 border-0 shadow-sm">
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12 mb-4">
              <input type="text" placeholder="Subject" class="form-control form-control-lg fs-6 border-0 shadow-sm">

              </div>

            </div>
            <div class="row">
              <div class="col-lg-12 mb-4">
              <textarea rows="5" placeholder="Your Message" class="form-control form-control-lg fs-6 border-0 shadow-sm"> </textarea>

              </div>

            </div>
            <div class="row">
              <div class="col-lg-12">
              <input type="submit"  class="btn btn-danger px-3 " value="Send Message">
            </div>


          </form>

        </div>
      </div>
    </div>
  </div>

  .
</section>


<!-- Contact Section End -->










<?php
//Footer_part
include "footer.php";

?>