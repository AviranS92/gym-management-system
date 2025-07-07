	<?php include_once("includes/dialog.php"); ?>
<!--footer start-->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
            <h1>
              contact info
            </h1>
            <address>
              <p><i class="fa fa-home pr-10"></i>Address: No.XXXXXX street</p>
              <p><i class="fa fa-globe pr-10"></i>Mars city, Country </p>
              <p><i class="fa fa-mobile pr-10"></i>Mobile : (123) 456-7890 </p>
              <p><i class="fa fa-phone pr-10"></i>Phone : (123) 456-7890 </p>
              <p><i class="fa fa-envelope pr-10"></i>Email :   <a href="javascript:;">support@example.com</a></p>
            </address>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
              <h1>Modules</h1>
              <ul class="page-footer-list">
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="index.html">Supplier Module</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="about.php">User Module</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="contact.php">Equipment Module</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="login.php">Login Module</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="login.php">Attandance Module</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="login.php">Payment Module</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
              <h1>Project Links</h1>
              <ul class="page-footer-list">
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="index.html">Home</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="about.php">About Us</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="contact.php">Contact</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="login.php">Login</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="login.php">Email Us</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="text-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
              <h1>
                About Project
              </h1>
              <p>
                A health club (also known as a fitness club, fitness center, health spa, and commonly referred to as a gym) is a place which houses exercise equipment for the purpose of physical exercise.
                A health club (also known as a fitness club, fitness center, health spa, and commonly referred to as a gym) is a place which houses exercise equipment for the purpose of physical exercise.
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer end -->
    <!--small footer start -->
    <footer class="footer-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 pull-right">
                    <ul class="social-link-footer list-unstyled">
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".3s"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".4s"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".6s"><a href="#"><i class="fa fa-skype"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".7s"><a href="#"><i class="fa fa-github"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".8s"><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                  <div class="copyright">
                    <p>&copy; Copyright Gym Management System.</p>
                  </div>
                </div>
            </div>
        </div>
    </footer>
    <!--small footer end-->
    <script>
      wow = new WOW(
        {
          boxClass:     'wow',      // default
          animateClass: 'animated', // default
          offset:       0          // default
        }
      )
        wow.init();
    </script>


    <script>



      $(window).load(function() {
        $('[data-zlname = reverse-effect]').mateHover({
          position: 'y-reverse',
          overlayStyle: 'rolling',
          overlayBg: '#fff',
          overlayOpacity: 0.7,
          overlayEasing: 'easeOutCirc',
          rollingPosition: 'top',
          popupEasing: 'easeOutBack',
          popup2Easing: 'easeOutBack'
        }
                                                     );
      }
                    );

      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider) {
            $('body').removeClass('loading');
          }
        }
                                   );
      }
                    );

      $(document).ready(function() {

        $("#owl-demo").owlCarousel({
          items : 4,
        }
                                  );

      }
                       );




      $(window).scroll(function() {
        $('#skillz').each(function(){
          var imagePos = $(this).offset().top;
          var viewportheight = window.innerHeight;
          console.log(viewportheight);
          var topOfWindow = $(window).scrollTop();
          if (imagePos < topOfWindow+viewportheight) {
            $('.skill_bar').fadeIn('slow');
            $('.skill_one').animate({
              width:'60%'}
                                    , 2000);
            $('.skill_two').animate({
              width:'90%'}
                                    , 2000);
            $('.skill_three').animate({
              width:'70%'}
                                      , 1000);
            $('.skill_four').animate({
              width:'55%'}
                                     , 1000);
            $('.skill_bar_progress p').fadeIn('slow',function(){

            }
                                             );
          }
        }
                         );
      }
                      );


    </script>
    
  </body>
</html>

