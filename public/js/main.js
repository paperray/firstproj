function showGirlInformation(id){
	$('.allGirlsDetails').hide();
	$('#girlid_' + id).show();
	
}

function popup(message) {
		
	// get the screen height and width  
	var maskHeight = $(window).height();
	var maskWidth = $(window).width();
	
	// calculate the values for center alignment
	var dialogTop =  (maskHeight/3) - ($('#dialog-box').height());  
	var dialogLeft = (maskWidth/2) - ($('#dialog-box').width()/2); 
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay').css({height:maskHeight, width:maskWidth}).show();
	$('#dialog-box').css({top:dialogTop, left:dialogLeft}).show();
	
	// display the message
	$('#dialog-message').html(message);
			
}




function closeDialogBox(timeout){	
	setTimeout(function() { 
		$('#dialog-overlay, #dialog-box').hide();	
	}, timeout);
}

$(document).keyup(function(e) {

  if (e.keyCode == 27) { 
	closeDialogBox();	
  }   // esc
});
