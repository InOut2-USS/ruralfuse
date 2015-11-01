<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RuralFuse</title>
    <link href="{{ asset('landing/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/animate.min.css') }}" rel="stylesheet"> 
    <link href="{{ asset('landing/css/lightbox.css') }}" rel="stylesheet"> 
	<link href="{{ asset('landing/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('landing/css/responsive.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <!-- <link rel="shortcut icon" href="images/ico/favicon.ico"> -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header">      
  
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                   <!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> -->

                    <a class="navbar-brand" href="index.html">
                        <h1><image src="{{ asset('landing/images/flow.png') }}"></h1>
                    </a>
                    
                </div>
               
            </div>
        </div>
    </header>
    <!--/#header-->

   <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>We are RuralFuse</h1>
                        <p>We are connecting companies to skilled jobseekers in rural areas, who are willing to work, but aren't able to secure any jobs, thus also providing workforce to employers.
                        </p>
                        <a href="{{ url('register') }}" class="btn btn-common">Register</a>
                        <a href="{{ url('login') }}" class="btn btn-common">Login</a>
                    </div>
                    <img src="{{ asset('landing/images/home/slider/hill.png') }}" class="slider-hill" alt="slider image">
                    <img src="{{ asset('landing/images/home/slider/house.png') }}" class="slider-house" alt="slider image">
                    <img src="{{ asset('landing/images/home/slider/sun.png') }}" class="slider-sun" alt="slider image">
                    <img src="{{ asset('landing/images/home/slider/birds1.png') }}" class="slider-birds1" alt="slider image">
                    <img src="{{ asset('landing/images/home/slider/birds2.png') }}" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <!-- <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/home/icon1.png" alt="">
                        </div> -->
                        <h2>If you are Worker</h2>
                        <p>Shiela is a craftwoman but she is jobless.</p>
                        <p>She Came to our Registration Booth.</p>
                        <p>She gave her details like name,address,location,availability time etc.</p>
                        <p>We tell her that we will update you when we got available job for you. </p>
                        <p>After One week Shiela gets a job in nearby handloom store.</p>
                        <p>Shiela Confirms the job on IVR.</p>
                        <p> Imagine how many women and men like Shiela are skiled and still unemployed.</p>
                        <p>Rural Fuse is an initiative to make already available local jobs accessible to every skilled workers.</p>
                    </div>
                </div>
                <div class="col-sm-6 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <!-- <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/home/icon2.png" alt="">
                        </div> -->
                        <h2>If you are Company</h2>
                        <p>Shyam is a landlord.</p>
                        <p>Since Winter is near, he needs 30 labours to cultivate rice in his field.</p>
                        <p>But every year the falls short by labours and is not able to utilize his complete farmland.</p>
                        <p>He comes to Rural fuse registration boothand our representative requirements.</p>
                        <p>If Our database has farmer who are available at that time and in that Location.It automatically makes a queued call to every suitable works.</p>
                        <p>On IVR they can confirm their choice or they can come to booth to confirm.</p>
                        <p>Imagine how many small farmers and mini-industries can be benifited from Rural Fuse.</p>
                        <p>If they got skilled workers on time,they can increase their productivity.</p>
                    </div>
                </div>
            
            </div>
        </div>
    </section>
    <!--/#services-->

    <!--/#action-->

    <img src="{{ asset('landing/images/works.jpg') }}" style="width: 100%; height: auto;">
     <!--/#features-->

    
    <!--/#clients-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="{{ asset('landing/images/home/under.png') }}" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:someone@example.com">ruralfuse@ruralfuse.com</a> <br> 
                        Phone: +91 9978323246 <br> 
                        Fax: +91 (123) 456 7891 <br> 
                        </address>

                        <h2>Address</h2>
                        <address>
                        Inout 2.0 <br>
                        Svnit <br> 
                        Surat
                         
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Rural Fuse 2015. All Rights Reserved.</p>
                       
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div id="google_translate_element" style="margin: 0 auto; text-align: center;"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'bn,en,gu,hi,kn,ml,mr,ms,pa,ta,te', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </div>
    <!--/#footer-->

    <script type="text/javascript" src="{{ asset('landing/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('landing/js/lightbox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('landing/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('landing/js/main.js') }}"></script>   
</body>
</html>
