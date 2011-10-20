function smTab() {
	//Default Action
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
	
	//On Click Event
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});
}

function sendValue(str){
    
    // post(file, data, callback, type); (only "file" is required)
    $.get(
        
    "src/response.usersearch.php", //Ajax file
    
    { sendValue: str },  // create an object will all values
    
    //function that is called when server returns a value.
    function(data){
        $('#test').html(data.returnValue);
    }, 
    
    //How you want the data formated when it is returned from the server.
    "json"
    );
    
}
function accomodation(){
						$("#userdata_acco tbody").html("");
						$.getJSON("src/response.accommodation.php",function(data){
								$.each(data, function(i,user){
									var tblRow =
										"<tr>"
										+"<td><input type='text' name='captainid"+i+"' value="+user.ac_captainid+" id='captainid"+i+"' disabled='disabled'></td>"
										+"<td><input type='text' name='roomno"+i+"' value="+user.ac_room+" id='roomno"+i+"' disabled='disabled'></td>"
										+"<td><input type='text' name='items"+i+"' value="+user.ac_issueditems+" id='iteams"+i+"' disabled='disabled'></td>"
										+"<td><input type='text' name='dstatus"+i+"' value="+user.ac_deregstrd+" id='dstatus"+i+"' disabled='disabled'></td>"
										+"<input type='hidden' name='oldcaptainid"+i+"' value="+user.ac_captainid+" id='oldcaptainid"+i+"' disabled='disabled'>"
										+"<td>"+"<input type='button' value='edit' id='acco"+i+"'>"+"</td>"
										+"<td>"+"<input type='button' value='submit' id='submit"+i+"'>"+"</td>"
										+"<td>"+"<input type='button' value='delete' id='delete"+i+"'>"+"</td>"
										+"</tr>"
									$(tblRow).appendTo("#userdata_acco tbody");
									
										$("#acco"+i).click(function(){
											$('input#captainid'+i).attr('disabled', false);
											$('input#roomno'+i).attr('disabled', false);
											$('input#iteams'+i).attr('disabled', false);
											$('input#dstatus'+i).attr('disabled', false);
										});
										$("#submit"+i).click(function(){
											var oldcapt=$('#oldcaptainid'+i).val();
											var newcapt = $('#captainid'+i).val();
											var items = $('#iteams'+i).val();
											var room = $('#roomno'+i).val();
											var dereg = $('#dstatus'+i).val();
											
											var dataString = 'oldcapt='+ oldcapt + '&newcapt=' + newcapt +'&items=' +items+'&room=' + room + '&dereg=' + dereg;
											$.ajax({
											type: "POST",
											url: "src/response.accommodation.php",
											data: dataString,
											success: function(){
											}
											});
										return false;
									});
									$("#delete"+i).click(function(){
											$('input#captainid'+i).val('');
											$('input#roomno'+i).val('');
											$('input#iteams'+i).val('');
											$('input#dstatus'+i).val('');
											var dataString = 'captid='+user.ac_captainid;
											$.ajax({
											type: "POST",
											url: "src/response.accommodation.php",
											data: dataString,
											success: function(){
											}
											});
										return false;
									});
								});
							}
						);
						

}
function sm_button(){
$.getJSON("src/response.participant.php?search="+$('#sm_inputsearch').val(),function(data){
								$.each(data, function(i,user){
									var tblRow =
										"<tr>"
										+"<td>"+user.pc_name+"</td>"
										+"<td>"+user.pc_tatid+"</td>"
										+"<td><div id='status"+i+"'>"+user.pc_confirm+"</div></td>"
										+"<td><form><input type='radio' id='w"+i+"' name='w"+i+"' value='w' />w</ br><input type='radio' id='e"+i+"' name='w"+i+"' value='e' />e"
										+"</form></td>"
										+"<td>"+"<input type='button' value='confirm' id="+i+">"+"</td>"
										+"</tr>"
									$(tblRow).appendTo("#userdata1 tbody");
									
										$("#"+i).click(function(){
										$("#status"+i).html('Y');
													$.each(data, function(i,user1){
														$("input#sm_acco_cap1").val(user.pc_tatid);
														var ew = $('input:radio[name=w'+i+']:checked').val();
														var dataString1 = user.pc_tatid;
														var total = dataString1+ew;
													$.ajax({
													type: "POST",
													url: "src/response.participant.php?confirm="+dataString1+"&type="+ew,
													data: total,
													success: function(){
													}
													});
													
												return false;
														
														
													});
									
									});
								});
							}
						);
}
function sm_personal_submit(){
var capid = $("#sm_acco_cap").val();
								var teamids = $("#sm_acco_team").val();
								var room = $("#sm_acco_room").val();
								var iteams = $("#sm_acco_items").val();
								var dataString = 'capid='+ capid + '&teamids=' + teamids+'&room='+room+'&iteams='+iteams;
								$.ajax({
								type: "POST",
								url: "",
								data: dataString,
								success: function(){
								}
								});
							return false;
}
function sm_personal_submit1(){
var name = $("#sm_personal_name").val();
								var email = $("#sm_personal_email").val();
								var dataString = 'name='+ name + '&email=' + username;
								$.ajax({
								type: "POST",
								url: "",
								data: dataString,
								success: function(){
								}
								});
							return false;
}
function accomodationsubmit(){

								var captid = $("#sm_acco_cap").val();
								var items = $("#sm_acco_iteams").val();
								var room = $("#sm_acco_room").val();
								var team = $("#sm_acco_team").val();

								var dataString = 'captid='+ captid + '&items=' + items+ '&room=' + room + '&team=' + team;
								$.ajax({
								type: "POST",
								url: "src/response.accommodation.php",
								data: dataString,
								success: function(){
								}
								});
							return false;
}
