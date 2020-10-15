
// remove order from server
function approve_model(mdid = null) {
	if(mdid) {
		var r = confirm("Are You Sure To Approve Model?");
		if(r==true){

			$.ajax({
				url: './approve_model.php',
				type: 'post',
				data: {mdid : mdid},
				dataType: 'json',
				success:function(response) {
					

					if(response.success == true) {
						
						 location.reload();
						 alert("Model Approved Successfully!");
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
function reject_model(mdid = null) {
	if(mdid) {
		var r = confirm("Are You Sure To Reject Model?");
		if(r==true){

			$.ajax({
				url: './reject_model.php',
				type: 'post',
				data: {mdid : mdid},
				dataType: 'json',
				success:function(response) {
					

					if(response.success == true) {
						
						 location.reload();
						 alert("Model Rejected Successfully!");
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
function approve_feedback(fid = null) {
	if(fid) {
		var r = confirm("Are You Sure To Show Comment Publicly?");
		if(r==true){

			$.ajax({
				url: './approve_feedback.php',
				type: 'post',
				data: {fid : fid},
				dataType: 'json',
				success:function(response) {
					

					if(response.success == true) {
						
						 location.reload();
						 alert("Comment Is Displaying on Website!");
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
function reject_feedback(fid = null) {
	if(fid) {
		var r = confirm("Are You Sure To Hide Comment from Publicly?");
		if(r==true){

			$.ajax({
				url: './reject_feedback.php',
				type: 'post',
				data: {fid : fid},
				dataType: 'json',
				success:function(response) {
					

					if(response.success == true) {
						
						 location.reload();
						 alert("Comment Is Rejected on Website!");
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
function delete_cat(cid = null) {
	if(cid) {
		var r = confirm("Are You Sure To Delete Catagory?");
		if(r==true){

			$.ajax({
				url: './delete_cat.php',
				type: 'post',
				data: {cid : cid},
				dataType: 'json',
				success:function(response) {
					

					if(response.success == true) {
						
						 location.reload();
						 alert("Catagory Deleted Successfully!");
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
function delete_model(mid = null) {
	if(mid) {
		var r = confirm("Are You Sure To Delete Model?");
		if(r==true){

			$.ajax({
				url: './delete_model.php',
				type: 'post',
				data: {mid : mid},
				dataType: 'json',
				success:function(response) {
					

					if(response.success == true) {
						
						 location.reload();
						 alert("Model Deleted Successfully!");
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