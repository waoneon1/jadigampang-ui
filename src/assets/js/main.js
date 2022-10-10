
jQuery(document).ready(function ($) { 

  /*!*****************************************************!*\
  !***  Replace all SVG images with inline SVG            ***!
  \*********************************************************/
  $('img.svg').each(function(){
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function(data) {
      // Get the SVG tag, ignore the rest
      var $svg = jQuery(data).find('svg');

      // Add replaced image's ID to the new SVG
      if(typeof imgID !== 'undefined') {
        $svg = $svg.attr('id', imgID);
      }
      // Add replaced image's classes to the new SVG
      if(typeof imgClass !== 'undefined') {
        $svg = $svg.attr('class', imgClass+' replaced-svg');
      }

      // Remove any invalid XML tags as per http://validator.w3.org
      $svg = $svg.removeAttr('xmlns:a');

      // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
      if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
        $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
      }

      // Replace image with new SVG
      $img.replaceWith($svg);

    }, 'xml');
  });

})

/*!*****************************************************!*\
!***  Dropdown header function                          ***!
\*********************************************************/
jQuery(document).ready(function (e) {
  function t(t) {
      e(t).bind("click", function (t) {
          t.preventDefault();
          e(this).parent().fadeOut()
      })
  }
  e(".dropdown-toggle").click(function () {
      var t = e(this).parents(".button-dropdown").children(".dropdown-menu").is(":hidden");
      var header = e(this).parents(".button-dropdown").hasClass('header-dropdown');

      e(".button-dropdown .dropdown-menu").hide();
      e(".button-dropdown .dropdown-toggle").removeClass("active");

      if (header) {
        e('.js-category-backdrop').addClass('hidden');
        e('body').removeClass(['overflow-hidden','mr-overlay']);
      }  

      if (t) {
          e(this).parents(".button-dropdown").children(".dropdown-menu").toggle().parents(".button-dropdown").children(".dropdown-toggle").addClass("active")
          if (header) {
            e('.js-category-backdrop').removeClass('hidden');
            e('body').addClass(['overflow-hidden','mr-overlay']);
          }
      }
  });
  e(document).bind("click", function (t) {
      var n = e(t.target);
      if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-menu").hide();
  });
  e(document).bind("click", function (t) {
      var n = e(t.target);
      var header = e(this).parents(".button-dropdown").hasClass('header-dropdown');

      if (!n.parents().hasClass("button-dropdown")) {
        e(".button-dropdown .dropdown-toggle").removeClass("active");

        //if (header) {
          e('.js-category-backdrop').addClass('hidden');
          e('body').removeClass(['overflow-hidden','mr-overlay']);
        //}
      }
  })
});







