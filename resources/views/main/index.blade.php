<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "00966532182670", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
<!DOCTYPE html>
<html lang="en">
<head>
<title>  {!! site_settings("Web site name") !!}  </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/swipebox.css"> <!-- gallery css -->
<!-- testimonials css -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
<!-- //testimonials css -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Arima+Madurai:500" rel="stylesheet">
</head>

<body>
        <img class="crazy" src="images/bg-fram.png">
<!-- banner -->
<div class="main_section_decor" id="home">
	<div class="decorits_decore_banner_nav">
		<div class="container">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a class="navbar-brand" href="#"><img src="images/logo.png"></a></h1>
			</div>
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.html" class="effect-3">{{ trans('langsite.Home') }} </a></li>
						<li><a href="#about" class="effect-3 scroll"> {{ trans('langsite.About') }} </a></li>
						<li><a href="#services" class="effect-3 scroll"> {{ trans('langsite.services') }} </a></li>
						<li><a href="#portfolio" class="effect-3 scroll"> {{ trans('langsite.Gallery') }} </a></li>
 						<li><a href="#contact" class="effect-3 scroll"> {{ trans('langsite.Contact Us') }} </a></li>
						<li><a href="
						<?php  $locale = App::getLocale(); if (App::isLocale('en')) {  ?> {{ URL::to('/ar/')}}   <?php }else{  ?> 
						{{ URL::to('/')}} 
						
						 <?php  } ?> 
						 
" class="">   {{ trans('langsite.Language') }}  </a></li>
					</ul>
				</nav>
			</div>
		</nav>
		<div class="clearfix"> </div>
		</div>
	</div>
</div>

<!-- Slider -->
<div class="banner_top">
	<div class="slider">
		<div class="wrapper">
			<ul class="rslides" id="slider">
			
							 @foreach($slider as $slider_val)

							 
				<li  style="    background: url({{ URL::to('/').'/images/'.$slider_val->single_photo}})no-repeat 0px 0px!important;" >
					<div class="decor_banner_text_info">
						<h2> <span> {!! site_settings("Web site name") !!}  </span> </h2>
						<!--<a href="#about">Read More</a>-->
						<!--<a href="#contact" class="scroll">Contact Us</a>-->
					</div>
				</li>
				
				 @endforeach 

				 
			</ul>
			<ul id="slider3-pager">
  @foreach($slider as $slider_val)
 <li><a href="#"><img style="    width: 50px; height: 50px;"     src="{{ URL::to('/').'/images/'.$slider_val->single_photo}}"   /></a></li> 
 @endforeach 
			</ul>
		</div>
	</div>
</div>
<!-- //banner -->

<!-- About -->
<div class="about" id="about">
	<div class="container">
		<h3 class="heading">  {{ trans('langsite.About') }}  </h3>
		<div class="about_grids">
			<div class="col-md-6 about_left">
				<h4> {!! site_settings("About Us") !!}  </h4>
				    <br>
		  <h4>  {{ trans('langsite.Mission') }}  :</h4>
		  
		     <h4>   {{ site_settings("Mission")  }} </h4>
			</div>
			<div class="col-md-6 about_right">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
					<div class="carousel-inner">
					
									 @foreach($image as $image_val)

					
						<div class="item <?php  if($loop->iteration== 1 ){echo "active";}    ?> ">
					 <img src="{{ URL::to('/').'/images/'.$image_val->single_photo}} "  style="width:100%;">
							<div class="carousel-caption banner-dott">
							</div>
						</div>
						@endforeach 
						
					</div>
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="fa fa-angle-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="fa fa-angle-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //About -->

<!-- Services -->
<div class="services" id="services">
	<div class="container">
		<h3 class="heading"> {{ trans('langsite.What') }}  </h3>
		<br>
		<p>      {{ site_settings("What")  }}  </p>
		<br>
		<div class="servicegrids">
		
											 @foreach($services as $services_val)
			<div class="col-md-3 ser_grid1 icon2">
				<!--<span class="glyphicon glyphicon-lamp"></span>-->
				<img src="{{ URL::to('/').'/images/'.$services_val->image}}" style="width: 50%;">
				
				<?php   $locale = App::getLocale();   if (App::isLocale('en')) {?> 

  @foreach($services_val->get_services_description_en as $description_val)
<h3> {!!  $description_val->title    !!}   </h3>	 
	@endforeach 

			<?php 	}else{	?>
				
				 @foreach($services_val->get_services_description_ar as $description_val)
<h3> {!!  $description_val->title    !!}   </h3>	 
	@endforeach 
				
			<?php  } ?>
				
				<!--<p>Phasellus congue erat sem, ut tempor mauris tincidunt non. Nulla in erat-->
				<!--nec orci semper ultrices et sed libero.</p>-->
				<!--<a href="#">Read More <span class="fa fa-angle-right"></span></a>-->
			</div>
			
									@endforeach 

			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //Services -->

