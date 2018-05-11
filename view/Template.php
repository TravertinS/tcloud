<?php
class Template{

	function page($ct,$title){
		$hd = "
		<!DOCTYPE HTML>
		<!--
			Editorial by HTML5 UP
			html5up.net | @ajlkn
			Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
		-->
		<html>
			<head>
				<title>".$title."</title>
				<meta charset='utf-8' />
				<meta name='viewport' content='width=device-width, initial-scale=1, user-scalable=no' />
				<!--[if lte IE 8]><script src='../view/assets/js/ie/html5shiv.js'></script><![endif]-->
				<link rel='stylesheet' href='../view/assets/css/main.css' />
				<!--[if lte IE 9]><link rel='stylesheet' href='../view/assets/css/ie9.css' /><![endif]-->
				<!--[if lte IE 8]><link rel='stylesheet' href='../view/assets/css/ie8.css' /><![endif]-->
			</head>
			<body>
		";
		$ft = "
		<script src='../view/assets/js/jquery.min.js'></script>
			<script src='../view/assets/js/skel.min.js'></script>
			<script src='../view/assets/js/util.js'></script>
			<!--[if lte IE 8]><script src='../view/assets/js/ie/respond.min.js'></script><![endif]-->
			<script src='../view/assets/js/main.js'></script>
					</body>
		</html>
		";
		$sc = $hd.$ct.$ft;
		return $sc;
	}

	function wrapper($ct){
		$hd = "
			<div id='wrapper'>
		";
		$ft = "
			</div>
		";
		$sc = $hd.$ct.$ft;
		return $sc;

	}

	function main_a($ct){
		$hd = "
		<div id='main'>
						<div class='inner'>
		";
		$ft = "
		</div>
				</div>
		";
		$sc = $hd.$ct.$ft;
		return $sc;

	}

	function sidebar($ct){
		$hd = "
			<div id='sidebar'>
		<div class='inner'>

		";
		$ft = "
		</div>
			</div>
		";
		$sc = $hd.$ct.$ft;
		return $sc;
	}


	function headerm($ct){
		$sc = "
		<header id='header'>
			".$ct."
		</header>

		";
		return $sc;

	}

	function banner(){
		$sc = "
		<section id='banner'>
			<div class='content'>
				<header>
					<h1>Hi, I'm Editorial<br />
					by HTML5 UP</h1>
					<p>A free and fully responsive site template</p>
				</header>
				<p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>
				<ul class='actions'>
					<li><a href='#' class='button big'>Learn More</a></li>
				</ul>
			</div>
			<span class='image object'>
				<img src='images/pic10.jpg' alt='' />
			</span>
		</section>
		";
		return $sc;

	}

	function section1(){
		$sc = "
		<section>
			<header class='major'>
				<h2>Erat lacinia</h2>
			</header>
			<div class='features'>
				<article>
					<span class='icon fa-diamond'></span>
					<div class='content'>
						<h3>Portitor ullamcorper</h3>
						<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
					</div>
				</article>
				<article>
					<span class='icon fa-paper-plane'></span>
					<div class='content'>
						<h3>Sapien veroeros</h3>
						<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
					</div>
				</article>
				<article>
					<span class='icon fa-rocket'></span>
					<div class='content'>
						<h3>Quam lorem ipsum</h3>
						<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
					</div>
				</article>
				<article>
					<span class='icon fa-signal'></span>
					<div class='content'>
						<h3>Sed magna finibus</h3>
						<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
					</div>
				</article>
			</div>
		</section>
		";
		return $sc;

	}

