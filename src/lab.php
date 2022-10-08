<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel='stylesheet' href='./assets/css/style.css?ver=1.0.0' media='all' />
	<link rel='stylesheet' href='./assets/css/main.css?ver=1.0.0' media='all' />
	<style type="text/css">
	
	</style>
	<script src='./assets/vendor/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
</head>
<body>
	<div class="container mx-auto">
		<div class="flex">
			<div class="w-6/12 button-dropdown">
				<div class="dropdown-toggle bg-gray-100" id="jg-product-cat" type="text" name="product_cat" value="">button</div>
				<ul class="dropdown-menu">
		      <button>testing 1</button>
		    </ul>
			</div>
			<div class="w-6/12 button-dropdown">
				<input class="dropdown-toggle bg-gray-100" type="search" class="px-4 py-2 leading-normal w-full bg-white shadow-none js-search-megamenu-trigger text-xs">
				<ul class="dropdown-menu">
		      <button>testing 2</button>
		    </ul>
			</div>
		</div>
	</div>

	<ul class="nav">
	  <li  class="button-dropdown">
	    <a href="#" class="dropdown-toggle">
	      No dropdown
	    </a>
	     <ul class="dropdown-menu">
	      <button>testing 1</button>
	    </ul>
	  </li>
	  <li class="button-dropdown">
	    <a href="javascript:void(0)" class="dropdown-toggle">
	      Dropdown 1 <span>▼</span>
	    </a>
	    <ul class="dropdown-menu">
	      <button>testing 2</button>
	    </ul>
	  </li>
	  <li>
	    <a href="#">
	      No dropdown
	    </a>
	  </li>
	  <li class="button-dropdown">
	    <a href="javascript:void(0)" class="dropdown-toggle">
	      Dropdown 2 <span>▼</span>
	    </a>
	    <ul class="dropdown-menu">
	      <li>
	        <a href="#">
	          asdf
	        </a>
	      </li>
	    </ul>
	  </li>
	</ul>


	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>


	<script type="text/javascript">
		jQuery(document).ready(function (e) {
		    function t(t) {
		        e(t).bind("click", function (t) {
		            t.preventDefault();
		            e(this).parent().fadeOut()
		        })
		    }
		    e(".dropdown-toggle").click(function () {
		        var t = e(this).parents(".button-dropdown").children(".dropdown-menu").is(":hidden");
		        e(".button-dropdown .dropdown-menu").hide();
		        e(".button-dropdown .dropdown-toggle").removeClass("active");
		        if (t) {
		            e(this).parents(".button-dropdown").children(".dropdown-menu").toggle().parents(".button-dropdown").children(".dropdown-toggle").addClass("active")
		        }
		    });
		    e(document).bind("click", function (t) {
		        var n = e(t.target);
		        if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-menu").hide();
		    });
		    e(document).bind("click", function (t) {
		        var n = e(t.target);
		        if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-toggle").removeClass("active");
		    })
		});
	</script>
</body>
</html>

