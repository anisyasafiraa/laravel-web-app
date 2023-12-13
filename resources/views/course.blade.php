<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>RevoU</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

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

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
<body>
    <div id="app" class="hero_area">
        <div class="container-fluid">
          <header class="header_section">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="/">
                    <img src="images/logo.png" alt="">
                    <span>RevoU</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('course') }}">Course</a>
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
                    </nav>
                </header>

    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">    
                        <div class="card-header">
                            <h4><b>Data Analyst</b></h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-item">
                                <li class="list-group-item">
                                    <h5><b>Day 1: Open House RevoU</b></h5>
                                    <h6>• Tips memulai belajar Digital Marketing.</h6>
                                    <h6>• Sharing session mengenai karir di Digital Marketing.</h6>
                                </li>
                                <li class="list-group-item">
                                    <h5><b>Day 2: Introduction to Data Analytics</b></h5>
                                    <h6>• Introduction to RevoU.</h6>
                                    <h6>• Introduction to Data Analytics Role.</h6>
                                    <h6>• Career Opportunities of Data Analytics Nowadays.</h6>
                                    <h6>• How to Achieve Your Dream Career as a Data Analyst.</h6>
                                    <h6>• The Story of Data Analyst.</h6>
                                </li>
                                <li class="list-group-item">
                                    <h5><b>Day 3: Data Analytics in Business</b></h5>
                                    <h6>• Data analytics implementation in business.</h6>
                                    <h6>• Data analytics in different parts of the business.</h6>
                                    <h6>• Steps to analyze data & showing insights.</h6>
                                </li>
                                <li class="list-group-item">
                                    <h5><b>Day 4: SQL Basic to Intermediate (Part 1)</b></h5>
                                    <h6>• What is SQL?.</h6>
                                    <h6>• Why need SQL?.</h6>
                                    <h6>• What is Database?.</h6>
                                    <h6>• Type of Database.</h6>
                                    <h6>• What is table? and give example & concept of data as form of table.</h6>
                                    <h6>• SQL Basic Syntax ~ Select Statement + Simulation in Bigquery.</h6>
                                    <h6>• SQL Basic Syntax ~ Where Statement + Simulation in Bigquery.</h6>
                                    <h6>• SQL Basic Syntax ~ Order by Statement + Simulation in Bigquery.</h6>
                                    <h1> </h1>
                                </li>
                                <li class="list-group-item">
                                    <h1> </h1>
                                    <h5><b>Day 5: SQL Basic to Intermediate (Part 2)</b></h5>
                                    <h6>• Refreshment of SQL Basic Syntax ~ Select, Where, Order by Statement.</h6>
                                    <h6>• SQL intermediate Syntax ~ Distinct clause + Simulation in Big query.</h6>
                                    <h6>• SQL intermediate Syntax ~ Group by concept + Simulation in Big query.</h6>
                                    <h6>• SQL intermediate Syntax ~ Count Function + Simulation in Big query.</h6>
                                    <h6>• SQL intermediate Syntax ~ Sum Function + Simulation in Big query.</h6>
                                    <h6>• SQL intermediate Syntax ~ Average Function + Simulation in Big query.</h6>
                                    <h6>• SQL intermediate Syntax ~ Minimum Function + Simulation in Big query.</h6>
                                    <h6>• SQL intermediate Syntax ~ Maximum Function + Simulation in Big query.</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">    
                        <div class="card-header">
                            <h4><b>Digital Marketing</b></h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-item">
                                <li class="list-group-item">
                                    <h5><b>Day 1: Open House RevoU</b></h5>
                                    <h6>• Tips memulai belajar Digital Marketing.</h6>
                                    <h6>• Sharing session mengenai karir di Digital Marketing.</h6>
                                </li>
                                <li class="list-group-item">
                                    <h5><b>Day 2: Introduction to Digital Marketing</b></h5>
                                    <h6>• Perbedaan antara organic vs paid channels, acquisition vs retention channels.</h6>
                                    <h6>• Memilih channel berdasarkan scalability, targeting, dan customer acquisition cost (CAC).</h6>
                                    <h6>• Organic channels: SEO, Social Media Organic, Customer Relationship Management.</h6>
                                    <h6>• Paid channels: SEM, Social Media Marketing, Display Ads.</h6>
                                </li>
                                <li class="list-group-item">
                                    <h5><b>Day 3: Start your career as Social Media specialist - Build your social media strategy from scratch (Part 1)</b></h5>
                                    <h6>• Apa itu market niche dan mengapa kita harus fokus pada market niche tertentu untuk media sosial kita.</h6>
                                    <h6>• Apa itu persona audience & target audience.</h6>
                                    <h6>• Pentingnya persona audience & target audience untuk social media.</h6>
                                    <h6>• Apa itu content pillar dan bagaimana cara membuatnya untuk social media.</h6>
                                </li>
                                <li class="list-group-item">
                                    <h5><b>Day 4: Start your career as Social Media specialist - Build your social media strategy from scratch (Part 2)</b></h5>
                                    <h6>• Apa itu market niche dan mengapa kita harus fokus pada market niche tertentu untuk media sosial kita.</h6>
                                    <h6>• Apa itu persona audience & target audience.</h6>
                                    <h6>• Pentingnya persona audience & target audience untuk social media.</h6>
                                    <h6>• Apa itu content pillar dan bagaimana cara membuatnya untuk social media.</h6>
                                    <h1> </h1>
                                </li>
                                <li class="list-group-item">
                                    <h1> </h1>
                                    <h5><b>Day 5: How to Prepare Your Digital Marketing Career</b></h5>
                                    <h6>• Mempersiapkan portofolio sebagai digital marketer.</h6>
                                    <h6>• Membangun personal branding.</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">    
                        <div class="card-header">
                            <h4><b>Product Management</b></h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-item">
                                <li class="list-group-item">
                                    <h5><b>Day 1: Open House RevoU</b></h5>
                                    <h6>• Tips to start learning Product Management.</h6>
                                    <h6>• Sharing session about career in Product Management.</h6>
                                </li>
                                <li class="list-group-item">
                                    <h5><b>Day 2: Introduction to Product Management</b></h5>
                                    <h6>• Introduction to Product Management role.</h6>
                                    <h6>• Career Opportunities of Product Management.</h6>
                                    <h6>• How to Achieve Your Dream Career as a Product Manager.</h6>
                                    <h6>• The Story of Product Management.</h6>
                                </li>
                                <li class="list-group-item">
                                    <h5><b>Day 3: Product Management role in a Company</b></h5>
                                    <h6>• Role as a Product Manager in a Company.</h6>
                                    <h6>• Product Manager vs Project Manager.</h6>
                                    <h6>• Great product managers examples.</h6>
                                    <h6>• Product management process.</h6>
                                </li>
                                <li class="list-group-item">
                                    <h5><b>Day 4: Competitor Analysis</b></h5>
                                    <h6>• Understanding the concept of different types of competitor.</h6>
                                    <h6>• Solution / feature classification using KANO framework.</h6>
                                    <h6>• Frameworks of analyzing competitor.</h6>
                                    <h6>• Simulation: Competitor analysis using Feature Table.</h6>
                                    <h1> </h1>
                                </li>
                                <li class="list-group-item">
                                    <h1> </h1>
                                    <h5><b>Day 5: Defining you value proposition & hypothesis</b></h5>
                                    <h6>• What is a product value proposition.</h6>
                                    <h6>• Hypothesis-driven product management.</h6>
                                    <h6>• Simulation: writing product value proposition and hypothesis.</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
        <script type="text/javascript">
            $('.show_confirm').click(function(event) {
                var form =  $(this).closest("form");
                var name = $(this).data("name");
                    event.preventDefault();
                    swal({
                        title: `Are you sure you want to delete this record?`,
                        text: "If you delete this, it will be gone forever.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                        form.submit();
                    }
                });
            });
        </script>
    </body>
</html>
