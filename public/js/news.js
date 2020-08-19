let token = $('#token').val()

$(document).on('click', '.csv', function() {
    var filter_id = $(this).data('id')
    var email = $(this).prev().val()

	console.log(email)

    $.ajax({
        type: 'post',
        url: '/news/export/csv',
        data: {
            '_token': token,
            'email': email,
            'filterId': filter_id
        },
        success: function(r) {
            console.log(r.data)
        }
    });
});
