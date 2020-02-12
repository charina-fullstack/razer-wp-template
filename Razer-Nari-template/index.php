<?php
/**
 * Template Name: Home
 *
 * Template for displaying a home page.
 */

get_header(); // This fxn gets the header.php file and renders it ?>
	<main class="home">
   	<?php 
		  $image_banner = get_field('background_image');
		    if( !empty($image_banner) ): ?>
		  <div class="section-head" style="background-image: url(<?php echo $image_banner['url']; ?>);">
			<?php endif; ?>
        <div class="container">
        <div class="text-holder">
          <h1 class="title-head">
			      <?php the_field('banner_title'); ?>
		      </h1>
          <p class="head-text">
			      <?php the_field('banner_text'); ?>
			    </p>
        <div class="razer-logos">
			    <?php
			      $image_1 = get_field('razer-logo-1');
				    if( !empty( $image_1 ) ): 
			    ?>
			      <img src="<?php echo esc_url($image_1['url']); ?>" alt="<?php echo esc_attr($image_1['alt']); ?>" class="img-one" alt=""/>
			    <?php endif; ?>
			  <?php
			    $image_2 = get_field('razer-logo-2');
				  if( !empty( $image_2 ) ): 
			  ?>
			    <img src="<?php echo esc_url($image_2['url']); ?>" alt="<?php echo esc_attr($image_2['alt']); ?>" class="img-two" alt=""/>
			  <?php endif; ?>
        </div>
		  	  <?php
			      $razer_icon = get_field('razer-logo-icon');
				      if( !empty( $razer_icon ) ): 
			    ?>
			      <img src="<?php echo esc_url($razer_icon['url']); ?>" alt="<?php echo esc_attr($razer_icon['alt']); ?>" class="razer-icon" alt=""/>
			  <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="section-comfort">
      <div class="container">
        <div class="text-holder">
          <h3 class="title-head">
			      <?php the_field('section_title'); ?>
		      </h3>
          <p class="head-text">
			      <?php the_field('section_text'); ?>
		      </p>
        </div>
        <div class="product-features">
			    <?php
            // check if the repeater field has rows of data
            if( have_rows('features') ):

              // loop through the rows of data
              while ( have_rows('features') ) : the_row();?>

						<div class="features">
					    <img src="<?php the_sub_field('image'); ?>" class="icon" alt=""/>
              <h2 class="title-features"><?php the_sub_field('text'); ?></h2>
              <p class="title-features-text"><?php the_sub_field('text_sub'); ?></p>
			  	  </div>
					<?php endwhile;
				  else :

					// no rows found

				  endif;
				?>      
        </div>
        <div class="text-holder product-images">
          <h3 class="title-head">
			  <?php the_field('slider_title'); ?>
		  </h3>
        </div>
        <div class="swiper">
          <div class="swiper-container products-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="slider-image">
					<?php
			  			$image = get_field('img_1');
						if( !empty( $image ) ): 
			 		?>
						<img class="image-slide" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
					<?php endif; ?>
                </div>
                <div class="image-overlay">
                  <div id="show-img" class="btn-holder">
                    <button class="btn click-btn view-btn view-popup" type="submit" data-toggle="modal" data-target="#PopupImageOne">VIEW FULLSCREEN</button>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slider-image">
					<?php
			  			$image = get_field('img_2');
						if( !empty( $image ) ): 
			 		?>
						<img class="image-slide" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
					<?php endif; ?>
                </div>
                <div class="image-overlay">
                  <button class="btn click-btn view-btn js-button" type="submit" data-toggle="modal" data-target="#PopupImageTwo">VIEW FULLSCREEN</button>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slider-image">
                  <?php
			  			$image = get_field('img_3');
						if( !empty( $image ) ): 
			 		?>
						<img class="image-slide" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
					<?php endif; ?>
                </div>
                <div class="image-overlay">
                  <button class="btn click-btn view-btn js-button" type="submit" data-toggle="modal" data-target="#PopupImageThree">VIEW FULLSCREEN</button>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slider-image">
                  <?php
			  			$image = get_field('img_4');
						if( !empty( $image ) ): 
			 		?>
						<img class="image-slide" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
					<?php endif; ?>
                </div>
                <div class="image-overlay">
                  <button class="btn click-btn view-btn js-button" type="submit" data-toggle="modal" data-target="#PopupImageFour">VIEW FULLSCREEN</button>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slider-image">
                  <?php
			  			$image = get_field('img_1');
						if( !empty( $image ) ): 
			 		?>
						<img class="image-slide" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
					<?php endif; ?>
                </div>
                <div class="image-overlay">
                  <button class="btn click-btn view-btn js-button" type="submit" data-toggle="modal" data-target="#PopupImageOne">VIEW FULLSCREEN</button>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slider-image">
                  <?php
			  			$image = get_field('img_2');
						if( !empty( $image ) ): 
			 		?>
						<img class="image-slide" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
					<?php endif; ?>
                </div>
                <div class="image-overlay">
                  <button class="btn click-btn view-btn js-button" type="submit" data-toggle="modal" data-target="#PopupImageTwo">VIEW FULLSCREEN</button>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination page-icon">
              <div class="swiper-pagination-bullet swiper-pagination-bullet-active btn-page">
              <div class="inner-dot"></div>
            </div>
            <div class="swiper-pagination-bullet btn-page">
              <div class="inner-dot"></div>
            </div>
            <div class="swiper-pagination-bullet btn-page">
              <div class="inner-dot"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<?php 
		$image_banner = get_field('background_image');
		if( !empty($image_banner) ): ?>
		<div class="section-thx" style="background-image: url(<?php echo $image_banner['url']; ?>);">
	<?php endif; ?>
      <div class="container">
        <div class="text-holder">
          <h1 class="title-head"><?php the_field('section_title'); ?></h1>
          <p class="head-text"><?php the_field('section_text'); ?></p>
          <div class="razer-logos">
			   <?php
			  $image = get_field('image_icon');
				if( !empty( $image)): 
			 ?>
			  <img src="<?php echo esc_url($image['url']); ?>" class="img-one" alt="<?php echo esc_attr($image['alt']); ?>"/>
			<?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="section-products">
      <div class="text-holder">
        <h3 class="title-head">EXPLORE OTHER PRODUCTS</h3>
      </div>
      <div class="product-images">
		  <?php

				// check if the repeater field has rows of data
				if( have_rows('product_card') ):

					// loop through the rows of data
					while ( have_rows('product_card') ) : the_row();?>

		  <div class="product">
          <div class="product-sample">
            <img src="<?php the_sub_field('product_image'); ?>" class="img" alt=""/>
            <img src="<?php the_sub_field('img_logo'); ?>" class="powered-by" alt=""/>
          </div>
          <div class="product-description">
            <h2 class="title-description"><?php the_sub_field('card_title'); ?></h2>
            <p class="title-description-text"><?php the_sub_field('card_text'); ?></p>
            <h2 href="#" class="description-link">LEARN MORE</h2>
          </div>
        </div>

					<?php endwhile;

				else :

					// no rows found

				endif;

				?>
        <button class="btn click-btn show-btn js-show" id="" type="submit">VIEW ALL PRODUCTS</button>
      </div>
    </div>
    <div class="section-info">
      
      <div class="contact-info">
        <div class="text-holder">
          <h3 class="title-head">INFORMATION</h3>
          <div class="adress">
            <h2 class="title-description">ADRESS</h2>
            <p class="title-description-text">123 East 123th St. Floor 123</p>
            <p class="title-description-text">New York, NY, 10003</p>
          </div>
          <div class="contact">
            <h2 class="title-description">PHONE</h2>
            <a href="tel:+12345678910" class="title-description-text">+1 234 567-8910</a>
          </div>
          <div class="email">
            <h2 class="title-description">EMAIL</h2>
            <a href="mailto:hello@fullstack.com" class="title-description-text">hello@fullstack.com</a>
          </div>
        </div>
      </div>
    </div>
  </main>
  
  <div class="modal modal-popup fade" id="PopupImageOne" tabindex="-1" role="dialog" aria-labelledby="modalPopupImage" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-header">
        <a href="javascript:void(0)" class="btn-close close-modal" data-dismiss="modal" aria-label="Close">
          <svg version="1.1" id="close" class="icon-close close-modal" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 47.971 47.971" xml:space="preserve">
            <g>
              <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
                c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
                C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
                s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
            </g>
          </svg>
        </a>
      </div>
      <div class="content-holder">
        <img class="image-slide" src="assets/images/05-wireless-gaming-headset.jpg" alt=""/>
      </div>
    </div>
  </div>
  <div class="modal modal-popup fade" id="PopupImageTwo" tabindex="-1" role="dialog" aria-labelledby="modalPopupImage" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-header">
        <a href="javascript:void(0)" class="btn-close close-modal" data-dismiss="modal" aria-label="Close">
          <svg version="1.1" id="close" class="icon-close close-modal" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 47.971 47.971" xml:space="preserve">
            <g>
              <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
                c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
                C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
                s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
            </g>
          </svg>
        </a>
      </div>
      <div class="content-holder">
        <img class="image-slide" src="assets/images/06-wireless-gaming-headset.jpg" alt=""/>
      </div>
    </div>
  </div>
  <div class="modal modal-popup fade" id="PopupImageThree" tabindex="-1" role="dialog" aria-labelledby="modalPopupImage" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-header">
        <a href="javascript:void(0)" class="btn-close close-modal" data-dismiss="modal" aria-label="Close">
          <svg version="1.1" id="close" class="icon-close close-modal" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 47.971 47.971" xml:space="preserve">
            <g>
              <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
                c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
                C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
                s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
            </g>
          </svg>
        </a>
      </div>
      <div class="content-holder">
        <img class="image-slide" src="assets/images/07-wireless-gaming-headset.jpg" alt=""/>
      </div>
    </div>
  </div>
  <div class="modal modal-popup fade" id="PopupImageFour" tabindex="-1" role="dialog" aria-labelledby="modalPopupImage" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-header">
        <a href="javascript:void(0)" class="btn-close close-modal" data-dismiss="modal" aria-label="Close">
          <svg version="1.1" id="close" class="icon-close close-modal" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 47.971 47.971" xml:space="preserve">
            <g>
              <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
                c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
                C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
                s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
            </g>
          </svg>
        </a>
      </div>
      <div class="content-holder">
        <img class="image-slide" src="assets/images/08-wireless-gaming-headset.jpg" alt=""/>
      </div>
    </div>
  </div>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>