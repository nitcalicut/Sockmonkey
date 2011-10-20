<!DOCTYPE>
<html>
	<head>
		<title>Sockmonkey</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<link rel="stylesheet" href="css/sockmonkey.css" type="text/css" charset="utf-8"/>
			<link rel="stylesheet" href="css/jsonSuggest.css" type="text/css" />
					<script type="text/javascript" src="js/sockmonkey.js"></script>
			<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function(){
					smTab();
					$("#sm_button_acc_show").click(function(){
					accomodation();
					});
					$("#sm_submit").click(function() {
						accomodationsubmit();
					});
					// Call the function to handle the AJAX.
					// Pass the value of the text box to the function.
					$("#sm_button").click(function(){
						$("#userdata1 tbody").html("");
						$("#userdata tbody").html("");
						sm_button();
						
					});
					$("#sm_acco_cap1button").click(function(){
					$.getJSON("src/response.participant.php?participantevent="+$('#sm_acco_cap1').val(),function(data){
						$("#userdata tbody").html("");
							$.each(data, function(i,user1){
								//$("input#sm_acco_cap1").val(user1.pc_tatid);
								var tblRow1 =
								"<tr>"
								+"<td>"+user1.rg_teamid+"</td>"
								+"<td>"+user1.rg_eventid+"</td>"
								+"</tr>"
								$(tblRow1).appendTo("#userdata tbody");
							});
						}
					);
					$.getJSON("src/response.participant.php?participantinfo="+$('#sm_acco_cap1').val(),function(data){
								$("input#sm_personal_name").val(data.name);
								$("input#sm_personal_college").val(data.college);
								$("input#sm_personal_contact").val(data.contact);
								$("input#sm_personal_state").val(data.state);
								$("input#sm_personal_roll").val(data.roll);
					});
					});
						$('#sm_personal_button').click(function() {
							$('input#sm_personal_name').attr('disabled', false);
							$('input#sm_personal_college').attr('disabled', false);
							$("input#sm_personal_contact").attr('disabled', false);
							$("input#sm_personal_state").attr('disabled', false);
							$("input#sm_personal_roll").attr('disabled', false);
							
						});
						$("#sm_personal_submit").click(function() {
							sm_personal_submit();
							sm_personal_submit1();
						});
						
					});
			</script>
	</head>