<!-- services bottom -->
<div class="bottom">
	<div class="bottom_grids">
		<div class="col-md-3 bottom_left">
			<img src="images/left1.jpg" alt="" />
		</div>
		<div class="col-md-6 bottom_middle">
			<div id="typed-strings" class="decorits_decore_strings">
			<!--
 <p>We do home <i>Decoration</i></p>
				<p>We do <i>Office</i> Design</p>
				<p>We do <i>Interior</i> Design</p>
				<p>We do Commercial <i>Design</i></p>
				<p>We do <i>Living room</i> Design</p> 
				   -->
				<p> {{ trans('langsite.Design') }}  </p>
			</div>
			<span id="typed" style="white-space:pre;"></span>
			<p class="typing_bottom">  {{ site_settings('Design')  }}  </p>
 			 
		</div>
		 
	</div>
	<div class="col-md-3 bottom_right">
		<img src="images/right1.jpg" alt="" />
	</div>
	<div class="clearfix"></div>
</div>
<!-- //services bottom -->


<!-- gallery -->
 <div class="gallery" id="portfolio">
	<div class="container">
		<br><br>
	<h3 class="heading">   {{ trans('langsite.Gallery') }}   </h3>
		<div class="gallery_gds">
		
									 @foreach($image as $image_val)
 
		
			<div class="col-md-3 gal-dec">
				<div class="decorits-img">
					<a href="{{ URL::to('/').'/images/'.$image_val->single_photo}}" class="swipebox" >
						<img class="img-responsive img-style row2" src="{{ URL::to('/').'/images/'.$image_val->single_photo}}"    />
					</a>
				</div>
			</div>
			
				@endforeach 
			
			
		   <div class="clearfix"> </div>
		</div>
	</div>
</div>
 
  {!! site_settings('google_maps')  !!}




<!--<div id="map" style="">-->
           
<!--            </div>-->
<!--						<script>-->
<!--					 var coll = document.getElementsByClassName("collapsible");-->
<!--					 var i;-->

<!--					 for (i = 0; i < coll.length; i++) {-->
<!--						 coll[i].addEventListener("click", function() {-->
<!--							 this.classList.toggle("active");-->
<!--							 var content = this.nextElementSibling;-->
<!--							 if (content.style.maxHeight){-->
<!--								 content.style.maxHeight = null;-->
<!--							 } else {-->
<!--								 content.style.maxHeight = content.scrollHeight + "px";-->
<!--							 }-->
<!--						 });-->
<!--					 }-->
<!--					 </script>-->
<!-- contact -->
 <div class="contact" id="contact">
	<div class="container">
		<h3 class="heading">  {{ trans('langsite.Get_In') }}  </h3>
		<div class="decor-contact-form">
			<div class="col-md-6 contact-form-left">
				<div class="decore-contact-form-top">
					<h3>   {{ trans('langsite.About') }}   </h3>
					<p>   {!! site_settings('About Us')  !!} </p>
				</div>

				<div class="contact-form-top">
 				</div>
				<ul class="con_inner_text">
					<li><span class="fa fa-map-marker" aria-hidden="true"></span><label>  {!! site_settings('Location')  !!} </label></li>
					<li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:{!! site_settings('Mail')  !!}"> {!! site_settings('Mail')  !!} </a></li>
					<li><span class="fa fa-phone" aria-hidden="true"></span>   {!! site_settings('phone')  !!} </li>
				</ul>
			</div>
			<div class="col-md-6 contact-form-right">
				<div class="contact-form-top">
					<h3>Send us a message</h3>
				</div>
				<div class="decorinfo-contact-form-grid">
                   	{!! Form::open( [ 'route' =>  'orders', 'method' => 'post'] ) !!}
									<input class="form-control" type="text" name="title" placeholder="" required="">
                                    <input class="form-control" type="text" name="phone" placeholder="" required="">
                                    <input class="form-control" type="email" name="email" placeholder="" required="">
                                    <textarea name="body"  id="textarea" placeholder="" required=""></textarea>
									<button class="btn1">Submit</button>
					{!! Form::close() !!}
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //contact -->

