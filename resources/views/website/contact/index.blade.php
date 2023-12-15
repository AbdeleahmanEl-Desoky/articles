@extends('layouts.website.app')

@section('title')
    <title>Content me</title>
@endsection
@section('header')
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                   start header                                   --}}
    {{-- * -------------------------------------------------------------------------------- --}}

    <section id="cta" class="section section top_header">
        <img class="w-100 h-100" src="https://c0.wallpaperflare.com/preview/960/830/338/chart-graph-business-finance.jpg"
            alt="">
        <div class="button_home  p-1">
           <a href="#"> <button type="button" class="btn btn-primary rounded-pill" >Back to home </button> </a>
        </div>
    </section>

    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                    end header                                    --}}
    {{-- * -------------------------------------------------------------------------------- --}}
@endsection

@section('content')
    <section id="cta" class="section ">

        {{-- * -------------------------------------------------------------------------------- --}}
        {{-- *                                   start content                                  --}}
        {{-- * -------------------------------------------------------------------------------- --}}

        <div class="container " id="container_contact">
            <form id="contact" action="" method="post" class="container_contact">
                <h3>Quick Contact</h3>
                <h4>Contact me today, and get reply with in 24 hours!</h4>
                <div class="row">
                    <div class="col-6">
                        <fieldset>
                            <input placeholder="Your name" type="text" tabindex="1" required autofocus>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Your Email Address" type="email" tabindex="2" required>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
                        </fieldset>
                        <fieldset>
                            <textarea placeholder="Type your Message Here...." tabindex="5" required></textarea>
                        </fieldset>
                        <fieldset>
                            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Send
                                Message</button>
                        </fieldset>
                    </div>
                    <div class="col-4">
                        <img class="w-100 m-auto"
                            src="https://www.jeffkram.com/wp-content/uploads/2019/02/contact-me-png-6.png" alt="">
                    </div>
                </div>
            </form>
        </div>

        {{-- * -------------------------------------------------------------------------------- --}}
        {{-- *                                    end content                                   --}}
        {{-- * -------------------------------------------------------------------------------- --}}

    </section>
@endsection
