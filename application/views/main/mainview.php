<html>
	
	<head>
		<title>Sarilaya</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/tin/bootstrap.min.css" rel="stylesheet">
		<link href="css/tin/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="css/tin/main.css" rel="stylesheet">
	</head>
	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<div class = "container" id = "home">
			<header class = "row" id = "headerSection">
				<div class = "span4" align = "center"><a href="index.php"><img src = "img/logo.png" id = "logo"></a></div>
				<nav class = "span8">
					<ul class = "nav nav-pills">
						<li class = "menuItem" id = "home"><a href="index.php">Home</a>
							<ul class = "subMenu" id = "homeSub">
								<li><a href="#">&raquo; News/Updates</a></li>
								<li><a href="#">&raquo; Ongoing Activities</a></li>
								<li><a href="#">&raquo; Health and Envi Tips</a></li>
							</ul>
						</li>
						<li class = "menuItem" id = "about"><a href="#">About Us</a>
							<ul class = "subMenu" id = "aboutSub">
								<li><a href="#">&raquo; Profile of SARILAYA (What is SARILAYA?)</a></li>
								<li><a href="#">&raquo; History</a></li>
								<li><a href="#">&raquo; Vision, Mission and Goals</a></li>
								<li><a href="#">&raquo; Strategic Direction</a></li>
								<li><a href="#">&raquo; Three Year Program of Action</a></li>
								<li><a href="#">&raquo; Membership and Affiliates/Partners</a></li>
								<li><a href="#">&raquo; Leadership</a></li>
								<li><a href="#">&raquo; Secretariat</a></li>
								<li><a href="#">&raquo; Achievements</a></li>
								<li><a href="#">&raquo; Contact Us</a></li>
							</ul>
						</li>
						<li class = "menuItem" id = "resources"><a href="#">Resources</a>
							<ul class = "subMenu" id = "resourcesSub">
								<li><a href="#">&raquo; Feature Articles</a></li>
								<li><a href="#">&raquo; Health and Environment Tips</a></li>
								<li><a href="#">&raquo; Documents (Position Papers, Legal Briefs, etc.)</a></li>
							</ul>
						</li>
						<li class = "menuItem"><a href="#">Gallery</a></li>
						<li class = "menuItem" id = "involved"><a href="#">Want to be Involved?</a>
							<ul class = "subMenu" id = "involvedSub">
								<li><a href="#">&raquo; Be a Volunteer</a></li>
								<li><a href="#">&raquo; Donate Now!</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</header>


			<div class = "row" id = "carouselContainer">
				<div id="myCarousel" class="carousel slide">
				  <ol class="carousel-indicators">
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				    <li data-target="#myCarousel" data-slide-to="2"></li>
				  </ol>
				  <!-- Carousel items -->
				  <div class="carousel-inner">
				    <div class="active item"><img src="img/c3.JPG"></div>
				    <div class="item"><img src="img/c2.jpg"></div>
				    <div class="item"><img src="img/c1.jpg"></div>
				  </div>
				  <!-- Carousel nav -->
				  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div>
			</div>
			<div class = "row">
				<div class = "span6" id = "fbContainer">
					<!-- <div id = "containerHeader"></div> -->
					<iframe id = "fbFrame" name="f3110c57a8" width="1000px" height="1000px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like_box Facebook Social Plugin" src="http://www.facebook.com/plugins/like_box.php?app_id=&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D27%23cb%3Df1147c181c%26domain%3Dlocalhost%26origin%3Dhttp%253A%252F%252Flocalhost%252Ff15b72953c%26relation%3Dparent.parent&amp;color_scheme=light&amp;header=true&amp;href=https%3A%2F%2Fwww.facebook.com%2FSarilayainc&amp;locale=en_US&amp;sdk=joey&amp;show_border=true&amp;show_faces=true&amp;stream=true" style="border: none; visibility: visible; " class=""></iframe>
				</div>
				<div class = "span6" id = "newsContainer">
					<!-- <div id = "containerHeader"></div> -->
					<h1>News and Updates</h1>
					<article>
						<h3>Lorem Ipsum</h3>
						<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </div>
						<div id = "newsDate">
							<em>Saturday, October 5, 2013</em>
						</div>
					</article>
					<article>
						<h3>Lorem Ipsum</h3>
						<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </div>
						<div id = "newsDate">
							<em>Saturday, October 5, 2013</em>
						</div>
					</article>
					<article>
						<h3>Lorem Ipsum</h3>
						<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </div>
						<div id = "newsDate">
							<em>Saturday, October 5, 2013</em>
						</div>
					</article>
					<div id = "newsReadMore">
						<a href="#" >Read more</a>
					</div>
				</div>
			</div>
			<div class = "row" id = "thumbContainer">

				<?php foreach($articles as $article):?>
					<div class = "span4 thumbSection">
							<?php if($article->article_image == ""):?>	
								<img src = "<?php echo base_url();?>img/thumbs.JPG">
							<?php else:?>
								<img src = "<?php echo base_url();?>img/article/<?php echo $article->article_image;?>">
							<?php endif;?>
						<article class = "thumbArticle" >
						<?php 
							$text = $article->article_content;
							$limit = 30;
							if(str_word_count($text, 0) > $limit)
							{
								$words = str_word_count($text,2);
								$pos = array_keys($words);
								$text = substr($text,0,$pos[$limit]). '...';
							}
							echo $text;
						?>
							<?php //echo $article->article_content;?>
							<div id = "newsReadMore">
								<a href="#" style = "position:relative;bottom:0" >Read more</a>
							</div>
						</article>
					</div>					
				<?php endforeach;?>


			</div>
		</div>
	</body>
<footer>
	<div class = "container row-fluid">
		<div class = "span4"><img class = "pull-right" src = "img/logo.png" id = "logo"></div>
		<nav class = "span8">
			<ul class = "nav nav-pills">
				<li><a href="#">Home</a>
				</li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Resources</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Want to be Involved?</a></li>
			</ul>
		</nav>
	</div>
	<div class = "div">
		<div id = "footerDiv"></div>
	</div>
		<script src="js/tin/jquery-1.10.2.min.js"></script>
		<script src="js/tin/jquery.mobile-1.3.1.min.js"></script>
		<script src="js/tin/bootstrap.min.js"></script>
		<script type="text/javascript">
			$("#myCarousel").swiperight(function() {  
                $("#myCarousel").carousel('prev');  
            });  
            $("#myCarousel").swipeleft(function() {  
                $("#myCarousel").carousel('next');  
            });  
		</script>
	</footer>
</html>	