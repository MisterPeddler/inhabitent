(function($){

$('#close-comments').on('click', function(){

  $.ajax({
    method: 'post',
    url: red_vars.rest_url + 'wp/v2/posts/' + red_vars.post_id,

      data:{
        comment_status:'open'
      },
      beforeSend: function(xhr){
        xhr.setRequestHeader('X-WP-Nonce', red_vars.wpapi_nonce);
      }

  }).done(function(){
    alert('success! comments are closed');
  });

});

})(jQuery);
