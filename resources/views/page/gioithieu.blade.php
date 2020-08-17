@extends('master')
@section('header')
<head>
<title>Blog Post</title>
<!-- This is the logo on the title -->
<link rel="icon" href="source/images/title-icon.png" type="image/png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="source/styles/bootstrap4/bootstrap.min.css">
<link href="source/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="source/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="source/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="source/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="source/styles/blog_single_styles.css">
<link rel="stylesheet" type="text/css" href="source/styles/blog_single_responsive.css">
<link rel="stylesheet" type="text/css" href="source/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="source/styles/custom/custom.css">
</head>

@endsection
@section('content')
<!-- Home -->

<div class="home" style="margin-top:5px;">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="source/images/blog_single_background.jpg" data-speed="0.8"></div>
	</div>

	<!-- Single Blog Post -->

	<div class="single_post">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="single_post_title">TichTech luôn đáp ứng nhu cầu của bạn</div>
					<div class="single_post_text">
						<p>TichTech ra đời vào tháng 07/2020 với mục tiêu cung cấp cho mọi người những chiếc điện thoại đáp ứng nhu cầu của các bạn với mức giá ưu đãi nhất trên thị trường.</p>

						<div class="single_post_quote text-center">
							<div class="quote_image"><img src="source/images/quote.png" alt=""></div>
							<div class="quote_text">TichTech sẽ luôn làm bạn hài lòng</div>
							<div class="quote_name">Liam Neeson</div>
						</div>

						<p>Đến với TichTech, bạn sẽ được giải đáp thắc mắc mỗi khi bạn cần khi gọi vào số hotline của chúng tôi 0334656784. TichTech luôn cung cấp cho bạn những dịch vụ tốt nhất với đội ngũ nhân viên già dặn kinh nghiệm. Còn chần chờ chi nữa, shopping cùng TichTech thôi nào...</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	
@endsection
@section('javascript')
<script src="source/js/jquery-3.3.1.min.js"></script>
<script src="source/styles/bootstrap4/popper.js"></script>
<script src="source/styles/bootstrap4/bootstrap.min.js"></script>
<script src="source/plugins/greensock/TweenMax.min.js"></script>
<script src="source/plugins/greensock/TimelineMax.min.js"></script>
<script src="source/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="source/plugins/greensock/animation.gsap.min.js"></script>
<script src="source/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="source/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="source/plugins/parallax-js-master/parallax.min.js"></script>
<script src="source/plugins/easing/easing.js"></script>
<script src="source/js/blog_single_custom.js"></script>
@endsection		

		