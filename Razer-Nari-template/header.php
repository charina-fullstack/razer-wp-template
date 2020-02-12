<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="header" href="main.min.css"/>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file, 
	// so if you want to load other stylesheets,
	// I would load them with an @import call in your style.css
?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); 
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website. 
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
// Move it if you like, but I would keep it around.
?>

</head>

<body 
	<?php body_class(); 
	// This will display a class specific to whatever is being loaded by Wordpress
	// i.e. on a home page, it will return [class="home"]
	// on a single post, it will return [class="single postid-{ID}"]
	// and the list goes on. Look it up if you want more.
	?>
>

<header class="header">
    <nav class="navbar navbar-expand-md">
      <div class="container">
        <a href="#" class="navbar-brand">
          <img src="assets/images/SVG/wordmark.svg" class="logo" alt=""/>
        </a>
        <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarSupportedContent" type="button" aria-expanded="false">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="menu-title">
            <h1 class="title-text">MENU</h1>
          </div>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" data-target="#productMenu">
                Products
                <i class="fas fa-chevron-down btn-down"></i>
                <i class="fas fa-chevron-right btn-dropdown"></i>
              </a>
              <ul id="productMenu" class="dropdown-menu">
                <li class="menu-name"><a class="dropdown-item menu-title" href="#"><i class="fas fa-chevron-left back-btn"></i>Products</a></li>
                <li><a class="dropdown-item" href="#">LAPTOPS</a></li>
                <li><a class="dropdown-item" href="#">MOBILE</a></li>
                <li><a class="dropdown-item" href="#">MOUSES & MATS</a></li>
                <li><a class="dropdown-item" href="#">KEBOARDS</a></li>
                <li class="dropdown-submenu">
                  <a id="myBtn" class="dropdown-item dropdown-sub" href="#" role="button">HEADSETS & AUDIO
                    <i class="fas fa-chevron-right btn-dropdown-menu"></i>
                  </a>
                  <ul id="SubDropdown" class="dropdown-menu sub-menu">
                    <li><a class="dropdown-item sub-name" href="#"><i class="fas fa-chevron-left back-btn"></i>HEADSETS & AUDIO</a></li>
                    <li><a class="dropdown-item" href="#">WIRED</a></li>
                    <li><a class="dropdown-item" href="#">WIRELESS</a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="#">CONSOLE</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Community</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Contact us</a>
              </li>
            <li class="nav-item">
              <button class="btn click-btn" type="submit">BUY NOW</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

<main class="main-fluid"><!-- start the page containter -->
