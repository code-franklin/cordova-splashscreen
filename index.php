<?php require_once('./config.php'); ?>
 <!DOCTYPE html>
<html lang="en" class="" style="height: auto;">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <title> Jeremias Title </title>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<style>



</style>
<?php require_once('inc/header.php') ?>


  <body class="layout-top-nav layout-fixed layout-navbar-fixed" style="height: auto;">
<header>
      <nav class="nav">
            <div class="logo">
                <div class="img">
                    <img src="images/logo.png" alt="LOGO">
                </div>
                <ul class="menu">
                    <a href="#photo-section"><li>Photos</li></a>
                    <a href="#location-section"><li>Location</li>
                </ul>
            </div>

            <div class="actions">
                <a href="about_us.html"><li>About</li></a>
                <i class="fa-solid fa-bars"></i>
            </div>
  </nav>
</header>
  
<section class="hero-section">
        <div class="hero-text">
            <h4><span>Best Resort</span> <br>for your vacation</h4>
            <p>Discover a world where luxury meets nature at Jeremias,<br> 
            where every moment is a celebration of beauty and tranquility.</p>
            <button class="book-now-btn" id="reserve_room">Book Now <i class="fa-solid fa-arrow-right"></i></button>         
        </div>
        <div class="frame">
            <img src="images/frame.png" alt="">
        </div>
