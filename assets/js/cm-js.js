jQuery(".cm-inside li.cm-general").click(function(){
	jQuery("li.cm-general").addClass("cm-active");
  	jQuery("li.cm-restriction").removeClass("cm-active");
  	jQuery("li.cm-limit").removeClass("cm-active");
});

jQuery(".cm-inside li.cm-restriction").click(function(){
	jQuery("li.cm-general").removeClass("cm-active");
	jQuery("li.cm-restriction").addClass("cm-active");
	jQuery("li.cm-limit").removeClass("cm-active");
});

jQuery(".cm-inside li.cm-limit").click(function(){
	jQuery("li.cm-general").removeClass("cm-active");
	jQuery("li.cm-restriction").removeClass("cm-active");
	jQuery("li.cm-limit").addClass("cm-active");
});

jQuery('#generalFunction').click(function(){
	document.getElementById("general-table").style.display = "block"; 
	document.getElementById("cm-general").style.display = "block"; 
	document.getElementById("restriction-table").style.display = "none";
	document.getElementById("cm-restriction").style.display = "none";
	document.getElementById("limit-table").style.display = "none";
	document.getElementById("cm-limit").style.display = "none";
});

jQuery('#restrictionFunction').click(function(){
	document.getElementById("general-table").style.display = "none"; 
	document.getElementById("cm-general").style.display = "none"; 
	document.getElementById("restriction-table").style.display = "block";
	document.getElementById("cm-restriction").style.display = "block";
	document.getElementById("limit-table").style.display = "none";
	document.getElementById("cm-limit").style.display = "none";
});

jQuery('#limitFunction').click(function(){
	document.getElementById("general-table").style.display = "none"; 
	document.getElementById("cm-general").style.display = "none"; 
	document.getElementById("restriction-table").style.display = "none";
	document.getElementById("cm-restriction").style.display = "none";
	document.getElementById("limit-table").style.display = "block";
	document.getElementById("cm-limit").style.display = "block";
});

jQuery("#cm-skip").click(function(){
	jQuery(".cm-note-div").hide();
});

jQuery("#cm-import").click(function(){
	jQuery(".cm-note-div").show();
});