<body>

	<div class="sm_tab_container">
		<ul class="tabs">
			<li class="active"><a href="#tab1">tatva id reg</a></li>
			<li><a href="#tab2">personal info</a></li>
			<li><a href="#tab3">accomodation</a></li>
			<li><a href="#tab4">Event Registration</a></li>
			<li><a href="#tab5">tab5</a></li>
		</ul>
		<div class="sm_container">
			<div style="display: none;" id="tab1" class="tab_content">
				<div class="sm_content_text">
					<div class="sm_content_text_header">
						<h2>Register</h2>
					</div>
					<div class="sm_tab_body">
						<div class="sm_tab_body_content">
						<div id="sm_form_body">
							<div id="sm_form_tab">
								<div id="sm_form_main_body">
									<form id="sm_form_login" action="loggedin.php" method="POST">
										<table class="sm_tab_table">
											<tr class="sm_datarow">
												<th class="sm_table_label" style="color:black;">Key:</th>
												<td class="sm_data">
													<div>
													<input class="sm_text" id="sm_inputsearch" type="text" name="sm_inputsearch">
													</div>
													<div class="suggestionsBox" id="suggestions" style="display: none;">
														<div class="suggestionList" id="autoSuggestionsList">&nbsp;
														</div>
													</div>
												</td>
												<td class="sm_data">
													<input type="button" id="sm_button" name="sm_button" value="search">
												</td>
											</tr>
										</table>
									</form>
								</div>
							</div>
						</div>
							<div id="test">
								<table id="userdata1" border="1">
									<thead>
										<th>Name</th>
										<th>TATid</th>
										<th>Status</th>
										<th>e/w</th>
										<th>button</th>
									</thead>
									<tbody></tbody>
								</table>
							</div>
						</div>
					</div>
					

				</div>
			</div>
			<div style="display: none;" id="tab2" class="tab_content">
				<div class="sm_content_text" >
				<input type="text" id="sm_acco_cap1" value="">
				<input type="button" id="sm_acco_cap1button" value="details">
					<table id="userdata" border="1">
						<thead>
							<th>TEAMID</th>
							<th>EventID</th>
						</thead>
						<tbody></tbody>
					</table>
					<div class="sm_personal">
						<form action="">
							<table class="sm_form_table_part">
								<tbody>
									<tr class="sm_datarow">
											<th class="sm_table_label">
												Name:
											</th>
									<td><input type="text" id="sm_personal_name" name="sm_personal_name" value="" disabled="disabled"></td>
									</tr>
									<tr class="sm_datarow">
											<th class="sm_table_label">
												College:
											</th>
									<td><input type="text" id="sm_personal_college" name="sm_personal_college" value="" disabled="disabled"></td>
									</tr>
									<tr class="sm_datarow">
											<th class="sm_table_label">
												contact:
											</th>
									<td><input type="text" id="sm_personal_contact" name="sm_personal_contact" value="" disabled="disabled"></td>
									</tr>
									<tr class="sm_datarow">
											<th class="sm_table_label">
												State:
											</th>
									<td><input type="text" id="sm_personal_state" name="sm_personal_state" value="" disabled="disabled"></td>
									</tr>
									<tr class="sm_datarow">
											<th class="sm_table_label">
												Roll:
											</th>
									<td><input type="text" id="sm_personal_roll" name="sm_personal_roll" value="" disabled="disabled"></td>
									</tr>
									<tr class="sm_datarow">
									<th></th>
									<td><input type="button" id="sm_personal_button" value="edit">
									<input type="button" id="sm_personal_submit" value="submit"></td>
									</tr>
									</tbody>
								</table>
							</form>
					</div>
				</div>
			</div>
			<div style="display: none;" id="tab3" class="tab_content">
				<div class="sm_content_text">
					


						<form id="sm_form_login" action="">
							<table class="sm_form_table_part">
								<tbody>
								<tr class="sm_datarow">
									<th class="sm_table_label">
										captain Name:
									</th>
									<td><input type="text" id="sm_acco_cap" value="">
									</td>
									</tr>
									<tr class="sm_datarow">
									<th class="sm_table_label">
										iteams:
									</th>
									<td class="sm_data">
										<textarea id="sm_acco_iteams" name="sm_acco_iteams"rows="5" cols="20" style="margin-top:5px;"></textarea>
									</td>
								</tr>
								<tr class="sm_datarow">
									<th class="sm_table_label">
										Room no:
									</th>
									<td><input type="text" id="sm_acco_room" value="">
									</td>
								</tr>
								<tr class="sm_datarow">
									<th class="sm_table_label">
										Participant:
									</th>
									<td class="sm_data">
										<textarea id="sm_acco_team" name="sm_acco_team"rows="5" cols="20" style="margin-top:5px;"></textarea>
									</td>
								</tr>
								
								<tr class="datarow">
									<th class="label"></th>
										<td class="data">
											<input id="sm_submit" type="submit" value="submit">
										</td>
								</tr>
							</tbody></table>
						</form>


						<div class="sm_personal">
						<input type="button" id="sm_button_acc_show" value="show all acco">
							<table id="userdata_acco" border="1">
								<thead>
									<th>captainid</th>
									<th>room no</th>
									<th>iteams</th>
									<th>Dstatus</th>
									<th>edit</th>
									<th>submit</th>
								</thead>
								<tbody></tbody>
							</table>
						</div>
					
					
					

				</div>
			</div>
			<div style="display: none;" id="tab4" class="tab_content">
				<div class="sm_content_text">
				
				<form id="sm_form_login" action="">
							<table class="sm_form_table_part">
								<tbody>
								<tr class="sm_datarow">
									<th class="sm_table_label">
										EventID:
									</th>
									<td>
										<select type="password">
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
									</td>
									</tr>
									
								<tr class="sm_datarow">
									<th class="sm_table_label">
										CaptainID:
									</th>
									<td><input type="text" id="sm_eve_cap" value="">
									</td>
								</tr>
								<tr class="sm_datarow">
									<th class="sm_table_label">
										participant1:
									</th>
									<td><input type="text" id="sm_eve_par1" value="">
									</td>
								</tr>
								<tr class="sm_datarow">
									<th class="sm_table_label">
										participant2:
									</th>
									<td><input type="text" id="sm_eve_par2" value="">
									</td>
								</tr>
								<tr class="sm_datarow">
									<th class="sm_table_label">
										participant3:
									</th>
									<td><input type="text" id="sm_eve_par3" value="">
									</td>
								</tr>
								<tr class="sm_datarow">
									<th class="sm_table_label">
										participant4:
									</th>
									<td><input type="text" id="sm_eve_par4" value="">
									</td>
								</tr><tr class="sm_datarow">
									<th class="sm_table_label">
										participant5:
									</th>
									<td><input type="text" id="sm_eve_par5" value="">
									</td>
								</tr>
								<tr class="sm_datarow">
									<th class="sm_table_label">
										participant6:
									</th>
									<td><input type="text" id="sm_eve_par6" value="">
									</td>
								</tr>
								<tr class="datarow">
									<th class="label"></th>
										<td class="data">
											<input id="sm_eve_submit" type="submit" value="submit">
										</td>
								</tr>
							</tbody></table>
						</form>
				
				
				</div>
			</div>
			<div style="display: none;" id="tab5" class="tab_content">
				<div class="sm_content_text">
				</div>
			</div>
		</div>
	</div>
	<div class="sm_footer">
	</div>

</body>
