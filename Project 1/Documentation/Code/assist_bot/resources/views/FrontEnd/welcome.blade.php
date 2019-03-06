<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="Ansonika">
	<title>Assisst Bot</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    
	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">
	
	<!-- Modernizr -->
	<script src="js/modernizr.js"></script>

	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>

	<div id="preloader" class="Fixed">
		<div data-loader="circle-side"></div>
	</div>
	<!-- /Preload-->
	
	<div id="page">		
	<header class="header_sticky">	
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<!-- /btn_mobile-->
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div id="logo_home">
						<h1><a href="index-2.html" title="Findoctor">Assist Bot</a></h1>
					</div>
				</div>
				<div class="col-lg-9 col-6">
					<nav id="menu" class="main-menu">
						<ul>
							<li>
								<span><a href="#">Home</a></span>
							</li>
							<li>
								<span><a href="{{ route('register') }}">Sign Up</a></span>
							</li>
							<li><span><a href="{{ route('login') }}" >Admin</a></span></li>
						</ul>
					</nav>
					<!-- /main-menu -->
				</div>
			</div>
		</div>
		<!-- /container -->
	</header>
	<!-- /header -->	
	
	<main>
		<div class="header-video">
			<div id="hero_video">
				<div class="content">
					<h3>Assist Bot</h3>
					<p>
						Find all the solution from our Bot. 
					</p>

						
					<table style="overflow: hidden; margin-left:auto; 
    margin-right:auto;">
						<tr class="align-middle">
							<td><input class="form-control" style="width: 600px;" name="q" id="transcript" type="text" class="search-query" placeholder="Ex. Name....">
							</td>
							<td style="padding-left: 10px">	
								<a href="javascript:void(0)" onclick="searchKeyword()" class="btn btn-primary">Search</a>
								<a class="btn btn-md" href="javascript:void(0)" onclick="startDictation()"><i class="fas fa-2x fa-microphone"></i></a>
							</td>
						</tr>
					</table>

						<div id="custom-search-input">
							<ul>
								<!-- <li>
									<a href="javascript:void(0)" onclick="startDictation()" class="btn btn-md">speak</a>
								</li> -->
								<li>
									<input class="translate" type="radio" id="all" name="translate" value="english" checked>
									<label for="all">English</label>
								</li>
								<li>
									<input class="translate" type="radio" id="new" name="translate" value="bangla">
									<label for="new">Bangla</label>
								</li>
							</ul>
						</div>


				</div>
			</div>
			<img src="img/video_fix.png" alt="" class="header-video--media" data-video-src="video/intro" data-teaser-source="video/intro" data-provider="" data-video-width="1920" data-video-height="750">
		</div>
		<!-- /Header video -->
<style>
	.box_feat {
		padding: 20px !important;
	}
</style>
		<div class="container margin_120_95">
			<div class="main_title">
				<h2>Discover all the <strong>forms </strong>in one place</h2>
				<p>Search for your desired form and ask for any query online.</p>
			</div>
			<div class="row add_bottom_30" id="searchResult">

			</div>
			<!-- /row -->
			<p class="text-center"><a href="list.html" class="btn_1 medium">Total Result: <span id="resultCount">0</span> </a></p>
		</div>
		<!-- /container -->

		

		<div id="app_section">
			<div class="container">
				<div class="row justify-content-around">
					<div class="col-md-5">
						<p><img src="img/app_img.svg" alt="" class="img-fluid" width="500" height="433"></p>
					</div>
					<div class="col-md-6">
						<small>Application</small>
						<h3>Download <strong>Assist Bot App</strong> Now!</h3>
						<p class="lead">Download it from the apps store</p>
						<div class="app_buttons wow" data-wow-offset="100">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 43.1 85.9" style="enable-background:new 0 0 43.1 85.9;" xml:space="preserve">
							<path stroke-linecap="round" stroke-linejoin="round" class="st0 draw-arrow" d="M11.3,2.5c-5.8,5-8.7,12.7-9,20.3s2,15.1,5.3,22c6.7,14,18,25.8,31.7,33.1" />
							<path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-1" d="M40.6,78.1C39,71.3,37.2,64.6,35.2,58" />
							<path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-2" d="M39.8,78.5c-7.2,1.7-14.3,3.3-21.5,4.9" />
						</svg>
							<a href="#0" class="fadeIn"><img src="img/apple_app.png" alt="" width="150" height="50" data-retina="true"></a>
							<a href="#0" class="fadeIn"><img src="img/google_play_app.png" alt="" width="150" height="50" data-retina="true"></a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /app_section -->
	</main>
	<!-- /main content -->
	
	<footer>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-3 col-md-12">
					<p>
						
					</p>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>About</h5>
					<ul class="links">
						<li><a href="#">About us</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="login.html">Login</a></li>
						<li><a href="register.html">Register</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>Useful links</h5>
					<ul class="links">
						<li><a href="#">Forms</a></li>
						<li><a href="#">Forms</a></li>
						<li><a href="#">Forms</a></li>
						<li><a href="#">Forms</a></li>
						<li><a href="#">Download App</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>Contact with Us</h5>
					<ul class="contacts">
						<li><a href="#"><i class="icon_mobile"></i>00000000</a></li>
						<li><a href="mailto:info@assistBot.com"><i class="icon_mail_alt"></i> </a></li>
					</ul>
					<div class="follow_us">
						<h5>Follow us</h5>
						<ul>
							<li><a href="#0"><i class="social_facebook"></i></a></li>
							<li><a href="#0"><i class="social_twitter"></i></a></li>
							<li><a href="#0"><i class="social_linkedin"></i></a></li>
							<li><a href="#0"><i class="social_instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				<div class="col-md-8">
					<ul id="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div id="copy">© 2018 Assist Bot</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->

	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="js/video_header.js"></script>
	
	<script>
	var botmanWidget = {
		frameEndpoint: '/botman/tinker',
		chatServer: '/botman',
		title: 'Robot',
		introMessage: 'Hi! i am robot. please question me to the answer. Thanks',
		bubbleBackground: '#ffff',
		bubbleAvatarUrl: "{{ url('storage/robot.png') }}",
		aboutLink: 'tmiweb.co',
		aboutText: ''
	};
	</script>
	<script src="{{ asset('assets/botman/widget.js') }}"></script>
	
	<script>
		'use strict';
		HeaderVideo.init({
			container: $('.header-video'),
			header: $('.header-video--media'),
			videoTrigger: $("#video-trigger"),
			autoPlayVideo: true
		});
	</script>
	
	<!-- HTML5 Speech Recognition API -->
<script>
	var language = "en-Us";
  function startDictation() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = language;
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById('transcript').value = e.results[0][0].transcript;
        $('body#userText') = e.results[0][0].transcript;
        recognition.stop();
        searchKeyword();
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  }

  function searchKeyword(){
      $.ajax({
          type: "GET",
          url: "{{ route('forms.search') }}",
          data: { q: document.getElementById('transcript').value }
      }).done(function (data) {
      console.log(data);
          $('#searchResult').html(data.result);
          $('#resultCount').text(data.count);
      });
  }

 

  $(".translate").click(function(){
        if($(this).val()=="english"){
            language = "en-Us";
        }
        else if($(this).val()=="bangla"){
            language = "bn";
        }
        console.log(language)
    });
</script>

</body>

</html>