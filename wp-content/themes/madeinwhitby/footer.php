<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package madeinwhitby
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="restrict">
			<div class="site-info flow">
				<p><strong>Made in Whitby</strong><br />
				Company Number 14913587<br />
				Registered in England and Wales</p>
				<p>
					<a href="https://www.facebook.com/madeinwhitbyuk/"><i class="fa fa-linkedin"></i><span>Facebook</span></a> 
					<a href="https://www.instagram.com/madeinwhitbyuk/"><i class="fa fa-instagram"></i><span>Instagram</span></a> 
				</p>
				<p>&copy; Made in Whitby <?= date('Y') ?><br />
				Photos &amp; Social Media by <a href="https://www.acornmcc.co.uk/">Acorn Marketing</a><br />
				Website by <a href="https://hellotechnology.co.uk" target="_blank" title="Website Design in Whitby">Hello Technology</a></p>
			</div><!-- .site-info -->
			<div class="quicklinks">
				<p><strong>Quick Links</strong></p>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'footer-menu',
					)
				);
				?>
			</div><!-- .quicklinks -->
			<div class="signup flow" id="signup">
				<p><strong>Made in Whitby Mailing List</strong><br />
				Join the Made in Whitby mailing list and be the first to hear about news and events.</p>
				<!-- Begin Brevo Form -->
				
				<!-- START - We recommend to place the below code where you want the form in your website html  -->
				<div>
				  <div id="sib-form-container" class="sib-form-container">
				    <div id="error-message" class="sib-form-message-panel" style="text-align:left; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
				      <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
				        <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
				          <path d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-11.49 120h22.979c6.823 0 12.274 5.682 11.99 12.5l-7 168c-.268 6.428-5.556 11.5-11.99 11.5h-8.979c-6.433 0-11.722-5.073-11.99-11.5l-7-168c-.283-6.818 5.167-12.5 11.99-12.5zM256 340c-15.464 0-28 12.536-28 28s12.536 28 28 28 28-12.536 28-28-12.536-28-28-28z" />
				        </svg>
				        <span class="sib-form-message-panel__inner-text">
				        Oops! Try again.
				        </span>
				      </div>
				    </div>
				    <div></div>
				    <div id="success-message" class="sib-form-message-panel" style="text-align:left; color:#00967d; background-color:#fff; border-radius:3px; border-color:#00967d;">
				      <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
				        <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
				          <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z" />
				        </svg>
				        <span class="sib-form-message-panel__inner-text">
                          Thanks! Check your inbox for the opt-in.
                        </span>
				      </div>
				    </div>
				    <div></div>
				    <div id="sib-container" class="">
				      <form id="sib-form" method="POST" action="https://1905f954.sibforms.com/serve/MUIFAOapbA_jBR-VPI6GbS6QHZX64wOuPupolbVUEDcPDzdOwysqfJ61GzKWvoSl4JU6uEpQxlCxJ-7ImYC48c9p3xHTJaFcw3aiU4WdXShL06Vl10x82jbrsa9aK9e-6Of5-MspFQRvYDiLaIaHQrxlJsYC0K_IJVgz9uxi5-BDvfXgnCCctxMNdzMlddT1cpPvbiz69XPMRd3-" data-type="subscription">
				        <div style="">
				          <div class="sib-input sib-form-block">
				            <div class="form__entry entry_block">
				              <div class="form__label-row ">
				
				                <div class="entry__field">
				                  <input class="input " type="text" id="EMAIL" name="EMAIL" autocomplete="off" placeholder="signmeup@now.com" data-required="true" required />
				                </div>
				              </div>
				
				              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
				              </label>
				            </div>
				          </div>
				        </div>
				        <div style="">
				          <div class="sib-form-block" style="text-align: left">
				            <button class="sib-form-block__button sib-form-block__button-with-loader" style="" form="sib-form" type="submit">
				              <svg class="icon clickable__icon progress-indicator__icon sib-hide-loader-icon" viewBox="0 0 512 512">

				              </svg>
				              Sign up
				            </button>
				          </div>
				        </div>
				
				        <input type="text" name="email_address_check" value="" class="input--hidden">
				        <input type="hidden" name="locale" value="en">
				      </form>
				    </div>
				  </div>
				</div>
				<!-- END - We recommend to place the below code where you want the form in your website html  -->
				<!-- End Brevo Form -->
			</div><!-- .signup -->
			<div class="logo">
				<img src="<?php bloginfo('stylesheet_directory');?>/images/madeinwhitby.jpg" alt="Hello Technology" />
			</div><!-- .logo -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://kit.fontawesome.com/e435c6ed9d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
  Fancybox.bind('[data-fancybox="gallery"]', {
	//
  });    
