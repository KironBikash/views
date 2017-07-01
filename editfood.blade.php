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
                    <li><a href="admin">Administrator</a></li>
                    <li class="active"><a href="modify_food">Modify food</a></li>
                    <li><a href="#">Modify stuff</a></li>
                    <!-- <li><a href="about_us">Modify About</a></li>
                    <li><a href="contact">Modify Contact</a></li>-->
                    <li><a  href="home">Back to site</a></li> 
                    <li class="btn-dark"><a href="contact">Logout</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

        <!-- Page Title -->
        <div class="section section-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h1>Edit Food</h1>
                    </div>
                </div>
            </div>
        </div>
        
    <br> <br>

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form class="form-vertical" role="form" method="post" action="/signin">

                <div class="form-group {{ $errors->has('foodname') ? 'has-error' : ''}}" >
                    <label for="foodname" class="control-label">Food Name</label>
                    <input type="text" class="form-control" name="foodname" id="foodname" value="" />
                    
                    @if($errors->has('addfood'))
                    <span class="help-block"> {{ $errors->first('foodname')}} </span>                    
                    @endif
                </div>
               
                
                <div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
                    <label for="price" class="control-label">Price</label>
                    <input type="float" class="form-control" name="price" id="price" value="" />
                   
                    @if($errors->has('price'))
                    <span class="help-block"> {{ $errors->first('price')}} </span>
                    @endif                
                </div>

                <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                    <label for="description" class="control-label">Description</label>
                    <input type="int" class="form-control" name="description" id="description" value="" />
                   
                    @if($errors->has('description'))
                    <span class="help-block"> {{ $errors->first('description')}} </span>
                    @endif                
                </div>

                <div class="form-group {{ $errors->has('foodimage') ? 'has-error' : ''}}">
                    <label for="foodimage" class="control-label">Add new image</label>

                    <input type="file" name="foodname" id="foodimage" accept="image/gif, image/jpeg, image/png" value="" />
                                           
                    @if($errors->has('quantity'))
                    <span class="help-block"> {{ $errors->first('quantity')}} </span>
                    @endif                
                </div>
                
                
                <div class="form-group">
                    <div class="text-right">
                        <button type="submit" class="btn btn-default">Update</button>
                    </div>
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
