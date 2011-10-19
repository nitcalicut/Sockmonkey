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
					<h2 id="sm_header">Login</h2>
					<div class="sm_body_line"></div>
					<div class="sm_body_content clear">
						<div id="sm_form">
							<div id="sm_form_header">
								<h2 class="sm_form_header_title">login</h2>
							</div>
							<div id="sm_form_body">
								<div id="sm_form_main">
									<div id="sm_form_main_body">
										<form id="sm_form_login" action="loggedin.php" method="POST">
											<table class="sm_form_table">
												<tr class="sm_datarow">
													<th class="sm_table_label">
														Name:
													</th>
													<td class="sm_data">
														<input class="sm_text" type="text">
													</td>
												</tr>
												<tr class="sm_datarow">
													<th class="sm_table_label">
														Password:
													</th>
													<td class="sm_data">
														<input class="sm_text" type="password">
													</td>
												</tr>
												<tr class="sm_datarow">
													<th class="sm_table_label">
														Type:
													</th>
													<td class="sm_data">
														<select type="password">
															<option>Admin</option>
															<option>Manager</option>
															<option>user</option>
														</select>
													</td>
												</tr>
												<tr class="datarow">
													<th class="label"></th>
														<td class="data">
															<input id="sm_submit" type="submit" name="submit" value="Login">
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

