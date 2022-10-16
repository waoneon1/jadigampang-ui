<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel='stylesheet' href='./assets/css/style.css?ver=1.0.0' media='all' />
	<link rel='stylesheet' href='./assets/css/main.css?ver=1.0.0' media='all' />
	<style type="text/css">
		/*body {
		  margin: 0;
		  padding: 0;
		  background: #FFC371;
		  background: linear-gradient(to right, #FF5F6D, #FFC371);
		  font-family: "Quicksand", sans-serif;
		  color: #262626;
		}

		* {
		  box-sizing: border-box;
		}*/

		/*.logo {
		  position: relative;
		  display: flex;
		  margin: 10px;
		  flex-direction: row;
		  z-index: 1000;
		}
		.logo a {
		  display: block;
		  height: 30px;
		  width: auto;
		  cursor: pointer;
		  margin-right: 10px;
		}
		.logo a img {
		  height: 100%;
		  width: auto;
		}

		.container {
		  display: flex;
		  flex-direction: column;
		  width: 100%;
		  max-width: 1000px;
		  margin: 0 auto;
		  padding: 10px 10px 100px 10px;
		}
		.container h1 {
		  text-align: center;
		  margin-bottom: 30px;
		  font-weight: 500;
		}
		.container h2 {
		  font-weight: 500;
		}

		.button-container {
		  display: flex;
		  align-items: center;
		  margin-top: 10px;
		  flex-wrap: wrap;
		}*/
/*
		.btn {
		  display: flex;
		  padding: 10px 20px;
		  border-radius: 5px;
		  font-size: 14px;
		  margin: 5px;
		  cursor: pointer;
		  outline: none;
		  transition: all 0.3s ease-in-out;
		  box-shadow: 0 5px 10px -5px rgba(0, 0, 0, 0.15), 0 10px 10px -5px rgba(0, 0, 0, 0.1);
		}
		.btn:hover {
		  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.15), 0 10px 10px -5px rgba(0, 0, 0, 0.1);
		}
		.btn.red {
		  background-color: #e76161;
		  color: #fff;
		}
		.btn.red:hover {
		  background-color: #e08383;
		}
		.btn.blue {
		  background-color: #3881e0;
		  color: #fff;
		}
		.btn.blue:hover {
		  background-color: #6ca3ec;
		}
		.btn.dark {
		  background-color: #262626;
		  color: #fff;
		}
		.btn.dark:hover {
		  background-color: #363636;
		}*/

	
		.jg-modal .m-container.sm-modal {
		  max-width: 300px;
		}
		.jg-modal .m-container.l-modal {
		  max-width: 800px;
		}
		.jg-modal .m-container.xl-modal {
		  max-width: 80%;
		}
		.jg-modal .m-container.full-modal {
		  max-width: 100%;
		}
		.jg-modal .m-container.bounce {
		  transform: scale(0.4);
		  transition: all 0.3s cubic-bezier(0.75, -0.5, 0, 2.75);
		}
		.jg-modal .m-container.slide-from-top {
		  top: -200px;
		}
		.jg-modal .m-container.slide-from-bottom {
		  bottom: -200px;
		}
		.jg-modal .m-container.slide-from-left {
		  left: -200px;
		}
		.jg-modal .m-container.slide-from-right {
		  right: -200px;
		}
		.jg-modal .m-container .m-title {
		  background-color: #262626;
		  display: flex;
		  align-items: center;
		  justify-content: center;
		  height: auto;
		  width: 100%;
		  margin: 0;
		  padding: 10px 20px;
		  border-radius: 5px 5px 0 0;
		  color: #f2f2f2;
		  font-weight: 500;
		  font-size: 18px;
		  flex-wrap: wrap;
		}
		.jg-modal .m-container .m-close {
		  display: flex;
		  align-items: center;
		  justify-content: center;
		  position: absolute;
		  height: 25px;
		  width: 25px;
		  right: -7px;
		  top: -7px;
		  padding: 0;
		  margin: 0;
		  background-color: #f2f2f2;
		  border-radius: 50%;
		  transform: rotate(45deg);
		  cursor: pointer;
		  box-shadow: 0 5px 10px -5px rgba(0, 0, 0, 0.15), 0 10px 10px -5px rgba(0, 0, 0, 0.1);
		}
	</style>
	<script src='./assets/vendor/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