	function section2(){
		$sc = "
		<section>
				<header class='major'>
					<h2>Ipsum sed dolor</h2>
				</header>
				<div class='posts'>
					<article>
						<a href='#' class='image'><img src='images/pic01.jpg' alt='' /></a>
						<h3>Interdum aenean</h3>
						<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
						<ul class='actions'>
							<li><a href='#' class='button'>More</a></li>
						</ul>
					</article>
					<article>
						<a href='#' class='image'><img src='images/pic02.jpg' alt='' /></a>
						<h3>Nulla amet dolore</h3>
						<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
						<ul class='actions'>
							<li><a href='#' class='button'>More</a></li>
						</ul>
					</article>
					<article>
						<a href='#' class='image'><img src='images/pic03.jpg' alt='' /></a>
						<h3>Tempus ullamcorper</h3>
						<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
						<ul class='actions'>
							<li><a href='#' class='button'>More</a></li>
						</ul>
					</article>
					<article>
						<a href='#' class='image'><img src='images/pic04.jpg' alt='' /></a>
						<h3>Sed etiam facilis</h3>
						<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
						<ul class='actions'>
							<li><a href='#' class='button'>More</a></li>
						</ul>
					</article>
					<article>
						<a href='#' class='image'><img src='images/pic05.jpg' alt='' /></a>
						<h3>Feugiat lorem aenean</h3>
						<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
						<ul class='actions'>
							<li><a href='#' class='button'>More</a></li>
						</ul>
					</article>
					<article>
						<a href='#' class='image'><img src='images/pic06.jpg' alt='' /></a>
						<h3>Amet varius aliquam</h3>
						<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
						<ul class='actions'>
							<li><a href='#' class='button'>More</a></li>
						</ul>
					</article>
				</div>
			</section>
		";
		return $sc;

	}

	function search(){
		$sc = "
		<section id='search' class='alt'>
			<form method='post' action='#'>
				<input type='text' name='query' id='query' placeholder='Search' />
			</form>
		</section>
		";
		return $sc;

	}

	function menu(){
		$sc = "
			<nav id='menu'>
				<header class='major'>
					<h2>Menu</h2>
				</header>
				<ul>
					<li><a href='index.html'>Homepage</a></li>
					<li><a href='generic.html'>Generic</a></li>
					<li><a href='elements.html'>Elements</a></li>
					<li>
						<span class='opener'>Submenu</span>
						<ul>
							<li><a href='#'>Lorem Dolor</a></li>
							<li><a href='#'>Ipsum Adipiscing</a></li>
							<li><a href='#'>Tempus Magna</a></li>
							<li><a href='#'>Feugiat Veroeros</a></li>
						</ul>
					</li>
					<li><a href='#'>Etiam Dolore</a></li>
					<li><a href='#'>Adipiscing</a></li>
					<li>
						<span class='opener'>Another Submenu</span>
						<ul>
							<li><a href='#'>Lorem Dolor</a></li>
							<li><a href='#'>Ipsum Adipiscing</a></li>
							<li><a href='#'>Tempus Magna</a></li>
							<li><a href='#'>Feugiat Veroeros</a></li>
						</ul>
					</li>
					<li><a href='#'>Maximus Erat</a></li>
					<li><a href='#'>Sapien Mauris</a></li>
					<li><a href='#'>Amet Lacinia</a></li>
				</ul>
			</nav>
		";
		return $sc;

	}

