@extends('layouts.master')

@section('content')

<!-- Carousel -->

<div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
        <li data-target="#slides" data-slide-to="3"></li>

    </ul>
    <div class="carousel-inner black-text">
        <div class="carousel-item active"><img src="{{ url('../assets/img/9.jpg') }}" alt="image1">
            <div class="carousel-caption">
                <h1 class="display-2 black-text">Crystalona</h1>
                <br>
                <br>
                <h3 class="black-text">Let Your Face Shine</h3>
                <!-- <button type="button" class="btn btn-outline-light btn-lg">Get Started</button> -->
                <a href="." class="btn btn-outline-light btn-lg">Make a Purchase</a>
                <a href="." class="btn btn-primary btn-lg">Learn more about us</a>
            </div>
        </div>
        <div class="carousel-item"><img src="{{ url('../assets/img/10.jpg') }}" alt="image2"></div>
        <div class="carousel-item"><img src="{{ url('../assets/img/11.jpg') }}" alt="image3"></div>
        <div class="carousel-item"><img src="{{ url('../assets/img/12.jpg') }}" alt="image4"></div>
    </div>

    <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Products Section -->

<div id="Products">
    <div class="container padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Our Products</h1>
                <hr class="my-4">
            </div>
            <div class="col-12">
                <p class="lead">We have all you need to get ahead with Proper skin care products.</p>
            </div>
        </div>
    <!-- </div>

    <div class="container-fluid padding"> -->
        <div class="row padding text-center">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ url('../assets/img/8.jpg') }}" height="200px" class="img-responsive" alt="img">
                    <div class="card-body">
                        <h5 class="card-title color-b">Crystalona Cream</h5>
                        <p class="card-text">Crystalona body cream is one that allows you to get rid of all
                            your acne and pimples. It works fast and you dont have to worry about any pimples the next 
                            day after using it.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/gallery/linda" class="btn btn-info">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ url('../assets/img/7.jpg') }}" height="200px" class="img-responsive" alt="img">
                    <div class="card-body">
                        <h5 class="card-title color-b">Crystalona Body Lotion</h5>
                        <p class="card-text">Crystalona Body Lotion is a daily moisturiser developed to enhance
                             the skin’s natural radiance. The innovative formula of
                             Crystalona Body Lotion gives the desired benefits via combined effect of the active ingredients</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/gallery/linda" class="btn btn-info">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ url('../assets/img/6.jpg') }}" height="200px" class="img-responsive" alt="img">
                    <div class="card-body">
                        <h5 class="card-title color-b">Crystalona Ointment</h5>
                        <p class="card-text">This Hostel has a per semester model. With its location and great facilities.
                            Linda Dor should be a bargain</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/gallery/linda" class="btn btn-info">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <hr class="my-4"> -->

<!-- Jumbotron -->
<div class="container-fluid">
    <div class="row jumbotron color-d footer-area">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
            <div class="display-4">Let us help you fix your face</div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
            <a href="." class="btn btn-outline-light btn-lg">Learn more about us</a>
        </div>
    </div>
</div>

<div id="About">
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Who Are We?</h1>
                <hr class="my-4">
            </div>
            <div class="col-12">
                <p class="lead">We are a passionate excellence-driven team who care about your looks </p>
            </div>
        </div>
    </div>

    <!-- Two column section -->

    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-lg-6">
                <img src="{{ url('../assets/img/5.jpg') }}" height="300px" width="100%" class="img-responsive" alt="img">
            </div>
            <div class="col-md-12 col-lg-6 font">
                <h2>Our Values</h2>
                <p>At Crystalona company limited, we believe that everything should be done in the right way.
                    This is why as a company we were founded with the values of Excellence, Learning and Giving</p>
                <h5 class="blue">Excellence:</h5>
                <p>We believe in only creating solutions that deliver the best value for money to our clients.
                    Mediocrity doesn't cut it.</p>
                <h5 class="blue">Learning:</h5>
                <p>We know we can only attain excellence if we dedicate ourselves to learning. We learn industry
                    best practices as well as from our customers, constantly refining our solutions to suit their
                    growing needs.</p>
                <h5 class="blue">Giving</h5>
                <p>We believe in giving back because we know we are able to live a life we enjoy due to the Grace
                    of God and of Man. We share our knowledge and repay society with our time and finances.</p><br><br>
            </div>
        </div>
    </div>

</div>

<hr>

<!-- Contact Section -->

<div id="Contact">
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-12 col-lg-6">

                <!-- Contact Page -->
                <div class="container-fluid padding">
                    <div class="row welcome text-center">
                        <div class="col-12">
                            <h1 class="display-4">Contact Us</h1>
                            <hr class="my-4">
                        </div>
                        <div class="col-12">
                            <p class="lead">We would love to hear from you! Do you have questions on how we can help you?
                                Fill the contact form. This will help you decide if we are the right fit for your organization.
                                You can reach us using the information below: </p>
                            <hr class="my-4">
                            <h4>050-343-9377</h4>
                            <h4>crystalonaltd@gmail.com</h4>
                            <h4>GW-9060-2789</h4>
                            <h4>Accra, Ghana</h4>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-12 col-lg-6 font">
                <form>
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" id="name" placeholder="text">
                    </div>
                    <div class="form-group">
                        <label for="number">Phone Number</label>
                        <input type="text" class="form-control" id="number" placeholder="text">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="message">Write Message</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>

<!-- Google Maps -->

<section class="contaner-fluid padding">
    <div class="mapIframe">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.813543214742!2d-0.3592607499381329!3d5.739969133347919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf0a0d5db0e56b%3A0x96cb766580644c3a!2sAdjen%20Kotoku%20Train%20Station!5e0!3m2!1sen!2sgh!4v1571942818798!5m2!1sen!2sgh" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</section>

@endsection