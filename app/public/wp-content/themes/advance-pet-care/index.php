<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package advance-pet-care
 */
get_header(); ?>

<main role="main" id="maincontent" class="our-services">
  <div class="innerlightbox">
	  <div class="container">
          <div class="mt-5">
            <div class="row mt-5 mb-5" style="background-color:green;">
                <div class="col-lg-4 col-md-4 ml-0 pl-0">
                  <div class="" style="background-size: 100% 100%; height:300px; background-image: url(<?php echo get_theme_file_uri('/images/iguana.png')?>);">
                  </div>
                </div>
                <div class="col-lg-4 col-md-4" style="color:white; text-align:center;">
                  Get to Know Each Animal at our ZOO
                </div>
                <div class="col-lg-4 col-md-4 mr-0 pr-0">
                  <div class="" style="background-size: 100% 100%; height:300px; background-image: url(<?php echo get_theme_file_uri('/images/tiger3.png')?>);">
                  </div>
                </div>
              </div>

              <div class="row mt-5 mb-5"  >
                <div class="col-lg-4 col-md-4 ml-0 pl-0">
                View Phots taken at the zoo
                </div>
                <div class="col-lg-8 col-md-8" style="color:white; text-align:center;">
                  
                  <div class="" style="background-size: 100% 100%; height:300px; background-image: url(<?php echo get_theme_file_uri('/images/photo.png')?>);">
                  </div>
                </div>
              </div>

            <div class="row mt-5 mb-5">
              <div class="col-lg-4 col-md-4">
                <div class="" style="background-size: 100% 100%; height:300px; background-image: url(<?php echo get_theme_file_uri('/images/events-animal.png')?>);">
                </div>
              </div>

              <div class="col-lg-8 col-md-8">
              Click Here To See upcoming events
              </div>
            </div>
          <div class="row mt-5 mb-5">
            
            <div class="col-lg-6 col-md-6">
            Come Learn More About Animals 
            </div>
            <div class="col-lg-4 col-md-4">
            <div class="" style="background-size: 100% 100%; height:300px; background-image: url(<?php echo get_theme_file_uri('/images/learn-animal.png')?>);">
            </div>
            </div>
          </div>
          </div>
        
  </div>
  </div>
</main>

<?php get_footer(); ?>