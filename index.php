<?php 

session_start();

$isLoggedIn = isset($_SESSION['username']);

function username_dis() {
  if(!isset($_SESSION['username'])) {
    return "Login";
  } else {
    return $_SESSION['username'];
  }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
         rel="stylesheet"/>
<link rel="stylesheet" href="styles.css"/>
        <title>abc</title>
    </meta>
    <body>
        <!--header-->
        <header class="header">
            <nav>
                <div class="nav__bar">
                    <div class="logo">
                        <a href="#" ><img src="img/logo name.png" alt="logo"></a>
                    </div>
                    <div class="nav__menu__btn" id="menu-btn">
                        <i class="ri-menu-line"></i>
                    </div>
                </div>
                <ul class="nav__links" id="nav-links">
                  <li><a href="#home" style="font-family: Salsa;">Home</a></Home<>
                    <li><a href="#about"style="font-family: Salsa;">About</a></li>
                    <li><a href="#services"style="font-family: Salsa;">Services</a></li>
                    <li><a href="#event"style="font-family: Salsa;">Events</a></li>
                    <li><a href="#blog"style="font-family: Salsa;">Blog</a></li>
                    <li><a href="#client"style="font-family: Salsa;">Clients</a></li>
                    <li><a href="#contact"style="font-family: Salsa;">Contact</a></li>
                </ul>
                <button class="btn nav__btn" style="font-family: Salsa;">
    <a href="<?php echo $isLoggedIn ? '#' : 'login.php'; ?>" 
       <?php if ($isLoggedIn): ?>
           onclick="event.preventDefault();" 
           style="text-decoration: none; color: white; cursor: not-allowed;"
       <?php else: ?>
           style="text-decoration: none; color: white;"
       <?php endif; ?>>
       <?php echo username_dis(); ?>
    </a>
</button>
            </nav>
            <div class="section__container header__container" id="home">
                <a href="#" ><img src="img/logooo.png" alt="section__container header__container"></a>
                <p>Event Beyond Imagination</p>
            </div>
        </header>
        
        <!--<section class="section__container login__container">
            <form action="/" class="login__form">
            <div class="input__group">

            </div>
            </form>

        </!--<section>-->
        <!--banner-->
        
        <!--*** main start ***-->
        
        <!--about section-->
        <section class="section__container about__container" id="about">
            <div class="about__image">
                <img src="img/abcd.jpg" alt="about">
            </div>
            <div class="about__content">
                <h1 class="section__subheader" ><b>About Us</b></h1>
                <h2 class="section__header">EVENTURA Event Planning</h2>
                <p class="section__description" >
                  Welcome to Eventura, where every event is an adventure! We are a vibrant team of dream-weavers and detail-lovers, dedicated to crafting events that sparkle with magic and leave lasting memories. Whether it's a whimsical wedding, a bold corporate gathering, or a joyful celebration, we turn your ideas into breathtaking realities.
                <br><br>
                At Eventura, we believe that every event tells a story. Our mission is to help you tell yours in the most spectacular way possible. With a blend of creativity, innovation, and meticulous planning, we transform ordinary moments into extraordinary experiences.
                <br><br>
                Our journey begins with your vision. We listen, brainstorm, and collaborate to create a bespoke event that reflects your personality and style. From enchanting venues and stunning decor to flawless logistics and seamless coordination, we take care of every detail so you can revel in the magic of the moment.
                <div class="about__btn">
                    <button class="btn" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Read more</button>
                </div>
            </div>     
        </section>
        
        <!--services -->
        <section id="services" class="section__container services__container">
            <div class="services__container">
                <div class="roww">
                    <h1 class="section__subheader">  <b>Services</b>  </h1>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="img-box">
                                <img src="img/photo.jpg" alt="">
                            </div>
                            <div class="details">
                                <h4>Photo & Video</h4><br>
                                <p style="font-size: 13px;">
                                  Every moment is a story waiting to be told. Our talented photographers and videographers turn your special events into timeless visual masterpieces. From candid smiles to unforgettable dances, we capture it all with creativity and precision. Relive the magic of your event, frame by frame, with Eventura’s Photo & Video Services!
                                </p>
                                <a href="#" class="section-btn">Discover more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="card">
                              <div class="img-box">
                                  <img src="img/hotel.jpg" alt="">
                              </div>
                              <div class="details">
                                  <h4>Restaurant & Hotel</h4><br>
                                  <p style="font-size: 13px;">
                                    Treat your guests to the finest culinary delights and luxurious stays. Eventura partners with premier restaurants and hotels to ensure your event is filled with exceptional flavors and comfort. Elevate your celebration with unforgettable dining and accommodation experiences!
                                  </p>
                                  <a href="#" class="section-btn">Discover more</a>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="card">
                                <div class="img-box">
                                    <img src="img/music.jpg" alt="">
                                </div>
                                <div class="details">
                                    <h4>Live music & Audio</h4><br>
                                    <p style="font-size: 13px;">
                                      Bring your event to life with our exceptional live music and audio services. From enchanting melodies to electrifying beats, we provide the perfect soundtrack for every moment. Let Eventura set the stage for unforgettable musical experiences!
                                    </p>
                                    <a href="#" class="section-btn">Discover more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="card">
                                  <div class="img-box">
                                      <img src="img/cake.jpg" alt="">
                                  </div>
                                  <div class="details">
                                      <h4>Cake</h4><br>
                                      <p style="font-size: 13px;">
                                        Make your event unforgettable with our stunning cakes, crafted to perfection. From classic elegance to whimsical designs, each creation is a sweet masterpiece. Let Eventura add a delicious touch to your celebration!
                                      </p>
                                      <a href="#" class="section-btn">Discover more</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="card">
                                    <div class="img-box">
                                        <img src="img/decoration.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <h4>Decoration</h4><br>
                                        <p style="font-size: 13px;">
                                          Elevate your event with our imaginative decoration services. From dazzling centerpieces to enchanting themes, we craft the perfect ambiance to make your celebration truly unforgettable. Let Eventura turn your space into a masterpiece!
                                        </p>
                                        <a href="#" class="section-btn">Discover more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                <div class="card">
                                    <div class="img-box">
                                        <img src="img/decoration.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <h4>Decoration</h4><br>
                                        <p style="font-size: 13px;">
                                          Elevate your event with our imaginative decoration services. From dazzling centerpieces to enchanting themes, we craft the perfect ambiance to make your celebration truly unforgettable. Let Eventura turn your space into a masterpiece!
                                        </p>
                                        <a href="#" class="section-btn">Discover more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                <div class="card">
                                    <div class="img-box">
                                        <img src="img/decoration.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <h4>Decoration</h4><br>
                                        <p style="font-size: 13px;">
                                          Elevate your event with our imaginative decoration services. From dazzling centerpieces to enchanting themes, we craft the perfect ambiance to make your celebration truly unforgettable. Let Eventura turn your space into a masterpiece!
                                        </p>
                                        <a href="#" class="section-btn">Discover more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                <div class="card">
                                    <div class="img-box">
                                        <img src="img/decoration.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <h4>Decoration</h4><br>
                                        <p style="font-size: 13px;">
                                          Elevate your event with our imaginative decoration services. From dazzling centerpieces to enchanting themes, we craft the perfect ambiance to make your celebration truly unforgettable. Let Eventura turn your space into a masterpiece!
                                        </p>
                                        <a href="#" class="section-btn">Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <!--event-->

        <section id="event"class="section__container event__container">
            <p class="section__subheader" style="font-size: 25px;"><b>Events</b></p>
            <h2 class="section__header">The Most Memorable & Important Events Here.</h2>
            <div class="event__grid">
              <div class="event__card">
                <div class="event__card__image">
                  <img src="img/wedding.jpg" alt="event" />
                  <div class="event__card__icons"> 
                    <span><a href="wedding.html"><i class="ri-links-line" title="Event Details"></i></a></span>
                    <span><a href="#"><i class="ri-eye-2-line"></i></a></span>
                  </div>
                </div>
                <div class="event__card__details">
                  <h4 style="font-size: 25px;">Wedding</h4>
                  <p>
                    Celebrate love with unforgettable moments. Eventura crafts your dream wedding into a magical reality.
                  </p>           
                </div>
              </div>
              
              <div class="event__card">
                <div class="event__card__image">
                  <img src="img/social.jpg" alt="event" />
                  <div class="event__card__icons"> 
                    <span><a href="social.html"><i class="ri-links-line" title="Event Details"></i></a></span>
                    <span><a href="#"><i class="ri-eye-2-line"></i></a></span>
                  </div>
                </div>
                <div class="event__card__details">
                  <h4 style="font-size: 25px;">Social Gathering</h4>
                  <p>
                    Celebrate life’s special moments. Eventura designs unforgettable social events filled with joy and charm.
                  </p>           
                </div>
              </div>
              <div class="event__card">
                <div class="event__card__image">
                  <img src="img/coporative.jpg" alt="event" />
                  <div class="event__card__icons"> 
                    <span><a href="corporate.html"><i class="ri-links-line" title="Event Details"></i></a></span>
                    <span><a href="#"><i class="ri-eye-2-line"></i></a></span>
                  </div>
                </div>
                <div class="event__card__details">
                  <h4 style="font-size: 25px;">Coporate Events</h4>
                  <p>
                    Elevate your business with impactful events. Eventura creates seamless and memorable corporate experiences.
                  </p>           
                </div>
              </div>
              <div class="event__card">
                <div class="event__card__image">
                  <img src="img/concert.jpg" alt="event" />
                  <div class="event__card__icons"> 
                    <span><a href="concert.html"><i class="ri-links-line" title="Event Details"></i></a></span>
                    <span><a href="#"><i class="ri-eye-2-line"></i></a></span>
                  </div>
                </div>
                <div class="event__card__details">
                  <h4 style="font-size: 25px;">Concerts</h4>
                  <p>
                    Experience the thrill of live music. Eventura orchestrates unforgettable concert events just for you.
                  </p>           
                </div>
              </div>
              <div class="event__card">
                <div class="event__card__image">
                  <img src="img/holiday.jpg" alt="event" />
                  <div class="event__card__icons"> 
                    <span><a href="holiday.html"><i class="ri-links-line" title="Event Details"></i></a></span>
                    <span><a href="#"><i class="ri-eye-2-line"></i></a></span>
                  </div>
                </div>
                <div class="event__card__details">
                  <h4 style="font-size: 25px;">Holiday Parties</h4>
                  <p>
                    Celebrate the season in style. Eventura creates magical holiday parties full of festive cheer.
                  </p>           
                </div>
              </div>
              <div class="event__card">
                <div class="event__card__image">
                  <img src="img/award.jpg" alt="event" />
                  <div class="event__card__icons"> 
                    <span><a href="award.html"><i class="ri-links-line" title="Event Details"></i></a></span>
                    <span><a href="#"><i class="ri-eye-2-line"></i></a></span>
                  </div>
                </div>
                <div class="event__card__details">
                  <h4 style="font-size: 25px;">Award Ceremonies</h4>
                  <p>
                    Honor excellence with elegance. Eventura crafts memorable award ceremonies that celebrate achievements in style.
                  </p>           
                </div>
              </div>
              <div class="event__card">
                <div class="event__card__image">
                  <img src="img/festival.jpg" alt="event" />
                  <div class="event__card__icons"> 
                    <span><a href="festival.html"><i class="ri-links-line" title="Event Details"></i></a></span>
                    <span><a href="#"><i class="ri-eye-2-line"></i></a></span>
                  </div>
                </div>
                <div class="event__card__details">
                  <h4 style="font-size: 25px;">Festival</h4>
                  <p>
                    Celebrate in vibrant style. Eventura designs unforgettable festivals that light up the atmosphere with joy.
                  </p>           
                </div>
              </div>
              <div class="event__card">
                <div class="event__card__image">
                  <img src="img/product.jpg" alt="event" />
                  <div class="event__card__icons"> 
                    <span><a href="product.html"><i class="ri-links-line" title="Event Details"></i></a></span>
                    <span><a href="#"><i class="ri-eye-2-line"></i></a></span>
                  </div>
                </div>
                <div class="event__card__details">
                  <h4 style="font-size: 25px;">Product Launches</h4>
                  <p>
                    Ignite excitement and buzz. Eventura creates dynamic product launches that captivate and inspire audiences.
                  </p>           
                </div>
              </div>
              
            </div>
          </section>
        <!--service-->

        <section class="service">
            <div class="section__container service__container">
              <div class="service__content">
                <p class="section__subheader" style="font-size: 20px;"><b>SERVICE</b></p>
                <h2 class="section__header">Join With Us & Get Best </h2>
                <ul class="service__list">
                  <li>
                    <span><i class="ri-service-fill"></i></span>
                    Scope of Services
                  </li>
                  <li>
                    <span><i class="ri-user-6-fill"></i></span>
                    Client Responsibilities
                  </li>
                  <li>
                    <span><i class="ri-exchange-2-fill"></i></span>
                    Changes and Adjustments
                  </li>
                  <li>
                    <span><i class="ri-flashlight-fill"></i></span>
                    Confidentiality
                  </li>
                </ul>
              </bSERVICES<>
            </div>
          </section>
          <!--banner-->
          <section class="section__container banner__container">
            <div class="banner__content">
              <div class="banner__card">
                <h4>0+</h4>
                <p>Bookings Completed</p>
              </div>
              <div class="banner__card">
                <h4>0+</h4>
                <p>Happy Customers</p>
              </div>
            </div>
          </section>

          <!--blog-->
          <section class="section__container blog__container" id="blog">
          <p class="section__subheader" style="font-size: 20px;"><b>Blog</b></p>
          <br>
          <div class="rowww"> 
  <div class="column">
    <img src="" style="width:100%">
    <img src="" style="width:100%">
    <img src="" style="width:100%">
    <img src="" style="width:100%">
    
  </div>
  <div class="column">
    <img src="" style="width:100%">
    <img src="" style="width:100%">
    <img src="" style="width:100%">
    <img src="" style="width:100%">
    
  </div>  
  <div class="column">
    <img src="" style="width:100%">
    <img src="" style="width:100%">
    <img src="" style="width:100%">
    <img src="" style="width:100%">
    
  </div>
  <div class="column">
    <img src="" style="width:100%">
    <img src="" style="width:100%">
    <img src="" style="width:100%">
    <img src="" style="width:100%">
    
  </div>
</div>


          </section>
          <!--portfolio-->
        <section class="section__container gallery__container" id="client">
          <p class="section__subheader" style="font-size: 20px;"><b>Client</b></p>
            <div class="gallery__grid">
              <img src="" alt="gallery" />
              <img src="" alt="gallery" />
              <img src="" alt="gallery" />
              <img src="" alt="gallery" />
              <img src="" alt="gallery" />
              <img src="" alt="gallery" />
              <img src="" alt="gallery" />
              <img src="" alt="gallery" />
            </div>
            <!--
            <div class="gallery__btn">
              <button class="btn" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">VIEW GALLERY</button>
            </div>
            -->
          </section>

          <!--explore-->
          <section class="explore" id="explore">
            <h2 class="section__header">What's New Today.</h2>
            <div class="explore__bg">
              <div class="explore__content">
                <p class="section__description"><b>Have a nice day..!</b></p>
                <h4>A New Menu Is Available In Our Hotel.</h4>
                
              </div>
            </div>
          </section>
        
        <!--contact-->
        <footer class="footer" id="contact">
            <div class="section__container footer__container">
              <div class="footer__col">
                <div class="logo">
                  <a href="#home"><img src="img/logooo.png" alt="logo" /></a>
                </div>
                <p class="section__description">
                  Unleash the magic of your moments with Eventura! We turn your dreams into dazzling realities, crafting unforgettable events with creativity and flair. From intimate gatherings to grand celebrations, let us make your special day truly spectacular!
                </p>
                <button class="btn" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                  <a href="payment.php" style="color:white;">PAYMENT</a>
                </button>
              </div>
              <div class="footer__col">
                <h4>OUR EVENTS</h4>
                <ul class="footer__links">
                  <li><a href="wedding.html">Wedding</a></li>
                  <li><a href="social.html">Social Gatherings</a></li>
                  <li><a href="corporate.html">Corporate Events</a></li>
                  <li><a href="concert.html">Concerts</a></li>
                  <li><a href="holiday.html">Holiday Parties</a></li>
                  <li><a href="award.html">Award Ceremonies</a></li>
                  <li><a href="festival.html">Festivals</a></li>
                  <li><a href="product.html">Product Launches</a></li>
                </ul>
              </div>
              <div class="footer__col">
                <h4>QUICK LINKS</h4>
                <ul class="footer__links">
                  <li><a href="#">Browse Destinations</a></li>
                  <li><a href="#">Special Offers & Packages</a></li>
                  <li><a href="#">Customer Reviews & Ratings</a></li>
                </ul>
              </div>
              
              <div class="footer__col">
                <h4>CONTACT US</h4>
                <ul class="footer__links">
                  <li><a href="#">eventura@gmail.com</a></li>
                </ul>
                <div class="footer__socials">
                  <a href="#"><img src="img/facebook.png" alt="facebook" /></a>
                  <a href="#"><img src="img/inster.png" alt="instagram" /></a>
                  <a href="#"><img src="img/youtube.png" alt="youtube" /></a>
                  <a href="#"><img src="img/linkin.png" alt="linkedin" /></a>
                </div>
              </div>
            </div>
            <div class="footer__bar">
              
              <div class="log-out">
                <img src="img/log.png" style="width: 20px; " class="center">
                
                <a href="logout.php" style="text-decoration: none; color: white;">Log out</a>
              </div>
              Eventura website
            </div>
          </footer>
      
        
        <!--**main end**-->
        <!--java script vendors-->
        
        <!--customised js-->
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="script.js"></script>
    </section>

    
</html>