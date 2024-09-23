<?php
/**
 * Template part for Header Top Bar.
 *
 * @package meika
 */

$meika_data =get_option('meika_data'); 
?>  
  <header class="header-area header">  
      <div id="header-sticky" class="menu-area pl-100 pr-100">
               <div class="container-fluid">
                <div class="second-menu">
                    <div class="row align-items-center">
                       <div class="col-xl-2 col-lg-2">
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

                      <?php if(isset ($meika_data['meika__opt-right-menu']) && $meika_data['meika__opt-right-menu'] !== 1) { ?>
                           <?php if ( $meika_data['meika__opt-right-menu'] == 1) { ?>
                        
                               <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="main-menu text-right text-xl-right">
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
                                  <div class="col-xl-6 col-lg-6 text-right d-none d-lg-block text-right text-xl-right">
                                      <div class="header-cta">
                                        <?php if ( $meika_data['meika__opt-right-menu'] == 1) { ?>     
                                        <ul>
                                          <?php echo wp_kses_post( $meika_data['meika__right-menu'] ); ?>
                                        </ul>
                                        <?php } ?>
                                     </div>                                    
                                 </div>
                              <div class="col-12">
                                    <div class="mobile-menu"></div>
                            </div> 

                        <?php } else { ?>

                             <div class="col-xl-10 col-lg-10">
                                 <div class="main-menu text-right text-xl-right mr-15 test-menu">
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
                       
                        <div class="col-xl-10 col-lg-10">
                           <div class="main-menu text-right text-xl-right mr-15 test-menu">
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
          </div>
    </header>
<!-- header-end -->
 <!-- offcanvas-area -->
<div class="offcanvas-menu">
    <span class="menu-close"><i class="fal fa-times"></i></span>
        <form role="search" method="get" id="searchform"   class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="<?php echo esc_attr__( "Search", "meika" ) ?>"  />
            <button><i class="fal fa-search"></i></button>
        </form>
    <div id="cssmenu3" class="menu-one-page-menu-container">
        <?php
            wp_nav_menu([
               'theme_location'  => 'side-menu',
                'container_id' => 'cssmenu-2', 
            ]);
          ?>
     </div>
     <div id="cssmenu2" class="menu-one-page-menu-container">
      
    </div>       

     
</div>
<div class="offcanvas-overly"></div>
<!-- offcanvas-area:end -->