	function section3(){
		$sc = "
		<section>
			<header class='major'>
				<h2>Ante interdum</h2>
			</header>
			<div class='mini-posts'>
				<article>
					<a href='#' class='image'><img src='images/pic07.jpg' alt='' /></a>
					<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
				</article>
				<article>
					<a href='#' class='image'><img src='images/pic08.jpg' alt='' /></a>
					<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
				</article>
				<article>
					<a href='#' class='image'><img src='images/pic09.jpg' alt='' /></a>
					<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
				</article>
			</div>
			<ul class='actions'>
				<li><a href='#' class='button'>More</a></li>
			</ul>
		</section>
		";
		return $sc;

	}
		function section4(){
		$sc = "
		<section>
			<header class='major'>
				<h2>Get in touch</h2>
			</header>
			<p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
			<ul class='contact'>
				<li class='fa-envelope-o'><a href='#'>information@untitled.tld</a></li>
				<li class='fa-phone'>(000) 000-0000</li>
				<li class='fa-home'>1234 Somewhere Road #8254<br />
				Nashville, TN 00000-0000</li>
			</ul>
		</section>
		";
		return $sc;

	}
		function footer(){
		$sc = "
		<footer id='footer'>
			<p class='copyright'>&copy; Untitled. All rights reserved. Demo Images: <a href='https://unsplash.com'>Unsplash</a>. Design: <a href='https://html5up.net'>HTML5 UP</a>.</p>
		</footer>
		";
		return $sc;

	}
	function left_sidebar_pic(){
		$sc = "
		<section>
									<header class='major'>
										<h2>Ante interdum</h2>
									</header>
									<div class='mini-posts'>
										<article>
											<a href='#' class='image'><img src='../view/images/pic07.jpg' alt='' /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href='#' class='image'><img src='../view/images/pic08.jpg' alt='' /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href='#' class='image'><img src='../view/images/pic09.jpg' alt='' /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
									</div>
									<ul class='actions'>
										<li><a href='#' class='button'>More</a></li>
									</ul>
								</section>
		";
		return $sc;
	}

	function menu_tl_migrasi(){
	$sc = "
		<nav id='menu'>
			<header class='major'>
				<h2>Menu</h2>
			</header>
			<ul>
				<li><a href='home_tl_migrasi.php'>Home</a></li>
				<li>
					<span class='opener'>Dashboard</span>
					<ul>
						<li><a href='dashboard_migrasi.php'>Dashboard Migrasi</a></li>
						<li><a href='dashboard_hi_migrasi.php'>Dashboard HI Migrasi</a></li>
					</ul>
				</li>
				<li><a href='dispath_migrasi.php'>Dispath Order</a></li>
				<li><a href='man_aggota_migrasi.php'>Manajemen anggota</a></li>
				<li><a href='auten_user.php?id=2'>Logout</a></li>
			</ul>
		</nav>
	";
	return $sc;
	}

	function menu_agt_migrasi(){
	$sc = "
		<nav id='menu'>
			<header class='major'>
				<h2>Menu</h2>
			</header>
			<ul>
				<li><a href='home_agt_migrasi.php'>Home</a></li>
				<li><a href='update_progress_migrasi.php'>Update Progress</a></li>
				<li><a href='login.php?err=0'>Logout</a></li>
			</ul>
		</nav>
	";
	return $sc;
	}

	function menu_survey(){
	$sc = "
		<nav id='menu'>
			<header class='major'>
				<h2>Menu</h2>
			</header>
			<ul>
				<li><a href='home_survey.php'>Home</a></li>
				<li>
					<span class='opener'>Dashboard</span>
					<ul>
						<li><a href='dashboard_survey.php'>Dashboard Survey</a></li>
						<li><a href='dashboard_project.php'>Dashboard Project</a></li>
					</ul>
				</li>
				<li><a href='#'>auten_user.php?id=2</a></li>
			</ul>
		</nav>
	";
	return $sc;
	}

	function menu_cons(){
	$sc = "
		<nav id='menu'>
			<header class='major'>
				<h2>Menu</h2>
			</header>
			<ul>
				<li><a href='home_cons.php'>Home</a></li>
				<li><a href='dashboard_project_cons.php'>Dashboard Project</a></li>
				<li><a href='#'>Logout</a></li>
			</ul>
		</nav>
	";
	return $sc;
	}

	function menu_admin(){
	$sc = "
		<nav id='menu'>
			<header class='major'>
				<h2>Menu</h2>
			</header>
			<ul>
				<li><a href='home_survey.php'>Home</a></li>
				<li>
					<span class='opener'>manajemen Data</span>
					<ul>
						<li><a href='man_regional.php'>Manajemen Region</a></li>
						<li><a href='man_user.php'>Manajemen User</a></li>
					</ul>
				</li>
				<li><a href='logout.php'>Logout</a></li>
			</ul>
		</nav>
	";
	return $sc;
	}


}
?>
