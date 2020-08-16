$.ajax({
    type: 'get',
    url: `api/news`,
    data: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    },
    success: function(r) {
        console.log(r.data)
    }
});
