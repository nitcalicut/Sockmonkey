/*
	General JS functions for Paathshaala
	Author : Jaseem Abid <jaseemabid@gmail.com>

*/

/* Read a page's GET URL variables and return them as an associative array. */
/* Example implementation : var cid = getUrlVars()['id']; */

function getUrlVars() {
	var i =0, vars = [], hash, hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
	for(i = 0; i < hashes.length; i++) {
		hash = hashes[i].split('=');
		vars.push(hash[0]);
		vars[hash[0]] = hash[1];
	}
	return vars;
}

/* Supplant */
if(typeof String.prototype.supplant !== 'function') {
	String.prototype.supplant = function(o) {
		return this.replace(/{([^{}]*)}/g,
			function (a,b) {
				var r = o[b];
				return typeof r === 'string' ?
					r : a;
			});
	};
}

var sockmonkey = {
	Search : function(Name) {
			$('span#SearchButton').click(function(){
				n = $('input#search').attr('value');
				sockmonkey.Search(n);
			});
			$.getJSON( 'src/response.participant.php?search='+Name , function(json) {
				$('div#searchResults').html('');
				var box, i;
				for(i = 0; i < json.length; i++) {
					box = sockmonkey.templates.Search.supplant(json[i]);
					$('div#searchResults').append(box);
				}
			});
		},
	participantinfo : function(tid) {
		$.getJSON( 'src/response.participant.php?participantinfo='+tid , function(json) {
			$('div#searchResults').html('');
			var box, i;
			for(i = 0; i < json.length; i++) {
				box = sockmonkey.templates.Search.supplant(json[i]);
				$('div#searchResults').append(box);
			}
		});
	},
	userDetails : function(Name) {

		$.getJSON( 'src/response.participant.php?participantevent=' + Name , function(json) {
			$('div#searchResults').html('');
			var box, i;
			for(i = 0; i < json.length; i++) {
				box = sockmonkey.templates.event.supplant(json[i]);
				$('div#details2').append(box);
			}
		});
		
		$.getJSON( 'src/response.participant.php?search='+Name , function(json) {
			$('div#searchResults').html('');
			var box, i;
			for(i = 0; i < json.length; i++) {
				if(json[i]['pc_confirm'] == "Y") {
					console.log("true")
					$('button#change').remove();
				}
				box = sockmonkey.templates.details.supplant(json[i]);
				$('div#details').append(box);
			}
		});
	}
};

sockmonkey.templates = { 
	Search : "<a href='details.php?tid={pc_tatid}'><span class='name'>{pc_name}</span><br /><span class='tid'>{pc_tatid}</span><br/><span class='contact'>Status : </span><span class='contact'>{pc_confirm}</span><br /><span class='contact'>email : {pc_email} </span><br /><span class='contact'>College :</span><span class='contact'>{pc_college}</span><br /><br /></a>",
	details : 	"<span class='name'>{pc_name}</span><br />\
	<span class='tid'>{pc_tatid}</span><br/><span class='contact'>Status : </span>\
	<span class='contact'>{pc_confirm}</span><br />\
	<span class='contact'>email : {pc_email} </span><br />\
	<span class='contact'>College :</span><span class='contact'>{pc_college}</span><br />\
	<span class='contact'>{pc_contact}</span><br />\
	<span class='contact'>{pc_state}</span><br /><span class='contact'>{pc_gender}</span><br />\
	<span class='contact'>Accommodation request : </span><span class='contact'>{pc_accomreqst}</span><br />\
	<span class='contact'>Accommodation captain id : </span><span class='contact'>{pc_accomcaptainid}</span><br />\
	<span class='contact'>NITC Roll number : </span><span class='contact'>{pc_nitcrollno}</span><br /><br />\
	<span> Tathva ID status : {pc_confirm}</span><br /><br />\
	<button id='change' type='button' name='name' value='confirm' onclick=\"$.post('src/response.participant.php?confirm={pc_tatid}')\">Confirm the user</button>",

	event : "<span class='contact'>Team ID : </span><span class='contact'>{rg_teamid}</span><br />\
<span class='contact'>Event ID : </span><span class='contact'>{rg_eventid}</span><br />\
<span class='contact'>Event name : </span><span class='contact'>{ev_name}</span><br />"
	
};


$(document).ready(function(){

	if(getUrlVars()['search']) {
		$('input#search').attr('value', getUrlVars()['search']);
		sockmonkey.Search(getUrlVars()['search']);
	}

	if(getUrlVars()['tid']) {
		$('input#search').attr('value', getUrlVars()['tid']);
		sockmonkey.userDetails(getUrlVars()['tid']);
	}
});



