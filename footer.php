<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

?>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-noty/2.4.1/packaged/jquery.noty.packaged.min.js'></script>

<footer class="site-footer">
  <div class="footer-container">
    <div class="footer-column_one">
      <a class="rer-logo" href="#">
        <img class="logo-footer" src="<?php echo get_template_directory_uri() . '/img/logo/white-rer-logo.png' ?>" alt="Logo RER">
      </a>
      <a class="more-seo" href="http://www.getmore.mx">
        <img src="<?php echo get_template_directory_uri() . '/img/icons/favicon-more.png' ?>" alt="M CO.">
      </a>
      <a class="rer-eu-link" href="http://rerenergygroup.com">
        <p class="rer-eu-text rer-font-opensans">rerenergygroup.com</p>
      </a>
      <p class="copyright rer-font-opensans">© Copyright, RER 2017</p>
    </div>
    <div class="footer-column_two">
      <div class="footer_menu">
        <div class="footer_menu-column_one">
          <a class="rer-logo-mobile" href="#">
            <img class="logo-footer" src="<?php echo get_template_directory_uri() . '/img/logo/white-rer-logo.png' ?>" alt="Logo RER">
          </a>
          <a href="plans-services.html" class="footer_menu-link rer-font-opensans-footer">Planes y servicios</a>
          <a href="solar-benefits.html" class="footer_menu-link rer-font-opensans-footer">Beneficios solares</a>
          <a href="projects.html" class="footer_menu-link rer-font-opensans-footer">Proyectos</a>
          <a href="news.html" class="footer_menu-link rer-font-opensans-footer active">Noticias</a>
          <a class="rer-eu-link rer-eu-link-mobile" href="http://rerenergygroup.com">
            <p class="rer-eu-text rer-font-opensans">rerenergygroup.com</p>
          </a>
        </div>
        <div class="footer-separator"></div>
        <div class="footer-menu-row">
          <div class="footer_menu-column_two">
            <a href="about.html" class="footer_menu-link rer-font-opensans-footer">Quiénes somos</a>
            <a href="contact.html" class="footer_menu-link rer-font-opensans-footer">Contacto</a>
          </div>
          <div class="footer_menu-column_three">
            <a href="">
              <img class="icon icon-size" src="<?php echo get_template_directory_uri() . '/img/icons/fb-icon.svg' ?>" alt="facebook">
            </a>
            <a href="">
              <img class="icon-size" src="<?php echo get_template_directory_uri() . '/img/icons/li-icon.svg' ?>" alt="in">
            </a>
          </div>
        </div>
      </div>
    </div>
    <p class="copyright-mobile rer-font-opensans">© Copyright, RER 2017</p>
  </div>
</footer>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri() . '/lib/js/jquery.min.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/js/menu.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/js/newsletter.js' ?>"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
  function sendNewsletterEmail(params) {
    var myform, formElement;
		if (params) {
			myform = document.getElementById("getEmailByPersonRight");
			formElement = document.getElementById("newsLetterWordpress");
		} else {
			myform = document.getElementById("correo");
			formElement = document.getElementById("getEmailByPerson");
		}
    var fd = new FormData(myform );
		try {
			$.ajax({
	      url: "http://alegpaez.com/newsletter/",
	      data: {email: myform.value},
	      type: 'POST',
	      success: function (result) {
	        // do something with the result
	        event.preventDefault();
	        if (result.status === "subscribed") {
	          formElement.reset();
						noty({text: 'Listo, espera las últimas noticias'});
	        } else {
	          if (result.title === "Member Exists") {
							noty({text: 'El correo ya existe, intenta con otro'});
	          } else {
							noty({text: 'El correo no es válido, intenta con otro'});
	          }
	        }
	      }
	    });
		} catch (e) {
			noty({text: 'Sucedió un error, intentalo de nuevo más tarde'});
		}

  }
</script>
</body>
</html>
