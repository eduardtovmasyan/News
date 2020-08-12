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
          $('.panel_admin_list').append(`
              <div class="mt-comments">
                <div class="mt-comment">
                  <div class="mt-comment-img">
                  <img src="../assets/pages/media/users/user.png"> </div>
                  <div class="mt-comment-body">
                    <div class="mt-comment-info">
                      <span class="mt-comment-author">${ r.name } ${ r.surname }</span>
                      <span class="mt-comment-date">${ r.created_at }</span>
                    </div>
                    <div class="mt-comment-text"> ${ r.email } </div>
                    <div class="mt-comment-details">
                      <span class="mt-comment-status mt-comment-status-rejected">${ r.role }</span>
                    </div>
                  </div>
                </div>
              </div>
          `)
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