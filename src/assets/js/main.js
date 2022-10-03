
jQuery(document).ready(function ($) { 

	// 1. cat
  // 2. search
  function toggleBackdrop(originFrom) {
    let bd = $(".js-category-backdrop");
    let body = $("body");
    let cat = $(".js-category-megamenu");
    let search = $(".js-search-megamenu");
    
    if (originFrom == 'cat') {
      // cat awal buka
      if (cat.hasClass('hidden') && search.hasClass('hidden')) {
        bd.removeClass('hidden')
        body.addClass('overflow-hidden')
        cat.removeClass('hidden')
      // dari search
      } else if (cat.hasClass('hidden') && !search.hasClass('hidden')) {
        search.addClass('hidden')
        cat.removeClass('hidden')
      // cat tutup
      } else {
        bd.addClass('hidden')
        body.removeClass('overflow-hidden')
        cat.addClass('hidden')
      }
    } 

    if (originFrom == 'search') {
      // search awal buka
      if (search.hasClass('hidden') && cat.hasClass('hidden')) {
        bd.removeClass('hidden')
        body.addClass('overflow-hidden')
        search.removeClass('hidden')
      // search dari cat
      } else if (search.hasClass('hidden') && !cat.hasClass('hidden')) {
        cat.addClass('hidden')
        search.removeClass('hidden')
      // search tutup
      } else {
        bd.addClass('hidden')
        body.removeClass('overflow-hidden')
        search.addClass('hidden')
      }
    } 
  }

  function resetBackdrop() {
    if (!$(".js-category-backdrop").hasClass("hidden")) {
      $(".js-category-backdrop").addClass("hidden")
    }    
    if (!$(".js-category-megamenu").hasClass("hidden")) {
      $(".js-category-megamenu").addClass("hidden")
    }    
    if (!$(".js-search-megamenu").hasClass("hidden")) {
      $(".js-search-megamenu").addClass("hidden")
    }
  }

	/*!*****************************************************!*\
  !***   CATEGORY MEGA MENU                              ***!
  \*********************************************************/
  (function ($, undefined) {
    let open_menu = $(".js-category-megamenu-trigger")
    let select_cat = $(".js-items-category ")

    // open megamenu
    $(open_menu).on( "click", function(e) {
      e.preventDefault()
      toggleBackdrop('cat')
    });

    // select category
    $(select_cat).on( "click", function(e) {
      let slug = $(this).data('slug')
      let name = $(this).data('name')

      $(".js-category-name").html(name)
      $("#jg-product-cat").val(slug)

      // close megamenu
      toggleBackdrop('cat')
    });
  })(jQuery);

	/*!*****************************************************!*\
  !***   SEARCH MEGA MENU                              ***!
  \*********************************************************/
  let open_search = $(".js-search-megamenu-trigger")
  let select_search = $(".js-items-search")

  $(open_search).on( "click", function(e) {
    toggleBackdrop('search')
  });

  // select category
  $(select_search).on( "click", function(e) {
  	let slug = $(this).data('slug')
  	let name = $(this).data('name')

  	$(open_search).val(name)

  	// close megamenu
  	toggleBackdrop('search')
  });


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







