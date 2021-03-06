<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Stuwa</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="slider/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<!--nav-->
<link rel="stylesheet" type="text/css" href="simpleMobileMenu.css" />
</head>
 <body>
 <!--header-start-->
 	<section id="header-new">
    	<div class="container-fluid">
        	<div class="row"><div class="top-head">
            	<div class="col-md-12">
                	<div class="logo-div">
                    	<a href="index.html"><img src="images/logo_scl_white.png" class="img-responsive"></a>
                    </div><!--logo-div-->
                    
                   
                
                
              
                    <div class="head-div">
                    	<p><i class="fa fa-phone"></i>Bel ons <span>(020 46596688)</span></p>
                    </div><!--head-div-->
                    
                    
                     <div class="nav-div">
                         <nav>
                            <a href="javascript:void(0)" class="smobitrigger ion-navicon-round"><span>Menu</span></a>
                            <ul class="mobimenu">
                                <li><a  href="index.html">Home</a> </li>
                                <li><a  href="#">Aanbod</a></li>
                                <li><a  href="diensten.html">Diensten</a></li>
                                <li><a href="overons.html">Over ons</a></li>
                                <li><a class="active" href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div><!--nav-div-->
                </div><!--col-md-12--></div>
                
            </div><!--row-->
        </div><!--container-->
    </section>
 <!--header-end-->
 
 <!--banner-start-->

<section id="contact-banner">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="banner-text">
                	<h1>Contact</h1>
                </div><!--banner-text-->
            </div><!--col-md-12-->
        </div><!--row-->
    </div><!--container-->
</section>
       
 <!--banner-end-->

 
 
 
 <!--contact-start-->

<section>
	<div class="container-fluid">
            <div class="row cont-row">
                    <div class="col-md-6 col-sm-6 contact-col">
                        <div class="contact-left">
                            <div class="top-contact">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="contact-address">
                                            <h4>Adres</h4>
                                            <p>Neerstraat 17,<br> 3511GD <br>Roermond</p>
                                        </div><!--contact-address-->
                                    </div><!--col-md-6-->  
                                    
                                    <div class="col-md-6 col-sm-6">
                                        <div class="contact-address">
                                            <h4>Openingstijden showroom</h4>
                                            <p>Ma-Vr: 09.00-19.00 uur<br> Za: 09.00-18.00 uur</p>
                                        </div><!--contact-address-->
                                    </div><!--col-md-6-->
                                </div><!--row-->   
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="contact-address">
                                            <h4>Telefoon en e-mail</h4>
                                            <p>020 46596688<br> 3511GD <br>info@stunnacarlounge.nl</p>
                                        </div><!--contact-address-->
                                    </div><!--col-md-6-->
                                    
                                    <div class="col-md-6 col-sm-6">
                                        <div class="contact-address">
                                            <h4>Openingstijden werkplaats</h4>
                                            <p>Ma-Vr: 09.00-19.00 uur<br> Za: 09.00-18.00 uur</p>
                                        </div><!--contact-address-->
                                    </div><!--col-md-6-->
                                </div><!--row-->
                                
                                <div class="map-text">
                                    <p><span></span> Bekijk locatie op Google maps</p>
                                </div><!--map-text-->
                                
                            </div><!--top-contact-->
                            
                            <div class="bottom-contact">
                                
                                <div class="contact-heading">
                                    <h2>Stuur ons een bericht</h2>
                                </div><!--contact-heading-->
                                
                                <div class="contact-form">
                                    <form name="frm" action="mailsend.php" method="POST"> 
                                        <p>
                                            <label>Naam</label>
                                            <input type="text" name="naam" required value="" id="" placeholder="">
                                        </p>
                                        
                                        <p>
                                            <label>E-mail</label>
                                            <input type="email" name="email" required value="" id="" placeholder="">
                                        </p>
                                        
                                        <p>
                                            <label>Telefoonnummer</label>
                                            <input type="number" name="telefoonnumber" required value="" id="" placeholder="">
                                        </p>
                                        
                                        <p>
                                            <label>Bericht</label>
                                            <textarea name="bericht" required cols="" rows="" placeholder=""></textarea>
                                        </p>
                                        
                                        <p><input type="submit" name="submit" value="Bericht sturen" id="" class="button-cont"></p>
                                    </form>
									
                                </div><!--contact-form-->
                                
                            </div><!--bottom-contact-->
                            
                        </div><!--contact-left-->
                    </div><!--col-md-5-->

                    <div class="col-md-6 col-sm-6 contact-col">
                        <div class="contact-right">
                            
                            <div class="map-div">
                                 <div id="map"></div>
                            </div><!--map-div-->
                            
                            <div class="contact-img">
                                <img src="images/contact.jpg">
                            </div><!--contact-img-->
                            
                        </div><!--contact-right-->
                    </div><!--col-md-7-->
            </div><!--row-->
    </div><!--container-->