</head>
<body>

    <div class="container">
        <h1>Simple modal element with pure js and animation effect example</h1>
        <div class="button-container"> <!-- only for demo -->
            <p class="jg-modal-btn" data-id="fin-fout-modal">Fade in fade out</p>   
            <p class="jg-modal-btn" data-id="slide-top-modal">Slide from top</p>       
            <p class="jg-modal-btn" data-id="slide-bottom-modal">Slide from bottom</p>
            <p class="jg-modal-btn" data-id="slide-left-modal">Slide from left</p>  
            <p class="jg-modal-btn" data-id="slide-right-modal">Slide from right</p>          
            <p class="jg-modal-btn" data-id="bounce-modal">Bounce</p>
        </div>
        <div class="button-container"> <!-- only for demo -->
            <p class="jg-modal-btn" data-id="sm-modal">Small</p>   
            <p class="jg-modal-btn" data-id="n-modal">Normal</p>       
            <p class="jg-modal-btn" data-id="l-modal">Large</p>
            <p class="jg-modal-btn" data-id="xl-modal">Extra large</p>
            <p class="jg-modal-btn" data-id="full-modal">Full</p>
            <p class="jg-modal-btn" data-id="close-options-modal">Close/not options</p>
        </div>
    </div>

	     
	<!-- Modal container and dark background   -->
	<div class="jg-modal" id="fin-fout-modal">

	    <!-- Content container  -->
	    <div class="m-container">

	        <h4 class="m-title">Modal title</h4>  <!-- Title  -->
	        <p class="m-close jg-modal-close"></p> <!-- Main close button  -->

	        <!-- Content container  -->
	        <div class="m-content">
	            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, cumque.</p> <!-- Content example  -->

	            <!-- Footer container  -->
	            <div class="m-footer">
	                <p class="btn jg-modal-btn red">Button</p>  <!-- button example  -->
	                <p class="btn jg-modal-btn blue">Button</p>  <!-- button example  -->
	                <p class="btn dark jg-modal-close" data-id="close-options-modal">Close modal</p>  <!-- close button example  -->
	            </div>
	        </div>
	    </div>
	</div>

  <div class="jg-modal" id="slide-top-modal">
      <div class="m-container slide-from-top">
          <h2 class="m-title">Modal title</h2>
          <p class="m-close jg-modal-close"></p>
          <div class="m-content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, cumque.</p>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, amet tempora minima atque id modi?</p>
              <div class="m-footer">
                  <p class="btn jg-modal-btn blue" data-id="modal-in-modal">Modal in modal</p>  
              </div>
          </div>
      </div>
  </div>

  <div class="jg-modal" id="slide-bottom-modal">
      <div class="m-container slide-from-bottom">
          <h2 class="m-title">Modal title</h2>
          <p class="m-close jg-modal-close"></p>
          <div class="m-content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, cumque.</p>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, amet tempora minima atque id modi?</p>
              <div class="m-footer">
                  <p class="btn jg-modal-btn green" data-id="modal-in-modal">Modal in modal</p>    
                   <p class="btn jg-modal-btn dark" data-id="bounce-modal">Bounce</p>
              </div>
          </div>
      </div>
  </div>

  <div class="jg-modal" id="slide-left-modal">
      <div class="m-container slide-from-left">
          <h2 class="m-title">Modal title</h2>
          <p class="m-close jg-modal-close"></p>
          <div class="m-content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, cumque.</p>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, amet tempora minima atque id modi?</p>
              <div class="m-footer">
                  <p class="btn jg-modal-btn dark" data-id="modal-in-modal">Modal in modal</p>  
              </div>
          </div>
      </div>
  </div>

  <div class="jg-modal" id="slide-right-modal">
      <div class="m-container slide-from-right">
          <h2 class="m-title">Modal title</h2>
          <p class="m-close jg-modal-close"></p>
          <div class="m-content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, cumque.</p>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, amet tempora minima atque id modi?</p>
              <div class="m-footer">
                  <p class="btn jg-modal-btn red" data-id="modal-in-modal">Modal in modal</p>   
              </div>
          </div>
      </div>
  </div>

  <div class="jg-modal" id="bounce-modal">
      <div class="m-container bounce">
          <h2 class="m-title">Modal title</h2>
          <p class="m-close jg-modal-close"></p>
          <div class="m-content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, cumque.</p>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, amet tempora minima atque id modi?</p>
              <div class="m-footer">
                  <p class="btn jg-modal-btn blue" data-id="modal-in-modal">Modal in modal</p>  
              </div>
          </div>
      </div>
  </div>

  <div class="jg-modal" id="modal-in-modal">
      <div class="m-container slide-from-right">
          <h2 class="m-title">Modal title</h2>
          <p class="m-close jg-modal-close"></p>
          <div class="m-content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, cumque.</p>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, amet tempora minima atque id modi?</p>
              <div class="m-footer">
                  <p class="btn red">Red button example</p>    
              </div>
          </div>
      </div>
  </div>

  <div class="jg-modal" id="sm-modal">
      <div class="m-container sm-modal">
          <h2 class="m-title">Modal title</h2>
          <p class="m-close jg-modal-close"></p>
          <div class="m-content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, cumque.</p>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, amet tempora minima atque id modi?</p>
              <div class="m-footer">
                  <p class="btn red">Red button example</p>    
              </div>
          </div>
      </div>
  </div>

  <div class="jg-modal" id="n-modal">
      <div class="m-container">
          <h2 class="m-title">Modal title</h2>
          <p class="m-close jg-modal-close"></p>
          <div class="m-content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, cumque.</p>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, amet tempora minima atque id modi?</p>
              <div class="m-footer">
                  <p class="btn red">Red button example</p>    
              </div>
          </div>
      </div>
  </div>

  <div class="jg-modal" id="l-modal">
      <div class="m-container l-modal">
          <h2 class="m-title">Modal title</h2>
          <p class="m-close jg-modal-close"></p>
          <div class="m-content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, cumque.</p>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, amet tempora minima atque id modi?</p>
              <div class="m-footer">
                  <p class="btn red">Red button example</p>    
              </div>
          </div>
      </div>
  </div>

  <div class="jg-modal" id="xl-modal">
      <div class="m-container xl-modal">
          <h2 class="m-title">Modal title</h2>
          <p class="m-close jg-modal-close"></p>
          <div class="m-content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, cumque.</p>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, amet tempora minima atque id modi?</p>
              <div class="m-footer">
                  <p class="btn red">Red button example</p>    
              </div>
          </div>
      </div>
  </div>

  <div class="jg-modal" id="full-modal">
      <div class="m-container full-modal">
          <h2 class="m-title">Modal title</h2>
          <p class="m-close jg-modal-close"></p>
          <div class="m-content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, cumque.</p>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, amet tempora minima atque id modi?</p>
              <div class="m-footer">
                  <p class="btn red">Red button example</p>    
              </div>
          </div>
      </div>
  </div>

  <div class="jg-modal do-not-close" id="close-options-modal">
      <div class="m-container">
          <h2 class="m-title">Modal title</h2>
          <p class="m-close jg-modal-close"></p>
          <div class="m-content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, cumque.</p>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, amet tempora minima atque id modi?</p>
              <div class="m-footer">
                  <p class="btn red jg-modal-close-force" data-id="close-options-modal">Close modal</p>    
              </div>
          </div>
      </div>
  </div>



	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src='./assets/js/main.js?ver=1.1.0' id='jg-main-js'></script>


	<script type="text/javascript">
		
		
	</script>
</body>
</html>

