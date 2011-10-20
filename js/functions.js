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
	getUsers : function(Name) {
			$.getJSON( 'src/response.participant.php?search='+Name , function(json) {
				$('div#searchResults').html('');
				var box, i;
				for(i = 0; i < json.length; i++) {
					box = sockmonkey.templates.Search.supplant(json[i]);
					$('div#searchResults').append(box);
				}
			});
		},
	Search : function() {
			$('span#SearchButton').click(function(){
			n = $('input#search').attr('value');
				sockmonkey.getUsers(n);
			});
			if(getUrlVars()['search']) {
				$('input#search').attr('value', getUrlVars()['search']);
				sockmonkey.getUsers(getUrlVars()['search']);
			}
		}
};

sockmonkey.templates = { 
	Search : "<span class='name'>{pc_name}</span><br /><span class='tid'>{pc_tatid} : </span><span class='tid'>{pc_confirm}</span><br /><span class='contact'>email : {pc_email} </span><br /><span class='contact'>College :</span><span class='contact'>{pc_college}</span><br /><br />"
};


$(document).ready(function(){
	sockmonkey.Search();
});



