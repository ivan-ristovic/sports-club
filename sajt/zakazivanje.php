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
				color: white;
				font-family: Ubuntu;
			}

			.content1 {
				display: flex;
				margin-top: 10px;
				margin-left: 5px;
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



			.nav-pills> li#blocked{
				disabled: true;
			}
			.nav>li#blocked >a:hover, .nav>li#blocked>a:focus {
				background-color: #ec3642;
			}
			nav.vertical {
				width: 190px;
			}

			.content {
				display: flex;
				justify-content: center;
				width: 100%
			}
			form {
				width: 80%;
				margin-left: 10px;
			}
			span {
				font-size: 25px;
				font-weight: bold;
			}
			select {
				width: 250px;
				height: 30px;
			}

			.left {
				display: flex;
				justify-content: space-between;
			}

			.treneri {
			}
			.uplaceni {
				display: flex;
				flex-direction: column;
				margin-right: 40px;
			}
			.termini {
			}
			.dugme{
				display: flex;
				justify-content: flex-start;
				margin-top: 60px;
			}
			button{
				width: 230px;
				height: 35px;
				font-size: 18px;
				border: none;
			}

			.treningInput {
				margin-bottom: 20px;
			}
			.input{
				width: 230px;
				height: 35px;
				font-size: 18px;
				margin-right: 10px;
				color: black;
				border: none;
			}

			select {
				color: black;
			}
			input {
				color: black;
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
					<li role="presentation" class="active"><a href="registracija.php">Registracija</a></li>
					<li role="presentation" class="active"><a href="#">Odjavljivanje</a></li>
					<li role="presentation" class="active"><a class="here" href="licnaStrana.php">Lična strana</a></li>
					<li role="presentation" class="active" id="blocked"><a href="#"><img src="icon.png">Dobrodošao usertest!</a></li>
				</ul>
			</div>


			<div class="content1">
				<nav class="vertical">
					<ul class="nav nav-pills nav-stacked">
					  <li role="presentation" class="active"><a href="zakazivanje.php" id="refresh">Zakaži</a></li>
					  <li role="presentation" class="active"><a href="#">Nesto</a></li>
					  <li role="presentation" class="active"><a href="#">Nesto</a></li>
					  <li role="presentation" class="active"><a href="#">Nesto</a></li>
					  <li role="presentation" class="active"><a href="#">Nesto</a></li>
					  <li role="presentation" class="active"><a href="#">Nesto</a></li>
					  <li role="presentation" class="active"><a href="#">Nesto</a></li>
					  <li role="presentation" class="active"><a href="#">Nesto</a></li>
					</ul>
				</nav>
				<div class="content">
					<form action="zakazivanje_callback.php">
						<div class="left">
						<div class="treneri">
							<span>Izaberi trenera i termin:</span><br>
							<select name="termin">
								<?php
										$string = file_get_contents("baza.json");
										$json_a = json_decode($string, true);
										foreach ($json_a["treneri"] as $key => $value){
												foreach($value as $termin){
													echo "<option value='".$key."?".$termin."'>".$key." ".$termin."</option>";
												}
										}
								?>
							</select>
						</div>
						<div class="uplaceni">
							<div class="treningInput">
							<span>Broj uplaćenih termina:</span><br>
							<input name="uplacenihTreninga" type="number" disabled="true" id='uplaceno' value=<?php echo "'".$json_a["uplaceno"]."'";?>
							</div>
							<button type="button" style="background-color: green; color: white;" id="doplati" onclick="buyMore()"> Doplati treninge </button>
						</div>
					</div>
						<!-- <br><br><br><br><br>
						<br><br><br><br><br><br><br><br><br><br> -->
						<div class="dugme">
              <input class="input" id="sub" type="submit" style="background-color: green; color: white" value="Potvrdi rezervaciju">
							<button type="button" style="background-color: #ec3642; color: white;" onclick="refresh()"> Otkaži rezervaciju </button>
						</div>
						<script type='text/javascript'>
                            var uplaceno = document.getElementById("uplaceno");
                            if (uplaceno.value <= 0)
                                document.getElementById("sub").disabled = true;

														function refresh(){
															document.getElementById('refresh').click();
														}

														function buyMore(){
															var uplaceno = document.getElementById("uplaceno");
															uplaceno.value = 1;
															document.getElementById("sub").disabled = false;
															var xhttp;
															xhttp = new XMLHttpRequest();
															xhttp.open("GET", "uplaceno_callback.php?uplaceno=1", true);
															xhttp.send();
														}
						</script>
					</form>
				</div>
			</div>
		</div>

	</body>
</html>
