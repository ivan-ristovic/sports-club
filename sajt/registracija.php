<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<style>

			body {
				height: 100vh;
				background-color: rgb(36, 36, 36);
				color: white;
			}

			.body {
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
				margin-top: 20px;

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

			div.button-pill{
				margin: auto;
				width: 110px;
				height: 40px;
			}

			label {
				margin-top: 4px;
			}

			input {
				margin-bottom: 20px;
				color: black;
			}
			 .button {
				/*margin-top: 10px;*/
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
					<li role="presentation" class="active"><a href="index.php">Početna strana</a></li>
					<li role="presentation" class="active"><a href="oNama.php">O nama</a></li>
					<li role="presentation" class="active"><a href="treneri.php">Treneri</a></li>
					<li role="presentation" class="active"><a href="aktivnosti.php">Naše aktivnosti</a></li>
					<li role="presentation" class="active"><a href="prijavljivanje.php">Prijavljivanje</a></li>
					<li role="presentation" class="active "><a class="here" href="registracija.php">Registracija</a></li>
				</ul>
			</div>


			<div class="body">
				<form>
					<label>Email adresa:</label> <br>
					<input type="text" name="firstname"><br>

					<label>Šifra:</label><br>
					<input type="password" name="psw"><br>

					<label>Potvrdite šifru:</label><br>
					<input type="password" name="psw1">

					<div class="button-pill">
					<ul class="nav nav-pills button">
						<li role="presentation" class="active"><a href="prijavljenIndex.php">Registruj se</a></li>
					</ul>
				</div>
				</form>
			</div>
		</div>

	</body>
</html>
