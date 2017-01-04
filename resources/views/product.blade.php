<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	{{-- css --}}
	{{ Html::style('ucandoit/css/animate.css') }}
	{{ Html::style('ucandoit/css/font-awesome.min.css') }}   
	{{ Html::style('ucandoit/css/bootstrap.min.css') }}
	{{-- {{ Html::style('ucandoit/css/style.css') }} --}}
	<style type="text/css" media="screen">
		/* basic menu code 1.0 */
		.dropmenu ul {
			margin: 0;
			padding: 0;
		}

		.dropmenu li {
			float: left;
			list-style: none;
			background: #101010;
			position: relative;
		}

		.dropmenu li a {
			text-decoration: none;
			color: #fff;
			display: block;
			padding: 0.5em 1em;
		}

		.dropmenu li ul {
			text-align: center;
			display: none;
			position: absolute;
			left: 0; top: 100%;
			width: 13em;
			box-shadow: 0 0 2px rgba(0,0,0,0.2);
			z-index: 999;
		}

		.dropmenu li ul li {
			float: none;
		}

		.dropmenu li ul li ul {
			left: 100%; top: 0;
		}

		.dropmenu li:hover {
			background: #aaa;
		}

		.dropmenu li:hover > ul {
			display: block;
		}

	</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
				data-toggle="collapse" data-target="#navbar-collapse"
				aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ url('/') }}">Shoes-Price</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav dropmenu">
				<li class="dir">  
					<a class="dropdown-toggle" style="font-size: 18px; padding-top: 15px;" data-toggle="dropdown">Tìm Nhanh <span class="caret"></span>
					</a> 
					<ul>
					@foreach($brands as $brand)
					<li class="dir"><a href="#" style="text-transform: uppercase;">{{ $brand["name_shoe_brand"]}}
						<span class="caret"></span></a>
						<ul>
							<li><a href="#">Item</a></li>
							<li><a href="#">Item</a></li>
							<li><a href="#">Item</a></li>
							<li><a href="#">Item</a></li>
						</ul>
					</li>
					<li class="divider"></li>
					@endforeach
					<li><a href="#" style="text-transform: uppercase;">Other</a></li>
				</ul>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="createpost.html">Đăng Tin</a></li>
		</ul>
	</div><!-- /.navbar-collapse -->
</div>
</nav>

<!-- Place your code at here! -->
<div id="main">		
	<div class="container">		
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Tìm kiếm theo tên sản phẩm..." name="keyword" id="keyword">
			<div class="input-group-btn">
				<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
			</div>
		</div>	
		<br/>
		<!-- Grid system --> 
		<div id="divSearch">
			@foreach($data as $row)
			<div class="col-xs-6 col-sm-6 col-md-3" style="padding-left:5px; padding-right:5px">
				<div class="product-box" style="border: 1px solid #c6caca; margin-bottom:15px; background-color:white;">
					<div class="product-image">
						<p style="position: absolute; z-index: 1; margin-top:2px; margin-left:4px">
							<span class="label label-danger">{{ $row["shop_name"] }}</span>
						</p>
						<center class="visible-md visible-lg"><a href="{{ $row["prd_link"] }}" target="_blank"><img class="img-responsive product-image-thumb" src="{{ $row["img_link"] }}" style="height:260px"></a></center>
						<center class="visible-xs visible-sm"><a href="{{ $row["prd_link"] }}" target="_blank"><img class="img-responsive product-image-thumb" src="{{ $row["img_link"] }}" style="height:150px"></a></center>
					</div>
					<div class="product-offer hidden-xs hidden-sm" style="bottom:0; left:0; height:90px; width:100%; background-color:#F5F5F5; padding-left:5px; padding-right:5px; padding-top:0.5px">
						<a href="{{ $row["prd_link"] }}" target="_blank"><h5 style="color:#333333; font-weight:bold">{{ $row["name"] }}</h5></a>

						<p><span class="text-danger"><strong>{{ $row["price"] }} VND</strong></span></p>
					</div>
					<div class="product-offer-mobile hidden-md hidden-lg" style="bottom:0; left:0; height:90px; width:100%; background-color:#F5F5F5; padding-left:5px; padding-right:5px; padding-top:0.5px">
						<a href="#" target="_blank"><h5 style="color:#333333"><small>{{ $row["name"] }}</small></h5></a>

						<p><span class="text-danger"><strong><small>{{ $row["price"] }} VND</small></strong></span></p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

<!-- Footer -->
<div id="footer">
	<div class="container">
		<p>All rights reserved <a href="https://www.fb.com/dthtien" target="_blank" title="">The Tiến</a></p>
	</div>
</div>


{{-- js --}}
{{ HTML::script('ucandoit/js/jquery-1.9.1.min.js') }}
{{ HTML::script('ucandoit/js/bootstrap.min.js') }}
</body>
</html>