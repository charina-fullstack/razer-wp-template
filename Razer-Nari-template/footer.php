<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

</main><!-- / end page container, begun in the header -->

<footer class="footer">
    <div class="container">
      <div class="text-center footer-wrapper">
        <div class="footer-logo">
          <img src="assets/images/SVG/wordmark.svg" class="logo" alt=""/>
        </div>
        <div class="menus">
          <ul class="footer-menu-holder">
            <li class="footer-item"><a href="#" class="footer-link">PRODUCTS</a></li>
            <li class="footer-item"><a href="#" class="footer-link">ABOUT</a></li>
            <li class="footer-item"><a href="" class="footer-link">COMMUNITY</a></li>
            <li class="footer-item"><a href="#" class="footer-link">CONTACT US</a></li>
          </ul>
        </div>
        <div class="social-holder">
          <a href="#"><img src="assets/images/SVG/twitter-logo-silhouette.svg" class="list-social"/></a>
          <a href="#"><img src="assets/images/SVG/facebook-logo.svg" class="list-social"/></a>
          <a href="#"><img src="assets/images/SVG/google-plus.svg" class="list-social"/></a>
        </div>
      </div>
    </div>
    <div class="footer-copyright-holder">
      <div class="container">
        <p class="footer-copyright">COPYRIGHT &copy; 2019 FULLSTACKHQ INC. ALL RIGHTS RESERVED.</p>
      </div>
    </div>
  </footer>

<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>

</body>
</html>
