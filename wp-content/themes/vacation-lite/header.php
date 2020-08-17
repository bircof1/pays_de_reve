 <?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Vacation Lite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if(is_singular() && pings_open()) { ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php } ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
	//wp_body_open hook from WordPress 5.2
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
		do_action( 'wp_body_open' );
	}
?>
<a class="skip-link screen-reader-text" href="#sitemain">
	<?php _e( 'Skip to content', 'vacation-lite' ); ?>
</a>
<div class="header">
            		<div class="header-inner">
                    	<?php if(get_theme_mod('topbar_hide') == '') {?>
                    		<div class="header-top">
                            	<div class="top-left">
                                <?php if(get_theme_mod('cont_email',true) != '') { ?>
                                	<p><i class="fa fa-envelope"></i><a href="mailto:<?php echo antispambot(get_theme_mod('cont_email','info@example.com')); ?>"><?php echo antispambot(get_theme_mod('cont_email','info@example.com')); ?></a></p>
                                    <?php } ?>
                                </div><!-- top-left -->
                                
                                <div class="top-right">
                                	<div class="social-icons">
                                    	<?php if(get_theme_mod('facebook_link',true) != '') { ?>
                                    			<a title="facebook" class="fa fa-facebook fa-2x" target="_blank" href="<?php echo esc_url(get_theme_mod('facebook_link','#fblink')); ?>"></a>
                                                <?php } ?>
                                                <?php if(get_theme_mod('twitter_link',true) != '') { ?>
                                                <a title="twitter" class="fa fa-twitter fa-2x" target="_blank" href="<?php echo esc_url(get_theme_mod('twitter_link','#tweetlink')); ?>"></a>
                                                <?php } ?>
                                                <?php if(get_theme_mod('linked_link',true) != '') { ?>
                                                <a title="linkedin" class="fa fa-linkedin fa-2x" target="_blank" href="<?php echo esc_url(get_theme_mod('linked_link','#linkedin')); ?>"></a>
                                                <?php } ?>
                                                <?php if(get_theme_mod('gplus_link',true) != '') { ?>
                                                <a title="google-plus" class="fa fa-google-plus fa-2x" target="_blank" href="<?php echo esc_url(get_theme_mod('gplus_link','#gplus')); ?>"></a>
                                                <?php } ?>
                                                </div>
                                </div><!-- top-right -->
                                <div class="clear"></div>
                            </div><!-- header-top --> 
                            <?php } ?>                   
                    		<div class="header-bottom">
                    		<div class="logo">
                            		<?php vacation_lite_the_custom_logo(); ?>
						<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a></h1>

					<?php $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p><?php echo esc_html($description); ?></p>
					<?php endif; ?>
                             </div>
                             <div class="toggle">
                            <a class="toggleMenu" href="#"><?php _e('Menu','vacation-lite'); ?></a>
                            </div>                           
                            <div class="nav">
								<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
                            </div><!-- nav --><div class="clear"></div>
                            </div><!-- header-bottom -->
                    </div><!-- header-inner -->
            </div><!-- header -->
<?php if (!is_home() && is_front_page()) {
	$hideslide = get_theme_mod('hide_slider', '1');
	 if($hideslide == ''){   
$pages = array();
for($sld=7; $sld<10; $sld++) { 
	$mod = absint( get_theme_mod('page-setting'.$sld));
    if ( 'page-none-selected' != $mod ) {
      $pages[] = $mod;
    }	
} 
if( !empty($pages) ) :
$args = array(
      'posts_per_page' => 3,
      'post_type' => 'page',
      'post__in' => $pages,
      'orderby' => 'post__in'
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) :	
	$sld = 7;
?>
<section id="home_slider">
  <div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">
		<?php
        $i = 0;
        while ( $query->have_posts() ) : $query->the_post();
          $i++;
          $vacation_lite_slideno[] = $i;
          $vacation_lite_slidetitle[] = get_the_title();
		  $vacation_lite_slidedesc[] = get_the_excerpt();
          $vacation_lite_slidelink[] = esc_url(get_permalink());
          ?>
          <img src="<?php the_post_thumbnail_url('full'); ?>" title="#slidecaption<?php echo esc_attr( $i ); ?>" />
          <?php
        $sld++;
        endwhile;
          ?>
    </div>
        <?php
        $k = 0;
        foreach( $vacation_lite_slideno as $vacation_lite_sln ){ ?>
    <div id="slidecaption<?php echo esc_html( $vacation_lite_sln ); ?>" class="nivo-html-caption">
      <div class="top-bar">
        <h2><a href="<?php echo esc_url($vacation_lite_slidelink[$k] ); ?>"><?php echo esc_html($vacation_lite_slidetitle[$k] ); ?></a></h2>
        <p><?php echo esc_html($vacation_lite_slidedesc[$k] ); ?></p>
        <div class="clear"></div>
        <a class="read-more" href="<?php echo esc_url($vacation_lite_slidelink[$k] ); ?>">
          <?php echo esc_html(get_theme_mod('slide_text',__('Learn More','vacation-lite')));?>
          </a>
      </div>
    </div>
 	<?php $k++;
       wp_reset_postdata();
      } ?>
<?php endif; endif; ?>
  </div>
  <div class="clear"></div>
</section>
<?php } } 
?>


      <div class="main-container">
    <?php if ( is_front_page() && !is_home() ) { ?>  
      <section class="menu_page">
            	<div class="container">
                    <div class="services">
                    	<?php $hidetitle = get_theme_mod('hide_title', '1'); ?>
                        <?php if($hidetitle == '') { ?>
                    	<h2 class="section-title"><?php echo esc_html(get_theme_mod('welcome_title',__('Planing Your Next Vacation','vacation-lite'))); ?></h2>
                        <div class="section-subtitle"><?php echo esc_html(get_theme_mod('welcome_subtitle',__('Ready to plan your next getway? Get advice from Vacation','vacation-lite'))); ?></div>
                        <?php } ?>
                        
                        <?php $hidebox = get_theme_mod('box_hide', '1'); ?>  
             <?php if($hidebox == '') { ?>                        
        	<?php for($f=1; $f<4; $f++) { ?>
         <?php if(get_theme_mod('page-setting'.$f) != '') { ?>
         	<?php $page_query = new WP_Query('page_id='.get_theme_mod('page-setting'.$f)); ?>
         		<?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                         <div id="services-box" <?php if($f%3==0) { ?>class="last"<?php } ?>>
                         		<div class="services-inner">
									<?php the_post_thumbnail(); ?>
									<h2><?php the_title(); ?></h2>				
									<p><?php the_excerpt(); ?></p>
									<a href="<?php the_permalink(); ?>" class="check"><?php esc_html_e('Check Availability','vacation-lite'); ?></a>				
								</div>
                       </div>
                       <?php endwhile; ?>
                       <?php } } } ?>
          </div><!-- middle-align --><div class="clear"></div>
</div><!-- container -->
            </section>
            <?php } ?>
         <?php if( function_exists('is_woocommerce') && is_woocommerce() ) { ?>
		 	<div class="content-area">
                <div class="middle-align content_sidebar">
                	<div id="sitemain" class="site-main">
         <?php } ?>