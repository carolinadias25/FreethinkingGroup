@extends('layouts.app')

@section('content')

<div>

    <div class="contact-center">

        <h1> Contact Page </h1>
        <em> <p class="text-muted"> Here is the contact form! </p> </em>

    </div>

    <br>
    <br>


    <form class="row" method="POST" action="">

{{--        <img src="" style="width: 100%;"/>--}}

        <div class="col-md-6 pt-4">

            <div class="form-group col-md-12">
                <input type="text" class="form-control" id="inputName" name="name" placeholder="Your Name *">
            </div>
            <div class="form-group col-md-12">
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Your Email *">
            </div>
            <div class="form-group col-md-12">
                <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="Your Phone *">
            </div>

        </div>

        <div class="col-md-6 pt-3">

            <div class="form-group col-md-12">
                <textarea class="form-control" id="textareainput" rows="6" name="message" placeholder="Your Message *"></textarea>
            </div>

        </div>

        <div class="col-md-12 text-center pb-3">
            <button type="submit" class="btn btn-warning"> Send Message </button>
        </div>

    </form>


    <style>

        h1{
            font-size: 50px;
            font-family: sans-serif;
        }
        .contact-center{
            text-align: center;
        }
        form{
            background-color: #000;
            border-radius: 10px;
            border: 5px solid darkgrey;
        }

    </style>

</div>

@stop

@section('footer')

@stop
