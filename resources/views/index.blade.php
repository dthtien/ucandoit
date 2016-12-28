<!DOCTYPE HTML>
<html lang="en-US">
	<head>
        <!--=============== Meta and Title  ===============-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Shoes-Price All you need </title>
		<!-- favicon icon -->			
		<link rel="icon" type="image/png" href="favicon.png"> 
        <!--=============== Include all css file  ===============-->	
		<!-- Preloder css -->
		{{ Html::style('ucandoit/css/animate.css') }}
	    {{ Html::style('ucandoit/css/font-awesome.min.css') }}   
	    {{ Html::style('ucandoit/css/font-sourch_sun_pro.css') }}
	    {{ Html::style('ucandoit/fonts/comicSans.css') }}
	    {{ Html::style('ucandoit/css/bootstrap.min.css') }}
	    {{ Html::style('ucandoit/css/slicknav.css') }}
	    {{ Html::style('ucandoit/css/owl.carousel.css') }}
	    {{ Html::style('ucandoit/css/owl.theme.css') }}
	    {{ Html::style('ucandoit/css/reset.css') }}
	    {{ Html::style('ucandoit/switcher/switcher.css') }}
	    {{ Html::style('ucandoit/css/style.css') }}
	    {{ Html::style('ucandoit/css/responsive.css') }}
	    {{ Html::style('ucandoit/css/preloder.css') }}
	<!--[if lt IE 8]><link rel="stylesheet" href="assets/blueprint-css/ie.css" type="text/css" media="screen, projection"><![endif]-->
	</head>
	<body>
		<!-- loader-wrapper -->		
		<div id="loader-wrapper">
			<div id="loader"></div>
			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
		</div>
		<!-- end loader-wrapper -->	
		<!-- canvas -->			
		<div id="canvas-holder">
			<canvas id="demo-canvas"></canvas>
		</div>
		<!--end canvas -->
		
		<div id="main">  <!--start main div -->
		
<!--
##  Color Switcher
=============================================================================== -->			

		<div id="custumize-style">
		  <a href="#" class="switcher open"> <span class="icon-switcher"><i class="fa fa-cogs"></i></span></a>
		  <div>
			<h3 class="color-option-title">Colors</h3>
			<ul class="colors-style" id="custom-color">
			  <li><a href="#" class="blue"></a></li>
			  <li><a href="#" class="yellow"></a></li>
			  <li><a href="#" class="red"></a></li>
			  <li><a href="#" class="green"></a></li>
			  <li><a href="#" class="purple"></a></li>
			  <li><a href="#" class="pink"></a></li>
			</ul>

		  </div>
		</div> <!-- Color Switcher Ends-->
				
<!--
## HOME area  Welcome to our website
=============================================================================== -->	
	
			<div class="home_area"> <!-- Home area-->
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="logo">
								{{ Html::image('ucandoit/img/logo.png') }} <!-- Here is your logo -->
							</div>	
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="home_area_text">
								<h2>Welcome to Shoes-Price</h2> <!-- Page title -->
								<h4>Find some good deals</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							                <!-- countdown -->
							<ul class="countdown wow fadeInUp" data-wow-duration="7s">
								<li>
									<a href="">Adidas</a>
								</li>

								<li>
									<a href="">Nike</a>
								</li>
								<li>
									<a href="">Converse</a>
								</li>
								<li>
									<a href="">Vans</a>
								</li>
								<li>
									<a href="">Asics</a>
								</li>
								<li>
									<a href="">Palladium</a>
								</li>

								<li>
									<a href="">Other Shoe Brand</a>
								</li>

							</ul>
										<!--End countdown -->
						</div>
					</div>
				</div>	
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="subscribe_area"> <!-- Subscribe -->
								<!-- form section -->	
								<form id="mc-form">
									<input class="email_input subscribe" id="mc-email" type="email" placeholder="Enter Your Email">
									<button class="email_submit" type="submit">Search</button>
									<label style="display:block;padding:10px 0px; color:green;" for="mc-email"></label>
								</form>
								<!-- end form section -->		
							</div>
						</div>
					</div>
				</div>
			
			</div>	<!-- //Home area-->
			
			<div style="clear:both;"></div>
			
