<html>
<head>
	<title>Roma's Aquarium</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="ajax.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
	// check to see if user is loged in
	session_start();
    $login = $_SESSION["login"];
    if($login != true){
        header( "refresh: 0; url = index.php" );
        exit();
    }
    // get GPIO status
	$status1 = exec ("sudo python status1.py", $stat);
	$status2 = exec ("sudo python status2.py", $stat);
	$status3 = exec ("sudo python status3.py", $stat);
	$status4 = exec ("sudo python status4.py", $stat);
	$status5 = exec ("sudo python status5.py", $stat);
	$status6 = exec ("sudo python status6.py", $stat);
	$status7 = exec ("sudo python status7.py", $stat);
	$status8 = exec ("sudo python status8.py", $stat);
?>
<center>

	<h1>Roma's Aquarium</h1><BR>
	<div class = "divCenter">
	<div class = "switchVideo">
	<table cellpadding="10">
		<tr>
			<td width="25%"><label for="select1">Front Light</label></td>
			<td width="25%"><label for="select2">Back Light</label></td>
		</tr>
		<tr>
			<td width="25%">
				<select class="select1" 
					<?php 
						if($status1 == "ON"){
							echo 'style = "color:yellow;"';
						}
						if($status1 == "OFF"){
							echo 'style = "color:black;"';
						}
					?>
				>
					<option value = "ON" id = "yellow" style = "color:yellow;"
						<?php 
							if($status1 == "ON"){
								echo 'selected'; 
							}
						?>
					>&nbsp&nbsp&nbsp&nbspON
					</option>
					<option value = "OFF" id = "black" style = "color:black;"
						<?php 
							if($status1 == "OFF"){ 
								echo "selected"; 
							}
						?>
						>&nbsp&nbsp&nbspOFF
					</option>
				</select>
			</td>
			<td width="25%">
				<select class="select2" 
					<?php 
						if($status2 == "ON"){
							echo 'style = "color:yellow;"';
						}
						if($status2 == "OFF"){
							echo 'style = "color:black;"';
						}
					?>
				>
					<option value = "ON" id = "yellow" style = "color:yellow;"
						<?php 
							if($status2 == "ON"){
								echo 'selected'; 
							}
						?>
					>&nbsp&nbsp&nbsp&nbspON
					</option>
					<option value = "OFF" id = "black" style = "color:black;"
						<?php 
							if($status2 == "OFF"){ 
								echo "selected"; 
							}
						?>
						>&nbsp&nbsp&nbspOFF
					</option>
				</select>
			</td>
		<tr>
			<td width="25%"><label for="select3">Night Light</label></td>
			<td width="25%"><label for="select4">Air Pump</label></td>
		</tr>
			<td width="25%">
				<select class="select3" 
					<?php 
						if($status3 == "ON"){
							echo 'style = "color:yellow;"';
						}
						if($status3 == "OFF"){
							echo 'style = "color:black;"';
						}
					?>
				>
					<option value = "ON" id = "yellow" style = "color:yellow;"
						<?php 
							if($status3 == "ON"){
								echo 'selected'; 
							}
						?>
					>&nbsp&nbsp&nbsp&nbspON
					</option>
					<option value = "OFF" id = "black" style = "color:black;"
						<?php 
							if($status3 == "OFF"){ 
								echo "selected"; 
							}
						?>
						>&nbsp&nbsp&nbspOFF
					</option>
				</select>
			</td>
			<td width="25%">
				<select class="select4" 
					<?php 
						if($status4 == "ON"){
							echo 'style = "color:yellow;"';
						}
						if($status4 == "OFF"){
							echo 'style = "color:black;"';
						}
					?>
				>
					<option value = "ON" id = "yellow" style = "color:yellow;"
						<?php 
							if($status4 == "ON"){
								echo 'selected'; 
							}
						?>
					>&nbsp&nbsp&nbsp&nbspON
					</option>
					<option value = "OFF" id = "black" style = "color:black;"
						<?php 
							if($status4 == "OFF"){ 
								echo "selected"; 
							}
						?>
						>&nbsp&nbsp&nbspOFF
					</option>
				</select>
			</td>
		</tr>
		<tr>
			<td width="25%"><label for="select1">Socket 5</label></td>
			<td width="25%"><label for="select2">Socket 6</label></td>
		</tr>	
		<tr>
			<td width="25%">
				<select class="select5" 
					<?php 
						if($status5 == "ON"){
							echo 'style = "color:yellow;"';
						}
						if($status5 == "OFF"){
							echo 'style = "color:black;"';
						}
					?>
				>
					<option value = "ON" id = "yellow" style = "color:yellow;"
						<?php 
							if($status5 == "ON"){
								echo 'selected'; 
							}
						?>
					>&nbsp&nbsp&nbsp&nbspON
					</option>
					<option value = "OFF" id = "black" style = "color:black;"
						<?php 
							if($status5 == "OFF"){ 
								echo "selected"; 
							}
						?>
						>&nbsp&nbsp&nbspOFF
					</option>
				</select>
			</td>
			<td width="25%">
				<select class="select6" 
					<?php 
						if($status6 == "ON"){
							echo 'style = "color:yellow;"';
						}
						if($status6 == "OFF"){
							echo 'style = "color:black;"';
						}
					?>
				>
					<option value = "ON" id = "yellow" style = "color:yellow;"
						<?php 
							if($status6 == "ON"){
								echo 'selected'; 
							}
						?>
					>&nbsp&nbsp&nbsp&nbspON
					</option>
					<option value = "OFF" id = "black" style = "color:black;"
						<?php 
							if($status6 == "OFF"){ 
								echo "selected"; 
							}
						?>
						>&nbsp&nbsp&nbspOFF
					</option>
				</select>
			</td>
		<tr>
			<td width="25%"><label for="select3">Socket 7</label></td>
			<td width="25%"><label for="select4">Socket 8</label></td>
		</tr>
			<td width="25%">
				<select class="select7" 
					<?php 
						if($status7 == "ON"){
							echo 'style = "color:yellow;"';
						}
						if($status7 == "OFF"){
							echo 'style = "color:black;"';
						}
					?>
				>
					<option value = "ON" id = "yellow" style = "color:yellow;"
						<?php 
							if($status7 == "ON"){
								echo 'selected'; 
							}
						?>
					>&nbsp&nbsp&nbsp&nbspON
					</option>
					<option value = "OFF" id = "black" style = "color:black;"
						<?php 
							if($status7 == "OFF"){ 
								echo "selected"; 
							}
						?>
						>&nbsp&nbsp&nbspOFF
					</option>
				</select>
			</td>
			<td width="25%">
				<select class="select8" 
					<?php 
						if($status8 == "ON"){
							echo 'style = "color:yellow;"';
						}
						if($status8 == "OFF"){
							echo 'style = "color:black;"';
						}
					?>
				>
					<option value = "ON" id = "yellow" style = "color:yellow;"
						<?php 
							if($status8 == "ON"){
								echo 'selected'; 
							}
						?>
					>&nbsp&nbsp&nbsp&nbspON
					</option>
					<option value = "OFF" id = "black" style = "color:black;"
						<?php 
							if($status8 == "OFF"){ 
								echo "selected"; 
							}
						?>
						>&nbsp&nbsp&nbspOFF
					</option>
				</select>
			</td>
		</tr>
	</table>
	</div>
	<div class="switchVideo">
	<!--	<img src="http://71.62.71.253:8314/" alt="PiCam live stream" height="400" width="550" class = "tankVideo"></img>  -->
		<img src="http://71.62.71.253:31415/video" alt="PhoneCam live stream" class = "tankVideo"></img>	
		<center><a href="fullScreen.php" id = "fullScreen" target="_blank">Full Screen</a></center>
	</div>
		
	<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
	<div>
	</div>
	<h6 class = "smallNotes">
		* Night light can not be detected by the video.<BR>
		* Website best viewed with 
		<a href="https://www.google.com/chrome/browser/desktop/">
			Google Chrome
		</a>
	</h6>
	<BR><BR>
</center>
</body>
</html>