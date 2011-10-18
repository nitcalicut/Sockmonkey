<!DOCTYPE>
<html>
	<head>
		<title>Sockmonkey</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<link rel="stylesheet" href="css/sockmonkey.css" type="text/css" charset="utf-8"/>
			<link rel="stylesheet" href="css/jsonSuggest.css" type="text/css" />
					<script type="text/javascript" src="js/sockmonkey.js"></script>
			<script type="text/javascript" src="js/jquery-1.3.2"></script>
			<script language="JavaScript" src="js/jquery.jsonSuggest-dev.js"></script>
			<script language="JavaScript" src="js/json2.js"></script>
			<script language="JavaScript" src="testData/testData.js"></script>
			<script type="text/javascript">
				$(document).ready(function(){
					smTab();
					
				});
				
				
			</script>
	</head>
<body>

	<div class="sm_tab_container">
		<div id="sm_form_body">
			<div id="sm_form_tab">
				<div id="sm_form_main_body">
					<form id="sm_form_login" action="loggedin.php" method="POST">
						<table class="sm_tab_table">
							<tr class="sm_datarow">
								<th class="sm_table_label" style="color:black;">Key:</th>
								<td class="sm_data">
									<div>
									<input class="sm_text" id="sm_inputsearch" type="text">
									</div>
									<div class="suggestionsBox" id="suggestions" style="display: none;">
										<div class="suggestionList" id="autoSuggestionsList">&nbsp;
										</div>
									</div>
								</td>
								
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
		<ul class="tabs">
			<li class="active"><a href="#tab1">Event reg</a></li>
			<li><a href="#tab2">tab2</a></li>
			<li><a href="#tab3">tab3</a></li>
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
							<div id="test">
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div style="display: none;" id="tab2" class="tab_content">
				<div class="sm_content_text">
				</div>
			</div>
			<div style="display: none;" id="tab3" class="tab_content">
				<div class="sm_content_text">
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
	<script type="text/javascript">
			function callback(item) {
			$('#test').empty();
			$("#test").append('name: '+item.text +'</ br> id: '+item.id+'');
}
			jQuery(function() {
				$('input#sm_inputsearch').jsonSuggest(testData.countryCodes, {onSelect:callback});
			});

	</script>
</body>