</section>

    <section class="service-section">
        <div class="service-title" data-aos ="zoom-in-up" data-aos-delay="100" data-aos-duration="1000">
            <h2>What we do</h2>
        </div>
        <div class="service-container"> 
            <div class="service-info" data-aos ="zoom-in-up" data-aos-delay="100" data-aos-duration="1000">
                <h3>Explore the Relaxing Place in Laguna</h3>
                <p>
                    Discover a world where luxury meets nature 
                at Jeremias, Where every moment is a celebration of beauty and tranquility.</p>
                <button class="book-now-btn">Learn More <i class="fa-solid fa-circle-info"></i></button>
            </div>
            <div class="service-image" data-aos ="zoom-in-left" data-aos-delay="100" data-aos-duration="1000">
                <img src="images/service-img.png" alt="">
            </div>
        </div>
    </section>

    <section class="photo-section" id="photo-section">
        <div class="photo-title">
            <h2>View Photos</h2>
            <p>Welcome to Jeremias Resort! We're excited to share with you a glimpse of the beautiful <br> experiences that await you here. In these photos,</p>
        </div>
        <nav class="view-nav">
            <div class="photo-nav">
              <button id="dayButton">Day Time <i class="fa-solid fa-sun"></i></button>
              <button id="nightButton">Night Time <i class="fa-solid fa-moon"></i></button>
            </div>

            <div class="view-all">
                <li onclick="openGallery('images/View-All.jpg')">View All  <i class="fa-solid fa-arrow-right"></i></li>
            </div>
            <div id="galleryModal" class="modal">
            <span class="close" onclick="closeGallery()">&times;</span>
            <div class="modal-content">
                <img id="expandedImg" style="width:100%">
            </div>
        </div>
        </nav>
        <div class="container-grid">
            <div class="first-img" id="dayImage1" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000"><img src="images/photo-5.png" alt=""></div>
            <div class="second-img" id="dayImage2"data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000"><img src="images/photo-4.png" alt=""></div>
            <div class="third-img" id="dayImage3" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000"><img src="images/photo-3.png" alt=""></div>
            <div class="fourth-img" id="dayImage4" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000"><img src="images/photo-2.png" alt=""></div>
            <div class="fifth-img" id="dayImage5" data-aos="zoom-in-left" data-aos-delay="100" data-aos-duration="1000"><img src="images/photo-1.png" alt=""></div>
        </div>
     
    </section>

    <section class="amenities-section">
        <div class="amenities-info">
            <h2>Amenities</h2>
            <p>Welcome to JBC Resort! We're excited to share with you a glimpse of the beautiful <br> experiences that await you here. In these photos,</p>
        </div>
            <div class="container-swiper">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"> <img src="images/swiper1.png" alt="">
                        <div class="card__content">
                        <p class="card__title">Tables & Chairs</p>                 
                        </div>
                    </div>     
                    <div class="swiper-slide"> <img src="images/swiper2.png" alt="">
                        <div class="card__content">
                          <p class="card__title">Swimming Pool</p>
                          
                        </div>
                    </div>   
                    <div class="swiper-slide"> <img src="images/swiper3.png" alt="">
                        <div class="card__content">
                          <p class="card__title">Water Dispenser</p>
                          
                        </div>
                    </div>   
                    <div class="swiper-slide"> <img src="images/swiper4.png" alt="">
                        <div class="card__content">
                          <p class="card__title">Grill Station</p>
                          
                        </div>
                    </div>   
                    <div class="swiper-slide"> <img src="images/swiper5.png" alt="">
                        <div class="card__content">
                          <p class="card__title">Swimming Pool</p>
                        </div>
                    </div>   
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
            </div>   
    </section>

    <section class="location-section" id="location-section">
        <div class="location-info">
            <h2>Location</h2>
            <p>Welcome to JBC Resort! We're excited to share with you a glimpse of the beautiful <br> experiences that await you here. In these photos,</p>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3868.1932012957545!2d121.17318417486284!3d14.183459587153799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd61bea7b16971%3A0x5b5d59746aaec3e1!2sJeremias%20Resort!5e0!3m2!1sen!2sph!4v1700318561149!5m2!1sen!2sph" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <footer>
       <div class="footer-container">
          <div class="first-info">
            <img src="images/logo.png" alt="">
            <h2>Jeremias resorts are popular <br>venues for family vacations</h2>
            <div class="icon">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-pinterest"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div>
          </div> 
          <div class="second-info">
            <h2>About</h2>
              <p>Owner</p>
              <p>Caretaker</p>
              <p>Developer</p>
          </div>
          <div class="third-info">
            <h2>Neighbor Resort</h2>
                  <p>Series 1 Resort</p>
                  <p>Golden Buddha Resort</p>
                  <p>Robles Resort</p>
             </div>
             <div class="fourth-info">
              <h2>Information</h2>
                <p>09566674853</p>
                <p>@jbcresort</p>
                <p>4027 Calamba Laguna</p>  
             </div>
        </div>
                  
            <div class="copyright-text">
            <p>Copyright © 2023 All rights reserved | block is made with by Group 2 Team  </p>
        </div>
    </footer>

  

    <div class="wrapper">
     <?php $page = isset($_GET['page']) ? $_GET['page'] : 'home';  ?>
     <?php require_once('inc/topBarNav.php') ?>
     <?php if($_settings->chk_flashdata('success')): ?>
      <script>
        alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
      </script>
      <?php endif;?>    

      <!-- Content Wrapper. Contains page content -->
     
      <?php 
          $rooms = $conn->query("SELECT * FROM room_list where delete_flag =0 and status = 1 order by name asc");
          while($row = $rooms->fetch_assoc()):
          ?>
           
        <?php endwhile; ?>

        
          <div class="container">
            <?php 
              if(!file_exists($page.".php") && !is_dir($page)){
                  
              }else{
                if(is_dir($page))
                  include $page.'/index.php';
                else
                  include $page.'.php';

              }
            ?>
          </div>
        
   
        <div class="modal fade rounded-0" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header rounded-0">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body rounded-0">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade rounded-0" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered rounded-0" role="document">
      <div class="modal-content rounded-0">
        <div class="modal-header rounded-0">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body rounded-0">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade rounded-0" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header rounded-0">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-right"></span>
        </button>
      </div>
      <div class="modal-body rounded-0">
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>
        

        
</div>
      <!-- /. CONNECTED ITO SA RESEVATION -->
      
   

      <?php require_once('inc/footer.php') ?> 
 
  
      
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
      AOS.init();
      var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      speed: 1000,
      autoplay: {
        delay: 1000, 
        disableOnInteraction: false, 
  },
    });
  document.getElementById('dayButton').addEventListener('click', function() {
    document.getElementById('dayImage1').innerHTML = '<img src="images/photo-5.png" alt="">';
    document.getElementById('dayImage2').innerHTML = '<img src="images/photo-4.png" alt="">';
    document.getElementById('dayImage3').innerHTML = '<img src="images/photo-3.png" alt="">';
    document.getElementById('dayImage4').innerHTML = '<img src="images/photo-2.png" alt="">';
    document.getElementById('dayImage5').innerHTML = '<img src="images/photo-1.png" alt="">';
  });

  document.getElementById('nightButton').addEventListener('click', function() {
    document.getElementById('dayImage1').innerHTML = '<img src="images/first-image.png" alt="">';
    document.getElementById('dayImage2').innerHTML = '<img src="images/second-image.png" alt="">';
    document.getElementById('dayImage3').innerHTML = '<img src="images/fifth-image.png" alt="">';
    document.getElementById('dayImage4').innerHTML = '<img src="images/fourth-image.png" alt="">';
    document.getElementById('dayImage5').innerHTML = '<img src="images/third-image.png" alt="">';
  });

    function openGallery(imagePath) {
      document.getElementById("expandedImg").src = imagePath;
      document.getElementById("galleryModal").style.display = "block";
  }

    function closeGallery() {
        document.getElementById("galleryModal").style.display = "none";
    }

  AOS.init();
</script>

  

    
    </script>
  <script>
    AOS.init();
  </script>

  </body>
</html>
