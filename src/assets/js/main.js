/*!*****************************************************!*\
!***  Replace all SVG images with inline SVG            ***!
\*********************************************************/
jQuery(document).ready(function ($) { 
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
!***  collapsible + sidebar function                    ***!
\*********************************************************/
jQuery(document).ready(function ($) { 
  $(".collapsible-btn").click(function(e) {
    e.preventDefault();
    var content = $(this).next(".collapsible-content");
    $(this).parent(".collapsible-section").toggleClass('active');
    $(content).toggle(300);
  });
});

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


/*!*****************************************************!*\
!***  Modal                                              ***!
\*********************************************************/
jQuery(document).ready(function ($) { 
  //addEventListener on mouse click for opening modal on clas btn-modal
  document.addEventListener('click', function (e) {
    //check is the right element clicked
    if (!e.target.matches('.jg-modal-btn')) return;
    else {
      console.log('xxxxx')
      //select right modal from id-data
      var modal = document.querySelectorAll('#'+e.target.dataset.id);
      Array.prototype.forEach.call(modal, function (el) {
        //add active class on modal
        el.classList.add('active');
        $('body').addClass(['overflow-hidden','mr-overlay']);
      });
    }
  });

  //addEventListener on mouse click for closing modal on modal dark background
  document.addEventListener('click', function (e) {
    //check is the right element clicked
    if (!e.target.matches('.jg-modal')) return;
    else {
      // if modal have do-not-close class it will not close it self on background click
      if (e.target.classList.contains('do-not-close')) return;
      else{
        //remove active class on modal
        e.target.classList.remove('active');
        $('body').removeClass(['overflow-hidden','mr-overlay']);
      }      
    }
  });

  //addEventListener on mouse click for closing modal on custom button
  document.addEventListener('click', function (e) {
    //check is the right element clicked
    if (!e.target.matches('.jg-modal-close-force')) return;
    else {
      console.log('foce')
      //select right modal from id-data
      var modal = document.querySelectorAll('#'+e.target.dataset.close);
      Array.prototype.forEach.call(modal, function (el) {
        //remove active class on modal
        el.classList.remove('active');
        $('body').removeClass(['overflow-hidden','mr-overlay']);
      });
    }
  });

  //addEventListener on mouse click for standard closing modal on right top "x"
  document.addEventListener('click', function (e) {
    //check is the right element clicked
    if (!e.target.matches('.jg-modal-close')) return;
    else {
      //remove active class on modal
      e.target.parentElement.parentElement.classList.remove('active');
      $('body').removeClass(['overflow-hidden','mr-overlay']);
    }
  });
});


/*!*****************************************************!*\
!***  Table Sortable                                   ***!
\*********************************************************/
jQuery(document).ready(function ($) { 
  /**
   * Sorts a HTML table.
   * 
   * @param {HTMLTableElement} table The table to sort
   * @param {number} column The index of the column to sort
   * @param {boolean} asc Determines if the sorting will be in ascending
   */
  function sortTableByColumn(table, column, asc = true) {
    const dirModifier = asc ? 1 : -1;
    const tBody = table.tBodies[0];
    const rows = Array.from(tBody.querySelectorAll("tr"));

    // Sort each row
    const sortedRows = rows.sort((a, b) => {
        const aColText = a.querySelector(`td:nth-child(${ column + 1 })`).textContent.trim();
        const bColText = b.querySelector(`td:nth-child(${ column + 1 })`).textContent.trim();

        return aColText > bColText ? (1 * dirModifier) : (-1 * dirModifier);
    });

    // Remove all existing TRs from the table
    while (tBody.firstChild) {
        tBody.removeChild(tBody.firstChild);
    }

    // Re-add the newly sorted rows
    tBody.append(...sortedRows);

    // Remember how the column is currently sorted
    table.querySelectorAll("th").forEach(th => th.classList.remove("th-sort-asc", "th-sort-desc"));
    table.querySelector(`th:nth-child(${ column + 1})`).classList.toggle("th-sort-asc", asc);
    table.querySelector(`th:nth-child(${ column + 1})`).classList.toggle("th-sort-desc", !asc);
  }

  document.querySelectorAll(".table-sortable th.sortable").forEach(headerCell => {
    console.log('sort')
    headerCell.addEventListener("click", () => {
      const tableElement = headerCell.parentElement.parentElement.parentElement;
      const headerIndex = Array.prototype.indexOf.call(headerCell.parentElement.children, headerCell);
      const currentIsAscending = headerCell.classList.contains("th-sort-asc");

      sortTableByColumn(tableElement, headerIndex, !currentIsAscending);
    });
  });
});


/*!*****************************************************!*\
!***  Check All                                         ***!
\*********************************************************/
jQuery(document).ready(function ($) {
  $('.checkAll').on('click', function () {
    console.log('dsafdsa')
    $(this).closest('table').find('tbody :checkbox')
      .prop('checked', this.checked)
      .closest('tr').toggleClass('selected', this.checked);
  });

  $('tbody :checkbox').on('click', function () {
    $(this).closest('tr').toggleClass('selected', this.checked); //Classe de seleção na row
  
    $(this).closest('table').find('.checkAll').prop('checked', ($(this).closest('table').find('tbody :checkbox:checked').length == $(this).closest('table').find('tbody :checkbox').length)); //Tira / coloca a seleção no .checkAll
  });
});  
