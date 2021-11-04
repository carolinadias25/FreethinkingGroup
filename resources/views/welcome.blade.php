<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>The Freethinking Group</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}" />
    <!-- Font Awesome icons (free version)-->
    <script src="{{asset('https://use.fontawesome.com/releases/v5.15.4/js/all.js')}}" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    @toastr_css
</head>
<body id="page-top">
{{--@include(public_path('css/styles.css'))--}}
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><img class="img-fluid h-25"  src="{{asset('assets/img/navbar-logoB.png')}}" alt="Logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome to The Freethinking Group</div>
        <div class="masthead-heading text-uppercase">We are Freethinkers!</div>
    </div>
</header>
<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">About Us</h2>
            <h3 class="section-subheading text-muted">Here's bit of our story.</h3>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('assets/img/about/1.png')}}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>February 2012</h4>
                        <h4 class="subheading">How it started</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Our company started when Republic of Media was born, working with clients to deliver media effectiveness and manage transformation. Born in the digital age, we are the fastest growing media agency in the UK. From offices in Manchester and Edinburgh we build relationships rather than silos.</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('assets/img/about/2.png')}}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>May 2015</h4>
                        <h4 class="subheading">Creation of Rommatic</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Rommatic is a programmatic trading entity, under which Republic of Media and Intelligence22 also operate. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('assets/img/about/3.png')}}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>May 2015</h4>
                        <h4 class="subheading">Together as a group</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">The Freethinking Group exists to work with the individual company Boards and task them with growth objectives. It also allows current and future employees of any of our operating companies to explore entrepreneurial initiatives, pursue career interests across the group, and launch new businesses with the support of an agile and creative parent company.</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('assets/img/about/4.png')}}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>January 2020</h4>
                        <h4 class="subheading">Creation of I22</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">A data visualisation platform for marketeers. We built Intelligence 22 because of our own frustrations. We got tired of having to deal with software that only does half the job. So we did it properly. Unlike other data services, we don't just gather and unify the vital data you need. We also provide you with live, automatic data visualisations.</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4>
                        Be Part
                        <br />
                        Of Our
                        <br />
                        Story!
                    </h4>
                </div>
            </li>
        </ul>
    </div>
</section>
<hr class="hr-6">
<!-- Our Group-->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Our Group</h2>
            <h3 class="section-subheading text-muted">Exploring entrepreneurial initiatives and launching new communications based businesses. </h3>
        </div>
        <div class="row text-center">
            <div class="col-lg-4">
                <h4 class="my-3 mb-5 pb-3 mt-4">
                    <img src="{{asset('/images/RoM_Full_Logo_RGB[7626].png')}}" alt="ROM logo" width="300" height="25"/>
                </h4>
                <p class="text-muted">We are a media agency, working clients to deliver media effectiveness and manage transformation. Born in the digital age, we are the fastest growing media agency in the UK. Click
                    <a href="https://republicofmedia.co.uk" styles="text-decoration:none;" title="https://republicofmedia.co.uk" target="_blank" >HERE </a>to find out more</p>
            </div>
            <div class="col-lg-4">
                <h4 class="my-3 mb-5">
                    <img src="{{asset('/images/i22.jpg')}}" alt="I22 logo"  width="250" height="50"/>
                </h4>
                <p class="text-muted">A data visualisation platform for marketeers. We built Intelligence 22 because of our own frustrations. We got tired of having to deal with software that only does half the job. Click
                    <a href="https://www.intelligence22.com" styles="text-decoration:none;" title="https://intelligence22.com" target="_blank"> HERE </a> to find out more</p>
            </div>
            <div class="col-lg-4">
                <h4 class="my-3 mb-5 pb-3">
                    <img src="{{asset('/images/Rommatic.png')}}" alt="Rommatic-logo" width="200" height="27"/>
                </h4>
                <p class="text-muted">A programmatic trading entity, allows employees of the operating companies to explore entrepreneurial initiatives, and launch new businesses with the support company. Click  <a href="https://www.linkedin.com/company/rommatic/" styles="text-decoration:none;" title="https://www.linkedin.com/company/rommatic/" target="_blank"> HERE </a> to find out more</p>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form-->
@include('contact')
<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-start">Copyright &copy; FreethinkingGroup 2021</div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/company/the-freethinking-group"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- Core theme JS-->
<script src="{{asset('js/scripts.js')}}"></script>
@jquery
@toastr_js
@toastr_render
</body>
</html>
