<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-ts">
 *
 * @package advance-pet-care
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  } ?>
  <header role="banner" style="position: sticky; top: 0; z-index:100;">
    <?php if(get_theme_mod('advance_pet_care_preloader_option',true) != '' || get_theme_mod('advance_pet_care_responsive_preloader', true) != ''){ ?>
      <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
      </div>
    <?php }?>
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'advance-pet-care' ); ?></a>
    <div id="header">
      <div class="main-menu <?php if( get_theme_mod( 'advance_pet_care_sticky_header', false) != '' || get_theme_mod( 'advance_pet_care_responsive_sticky_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>" >
        <div class="container" style="position: sticky;">
          <div class="row">
            <div class="col-lg-2 col-md-1 col-4">
             
            </div>
            <div class="col-lg-2 col-md-2 col-4">
             Events
             </div>
            <div class="col-lg-2 col-md-2 col-4">
             View Images
             </div>
             <div class="col-lg-2 col-md-2 col-4">
             Get to Know Our Animals
            </div>
            <div class="col-lg-2 col-md-2 col-4">
             Learn About Animals
             </div>
            <div class="col-lg-1 col-md-1 col-4">
              <div class="search-box">
                <button type="button" class="search-open"><i class="fas fa-search m-2 p-2"></i></button>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-4">
              <div class="cart_icon">
                <a href="<?php esc_url(the_permalink((get_option('woocommerce_cart_page_id')))); ?>"><i class="fas fa-shopping-bag p-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Shopping Bag','advance-pet-care' );?></span></a>
              </div>
            </div>
          </div>
          <div class="search-outer">
            <div class="serach_inner w-100 h-100">
              <?php get_search_form(); ?>
            </div>
            <button type="button" class="search-close">X</span></button>
          </div>
        </div>
      </div>

     
      
    </div>
  </header>
  <div class="" style="background-size: 100% 100%; height:550px; background-image: url(<?php echo get_theme_file_uri('/images/elephants.jpg')?>);">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4">
              <div class="time">
                <div class="row m-0">
                  <?php if( get_theme_mod( 'advance_pet_care_time') != '' || get_theme_mod( 'advance_pet_care_time1' )!= '') { ?>
                    <div class="col-lg-1 col-md-2 p-0">
                      <i class="far fa-calendar-alt mt-2"></i>
                    </div>
                    <div class="col-lg-11 col-md-10">
                      <?php if( get_theme_mod('advance_pet_care_time') != ''){ ?>
                        <p class="color text-capitalize mb-0"><?php echo esc_html( get_theme_mod('advance_pet_care_time','')); ?></p>
                      <?php } ?>
                      <?php if( get_theme_mod('advance_pet_care_time1') != ''){ ?>
                        <p><?php echo esc_html( get_theme_mod('advance_pet_care_time1','')); ?></p>
                      <?php } ?>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="logo">
                <?php if ( has_custom_logo() ) : ?>
                  <div class="site-logo text-center"><?php the_custom_logo(); ?></div>
                  <?php endif; ?>
                  <?php $blog_info = get_bloginfo( 'name' ); ?>
                  <?php if ( ! empty( $blog_info ) ) : ?>
                    <?php if( get_theme_mod('advance_pet_care_site_title',true) != ''){ ?>
                      <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title text-center mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Hakuna Matata Zoo</a></h1>
                      <?php else : ?>
                        <p class="site-title text-center mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Hakuna Matata Zoo</a></p>
                      <?php endif; ?>
                    <?php }?>
                  <?php endif; ?>
                  <?php
                  $description = get_bloginfo( 'description', 'display' );
                  if ( $description || is_customize_preview() ) :
                    ?>
                  <?php if( get_theme_mod('advance_pet_care_tagline',true) != ''){ ?>
                    <p class="site-description text-center mb-md-0 mb-2">
                      <?php echo esc_html($description); ?>
                    </p>
                  <?php }?>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="address text-md-right text-center">
                <div class="row m-0">
                  <?php if( get_theme_mod( 'advance_pet_care_address') != '' || get_theme_mod( 'advance_pet_care_address1' )!= '') { ?>
                    <div class="col-lg-11 col-md-10">
                      <?php if( get_theme_mod('advance_pet_care_address') != ''){ ?>
                        <p class="color mb-0"><?php echo esc_html( get_theme_mod('advance_pet_care_address','')); ?></p>
                      <?php } ?>
                      <?php if( get_theme_mod('advance_pet_care_address1') != ''){ ?>
                        <p><?php echo esc_html( get_theme_mod('advance_pet_care_address1','')); ?></p>
                      <?php } ?>
                    </div>
                    <div class="col-lg-1 col-md-2 p-0">
                      <i class="fas fa-location-arrow mt-2"></i>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>