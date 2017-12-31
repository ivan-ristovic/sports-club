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

			.body {
				display: flex;
				margin-top: 20px;
				margin-left: 5px;
			}
			.nav-pills> li#blocked{
				disabled: true;
			}
			.nav>li#blocked >a:hover, .nav>li#blocked>a:focus {
				background-color: #e60000;
			}
			nav.vertical {
				width: 190px;
				/*float: left;*/
			}
			.content {
				display: flex;
				justify-content: center;
				color: white;
				width: 100%;
				font-size: 17px;
				font-family: Ubuntu;
				/*float: left;*/
			}
			form {
				width: 1000px;
			}
			span {
				font-size: 25px;
				font-weight: bold;
			}
			select {
				width: 250px;
				height: 30px;
			}
			.treneri {
				/*float: left;*/
			}
			.uplaceni {
				/*float: right;*/
			}
			.termini {
				/*float: left;*/
			}
			.dugme{
				/*float: left;*/
			}
			button{
				width: 230px;
				height: 35px;
				font-size: 18px;
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
					<li role="presentation" class="active"><a href="registracija.php">Registracija</a></li>
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
					Zakazan je trening kod trenera Milena
                    <?php
                        $string = file_get_contents("baza.json");
                        $json_a = json_decode($string, true);

                        $info = explode("?", $_GET["termin"]);

                        if ($json_a["uplaceno"] <= 0) {
                            echo "nemate treninga uplacenih";
                        } else if (array_key_exists($info[0], $json_a["treneri"]) == false) {
                            echo "invalid trener";
                        } else if (!in_array($info[1], $json_a["treneri"][$info[0]])) {
                            echo "invalid termin";
                        } else {
                            $json_a["treneri"][$info[0]] = array_diff($json_a["treneri"][$info[0]], [$info[1]]);
                            $json_a["uplaceno"] = $json_a["uplaceno"] - 1;
							$json_data = json_encode($json_a);
							$fp = fopen('baza.json', 'w');
                            fwrite($fp, $json_data);
                            fclose($fp);
                            echo "Izabrali ste termin ".$info[1]." kod trenera ".$info[0];
                        }
                    ?>
				</div>
			</div>
		</div>

	</body>
</html>
