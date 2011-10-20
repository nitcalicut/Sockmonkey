<!DOCTYPE>
<html>
	<head>
		<title>Sockmonkey</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<link rel="stylesheet" href="css/sockmonkey.css" type="text/css" charset="utf-8"/>
					<script type="text/javascript" src="js/sockmonkey.js"></script>
			<script type="text/javascript" src=""></script>
	</head>
	<body>
		<div id="sm_body">
			<header>
				<hgroup>
					<h1>Sockmonkey</h1>
					<h3></h3>
				</hgroup>
			</header>
			<div id="sm_body_below">
				<div class="sm_body_line"></div>
				<article id="sm_article1">
					<h2 id="sm_header">Register</h2>
					<div class="sm_body_line"></div>
					<div class="sm_body_content clear">
						<div id="sm_form">
							<div id="sm_form_header">
								<h2 class="sm_form_header_title"></h2>
							</div>
							<div id="sm_form_body">
								<div id="sm_form_main">
									<div id="sm_form_main_body">
										<form id="sm_form_login" action="src/response.participant.php" method="POST">
											<table class="sm_form_table">
												<tr class="sm_datarow">
													<th class="sm_table_label">
														Name:
													</th>
													<td class="sm_data">
														<input class="sm_text" type="text" name = "pname">
													</td>
												</tr>
												<tr class="sm_datarow">
													<th class="sm_table_label">
														college:
													</th>
													<td class="sm_data">
														<input class="sm_text" type="text" name="pclg">
													</td>
												</tr>
												<tr class="sm_datarow">
													<th class="sm_table_label">
														phone:
													</th>
													<td class="sm_data">
														<input class="sm_text" type="text" name="pcntct">
													</td>
												</tr>
												<tr class="sm_datarow">
													<th class="sm_table_label">
														email:
													</th>
													<td class="sm_data">
														<input class="sm_text" type="text" name="pemail">
													</td>
												</tr>
												<tr class="sm_datarow">
													<th class="sm_table_label">
														state:
													</th>
													<td class="sm_data">
														<input class="sm_text" type="text" name="pstate">
													</td>
												</tr>
												<tr class="sm_datarow">
													<th class="sm_table_label">
														Gender:
													</th>
													<td class="sm_data">
														<select name="pgender">
															<option value="m">Male</option>
															<option value="f">Female</option>
														</select>
													</td>
												</tr>
												<tr class="sm_datarow">
													<th class="sm_table_label">
														Want accomodation:
													</th>
													<td class="sm_data">
														
															<input type="radio" name="preq" value="Y" /> YES<br />
															<input type="radio" name="preq" value="N" /> NO<br />
														
													</td>
												</tr>
												<tr class="datarow">
													<th class="label"></th>
														<td class="data">
															<input id="sm_submit" type="submit" name="submit" value="Register">
														</td>
												</tr>
											</table>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>
			</div>
		</div>
		<div class="sm_footer">
		</div>
	</body>
</html>

