<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
                                    initial-scale=1.0, 
                                    maximum-scale=1.0, 
                                    user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/font-awesome.css">
    <script type="text/javascript" src="/js/app.js"></script>

    <title>Crystalona</title>
</head>

<body class="backg">
    <div id="Home">
        <nav class="navbar navbar-expand-md navbar-dark default-color fixed-top">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">Logo</a>
            </div>
            <button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#Menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="Menu">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#Home"> <i class="fa fa-home"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#About"> <i class="fa fa-book"></i> About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Products"> <i class="fa fa-product-hunt"></i> Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Contact"> <i class="fa fa-phone"></i> Contact Us</a></li>
                </ul>
            </div>
        </nav>
    </div>

    @yield('content')

    <footer class="footer-area default-color">
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-4">
                    <h1>Logo</h1>
                    <hr class="light">
                    <p> <i class="fa fa-phone"></i> 050-343-9377</p>
                    <p> <i class="fa fa-inbox"></i> crystalonaltd@gmail.com</p>
                    <p>GW-9060-2789</p>
                    <p>Accra, Ghana</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>Our Work Hours</h5>
                    <hr class="light">
                    <p>Monday -- Friday</p>
                    <p>9am - 4:30pm</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>Service Area</h5>
                    <hr class="light">
                    <p>Accra, Ghana, 00233</p>
                </div>
                <div class="col-12 bg-light black-text">
                    <hr class="light-100">
                    <h5>&copy;copyright | Crystalona Company Limited 2019 | All rights Reserved</h5>
                    <!-- <h5>New to New School? <a href="/about">Visit our About page</a> or read our <a href="/terms-of-service">Terms of Service</a></h5>
                    <h5>or Learn more about our<a href="/privacy-policy"> Privacy Policy</a></h5> -->
                </div>
            </div>
        </div>
    </footer>

</body>

</html>