
// remove order from server
function vote_photo(photo_id = null) {
	if(photo_id) {
		var r = confirm("Are You Sure for Like for Photo?");
		if(r==true){

			$.ajax({
				url: './vote_photo.php',
				type: 'post',
				data: {photo_id : photo_id},
				dataType: 'json',
				success:function(response) {
					

					if(response.success == true) {
						
						 location.reload();
						 alert("Photo Like Successfully!");
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
function unvote_photo(photo_id = null) {
	if(photo_id) {
		var r = confirm("Are You Sure for Dislike for Photo?");
		if(r==true){

			$.ajax({
				url: './unvote_photo.php',
				type: 'post',
				data: {photo_id : photo_id},
				dataType: 'json',
				success:function(response) {
					

					if(response.success == true) {
						
						 location.reload();
						 alert("Photo UnLike Successfully!");
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
