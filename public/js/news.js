let token = $('#token').val()

$(document).on('click', '.csv', function() {
    var filter_id = $(this).data('id')
    var email = $(this).prev().val()
    
    $.ajax({
        type: 'post',
        url: '/news/export/csv',
        data: {
            '_token': token,
            'email': email,
            'filterId': filter_id
        },
        success: function(r) {
            swal("Good job!", "You send a report!", "success");
        }
    });
});
