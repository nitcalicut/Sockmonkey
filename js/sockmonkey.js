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
						$.getJSON("src/response.participantsearch.php?sm_inputsearch="+$('#sm_inputsearch').val(),function(data){
								$.each(data, function(i,user){
									var tblRow =
										"<tr>"
										+"<td><input type='text' name='captainid"+i+"' value="+user.pc_name+" id='captainid"+i+"' disabled='disabled'></td>"
										+"<td><input type='text' name='roomno"+i+"' value="+user.pc_tatid+" id='roomno"+i+"' disabled='disabled'></td>"
										+"<td><input type='text' name='items"+i+"' value="+i+" id='items"+i+"' disabled='disabled'></td>"
										+"<td><input type='text' name='dstatus"+i+"' value="+i+" id='dstatus"+i+"' disabled='disabled'></td>"
										+"<td>"+"<input type='button' value='edit' id='acco"+i+"'>"+"</td>"
										+"<td>"+"<input type='button' value='submit' id='submit"+i+"'>"+"</td>"
										+"</tr>"
									$(tblRow).appendTo("#userdata_acco tbody");
									
										$("#acco"+i).click(function(){
											$('input#captainid'+i).attr('disabled', false);
											$('input#roomno'+i).attr('disabled', false);
											$('input#items'+i).attr('disabled', false);
											$('input#dstatus'+i).attr('disabled', false);
										});
										$("#submit"+i).click(function(){
											var capid = $('#captainid'+i).val();
											var  roomno = $('#roomno'+i).val();
											var iteams = $('#iteams'+i).val();
											var dstatus = $('#dstatus'+i).val();
											var dataString = 'capid='+ capid + '&roomno=' + roomno +'&iteams=' +iteams+'&dstatus' + dstatus;
											$.ajax({
											type: "POST",
											url: "",
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
										+"<td>"+"<input type='button' value='confirm' id="+i+">"+"</td>"
										+"</tr>"
									$(tblRow).appendTo("#userdata1 tbody");
									
										$("#"+i).click(function(){
										$("#status"+i).html('Y');
													$.each(data, function(i,user1){
														$("input#sm_acco_cap1").val(user.pc_tatid);
														var dataString1 = user.pc_tatid;
													$.ajax({
													type: "POST",
													url: "src/response.participant.php?confirm="+dataString1,
													data: dataString1,
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
