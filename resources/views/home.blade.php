<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>WRC 2021</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('schedule') }}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('schedule') }}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset('schedule') }}/lib/animate/animate.min.css" rel="stylesheet">
  <link href="{{ asset('schedule') }}/lib/venobox/venobox.css" rel="stylesheet">
  <link href="{{ asset('schedule') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('schedule') }}/css/style.css" rel="stylesheet">


</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="{{ asset('schedule') }}/img/logo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="{{ route('lobby') }}">Lobby</a></li>
          <li><a href="#">Exhibitors List</a></li>
          <li><a href="#">Buyers List</a></li>
          <li><a href="#">Schedule</a></li>
          <li><a href="#">Videos</a></li>
          <li class="buy-tickets"><a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a></li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">The Annual<br><span>WRC</span> Conference</h1>
      <p class="mb-4 pb-0">10-12 March 2021, Online , Browser</p>
      
      <a href="#about" class="about-btn scrollto">View Schedule</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>About The Event</h2>
            <p>Sed nam ut dolor qui repellendus iusto odit. Possimus inventore eveniet accusamus error amet eius aut
              accusantium et. Non odit consequatur repudiandae sequi ea odio molestiae. Enim possimus sunt inventore in
              est ut optio sequi unde.</p>
          </div>
          <div class="col-lg-3">
            <h3>Hosted by</h3>
            <p>WRC </p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p>Monday to Wednesday<br>
            Specify Date Here</p>
          </div>
        </div>
      </div>
    </section>

  

    <!--==========================
      Schedule Section
    ============================-->
    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Event Schedule</h2>
          <p>Here is our event schedule</p>
        </div>

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Day 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Day 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Day 3</a>
          </li>
        </ul>

       

        <div class="tab-content row justify-content-center">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <div class="row schedule-item">
              <div class="col-md-2"><time>07:30 AM</time></div>
              <div class="col-md-10">
                <h4>Opening</h4>
                <p>Dummy Paragraph</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>08:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ asset('schedule') }}/img/speakers/1.jpg" alt="#">
                </div>
                <h4>Business Lecture</span></h4>
                <p>Dummy Paragraph</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ asset('schedule') }}/img/speakers/2.jpg" alt="#">
                </div>
                <h4>Headline</h4>
                <p>Pictures are just for UX purposes</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ asset('schedule') }}/img/speakers/3.jpg" alt="#">
                </div>
                <h4>Headline</h4>
                <p>Dummy Text</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ asset('schedule') }}/img/speakers/4.jpg" alt="#">
                </div>
                <h4>Headline</h4>
                <p>Dummy Text</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ asset('schedule') }}/img/speakers/5.jpg" alt="#">
                </div>
                <h4>Head Line <span>(Speaker)</span></h4>
                <p>Some Descriptive Paragraph</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ asset('schedule') }}/img/speakers/6.jpg" alt="#">
                </div>
                <h4>Headline <span>Bongani Nombamba</span></h4>
                <p>Dummy Text</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

            <div class="row schedule-item">
              <div class="col-md-2"><time>08:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ asset('schedule') }}/img/speakers/1.jpg" alt="#">
                </div>
                <h4>Headd Line</h4>
                <p>Welcome Text</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>09:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ asset('schedule') }}/img/speakers/2.jpg" alt="#">
                </div>
                <h4>Heading</h4>
                <p>Paragrah describing the headline</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ asset('schedule') }}/img/speakers/3.jpg" alt="#">
                </div>
                <h4>Heading</h4>
                <p>Dummy Text</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ asset('schedule') }}/img/speakers/4.jpg" alt="#">
                </div>
                <h4>Heading</h4>
                <p>Dummy Text</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ asset('schedule') }}/img/speakers/5.jpg" alt="#">
                </div>
                <h4>Heading</h4>
                <p>Dummy Text</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ asset('schedule') }}/img/speakers/6.jpg" alt="Willow Trantow">
                </div>
                <h4>Heading</h4>
                <p>Dummy Text</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 2 -->

          <!-- Schdule Day 3 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ asset('schedule') }}/img/speakers/2.jpg" alt="#">
                </div>
                <h4>Heading</span></h4>
                <p>Dummy Text</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ asset('schedule') }}/img/speakers/3.jpg" alt="#">
                </div>
                <h4>Heading</span></h4>
                <p>Dummy Text</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ asset('schedule') }}/img/speakers/1.jpg" alt="Brenden Legros">
                </div>
                <h4>Heading</span></h4>
                <p>Dummy Text</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ asset('schedule') }}/img/speakers/4.jpg" alt="#">
                </div>
                <h4>Heading</span></h4>
                <p>Dummy Text</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ asset('schedule') }}/img/speakers/5.jpg" alt="#">
                </div>
                <h4>Heading</span></h4>
                <p>Dumy Text</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ asset('schedule') }}/img/speakers/6.jpg" alt="#">
                </div>
                <h4>Heading</h4>
                <p>Dummy Text</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 2 -->

        </div>

      </div>

    </section>

   
  

  <!--==========================
    Footer
  ============================-->
  

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>WRC</strong>. All Rights Reserved
      </div>
      <div class="credits">
       
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('schedule') }}/lib/jquery/jquery.min.js"></script>
  <script src="{{ asset('schedule') }}/lib/jquery/jquery-migrate.min.js"></script>
  <script src="{{ asset('schedule') }}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('schedule') }}/lib/easing/easing.min.js"></script>
  <script src="{{ asset('schedule') }}/lib/superfish/hoverIntent.js"></script>
  <script src="{{ asset('schedule') }}/lib/superfish/superfish.min.js"></script>
  <script src="{{ asset('schedule') }}/lib/wow/wow.min.js"></script>
  <script src="{{ asset('schedule') }}/lib/venobox/venobox.min.js"></script>
  <script src="{{ asset('schedule') }}/lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('schedule') }}/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('schedule') }}/js/main.js"></script>
</body>

</html>