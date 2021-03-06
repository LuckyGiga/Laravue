
@extends('layouts.app')

@section('content')
        {{-- KL HERE INSERTING THE VUE --}}



        <div id="app" class="section section-about-us">
            <div class="container">
                    <p class="text-danger"> Below article CRUD components are built with vue. Manipulating them is lightning fast without reloading the page. Uses api calls and reads/writs to database.</p>
                <articles></articles>
            </div>
        </div>

        <div class="section section-about-us">
        {{-- inserting those 2 for test --}}
        <div class="container">
            {{-- ends of insert --}}
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">Who we are?</h2>
                        <h5 class="description">According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record low maximum sea ice extent tihs year down to low ice extent in the Pacific and a late drop in ice extent in the Barents Sea.</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-team text-center">
            <div class="container">
                <h2 class="title">Here is our team</h2>
                <div class="team">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="../assets/img/avatar.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">Romina Hadid</h4>
                                <p class="category text-primary">Model</p>
                                <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                                    <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-instagram"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-facebook-square"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="../assets/img/ryan.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">Ryan Tompson</h4>
                                <p class="category text-primary">Designer</p>
                                <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                                    <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="../assets/img/eva.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">Eva Jenner</h4>
                                <p class="category text-primary">Fashion</p>
                                <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                                    <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-google-plus"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-youtube-play"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-contact-us text-center">
            <div class="container">
                <h2 class="title">Want to work with us?</h2>
                <p class="description">Your project is very important to us.</p>
                <div class="row">
                    <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
                        <div class="input-group input-lg">
                            <span class="input-group-addon">
                                <i class="now-ui-icons users_circle-08"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="First Name...">
                        </div>
                        <div class="input-group input-lg">
                            <span class="input-group-addon">
                                <i class="now-ui-icons ui-1_email-85"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Email...">
                        </div>
                        <div class="textarea-container">
                            <textarea class="form-control" name="name" rows="4" cols="80" placeholder="Type a message..."></textarea>
                        </div>
                        <div class="send-button">
                            <a href="#pablo" class="btn btn-primary btn-round btn-block btn-lg">Send Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection