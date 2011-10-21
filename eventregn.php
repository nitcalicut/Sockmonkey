<!DOCTYPE HTML>
<html>
<head>
<title>Sockmonkey</title>

<?php
	include 'source.php';
	echo $header;
?>

</head>
<body>
<a href='/Sockmonkey'><div id='topbar'></div></a>
<div id='container'>
<?php
	echo $topBar;
?>

	<h1>QUICK LINKS</h1>
	<ul style="font-size:20px;">
		<li><a href="register.php">Register offline</a></li>
		<li><a href="manager.php">Search & Managers page</a></li>
		<li><a href="details.php">User details page</a></li>
		<li><a href="accommodation.php">Accommodation</a></li>
		<li><a href="eventregn.php">Event regn</a></li>
		<li><a href="logout.php">logout</a></li>
	</ul>

<div class="g">
	<h2>Register for event <strong></strong></h2>
	<form method="post" action="src/response.registration.php">
<label>
	<strong>Captain ID</strong>
	<input type="text" placeholder="Who leads you" name="rgcaptainid">
</label>
<label>
	<strong>Participant 1</strong>
	<input type="text" placeholder="Participant 1" name="rgpart1">
</label>
<label>
	<strong>Participant 2</strong>
	<input type="text" placeholder="Participant 2" name="rgpart2">
</label>
<label>
	<strong>Participant 3</strong>
	<input type="text" placeholder="Participant 3" name="rgpart3">
</label>
<label>
	<strong>Participant 4</strong>
	<input type="text" placeholder="Participant 4" name="rgpart4">
</label>
<label>
	<strong>Participant 5</strong>
	<input type="text" placeholder="Participant 5" name="rgpart5">
</label>
<label>
	<strong>Participant 6</strong>
	<input type="text" placeholder="Participant 6" name="rgpart6">
</label>


<label>
	<strong>Event</strong>
	<select name="rgeventid">
		<option value="PTR">Pure Trics</option>
		<option value="COL">Collision Course</option>
		<option value="BAP">B-Aptist</option>
		<option value="TYC">Tycoon</option>
		<option value="CSE">Counter-Strike 1.6</option>
		<option value="INT">Interrupteur</option>
		<option value="CHE">Che Autic</option>
		<option value="POD">Pod Design</option>
		<option value="CGN">Coil Gun</option>
		<option value=" KKT">KoderKombat</option>
		<option value="DSQ">Descartes Square</option>
		<option value="IVO">Inquisito Virtuoso</option>
		<option value="BPA">Bizbio Perzanta</option>
		<option value="AFE">Age of Floating Empires</option>
		<option value="DRE">Dirt Race</option>
		<option value="ORM">The Off Road MI</option>
		<option value="ERN">Erecthion 5.0</option>
		<option value="BEF">Befunge</option>
		<option value="AQM">Aqua Missile</option>
		<option value="AMB">AMPHI-BOaT</option>
		<option value="CPE">Colour Palette</option>
		<option value="KSC">Kinetic Sculpture</option>
		<option value="ERR">E Racer</option>
		<option value="PTF">Path to Fame</option>
		<option value="CPN">Contraption</option>
		<option value="ICT">Incarnate</option>
		<option value="SBZ">Sociobizz '11</option>
		<option value="MSD">Mouse Drive</option>
		<option value="MMS">Minimouse v2</option>
		<option value="TOW">Tux of War</option>
		<option value="LOM">League of Machines</option>
		<option value="SMO">Signal Maestro</option>
		<option value="BPT">Blueprint</option>
		<option value="TRA">Transporter</option>
		<option value="GSM">3GSM</option>
		<option value="SCI">SonicI</option>
		<option value="FIF">Fifa 11</option></option>
		<option value="NFS">NFS: Most Wanted</option>
		<option value="RGM">Ragdoll Masters</option>
		<option value="SFT">Super Street Fighter 4: Arcade Edition</option>
		<option value="DOT">DotA</option>
		<option value="QUZ">Tathva Quiz '11</option>
		<option value="KKP">Koder Kup</option>
		<option value="IEE">IEEE Interface '11</option>
		<option value="RWS">Autonomous Robot for Waste Segregation</option>
		<option value="DRS">Disaster Relief Transit Structure</option>
		<option value="RVR">Riverfront Development</option></option>
		<option value="SFD">Smart Furniture Design</option>
		<option value="RCA">RC Aircraft Workshop</option>
		<option value="AUT">Automotive & Engine Design</option>
		<option value="ACC">Accelero-Botix</option>
		<option value="CLO">Cloud Computing</option>
		<option value="HAC">Hack Attack</option>
		<option value="AST">Astro Photography</option>
		</select>
</label>
	<input type="submit" value="Submit" name="Submit" class="g-button">
	</form>
</div>

</div><!-- /container -->
<?php
	echo $bottomBar;
	echo $scripts;
?>
</body>
</html>

