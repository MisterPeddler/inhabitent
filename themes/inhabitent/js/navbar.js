(function($) {


    var searchField = $('.search-field');
    var searchForm = $('.search-form');
    var searchSubmit = $('.search-submit');
    var height = $(window).height();


    //show/hide the search form when the icon is clicked
    searchSubmit.on('click', function(e) {
        e.preventDefault();
        searchField.toggleClass('search-field-show').focus();
    });

    //hide the form when it loses focus if there's nothing in it
    searchField.focusout(function() {
        if (searchField.val().length === 0) {
            searchField.removeClass('search-field-show');
        }

    });

    //if the form has focus and 'enter' is pressed submit the form
    searchField.keypress(function(e) {
        if (e.which == 13) {
            e.preventDefault();
            $('.search-form').trigger('submit');
        }

    });


})(jQuery);
