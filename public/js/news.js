// $.ajax({
//     type: 'get',
//     url: `api/news`,
//     data: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
//     },
//     success: function(r) {
//         console.log(r.data)
//     }
// });

// $(document).on('click', '.newsType', function() {
//     var filter_id = $(this).val()
//     alert(filter_id)

//     $.ajax({
//         type: 'post',
//         url: `news/filter/${filter_id}`,
//         header: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
//         },
//         success: function(r) {
//             console.log(r.data)
//         }
//     });
// });