<!--
## section1  Our services area
=============================================================================== -->	
	
			<div class="section" id="section1"> <!-- section1 -->
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="logo logo_margin">
								{{ Html::image('ucandoit/img/logo.png') }} <!-- Here is your logo -->
							</div>	
						</div>
					</div>
				</div>
				<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="servicer_area_text">
								<h2>Services</h2>			<!-- Page title -->
								<h4>We provide these services</h4>
							</div>
						</div>
					</div>
				</div>
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div id="carousel_wrapper_worker">  <!-- Carouse slider -->
									<div class="carousel_item">
									   <div class="single_carousel">
											<i class="big_icon fa fa-mobile"></i>
											<p style="text-align: center;">Tìm giá giày rẻ nhất trên thị trường đối với mỗi loại giày</p>
									   </div>
									</div>
									<div class="carousel_item">
									   <div class="single_carousel">
											<i class="big_icon fa fa-diamond"></i>
											<p style="text-align: center;">Tham khảo giá theo trang web bán giày lớn ở  Việt Nam</p>
									   </div>
									</div>
									<div class="carousel_item">
									   <div class="single_carousel">
											<i class="big_icon fa fa-diamond"></i>
											<p style="text-align: center;">Giúp bạn tìm địa điểm bán loại giày bạn muốn mua</p>
									   </div>
									</div>
								</div> <!-- //End Carouse slider -->
							</div>
						</div>
					</div>
				</div>
			</div>  <!-- // End section1 -->
			
			<div style="clear:both;"></div>	
			
<!--
## section2  Our team member
=============================================================================== -->	
	
			<div class="section" id="section2">	 <!-- Section2 -->
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="logo logo_margin">
								{{ Html::image('ucandoit/img/logo.png') }} <!-- Here is your logo -->
							</div>	
						</div>
					</div>
				</div>
				<div class="content">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="team_area_text">
									<h2>About me</h2>		<!-- Page title -->
									<h4>Glad to see you</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">				
							<div class="col-sm-12">
								<div id="carousel_wrapper">   <!-- Carouse slider 2-->
									<div class="carousel_item">
									   <div class="single_carousel member_picture1">
											<div class="overlay"></div>
											<img class="pic_one" src="{{ asset('ucandoit/img/aboutme.jpg') }}" alt="" />
											<ul class="member_icon">
												<li><a href="https://www.facebook.com/dthtien" target="_blank"><i class="facebook small_icon  fa fa-facebook"></i></a></li>	
												<li><a href="#"><i class="link small_icon  fa fa-link"></i></a></li>
												<li><a href="https://twitter.com/dthtien" target="_blank"><i class="twitter small_icon  fa fa-twitter"></i></a></li>
												<li class="name_member" >The Tiến</li>
											</ul>											
									   </div>
									</div>
									<div class="carousel_item">
									   <div class="single_carousel member_picture3">
									   <p>Đậu Thế Tiến</p>
									   <p>Sinh viên Năm 3</p>
									   <p>Bộ môn Thương mại điện tử</p>
									   <p>Khoa Hệ Thống Thông Tin</p>
									   <p>Đại học Công Nghệ Thông Tin Đại học Quốc gia Hồ Chí Minh</p>
									   </div>
									</div>
								</div>   <!-- // End Carouse slider 2 -->
							</div>
						</div>
					</div>
				</div>
			</div>  <!-- //End Section2 -->
			
			<div style="clear:both;"></div>			

<!--
## section3   About us area 
=============================================================================== -->	
		
			<div class="section" id="section3">	<!-- Section3 -->
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="logo logo_margin">
								{{ Html::image('ns/images/logo1.png') }}  <!-- Here is your logo -->
							</div>	
						</div>
					</div>
				</div>
				<div class="content">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="about_us_text">
									<h2>About web</h2>				<!-- Page title -->
									<h4>We are coming soon</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<p class="about_us_p" >Lý do</p>
								<p class="under_p" >Mục đích</p>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- //End Section3 -->
			
			<div style="clear:both;"></div>	
			
