<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Contact</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}" />
    <!-- Font Awesome icons (free version)-->
    <script src="{{asset('https://use.fontawesome.com/releases/v5.15.4/js/all.js')}}" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
</head>
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Don't be shy, say hello.</h3>
        </div>
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
        <form id="contactForm" action="/contact-us" method="POST">
            @csrf
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- Name input-->
{{--                        <label class="text-light font-weight-bold" for="name"> Your Name </label>--}}
                        <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="Your Name *"  />
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <!-- Email address input-->
{{--                        <label class="text-light font-weight-bold" for="email"> Your Email </label>--}}
                        <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" placeholder="Your Email *"  />
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Phone number input-->
{{--                        <label class="text-light font-weight-bold" for="phone"> Your Phone Number</label>--}}
                        <input class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" type="tel" placeholder="Your Phone *" />
                        @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <!-- Message input-->
{{--                        <label class="text-light font-weight-bold" for="message"> Your Message </label>--}}
                        <textarea class="form-control " id="message" name="message" placeholder="Your Message *" required></textarea>
                    </div>
                </div>
            </div>
            <div class="container w-50 text-center">
                <button type="submit" class="btn btn-lg btn-success">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</section>
