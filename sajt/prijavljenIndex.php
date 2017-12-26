<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<style>
			.main {
				margin: 20px;
				margin-top: 0px;
				width: 1322px;
				height: 600px;
			}
			.header {
				width: 1322px;
				height: 130px;
			}
			.logo {
				float: left;
				width: 460px;
				height: 100px;
			}
			.body {
				width: 1322px;
				height: 500px;
			}
			nav {
				float: right;
				width: 800px;
				margin-top: 25px;
				margin-right: 50px;
			}				
			img {
				max-width: 100%;
				max-height: 100%;
			}
			.nav-pills> li.active>a{
				background-color: #e60000;
			}
			.nav-pills> li#blocked{
				disabled: true;
			}
			.nav>li#blocked >a:hover, .nav>li#blocked>a:focus {
				background-color: #e60000;
			}
		</style>
	</head>
	<body>
		
		<div class="main">
			<div class="header">
				<div class="logo">
					<img src="logo.png" />
				</div>
				<nav>
					<ul class="nav nav-pills navbar-right">
					  <li role="presentation" class="active"><a href="prijavljenIndex.php">Početna strana</a></li>
					  <li role="presentation" class="active"><a href="oNama.php">O nama</a></li>
					  <li role="presentation" class="active"><a href="treneri.php">Treneri</a></li>
					  <li role="presentation" class="active"><a href="aktivnosti.php">Naše aktivnosti</a></li>
					  <li role="presentation" class="active"><a href="#">Odjavljivanje</a></li>
					  <li role="presentation" class="active"><a href="licnaStrana.php">Lična strana</a></li>
					  <li role="presentation" class="active" id="blocked"><a href="#"><img src="icon.png">Dobrodošao usertest!</a></li>
					</ul>
				</nav>
			</div>
		
			<div class="body">
				<p> Neki content </p>
			</div>
		</div>
		
	</body>
</htm>