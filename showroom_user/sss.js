
// remove order from server
function delete_model(mdid = null) {
	if(mdid) {
		var r = confirm("Are You Sure To Delete Model Details?");
		if(r==true){
			$.ajax({
				url: './delete_model.php',
				type: 'post',
				data: {mdid : mdid},
				dataType: 'json',
				success:function(response) {			
					if(response.success == true) {						
						 location.reload();
						 alert("Model Details Removed Successfully!");
						 $("#mes").html("ookkk");
					} else {
					          
					} // /else
				} // /success
			});  // /ajax function to remove the order
	} else{
		location.reload();
	}
	}
	else {
		alert('error! refresh the page again');
	}	
}

// remove order from server
function delete_offer(oid = null) {
	if(oid) {
		var r = confirm("Are You Sure To Delete Offer?");
		if(r==true){
			$.ajax({
				url: './delete_offer.php',
				type: 'post',
				data: {oid : oid},
				dataType: 'json',
				success:function(response) {			
					if(response.success == true) {						
						 location.reload();
						 alert("Offer Deleted Successfully!");
						 $("#mes").html("ookkk");
					} else {
					          
					} // /else
				} // /success
			});  // /ajax function to remove the order
	} else{
		location.reload();
	}
	}
	else {
		alert('error! refresh the page again');
	}	
}