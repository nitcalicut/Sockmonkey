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
    $.post(
        
    "temp.php", //Ajax file
    
    { sendValue: str },  // create an object will all values
    
    //function that is called when server returns a value.
    function(data){
        $('#test').html(data.returnValue);
    }, 
    
    //How you want the data formated when it is returned from the server.
    "json"
    );
    
}

