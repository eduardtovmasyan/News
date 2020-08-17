let token = $('#token').val()

$(document).on('click', '.img_delete', function() {
	var image_id = $(this).val()
    var news_id = $('#newsId').val()
    var t = $(this)

	$.ajax({
    	type: 'post',
    	url: `/news/${news_id}/delete/image`,
    	data: {
            '_token': token,
            'imageId': image_id,
    	},
    	success: function(r) {
       		t.closest('.imageContainer').remove();
    	}
	});
});
