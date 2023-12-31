<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RevoU</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

        <!-- fonts style -->
        <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
        <!-- responsive style -->
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
         @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>

<div class="hero_area">
  <!-- header section strats -->
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="/">
          <img src="images/logo.png" alt="">
          <span>
            RevoU
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              @guest
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="#course">Course</a>
              </li>
              @else
              <li class="nav-item">
                 <a class="nav-link" href="{{ route('course') }}">Course</a>
              </li>
              @endguest
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact us</a>
              </li>
              <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->
  <!-- slider section -->
  <section class=" slider_section position-relative">
    <div class="design-box">
      <img src="images/design-1.png" alt="">
    </div>
    <div class="slider_number-container d-none d-md-block">
      <div class="number-box">
        <hr>
        <span class="jwel">
          C <br>
          O <br>
          U <br>
          R <br>
          S <br>
          E 
        </span>
        <hr>
      </div>
    </div>
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-6">
                <div class="detail_box">
                  <h2>
                    <span>Mini Course</span>
                    <hr>
                  </h2>
                  <h1>
                    Digital Marketing
                  </h1>
                  <p>
                    Master organic channels and paid marketing to scale your digital business. Improve your digital channel know-how, critical thinking skills, and analytical frameworks.
                  </p>
                  @guest
                  <div>
                    <a href="{{ route('login') }}">Register Now</a>
                  </div>
                  @else
                  <div>
                    <a href="{{ route('course') }}">Tap for More</a>
                  </div>
                  @endguest
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <img src="images/slide1.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="row">
              <div class="col-md-6">
                <div class="detail_box">
                  <h2>
                    <span>Mini Course</span>
                    <hr>
                  </h2>
                  <h1>
                    Data Analytics
                  </h1>
                  <p>
                    Excel your data analytics expertise, business mindset, and communication skills and answer complex business questions with data.
                  </p>
                  @guest
                  <div>
                    <a href="{{ route('login') }}">Register Now</a>
                  </div>
                  @else
                  <div>
                    <a href="{{ route('course') }}">Tap for More</a>
                  </div>
                  @endguest
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <img src="images/slide2.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="row">
              <div class="col-md-6">
                <div class="detail_box">
                  <h2>
                    <span>Mini Course</span>
                    <hr>
                  </h2>
                  <h1>
                    Product Management
                  </h1>
                  <p>
                    Learn product management skills such as conducting customer research, developing products, and communicating effectively with your stakeholders.
                  </p>
                  @guest
                  <div>
                    <a href="{{ route('login') }}">Register Now</a>
                  </div>
                  @else
                  <div>
                    <a href="{{ route('course') }}">Tap for More</a>
                  </div>
                  @endguest
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <img src="images/slide3.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- end slider section -->
</div>

<!-- about section -->
@guest
<section class="about_section layout_padding2-top layout_padding-bottom" id = "about">
  <div class="design-box">
    <img src="images/design-2.png" alt="">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              About RevoU
            </h2>
          </div>
          <p>
            Learn directly from experienced industry practitioners to fast-track your digital career with RevoU. Open up new career paths in the digital industry with our career support and apprenticeship programs, no matter your background.
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="img-box">
          <img src="images/about-img.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end about section -->

<!-- course section -->

<section class="price_section layout_padding" id = "course">
  <div class="container">
    <div class="heading_container">
      <h2>
        Our Mini Course Program
      </h2>
    </div>
    <div class="price_container">
      <div class="box">
        <div class="name">
          <h6>
            Digital Marketing
          </h6>
        </div>
        <div class="img-box">
          <img src="images/i-1.png" alt="">
        </div>
        <div class="detail-box">
          <a href="{{ route('login') }}">
            Register Now
          </a>
        </div>
      </div>
      <div class="box">
        <div class="name">
          <h6>
            Data Analytics
          </h6>
        </div>
        <div class="img-box">
          <img src="images/i-2.png" alt="">
        </div>
        <div class="detail-box">
          <a href="{{ route('login') }}">
            Register Now
          </a>
        </div>
      </div>
      <div class="box">
        <div class="name">
          <h6>
            Product Management
          </h6>
        </div>
        <div class="img-box">
          <img src="images/i-3.png" alt="">
        </div>
        <div class="detail-box">
          <a href="{{ route('login') }}">
            Register Now
          </a>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center">
        <a href="/" class="price_btn">
          Read More
        </a>
    </div>
  </div>
