(function($) {


    // var height = $(window).height();
    var height = $('.hero-image').height();



    $(window).scroll(function() {
      console.log('in the scroll height -> ' +  height);
        if ($(this).scrollTop() >= height) {
            console.log('adding the class');
            $('.main-navigation').addClass('fix-to-top');
        }
        else {
            console.log('removing the class');
            $('.main-navigation').removeClass('fix-to-top');
        }
    });

})(jQuery);
