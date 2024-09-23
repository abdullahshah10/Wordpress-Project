<?php
/**
 * Template part for Header Top Bar.
 *
 * @package meika
 */

$meika_data =get_option('meika_data'); 
?>
<div class="dark">
<!-- header -->
<header class="header-area header-two"> 
<?php if ( isset( $meika_data['meika_opt-header-top-bar'] )) {
if ( $meika_data['meika_opt-header-top-bar'] == 1 ) : ?>
    <!-- header top -->	
  
       <?php endif; } ?>   
    <?php if ( isset( $meika_data['meika__opt-mid-menu'] )) {
if ( $meika_data['meika__opt-mid-menu'] == 1 ) : ?>
   
     <?php endif; } ?>  
      <div id="header-sticky" class="menu-area">
                <div class="container">
                     <div class="row">
                             <div class="col-xl-12 col-lg-12 text-center">
                                <div class="logo mt-30 mb-30">
                                    <!-- LOGO IMAGE -->
                                    <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 268 x 60 pixels) -->
                                    <?php if(isset ($meika_data['meika__opt-logo-standard']['url']) && $meika_data['meika__opt-logo-standard']['url'] !== "") { ?>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand logo-black">
                                    <!-- Logo Standard -->
                                    <img src="<?php echo esc_url( $meika_data['meika__opt-logo-standard']['url'] ); ?>" alt="<?php echo esc_attr( get_bloginfo('name') ); ?>" title="<?php echo esc_attr( get_bloginfo('description') ); ?>" />
                                     </a>
                                    <?php } else { ?>
                                    <!-- Logo Text Default -->
                                    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <div class="row align-items-center">
                      
                      <?php if(isset ($meika_data['meika__opt-right-menu']) && $meika_data['meika__opt-right-menu'] !== 1) { ?>
                           <?php if ( $meika_data['meika__opt-right-menu'] == 1) { ?>
                                  <div class="col-xl-2 col-lg-2">
                                    <div class="header-social">
                                        <span>
                                            <?php if ( $meika_data['meika__opt-mid-menu-social'] == 1) { ?>     
                                                <?php echo wp_kses_post( $meika_data['meika_opt-mid-social'] ); ?>
                                           
                                            <?php } ?>   
                                           </span>                    
                                           <!--  /social media icon redux -->                               
                                    </div>
                                </div>
                               <div class="col-xl-8 col-lg-8 text-center">
                                     <div class="main-menu">
                                        <nav id="mobile-menu">
                                            <?php
                                        wp_nav_menu([
                                             'theme_location'  => 'main-menu',
                                              'container_id' => 'cssmenu', 										
                                        ]);
                                      ?>
                                        </nav>
                                    </div>
                                </div>  
                              <div class="col-xl-2 col-lg-2 text-right d-none d-lg-block text-right text-xl-right">
                                  <div class="header-cta">
                                    <?php if ( $meika_data['meika__opt-right-menu'] == 1) { ?>     
                                    <ul>
                                      <?php echo wp_kses_post( $meika_data['meika__right-menu-two'] ); ?>
                                    </ul>
                                    <?php } ?>                                       
                                 </div>                                                      
                                 </div>
                              <div class="col-12">
                                    <div class="mobile-menu"></div>
                            </div> 

                        <?php } else { ?>

                             <div class="col-xl-11 col-lg-10">
                                 <div class="main-menu text-left text-xl-left">
                                     <nav id="mobile-menu">
                                        <?php
                                    wp_nav_menu([
                                         'theme_location'  => 'main-menu',
                                            'container_id' => 'cssmenu', 
                                    ]);
                                  ?>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-12">
                            <div class="mobile-menu"></div>
                       </div> 
                        <?php } ?>

                        <?php } else { ?>
                        <!-- Theme option of this menu display -->
                        <div class="col-lg-2 col-md-12 d-lg-block d-none">
                            <div class="logo">
                                 <!-- LOGO IMAGE -->
                                    <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 268 x 60 pixels) -->
                                    <?php if(isset ($meika_data['meika__opt-logo-standard']['url']) && $meika_data['meika__opt-logo-standard']['url'] !== "") { ?>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand logo-black">
                                    <!-- Logo Standard -->
                                    <img src="<?php echo esc_url( $meika_data['meika__opt-logo-standard']['url'] ); ?>" alt="<?php echo esc_attr( get_bloginfo('name') ); ?>" title="<?php echo esc_attr( get_bloginfo('description') ); ?>" />
                                     </a>
                                    <?php } else { ?>
                                    <!-- Logo Text Default -->
                                    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                                    <?php } ?>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                           <div class="main-menu text-right text-xl-right mr-15">
                                 <nav id="mobile-menu">
                                    <?php
                                        wp_nav_menu([
                                             'theme_location'  => 'main-menu',
                                            'container_id' => 'cssmenu', 							
                                        ]);
                                      ?>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                       </div> 
                        <?php } ?>
                  </div>
                </div>

          </div>
    </header>
<!-- header-end -->
