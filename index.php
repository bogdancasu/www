<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">

    <style>

        .navbar-search input{
            font-style: italic;
        }

        .after-navbar
        {
            padding-top: 100px;
        }

            /* CUSTOMIZE THE CAROUSEL
       -------------------------------------------------- */

            /* Carousel base class */
        .carousel {
            margin-bottom: 60px;
        }

        .carousel .container {
            position: relative;
            z-index: 9;
        }

        .carousel-control {
            height: 80px;
            margin-top: 0;
            font-size: 120px;
            text-shadow: 0 1px 1px rgba(0,0,0,.4);
            background-color: transparent;
            border: 0;
            z-index: 10;
        }

        .carousel .item {
            height: 420px;
        }
        .carousel img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            height: 420px;
        }

        .carousel-caption {
            background-color: transparent;
            position: static;
            max-width: 550px;
            padding: 0 20px;
            margin-top: 200px;
        }
        .carousel-caption h1,
        .carousel-caption .lead {
            margin: 0;
            line-height: 1.25;
            color: #fff;
            text-shadow: 0 1px 1px rgba(0,0,0,.4);
        }
        .carousel-caption .btn {
            margin-top: 10px;
        }

        .user-menu {
            min-width: 60px;
        }

    </style>
</head>

<body>
    <div class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
            <div class="container">
                <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" onclick="loggedIn();">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li class="nav-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav pull-right">
                        <li>
                            <img height="40px" width="40px"/>
                        </li>
                        <li class='dropdown'>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-left: 10px">Bogdan Stelian</a>
                            <ul class="dropdown-menu user-menu">
                                <li><a href="#">Sign out</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-search pull-right" style="">
                        <input type="text" class="search-query" placeholder="Search">
                    </form>
                </div>
            </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->
    </div><!-- /.navbar -->

    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="active item">
                <img src="./img/slide-01.jpg" alt="">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Example headline.</h1>
                        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <a class="btn btn-large btn-primary" href="#">Sign up today</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./img/slide-02.jpg" alt="">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Example headline.</h1>
                        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <a class="btn btn-large btn-primary" href="#">Sign up today</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>

    <div class="container after-navbar">
        <div class="row">
            <div class="span2">
                <a href="#" onclick="login()">MMMMMM</a>
                <a href="#" onclick="logout()">MMMMMM</a>
            </div>

            <div class="span10">
                <p>dfgdfgdffgdfg<br/><br/>dsfdfsdfa</p>
                <p>dfgdfgdffgdfg<br/><br/>dsfdfsdfa</p>
                <p>dfgdfgdffgdfg<br/><br/>dsfdfsdfa</p>
                <p>dfgdfgdffgdfg<br/><br/>dsfdfsdfa</p>
                <p>dfgdfgdffgdfg<br/><br/>dsfdfsdfa</p>
                <p>dfgdfgdffgdfg<br/><br/>dsfdfsdfa</p>
                <p>dfgdfgdffgdfg<br/><br/>dsfdfsdfa</p>
                <p>dfgdfgdffgdfg<br/><br/>dsfdfsdfa</p>
                <p>dfgdfgdffgdfg<br/><br/>dsfdfsdfa</p>
                <p>dfgdfgdffgdfg<br/><br/>dsfdfsdfa</p>
                <p>dfgdfgdffgdfg<br/><br/>dsfdfsdfa</p>
                <p>dfgdfgdffgdfg<br/><br/>dsfdfsdfa</p>
                <p>dfgdfgdffgdfg<br/><br/>dsfdfsdfa</p>
                <p>dfgdfgdffgdfg<br/><br/>dsfdfsdfa</p>

            </div>

        </div>
    </div>

    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '402234923212539', // App ID
                channel    : true,
                channelUrl : 'http://localhost/index.php', // Channel File
                status     : true, // check login status
                cookie     : true, // enable cookies to allow the server to access the session
                xfbml      : true,  // parse XFBML
                viewMode   : 'website'
            });
        };

        function login(){
            FB.login(function(response) {
                if (response.authResponse) {
                    console.log('Welcome!  Fetching your information.... ' + response.authResponse.accessToken);
                    FB.api('/me?access_token='+response.authResponse.accessToken, function(response2) {
                        console.log('Good to see you, ' + response2.name + '.');
                    });
                } else {
                    console.log('User cancelled login or did not fully authorize.');
                }
            });
        }

        function logout(){
            FB.logout(function() {
                // Person is now logged out
                console.log(response.status);
            });
        }

        // Load the SDK asynchronously
        (function(d){
            var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement('script'); js.id = id; js.async = true;
            js.src = "//connect.facebook.net/en_US/all.js";
            ref.parentNode.insertBefore(js, ref);
        }(document));

    </script>

    <script>
        /*!function ($) {
            $(function(){
                // carousel demo
                $('#myCarousel').carousel()
            })
        }(window.jQuery)*/
    </script>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>