</section>

<!-- end course section -->

<!-- client section -->

<section class="client_section">
  <div class="container">
    <div class="heading_container">
      <h2>
        Testimonial
      </h2>
    </div>
    <h4 class="secondary_heading">
      What our students say
    </h4>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="client_container">
            <div class="client-id">
              <div class="img-box">
                <img src="images/student1.jpg" alt="">
              </div>
              <div class="name">
                <h5>
                    Ervina Desiviola Tommy
                </h5>
                <h6>
                    Dropship Division Manager at PT Mitra Fesyen Global | Co-Founder Fierofea Books
                </h6>
              </div>
            </div>
            <div class="detail-box">
              <p>
                “RevoU provides such a supportive learning environment for digital marketing newbies. Thus I can get invaluable knowledge and skills, even started my career journey as a Digital Ads Specialist.”
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="client_container">
            <div class="client-id">
              <div class="img-box">
                <img src="images/student2.jpg" alt="">
              </div>
              <div class="name">
                <h5>
                    Puti Fauzia Imani
                </h5>
                <h6>
                    Intern at Lazada
                </h6>
              </div>
            </div>
            <div class="detail-box">
              <p>
                "To be honest, at first I thought enrolling to RevoU immediately after graduation was a mistake because it was quite pricey and I don't know whether it'll be worth it. But now, I can't imagine how life will be if I don't - I get to learn new skills from the BD course, meet great instructors and friends, collaborate on projects, and improve my soft skills as well. This is a one time investment that will grant me a lifetime of benefits, and I'm thankful for it."
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="client_container">
            <div class="client-id">
              <div class="img-box">
                <img src="images/student3.jpg" alt="">
              </div>
              <div class="name">
                <h5>
                    Kirana sandra devi
                </h5>
                <h6>
                    Marketing Associate at Harisenin.com
                </h6>
              </div>
            </div>
            <div class="detail-box">
              <p>
                "RevoU Next seems like instead of give someone a fish directly, they prefer to teach someone to catch a fish well. So, they want us to have growth mindset, not only about digital marketing but also with our life decision."
              </p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </div>
</section>
@else
@endguest
<!-- end client section -->

<!-- info section -->
<section class="info_section " id = "contact">
  <div class="container">
    <div class="info_container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_logo">
            <a href="">
              <img src="images/logo.png" alt="">
              <span>
                RevoU
              </span>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_contact">
            <a href="">
              <img src="images/location.png" alt="">
              <span>
                Go Work Menara Rajawali, Ground Floor, Jl. DR. Ide Anak Agung Gde Agung, RT.5/RW.2, Kuningan, Jakarta, Daerah Khusus Ibukota Jakarta 12950
              </span>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_contact">
            <a href="https://wa.me/6287752412135" target = "blank">
              <img src="images/phone.png" alt="">
              <span>
                +01 1234567890
              </span>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_contact">
            <a href="mailto:admission@revou.co">
              <img src="images/mail.png" alt="">
              <span>
                admission@revou.co
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="info_social">
        <div class="d-flex justify-content-center">
          <h5 class="info_heading">
            Follow Us
          </h5>
        </div>
        <div class="social_box">
          <a href="https://twitter.com/revoudotco" target = "blank">
            <img src="images/twitter.png" alt="">
          </a>
          <a href="https://www.linkedin.com/school/revou/" target = "blank">
            <img src="images/linkedin.png" alt="">
          </a>
          <a href="https://www.instagram.com/revou_id" target = "blank">
            <img src="images/insta.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end info_section -->

<!-- footer section -->
<section class="container-fluid footer_section">
  <p>
    &copy; <span id="displayYear"></span> All Rights Reserved By
    <a href="https://html.design/">Free Html Templates</a>
  </p>
</section>
<!-- footer section -->

<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