<!--
## section4  Coutact us area
=============================================================================== -->				
			
			<div class="section" id="section4"> <!-- Section4 -->
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="logo">
								{{ Html::image('ucandoit/img/logo.png') }} <!-- Here is your logo -->
							</div>		
						</div>
					</div>
				</div>
				<div class="content">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="contact_us_text">
									<h2>Contact</h2>			<!-- Page title -->
									<h4>We are coming soon</h4>	
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-sm-4 map_area">   <!-- Google Map area -->
								<i class="map_show fa fa-angle-down"></i>
								<i class="map_corse1 fa fa-times"></i>
								<div class="map_hide">
									<h4 class="map_social">Google Map</h4>   <!-- Google Map -->
									<iframe src="gglink"></iframe>
								</div>
							</div>    <!-- // End Google Map area -->
							<div class="col-sm-4">
								<!-- form section -->	
								<div id="form-wrapper">
									<form id="form" method="post" action="send.php" name="send">
										<input class="email_input requiredField name" id="name" name="name" type="text" placeholder="Enter Your Full Name" >
										<input class="email_input requiredField email" id="email" name="email" type="text" placeholder="Enter Your Email"><br />
										<input class="email_input requiredField subject" name="subject" type="text" placeholder="Enter Your Subject" >
										<textarea class="email_input message" id="message" name="message" rows="3" placeholder="Your Message Here"></textarea><br />
										<button class="email_submit email_margin_top submit" type="submit" value="Submit">submit</button>
									</form>
								</div>	
								<!-- end form section -->	
							</div>		
							<div class="col-sm-4 social_hide">     <!-- Phone and Social icon area -->
								<i class="show_social fa fa-angle-down"></i>
								<i class="map_corse2 fa fa-times"></i>
								<div class="hide_social">
									<h4 class="map_social">Phone number</h4>
									<p class="phone_p" >Tel: 0966883284</p>
									<p class="phone_p" >mail: tiendt2311@mail.com</p>
									<h4 class="map_social">Social Media</h4>
									<div class="social_icon">
										<ul>
											<li><a class="" href="#"><i class="facebook small_icon fa fa-facebook"></i></a></li>				
											<li><a class=""  href="#"><i class="twitter small_icon  fa fa-twitter"></i></a></li>
											<li><a class=""  href="#"><i class="google small_icon  fa fa-google-plus"></i></a></li>
											<li><a class="" href="#"><i class="in small_icon  fa fa-linkedin"></i></a></li>
											<li><a class=""  href="#"><i class="link small_icon  fa fa-link"></i></a></li>
											<li><a class=""  href="#"><i class="youtube small_icon  fa fa-youtube"></i></a></li>				
										</ul>
									</div>
								</div>
							</div>   <!-- //End Phone and Social icon area -->
						</div>
					</div>
				</div>
			</div>  <!-- //End Section4 -->
			
			<div style="clear:both;"></div>	

<!--
##  Under button_area // Mainmenu area 
=============================================================================== -->				
			
			<div class="container navbar">   <!-- Under button -->
				<div class="row">
					<div class="col-sm-12 ">
						<div class="button_area" id="sticker"> <!-- sticker menu for mobile layout -->
							<ul id="nav">
								<li id="scrollbar" >
									<h3 class="btn_menu home btn  btn-lg"> Home</h3>
									<h3 class="btn_menu services btn  btn-lg " >Service</h3>	
									<h3 class="btn_menu team_member btn  btn-lg" >About me</h3>
									<h3 class="btn_menu about_us btn  btn-lg " >About Web site</h3>			
									<h3 class="btn_menu contact_us btn  btn-lg" >contact</h3>
								</li>	
							</ul>	
						</div>
					</div>
				</div>
			</div> <!-- //Under button -->
		</div>  <!-- //End main div  -->
		
<!--
##  javascript All file include
=============================================================================== -->			
		{{ HTML::script('ucandoit/js/jquery-1.9.1.min.js') }}
		{{ HTML::script('ucandoit/js/bootstrap.min.js') }}
		{{ HTML::script('ucandoit/js/custom.js')}}
		{{ HTML::script('ucandoit/js/form-contact.js') }}
		{{ HTML::script('ucandoit/js/jquery.slicknav.min.js') }}
		{{ HTML::script('ucandoit/js/owl.carousel.min.js')}}
		{{ HTML::script('ucandoit/js/canvas.js') }}
		{{ HTML::script('ucandoit/js/jquery.ajaxchimp.min.js') }}
		{{ HTML::script('ucandoit/switcher/switcher.js')}}
	</body>
</html>