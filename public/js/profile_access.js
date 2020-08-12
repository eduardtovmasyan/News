let token = $('#token').val()

// $.ajax({
//     type: 'get',
//     url: ``,
//     headers: { '_token': token },
//     success: function(r) {
        
//     }
// });
  
$(document).on('click', '.profile-accept', function() {
	var id = $(this).val()
	var t = $(this)
	$.ajax({
    	type: 'patch',
    	url: `/profile/${id}`,
   		data: { 
   			'is_active': 'accepted',
   			'_token': token 
   		},
    	success: function(r) {
        	$(t).closest('.mt-actions').remove()
    	}
	});
});

$(document).on('click', '.profile-decline', function() {
	var id = $(this).val()
	var t = $(this)
	$.ajax({
    	type: 'patch',
    	url: `/profile/${id}`,
   		data: { 
   			'is_active': 'denied',
   			'_token': token 
   		},
    	success: function(r) {
        	$(t).closest('.mt-actions').remove()
    	}
	});
});