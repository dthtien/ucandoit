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
		.column {
			margin: 15px 15px 0;
			padding: 0;
		}
		.column:last-child {
			padding-bottom: 60px;
		}
		.column::after {
			content: '';
			clear: both;
			display: block;
		}
		.column div {
			position: relative;
			float: left;
			width: 300px;
			height: 200px;
			margin: 0 0 0 25px;
			padding: 0;
		}
		.column div:first-child {
			margin-left: 0;
		}
		.column div span {
			position: absolute;
			bottom: -20px;
			left: 0;
			z-index: -1;
			display: block;
			width: 300px;
			margin: 0;
			padding: 0;
			color: #444;
			font-size: 18px;
			text-decoration: none;
			text-align: center;
			-webkit-transition: .3s ease-in-out;
			transition: .3s ease-in-out;
			opacity: 0;
		}
		figure {
			width: 300px;
			height: 200px;
			margin: 0;
			padding: 0;
			background: #fff;
			overflow: hidden;
		}
		figure:hover+span {
			bottom: -36px;
			opacity: 1;
		}

		@-webkit-keyframes circle {
			0% {
				opacity: 1;
			}
			40% {
				opacity: 1;
			}
			100% {
				width: 200%;
				height: 200%;
				opacity: 0;
			}
		}
		@keyframes circle {
			0% {
				opacity: 1;
			}
			40% {
				opacity: 1;
			}
			100% {
				width: 200%;
				height: 200%;
				opacity: 0;
			}
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
			<a class="navbar-brand" href="index.html">ChoDienTu.vn</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbar-collapse">
          <!-- <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Sản Phẩm</a></li>
			<li><a href="#">About Us</a></li>            
		</ul> -->
		<ul class="nav navbar-nav navbar-right">
			<li><a href="createpost.html">Đăng Tin</a></li>
			<!-- <li><a href="#">Đăng Ký</a></li> -->
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
		<div id="search-result" class="row"> 
			<div class="column">
				@foreach($data as $row)
				{{-- <a href="{{ $row["prd_link"] }}" title="">
					<figure>
						<img class='col-md-4 col-sm-6 col-xs-12 img-rounded img-responsive' src='{{ $row["img_link"]}}'>
					</figure>
					<span></span>
				</a> --}}
				<div class='col-md-4 col-sm-6 col-xs-12'>
					<figure><img src="{{ $row["img_link"]}}" /></figure>
					<span>{{ $row["name"]}}</span>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

<!-- Footer -->
<div id="footer">
	<div class="container">
		<p>All rights reserved by Chodientu.vn</p>
	</div>
</div>


{{-- js --}}
{{ HTML::script('ucandoit/js/jquery-1.9.1.min.js') }}
{{ HTML::script('ucandoit/js/bootstrap.min.js') }}
</body>
</html>