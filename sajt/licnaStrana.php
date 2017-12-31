<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<style>

			.here {
					background-color: #c82d38;
			}

			body {
				height: 100vh;
				background-color: #333;
			}

			.main {
					height: calc(100% - 121px);

			}

			img {
				max-width: 100%;
				max-height: 100%;
			}

			.nav-pills> li.active>a{
				background-color: #ec3642;
			}

			.myHeader {
					display: flex;
					flex-direction: column;
					align-items: center;
					width: 100%;
					/*height: 40px;*/
					background-color: #ec3642;
			}

			.navButtons {
				display: flex;
				justify-content: space-around;
				width: 100%;
			}

			.headerLogo {
				display: flex;
				justify-content: center;
				background-color: rgb(36, 36, 36);
				width: 100%;
				height: 81px;
			}

			.nav-pills> li#blocked{
				disabled: true;
			}
			.nav>li#blocked >a:hover, .nav>li#blocked>a:focus {
				background-color: #e60000;
			}

			.body {
				margin-top: 10px;
				margin-left: 5px;
			}
			nav.vertical {
				width: 190px;
				/*float: left;*/
			}
			.content{
				margin-left: 220px;
			}

			.here {
					background-color: #c82d38 !important;
			}

		</style>
	</head>
	<body>

		<div class="main">

			<div class="myHeader">
				<div class="headerLogo">
					<img src="logo.png" />
				</div>
				<ul class="nav nav-pills navbar-right navButtons">
					<li role="presentation" class="active"><a href="prijavljenIndex.php">Početna strana</a></li>
					<li role="presentation" class="active"><a href="oNama.php">O nama</a></li>
					<li role="presentation" class="active"><a href="treneri.php">Treneri</a></li>
					<li role="presentation" class="active"><a href="aktivnosti.php">Naše aktivnosti</a></li>
					<li role="presentation" class="active"><a href="index.php">Odjavljivanje</a></li>
					<li role="presentation" class="active"><a class=" here" href="licnaStrana.php">Lična strana</a></li>
					<li role="presentation" class="active" id="blocked"><a href="#"><img src="icon.png">Dobrodošao usertest!</a></li>
				</ul>
			</div>

			<div class="body">
				<nav class="vertical">
					<ul class="nav nav-pills nav-stacked">
					  <li role="presentation" class="active"><a href="zakazivanje.php">Zakaži</a></li>
						<li role="presentation" class="active"><a href="#">Kalendar</a></li>
					  <li role="presentation" class="active"><a href="#">Nutricionista</a></li>
					  <li role="presentation" class="active"><a href="#">Lekarski pregledi</a></li>
					</ul>
				</nav>
				<div class="content">
					<p> Neki content </p>
				</div>
			</div>
		</div>

	</body>
</html>
