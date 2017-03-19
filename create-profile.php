<?php
	require_once("php/dbconnect_r.php");
	require("php/session_check.php");
	include("partial_view/essentials-upper-user.html");
	include("partial_view/essentials-lower.html");
?>
	<a href="php/logout.php"><img src="images/power-btn.png" class="logout-btn"></a>
		<div id="welcome-div">
			<center>

			<h2>Create Child Profile</h2>

			<div class="container" style="margin-bottom: -4em;">

				<?php 	
					include("php/status.php");
				?>

			</div>
		
		<form action="php/create_profile.php" method="POST">
			<input type="text" name="child_fname" placeholder="Child's First Name">
			<input type="text" name="child_mname" placeholder="Child's Middle Name">
			<input type="text" name="child_lname" placeholder="Child's Last Name">
			<select name="child_age" style="float:left;margin-left:5%;margin-top:20px; margin-bottom:20px;">
				<option selected disabled>Child's Age &rsaquo;</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
			</select>
			<br>
			<!-- <input type="text" name="child_age" placeholder="Child's Age"> -->
			<label style="clear:both;float:left;margin-left:5%;">Gender</label><br>
			<label for="male" id="male_label" onClick="selectedRadio1()" style="float:left;font-size:0.7em; margin:20px; padding:10px; border-radius:30px;">Male
			<input type="radio" name="child_gender" id="male" value="male" style="display:none;"></label>
			<label for="female" id="female_label" onClick="selectedRadio2()" style="float:left;font-size:0.7em; margin:20px; padding:10px; border-radius:30px;">Female</label>
			<input type="radio" name="child_gender" id="female" value="female" style="display:none;">
			<select id="province" name="child_prov" style="float:left;margin-left:5%;margin-top:20px;">
				<option disabled selected>Choose province &rsaquo;</option>
				<option value="abra">Abra</option>
				<option value="agusan-del-norte">Agusan Del Norte</option>
				<option value="agusan-del-sur">Agusan Del Sur</option>
				<option value="aklan">Aklan</option>
				<option value="albay">Albay</option>
				<option value="antique">Antique</option>
				<option value="apayao">Apayao</option>
				<option value="aurora">Aurora</option>
				<option value="basilan">Basilan</option>
				<option value="bataan">Bataan</option>
				<option value="batanes">Batanes</option>
				<option value="batangas">Batangas</option>
				<option value="benguet">Benguet</option>
				<option value="biliran">Biliran</option>
				<option value="bohol">Bohol</option>
				<option value="bukidnon">Bukidnon</option>
				<option value="bulacan">Bulacan</option>
				<option value="cagayan">Cagayan</option>
				<option value="camarines-norte">Camarines Norte</option>
				<option value="camarines-sur">Camarines Sur</option>
				<option value="camiguin">Camiguin</option>
				<option value="capiz">Capiz</option>
				<option value="catanduanes">Catanduanes</option>
				<option value="cavite">Cavite</option>
				<option value="cebu">Cebu</option>
				<option value="compostela-valley">Compostela Valley</option>
				<option value="cotobato">Cotobato</option>
				<option value="davao-del-norte">Davao Del Norte</option>
				<option value="davao-del-sur">Davao Del Sur</option>
				<option value="davao-oriental">Davao Oriental</option>
				<option value="dinagat-islands">Dinagat Islands</option>
				<option value="eastern-samar">Eastern Samar</option>
				<option value="guimaras">Guimaras</option>
				<option value="ifugao">Ifugao</option>
				<option value="ilocos-norte">Ilocos Norte</option>
				<option value="ilocos-sur">Ilocos Sur</option>
				<option value="iloilo">Iloilo</option>
				<option value="isabela">Isabela</option>
				<option value="kalinga">Kalinga</option>
				<option value="la-union">La Union</option>
				<option value="laguna">Laguna</option>
				<option value="lanao-del-norte">Lanao Del Norte</option>
				<option value="lanao-del-sur">Lanao Del Sur</option>
				<option value="leyte">Leyte</option>
				<option value="maguindanao">Maguindanao</option>
				<option value="marinduque">Marinduque</option>
				<option value="masbate">Masbate</option>
				<option value="metro-manila">Metro Manila</option>
				<option value="mindoro-occidental">Mindoro Occidental</option>
				<option value="mindoro-oriental">Mindoro Oriental</option>
				<option value="misamis-occidental">Misamis Occidental</option>
				<option value="misamis-oriental">Misamis Oriental</option>
				<option value="mountain-province">Mountain Province</option>
				<option value="negros-occidental">Negros Occidental</option>
				<option value="negros-oriental">Negros Oriental</option>
				<option value="northern-samar">Northern Samar</option>
				<option value="nueva-ecija">Nueva Ecija</option>
				<option value="nueva-viscaya">Nueva Vizcaya</option>
				<option value="palawan">Palawan</option>
				<option value="pampanga">Pampanga</option>
				<option value="pangasinan">Pangasinan</option>
				<option value="quezon">Quezon</option>
				<option value="quirino">Quirino</option>
				<option value="rizal">Rizal</option>
				<option value="romblon">Romblon</option>
				<option value="samar">Samar</option>
				<option value="sarangani">Sarangani</option>
				<option value="siquijor">Siquijor</option>
				<option value="sorosgon">Sorsogon</option>
				<option value="south-cotobato">South Cotobato</option>
				<option value="southern-leyte">Southern Leyte</option>
				<option value="sultan-kudarat">Sultan Kudarat</option>
				<option value="sulu">Sulu</option>
				<option value="surdelsur">Surigao Del Sur</option>
				<option value="surigao-del-norte">Surigao Del Norte</option>
				<option value="tarlac">Tarlac</option>
				<option value="tawitawi">Tawi-tawi</option>
				<option value="zambales">Zambales</option>
				<option value="zamboanga-del-norte">Zamboanga Del Norte</option>
				<option value="zamboanga-del-sur">Zamboanga Del Sur</option>
				<option value="zamboanga-sibugay">Zamboanga Sibugay</option>


			</select>
			<input type="text" name="child_city" placeholder="Child's City">
			<input type="password" name="child_pword" placeholder="Child's Session Password">
			<button type="submit" class="primary-btn">Submit</button>
			
			<a href="home.php" class="link">Cancel</a>

			</center>
		</form>


		</div>
		
	</body>
	<script>
		function selectedRadio1(){
			x = document.getElementById("male_label");
			y = document.getElementById("female_label");
			x.style.border = "solid white 3px";
			y.style.border = "none";
		}

		function selectedRadio2(){
			x = document.getElementById("female_label");
			y = document.getElementById("male_label");
			x.style.border = "solid white 3px";
			y.style.border = "none";
		}
	</script>
</html>