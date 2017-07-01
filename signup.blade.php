<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Restaurant Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
    
    <script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/icomoon-social.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    

</head>

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="welcome.blade.php"><img src="img/restaurant_logo.jpg" alt="Our Restaurant"></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home">Home</a></li>
                    <li><a href="about_us">About Us</a></li>
                    <li><a href="food_items">Food Menu</a></li>
                    <li><a href="staffs">Staffs</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

        <!-- Page Title -->
        <div class="section section-breadcrumbs">
            <div class="container">
                <div class="row">
                    
                        <h1>Sign Up</h1>
                    
                </div>
            </div>
        </div>
        
    <br>
    
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <!--<div class="col-sm-6"> -->
                <form class="form-vertical" role="form" method="post" action="/signup">
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                        <div class="text-center">
                            <h5>*Please fill the form.</h5>
                        </div>
                        <label for="name" class="control-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ Request::old('name') }}" />
                        
                        @if($errors->has('name'))
                        
                        <span class="help-block">
                            {{ $errors->first('name')}}
                        </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('contact') ? 'has-error' : ''}}">
                        <label for="contact" class="control-label">Contact No</label>
                        <input type="text" class="form-control" name="contact" id="contact" value="{{ Request::old('contact') }}" />
                        
                        @if($errors->has('contact'))
                        
                        <span class="help-block">
                            {{ $errors->first('contact')}}
                        </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                        <label for="email" class="control-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="{{ Request::old('email')? :'' }}" />
                        
                        @if($errors->has('email'))
                        <span class="help-block"> {{ $errors->first('email')}} </span>
                        
                        @endif
                    </div>
                    
                    <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                        <label for="password" class="control-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" value="" />
                       
                        @if($errors->has('password'))
                       <span class="help-block">
                            {{ $errors->first('password')}}
                        </span>
                        @endif
                    
                    </div>
                    
                            <div class="form-group">
                        
                                <button type="submit" class="btn btn-default">Sign Up</button>
                            </div> 
                    
                    <input type="hidden" name="_token" value="{{ Session::token()}}" />
                </form>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="container">
            
                <div class="row">
                
                    <div class="col-footer col-md-4 col-xs-6">
                        <h3>Contact Us</h3>
                        <p class="contact-us-details">
                            <b>Address:</b> Department of CSE, University of Chittagong, Hathazari, Chittagong, Bangladesh<br/>
                            <b>Phone:</b> +88 01656287192<br/>
                            <b>Email:</b> <a href="restaurant.cse@gmail.com">restaurant.cse@gmail.com</a>
                        </p>
                    </div>              
                    <div class="col-footer col-md-4 col-xs-6">
                        <h3>Our Social Networks</h3>
                        <p>Feel free to contact us in any suggestions and problems through our social networks.</p>
                        <div>
                            <img src="img/icons/facebook.png" width="32" alt="Facebook">
                            <img src="img/icons/twitter.png" width="32" alt="Twitter">
                            <img src="img/icons/linkedin.png" width="32" alt="LinkedIn">
                        </div>
                    </div>
                    <div class="col-footer col-md-4 col-xs-6">
                        <h3>About Our Company</h3>
                            <p>Developing a website under the department of computer science and engineering, University of Chittagong</p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-copyright">&copy; 2017 <a href="">Department of CSE, University of Chittagong.</a>.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        
        <!-- Scrolling Nav JavaScript -->
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrolling-nav.js"></script>     

    </body>
</html>