</section> 
 
 
 <!--contact-end-->
 
 
       
<!--foter-start-->
       
<section >
     
            <div id="footer-01"> 
                    <div class="container">
                           <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <div class="foot-01">
                                                <div class="logo-foot">
                                                    <img src="images/logo_scl_white.png">
                                                </div>
                                                <div class="fac-icon"> 
                                                     <P> Volg ons <br>
                                                                <i class="fa fa-twitter" aria-hidden="true" style="padding-right:10px;"></i>
                                                                <i class="fa fa-facebook" aria-hidden="true" style="padding-right:10px;"></i>
                                                                <i class="fa fa-instagram" aria-hidden="true"></i> 
                                                     </P>
                                                 </div>
                                                    <div class="copy-01"> 
                                                        <P> &copy;Stunna Car lounge </P>
                                                    </div>
                                    </div>
                                </div><!--col-3-->
                                
                                 <div class="col-md-3 col-sm-2">
                                    <div class="foot-menu">
                                        <h3> Menu </h3>
                                            <ul> 
                                            <li> <a href="#"> Home</a> </li>
                                            <li> <a href="#">Collection </a> </li>
                                            <li> <a href="#"> Diensten</a> </li>
                                            <li> <a href="#">Over ons </a> </li>
                                            <li> <a href="#"> Contact</a> </li>
                                            </ul>
                                    </div>
                                </div><!--col-3-->
                                
                                 <div class="col-md-3 col-sm-3">
                                        <div class="Opening">
                                            <h3> Openingstijden </h3>
                                            <p>Ma-Vr: 09.00-19.00</p>
                                            <P>Za: 09.00-18.00</p>
                                        </div>
                                </div><!--col-3-->
                                
                                 <div class="col-md-3 col-sm-4">
                                    <div class="foot-con">
                                        <h3> Contact </h3>
                                        <p> <span> <i class="fa fa-map-marker" style="height:60px;"  > </i> </span> Neerstraat 17.3511GD <br> Roermond</i> </p>
                                        <P><span> <i class="fa fa-phone" ></i> </span>020 46596688 </P>
                                        <P><span> <i class="fa fa-envelope" ></i> </span> info@stunnacarlounge.nl </p>          
                                    </div>
                                </div><!--col-3-->
                                
                                
                           </div><!--row-->
                       
                     </div><!--container-->
            </div><!--foter-01-->  
            
            <div class="clearfix"></div>
</section>
<!--foter-end-->
  
  
<!--footer-bottom-start-->      
<section >
 <div id="footer-01"> 
    <div class="foot-end">
            <div class="container">
                    <div class="row">
                                <div class="col-md-12"> 
                                    <div class="foot-link"> 
                                            <ul>
                                                <li> <a href="#"> Algemene voorwaarden </a>  |</li>
                                                <li> <a href="#"> Disclaimer </a> |</li>
                                                <li> <a href="#"> Cookies</a> </li>
                                            </ul>
                                    </div><!--foot-link-->
                                </div><!--col-md-12-->
                    </div><!--row-->
            </div><!--container-fluid-->
      </div><!--foot-end-->
   </div><!--footer-01-->   
 <div class="clearfix"></div>
</section>
<!--footer-bottom-end-->  
 


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    


<!--nav-->
<script src="simpleMobileMenu.js"></script>

	<script type="text/javascript">

		jQuery(document).ready(function($) {
			$('.smobitrigger').smplmnu();
		});

	</script>
    
    
 <script>
	$(window).scroll(function() {
if ($(this).scrollTop() > 1){  
    $('#header-new').addClass("sticky");
  }
  else{
    $('#header-new').removeClass("sticky");
  }
});

    $(document).ready(function() {
        var $header = $("#header-new"),
            $clone = $header.before($header.clone().addClass("clone"));
        
        $(window).on("scroll", function() {
            var fromTop = $(window).scrollTop();
            $("body").toggleClass("down", (fromTop > 500));
        });
    });
</script>   

<!--map-->
<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.2),
    zoom: 10
  }
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
    
 </body>
</html>