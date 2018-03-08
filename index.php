<?
    require('config.php');

    $jsonurl = "https://eu.mc-api.net/v3/server/ping/".server_ip;
	@$data = file_get_contents($jsonurl);
	@$test = array();
	@$test = json_decode($data, true);
	@$players = $test['players'];
	$online = $test['online'];
	$on = $players['now'];
	$max = $players['max'];

	$motd = $test['motd'];

	if($online){

		$online = "Online!";

	}else{

		$online = "Currently offline, will be back on soon!";

	}

    
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><? echo server_name ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href=""><? echo server_name ?></a></h1>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2><? echo server_name ?></h2>
							<p><? echo server_slogan ?></p>
							<ul class="actions">
								<li><a <? echo "href='".store_link."'" ?> class="button special">Store</a></li>
							</ul>
						</div>
						<a href="#one" class="more scrolly">Find out more!</a>
					</section>

				<!-- Two -->
					<section id="one" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="images/pic01.jpg" alt="" /></div><div class="content">
								<h2>Server Status</h2>
								<p>Our server is currently: <? echo $online ?> </p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/pic04.jpeg" alt="" /></div><div class="content">
								<h2>Players Online</h2>
								<p>We currently have <? echo $on." / ".$max ?> players online!</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/pic03.jpg" alt="" /></div><div class="content">
								<h2>Message of the Day</h2>
								<p><? echo $motd ?></p>
							</div>
						</section>
					</section>

				<!-- CTA -->
					<section id="cta" class="wrapper style4">
						<div class="inner">
							<header>
								<h2>Applications</h2>
								<p>Apply for staff or appeal a ban with the buttons on the right!</p>
							</header>
							<ul class="actions vertical">
								<li><a href="staff" class="button fit special">Staff</a></li>
								<li><a href="ban" class="button fit">Ban Appeal</a></li>
							</ul>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; <? echo server_name ?></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>