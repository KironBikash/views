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
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen">
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>
    <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="js/hover-image.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="js/jquery.bxSlider.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function () {
        $('#slider-2').bxSlider({
            pager: true,
            controls: false,
            moveSlideQty: 1,
            displaySlideQty: 4
        });
        $("a[data-gal^='prettyPhoto']").prettyPhoto({
            theme: 'facebook'
        });
    });
    </script>
    <!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
    
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
                <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="admin">Administrators</a></li>
                    <li><a href="modify_food">Modify food</a></li>
                    <li class="active"><a href="modify_stuff">Modify stuff</a></li>
                    <li><a href="order">Orders</a></li>
                    <!--<li><a href="contact">Modify Contact</a></li> -->
                    <li><a  href="home">Back to site</a></li> 
                    <li class="btn-dark"><a href="contact">Logout</a></li>
                </ul>
            </div>
            </div>
        </div>
    </header><!--/header-->

        <!-- Add Member Section -->
        <div class="section section-breadcrumbs">
            <div class="container">
                <div class="row-bot">
                    <div class="row-bot-bg">
                      <div class="main">
                        <h2><span>Add a new Stuff</span></h2>
                        <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <form class="form-vertical" role="form" method="post" action="/addmember">
                                <div class="form-group {{ $errors->has('membername') ? 'has-error' : ''}}" >

                                   <label for="membername" class="control-label"> <font color="black">Name </font> </label>
                                   <input type="text" class="form-control" name="membername" id="membername" value="" />
                                            
                                    @if($errors->has('membername'))
                                    <span class="help-block"> {{ $errors->first('membername')}} </span>                    
                                    @endif
                                </div>
                                       
                                        
                                <div class="form-group {{ $errors->has('memberrole') ? 'has-error' : ''}}">
                                    <label for="memberrole" class="control-label"><font color="black">Role </font></label>
                                    <input type="text" class="form-control" name="memberrole" id="memberrole" value="" />
                                           
                                    @if($errors->has('memberrole'))
                                    <span class="help-block"> {{ $errors->first('memberrole')}} </span>
                                    @endif                
                                </div>

                                <div class="form-group {{ $errors->has('bio') ? 'has-error' : ''}}">
                                    <label for="bio" class="control-label"><font color="black">Biodata</font></label>
                                    <input type="text" class="form-control" name="bio" id="bio" value="" />
                                           
                                    @if($errors->has('bio'))
                                        <span class="help-block"> {{ $errors->first('bio')}} </span>
                                    @endif                
                                </div>

                               
                                <div class="form-group {{ $errors->has('memberimage') ? 'has-error' : ''}}">
                                    <label for="memberimage" class="control-label"><font color="black">Member Image</font></label>

                                    <input type="file" name="foodname" id="memberimage" accept="image/gif, image/jpeg, image/png" value="" />
                                           
                                    @if($errors->has('memberimage'))
                                        <span class="help-block"> {{ $errors->first('memberimage')}} </span>
                                    @endif                
                                </div>
                                        
                                        
                                <div class="form-group">
                                    <div class="text-right">
                                        <button type="submit" class="btn-gray"><font color="red"> Add </font> </button>
                                    </div>
                                </div> 
                                        
                                        <input type="hidden" name="_token" value="{{ Session::token()}}" />
                                    </form>
                                </div>
                            </div>
                      </div>
                    </div>
                </div>
            </div>
        </div> <!-- Add food Section -->

    <section class="well well__offset-1 bg-1">
        <div class="container">
            <div class="row row__offset-1">
                <div class="col-lg-4">
                    <figure>
                        <div class="img lazy-img"><img src="img/staff1.jpg" alt=""></div>
                        <figcaption>Kevin Grey</figcaption>
                    </figure>
                    <h3>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl </h3>
                    <p>Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla.</p>

                    <div  class="text-center">
                        <a class="button-2" href="edit_stuff">
                            <i class="glyphicon glyphicon-edit"></i> Edit
                        </a>
                        <a class="button-1" href="remove_stuff">
                            <i class="glyphicon glyphicon-remove"></i> Remove
                        </a>                                    
                    </div>
                </div>
                <div class="col-lg-4">
                    <figure>
                        <div class="img lazy-img"><img src="img/staff2.jpg" alt=""></div>
                        <figcaption>Linda Klein</figcaption>
                    </figure>
                    <h3>Oeteger convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl </h3>
                    <p>Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla.</p>

                    <div  class="text-center">
                        <a class="button-2" href="edit_stuff">
                            <i class="glyphicon glyphicon-edit"></i> Edit
                        </a>
                        <a class="button-1" href="remove_stuff">
                            <i class="glyphicon glyphicon-remove"></i> Remove
                        </a>                                    
                    </div>
                </div>
                <div class="col-lg-4">
                    <figure>
                        <div class="img lazy-img"><img src="img/staff3.jpg" alt=""></div>
                        <figcaption>Ann Shelton</figcaption>
                    </figure>
                    <h3>Koteger convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl </h3>
                    <p>Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla.</p>

                    <div  class="text-center">
                        <a class="button-2" href="edit_stuff">
                            <i class="glyphicon glyphicon-edit"></i> Edit
                        </a>
                        <a class="button-1" href="remove_stuff">
                            <i class="glyphicon glyphicon-remove"></i> Remove
                        </a>                                    
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Footer -->
        <div class="footer">
            <div class="container">
            
                <div class="row">
                
                    <div class="col-footer col-md-4 col-xs-6">
                        <h3>Contact Us</h3>
                        <p class="contact-us-details">
                            <b>Address:</b> Department of CSE, University of Chittagong, Hathazari, Chittagong, Bangladesh<br/>
                            <b>Phone:</b> 01829784502<br/>
                            <b>Email:</b> <a href="sazzad.cse14@gmail.com">sazzad.cse14@gmail.com</a>
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