</script>
<script src="/wp-content/themes/madeinwhitby/js/fitvid.js"></script>
<script>
  $(document).ready(function(){
	// Target your .container, .wrapper, .post, etc.
	$(".video").fitVids();
  });
</script>
<script>
	$('nav ul li.menu-item-has-children > a').append('<i class="fa-regular fa-chevron-down"></i>');
	$('nav ul li.menu-item-has-children > a').click(function(){
		event.preventDefault();
		$('header nav ul li ul').toggleClass('show');
		if($('header nav ul li ul').hasClass('show')){
			$('nav ul li.menu-item-has-children > a i').removeClass('fa-regular fa-chevron-down');
			$('nav ul li.menu-item-has-children > a i').addClass('fa-solid fa-circle-chevron-down');
		}else{
			$('nav ul li.menu-item-has-children > a i').removeClass('fa-solid fa-circle-chevron-down');
			$('nav ul li.menu-item-has-children > a i').addClass('fa-regular fa-chevron-down');
		};
	})
</script>

<!--
<div class="ht_overlay">
	  <div class="ht_center">
		  <div class="ht_window">
			  <h3><strong>Dotting Some I's and Crossing Some T's</strong></h3>
			  <p>We're just checking a few things with the powers that be.</p>
			  <p class="capitalise">We'll be back soon</p>
			  <img src="<?php bloginfo('stylesheet_directory');?>/images/madeinwhitby.jpg" alt="Hello Technology" />
		  </div>
	  </div>
  </div>
-->
  
  <style>
	.ht_overlay{
		z-index:100000;
		width:100vw;
		height:100vh;
		position: fixed;
		top:0px;
		left:0px;
		backdrop-filter: blur(4px);
		background:rgba(255,255,255,1);
	}	  
	.ht_center{
		max-width: 420px;
		margin:0 auto;
		display:flex;
		align-items: center;
		justify-content: center;
		height:100vh;
	}
	.ht_window{
		border-radius: 4px;
		border:1px solid #eee;
		box-shadow: 0px 0px 10px #ccc;
		padding:2rem;
		text-align: center;
		background:#fff;
	}
	.ht_window h3{
		margin-top:0;
	}
	.ht_window p.capitalise{
		font-size:1rem;
	}
	.ht_window img{
		max-width: 140px;
		margin:2rem auto;
	}
  </style>

<script>
window.REQUIRED_CODE_ERROR_MESSAGE = 'Please choose a country code';
window.LOCALE = 'en';
window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "Oops! Try again.";
window.REQUIRED_ERROR_MESSAGE = "Oops! Try again.";
window.GENERIC_INVALID_MESSAGE = "Oops! Try again.";
window.translation = {
common: {
  selectedList: '{quantity} list selected',
  selectedLists: '{quantity} lists selected'
}
};
var AUTOHIDE = Boolean(0);
</script>

<script defer src="https://sibforms.com/forms/end-form/build/main.js"></script>

<!-- Fathom - beautiful, simple website analytics -->
<!-- <script src="https://cdn.usefathom.com/script.js" data-site="VPKMAXJJ" defer></script> -->
<!-- / Fathom -->

</body>
</html>
