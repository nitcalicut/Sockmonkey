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
					// Call the function to handle the AJAX.
					// Pass the value of the text box to the function.
					$("#sm_button").click(function(){
						$("#userdata1 tbody").html("");
						$("#userdata tbody").html("");
						sm_button();
						
					});
					$("#sm_acco_cap1button").click(function(){
					$.getJSON("src/response.participantsearch.php?sm_inputsearch="+$('#sm_acco_cap1').val(),function(data){
						$("#userdata tbody").html("");
							$.each(data, function(i,user1){
								$("input#sm_acco_cap1").val(user1.pc_tatid);
								var tblRow1 =
								"<tr>"
								+"<td>"+user1.pc_name+"</td>"
								+"<td>"+user1.pc_tatid+"</td>"
								+"<td>"+i+"</td>"
								+"<td>"+user1.pc_confirm+"</td>"
								+"</tr>"
								$(tblRow1).appendTo("#userdata tbody");
							});
						}
					);
					$.getJSON("src/response.participantsearch.php?sm_inputsearch="+$('#sm_acco_cap1').val(),function(data){
						$.each(data, function(i,user1){
								$("input#sm_personal_name").val(user1.pc_name);
								$("input#sm_personal_email").val(user1.pc_tatid);
						});
					});
					});
					
						$('#sm_personal_button').click(function() {
							$('input#sm_personal_name').attr('disabled', false);
							$('input#sm_personal_email').attr('disabled', false);
							
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
			<li><a href="#tab4">tab4</a></li>
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
							<th>TATID</th>
							<th>Event</th>
							<th>getStatus</th>
						</thead>
						<tbody></tbody>
					</table>
					<div class="sm_personal">
						<form action="">
							<input type="text" id="sm_personal_name" name="sm_personal_name" value="" disabled="disabled">
							<input type="text" id="sm_personal_email" name="sm_personal_email" value="" disabled="disabled">
							<input type="button" id="sm_personal_button" value="edit">
							<input type="submit" id="sm_personal_submit" value="submit">
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
										Name:
									</th>
									<td><input type="text" id="sm_acco_cap" value="">
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
								<tr class="sm_datarow">
									<th class="sm_table_label">
										iteams:
									</th>
									<td class="sm_data">
										<textarea id="sm_acco_items" name="sm_acco_items"rows="5" cols="20" style="margin-top:5px;"></textarea>
									</td>
								</tr>
								
								<tr class="datarow">
									<th class="label"></th>
										<td class="data">
											<input id="sm_submit" type="submit" name="submit" value="submit">
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
