jQuery(function($) {
 	$.mask.definitions['H']='[012]';
 	$.mask.definitions['M']='[012345]';
 	$('#time-out').mask('H9:M9');
 	$('#time-app').mask('H9:M9');
		});
