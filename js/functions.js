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
	grayOut : function() {
		function grayOut(vis,options){var options=options||{},zindex=options.zindex||99,opacity=options.opacity||50,opaque=(opacity/70),bgcolor=options.bgcolor||'#030303',dark=document.getElementById('darkenScreenObject');if(!dark){var tbody=document.getElementsByTagName("body")[0],tnode=document.createElement('div');tnode.style.position='fixed';tnode.style.top='0px';tnode.style.left='0px';tnode.style.overflow='hidden';tnode.style.display='none';tnode.id='darkenScreenObject';tbody.appendChild(tnode);dark=document.getElementById('darkenScreenObject');}if(vis){if(document.body&&(document.body.scrollWidth||document.body.scrollHeight)){var pageWidth='100%';var pageHeight='2000px';}dark.style.opacity=opaque;dark.style.MozOpacity=opaque;dark.style.filter='alpha(opacity='+opacity+')';dark.style.zIndex=zindex;dark.style.backgroundColor=bgcolor;dark.style.width=pageWidth;dark.style.height=pageHeight;dark.style.display='block';}else{dark.style.display='none';}}
	},
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
		},
	Pop : function(json) {
		grayOut('true');
		$('div#pop').show()
		$('div#pop').html(sockmonkey.templates.Search.supplant(json));
	}
};

sockmonkey.templates = { 
	Search : "<span class='name'>{pc_name}</span><br /><span class='tid'>{pc_tatid}</span><br/><span class='tid'>Status : </span><span class='tid'>{pc_confirm}</span><br /><span class='contact'>email : {pc_email} </span><br /><span class='contact'>College :</span><span class='contact'>{pc_college}</span><br /><br />"
};


$(document).ready(function(){
	sockmonkey.Search();
	sockmonkey.grayOut()
});



