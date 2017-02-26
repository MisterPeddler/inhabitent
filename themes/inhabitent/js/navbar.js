(function($){


  var searchField = $('.search-field');
  var searchForm = $('.search-form');
  var searchSubmit = $('.search-submit');

searchSubmit.on('click', function(e){
  e.preventDefault();
  searchField.toggleClass('search-field-show').focus();
});

searchField.focusout(function(){
  console.log('i lost focus');
  if( searchField.val().length === 0){
      searchField.removeClass('search-field-show');
  }

});


searchField.keypress(function(e) {
  if(e.which == 13 ) {
    e.preventDefault();
        $('.search-form').trigger('submit');
 }

});






//hide form when focus is lost
// $('.search-field')



})(jQuery);
