let token = $('#token').val()

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

$(document).on('click', '.admin_remove', function() {
  var user_id = $(this).data('id')
  var t = $(this)

  $.ajax({
    type: 'delete',
    url: `/profile/${user_id}/delete`,
    headers: { 
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    },
    success: function(r) {
      $(t).closest('.mt-comments').remove()
    }
  });
});

$(document).on('click', '.admin_block', function() {
  var user_id = $(this).data('id')
  var t = $(this)

  $.ajax({
    type: 'patch',
    url: `/profile/${user_id}/block`,
    headers: { 
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
      '_token': token 
    },
    success: function(r) {
      $(t).closest('.mt-comments').remove()
    }
  });
});

$(document).on('click', '.admin_admit', function() {
  var user_id = $(this).data('id')
  var t = $(this)

  $.ajax({
    type: 'patch',
    url: `/profile/${user_id}/admit`,
    headers: { 
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
      '_token': token 
    },
    success: function(r) {
      $(t).closest('.mt-comments').remove()
    }
  });
});