<!-- footer -->
 <div class="footer">
	<div class="container">
		<div class="f-bg-dec">
			<div class="col-md-4 decore_footer_grid" data-aos="fade-right">
					<h3>   {{ trans('langsite.About') }}   </h3>
					<p>   {!! site_settings('About Us')  !!} </p>
				<ul class="social_decorinfo">
					<li><a href=" {!! site_settings('facebook')  !!}" class="de_facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="{!! site_settings('twitter')  !!}" class="de_twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="{!! site_settings('instagram')  !!}" class="de_instagram"><i class="fa fa-instagram"></i></a></li>
 				</ul>

			</div>
			<div class="col-md-4 decore_footer_grid" data-aos="fade-right">
				<h3>  {{ trans('langsite.Contact Us') }}  </h3>
					<ul class="con_inner_text">
							<li><span class="fa fa-map-marker" aria-hidden="true"></span><label>  {!! site_settings('Location')  !!} </label></li>
					<li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:{!! site_settings('Mail')  !!}"> {!! site_settings('Mail')  !!} </a></li>
					<li><span class="fa fa-phone" aria-hidden="true"></span>   {!! site_settings('phone')  !!} </li>
					</ul>

			</div>
			<div class="col-md-4 decore_footer_grid" data-aos="fade-left">
				<h3>  {{ trans('langsite.images') }}  </h3>
				  <ul class="con_inner_text midimg">
				  
				  	 @foreach($image as $image_val)
 
		
		 
					<li style="    width: 11%;"><a href="#" data-toggle="modal" data-target="#myModal">
					<img  style ="    width: 40px;
    height: 40px;"  src="{{ URL::to('/').'/images/'.$image_val->single_photo}}" alt=""  /></a></li>   
					
			
				@endforeach 
				


 
				 </ul>
 <?php 
$handle = fopen("http://localhost/Secilion/public/counter.txt", "r");
if(!$handle){
 echo "could not open the file" ;
}
else {
	$counter = ( int ) fread ($handle,20) ;
	fclose ($handle) ;
	$counter++ ;
	echo" <br><strong style='    color: wheat;'> you are visitor no ".  $counter  ;
$handle =  fopen("counter.txt", "w" ) ;
fwrite($handle,$counter) ;
fclose ($handle) ;
	}
?>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //footer -->

<!-- copyright -->
 <div class="copyright">
	<div class="container">
		<p class="copyright">© 2018 Home. All Rights Reserved | Design by <a href="" target="_blank">BeGroup</a></p>
	</div>
</div>
<!-- //copyright -->












<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script>
$(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    }
  });
});
</script>
<!-- banner-type-text -->
<script src="js/typed.js" type="text/javascript"></script>
<script>
	$(function(){
		$("#typed").typed({
			stringsElement: $('#typed-strings'),
			typeSpeed: 30,
			backDelay: 500,
			loop: false,
			contentType: 'html', // or text
			// defaults to false for infinite loop
			loopCount: false,
			callback: function(){ foo(); },
			resetCallback: function() { newTyped(); }
		});
		$(".reset").click(function(){
			$("#typed").typed('reset');
		});
	});
	function newTyped(){ /* A new typed object */ }
	function foo(){ console.log("Callback"); }
</script>
<!-- //banner-type-text -->

<!-- flexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
</script>
<!-- //flexSlider -->

<!-- swipe box js -->
<script src="js/jquery.adipoli.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function(){
		$('.row2').adipoli({
			'startEffect' : 'overlay',
			'hoverEffect' : 'sliceDown'
		});
	});
</script>
<script src="js/jquery.swipebox.min.js"></script>
<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
</script>
<!-- //swipe box js -->

<!-- Numscroller -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //Numscroller -->

<!-- Responsive Slider script -->
<script src="js/responsiveslides.min.js"></script>
<script>
	// You can also use "$(window).load(function() {"
	$(function () {
		$("#slider").responsiveSlides({
			auto: true,
			nav: true,
			manualControls: '#slider3-pager',
		});
	});
</script>
<!-- //Responsive Slider script -->

<script src="js/SmoothScroll.min.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- move to top-js-files -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!-- //move to top-js-files -->

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script><!-- bootstrap js file -->

</body>
</html>
