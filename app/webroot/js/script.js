$('#CommentAddForm').on('submit', function() {
   $.ajax({
       type: 'post',
       url: $(this).prop('action'),
       data: $(this).serialize(),
       success: function(response) {
           $('#comments').append(response);
           $('#CommentContent').val('');
       }
   });
   return false;
});