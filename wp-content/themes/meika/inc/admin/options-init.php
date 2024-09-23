<?php
    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/meika/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "meika_data";


    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
      'opt_name' => 'meika_data',
      'dev_mode' => false,
      'use_cdn' => true,
      'display_name' => $theme->get( 'Name' ),
      'display_version' => $theme->get( 'Version' ),
      'page_slug' => '_options',
      'page_title' => esc_html__('Theme Options', 'meika'),
      'admin_bar' => true,
      'menu_type' => 'menu',
      'menu_title' => esc_html__('Theme Options', 'meika'),
      'admin_bar_icon' => 'dashicons-admin-generic',
      'allow_sub_menu' => true,
      'page_parent_post_type' => 'your_post_type',
      'customizer' => true,
      'hints' => array(
        'icon'          => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_size'     => 'normal',
        'tip_style'     => array(
          'color' => 'dark',
        ),
        'tip_position' => array(
          'my' => 'top left',
          'at' => 'bottom right',
        ),
        'tip_effect' => array(
          'show' => array(
            'duration' => '500',
            'event'    => 'mouseover',
          ),
          'hide' => array(
            'duration' => '500',
            'event'    => 'mouseleave unfocus',
          ),
        ),
      ),
      'output' => true,
      'output_tag' => true,
      'settings_api' => true,
      'cdn_check_time' => '1440',
      'compiler' => true,
      'page_permissions' => 'manage_options',
      'save_defaults' => true,
      'show_import_export' => true,
      'transient_time' => '3400',
      'network_sites' => true,
      'disable_tracking' => true,
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    // General Settings
    Redux::setSection( $opt_name, array(
      'title'  => esc_html__( 'General Settings', 'meika' ),
      'id'     => 'meika__section-general',
      'icon'   => 'el el-cogs',
      'fields' => array(
        array(
          'id'        => 'meika__opt-logo-standard',
          'type'      => 'media',
          'url'       => true,
          'title'     => esc_html__('Logo Image 1', 'meika'),
          'compiler'  => 'true',
          'desc'      => esc_html__('Upload your image or remove image', 'meika'),
          'default'   => array(
            'url'     => get_template_directory_uri() . '/inc/assets/images/logo.png'),
        ),
      )
    ) );
    

// Header email and phone number Top Bar
    Redux::setSection( $opt_name, array(
      'title'  => esc_html__( 'Header Top Bar', 'meika' ),
      'id'     => 'meika__subsection-header-top-bar ',
      'fields' => array(
		array(
          'id'        => 'meika__opt-Header-layout',
          'title'     => esc_html__('Change Header Layout', 'meika'),
		   'type'     => 'image_select',
          'options'   => array(
				11 => array(

					'img' => get_template_directory_uri() . '/inc/admin/images/header01.png',
                    'alt' => esc_html__( 'Header Layout 1', 'meika' ),
				),	
               22 => array(

					'img' => get_template_directory_uri() . '/inc/admin/images/header02.png',
                    'alt' => esc_html__( 'Header Layout 2', 'meika' ),
				),	
              33 => array(

					'img' => get_template_directory_uri() . '/inc/admin/images/header03.png',
                    'alt' => esc_html__( 'Header Layout 3', 'meika' ),
				),	
             
		  ),

		  'default' => 11

        ),
         
    
      )
    ) );

     // Header Mid Menu

    Redux::setSection( $opt_name, array(
      'title'  => esc_html__( 'Header Mid Menu', 'meika' ),
      'id'     => 'meika__subsection-mid-menu',
      'subsection' => true,
      'fields' => array(
   
          
         array(
          'id'        => 'meika__opt-mid-menu-social',
          'type'      => 'switch',
          'title'     => esc_html__('Display Social Icon?', 'meika'),
          'subtitle'  => esc_html__('Turn on to display the number in the Header Top Bar.', 'meika'),
          'default'   => 2,
          'on'        => esc_html__('Yes', 'meika'),
          'off'       => esc_html__('No', 'meika'),
        ),
       
        array(
          'id'        => 'meika_opt-mid-social',
          'type'      => 'textarea',
          'title'     => esc_html__('Social Icon', 'meika'),
          'subtitle'  => esc_html__('Social Icon to display next to the envelope icon.', 'meika'),
          'default'   => esc_html__('+91 584 6977 364', 'meika'),
          'required'  => array('meika__opt-mid-menu-social', '=', '1'),
        ), 


          
      )
        
        
    ) );
	// Header Right Menu

    Redux::setSection( $opt_name, array(
      'title'  => esc_html__( 'Header Right Menu', 'meika' ),
      'id'     => 'meika__subsection-right-menu',
      'subsection' => true,
      'fields' => array(
          array(
            'id'        => 'meika__opt-right-menu',
            'type'      => 'switch',
            'title'     => esc_html__('Switch', 'meika'),
			 'default'   => 2,
            'on'        => esc_html__( 'Yes', 'meika' ),
            'off'       => esc_html__( 'No', 'meika' ),
          ),

          array(
            'id'      => 'meika__right-menu',
            'type'    => 'textarea',
            'title'   => esc_html__( 'Right Menu Text', 'meika' ),
			'default'   => 1,
            'default' => ' <a href="contact.html" class="btn ss-btn">Get A Quote</a>',
            'required'  => array('meika__opt-right-menu', '=', '1'),
          ),
          
           array(
            'id'      => 'meika__right-menu-two',
            'type'    => 'textarea',
            'title'   => esc_html__( 'Right Menu Two Text', 'meika' ),
			'default'   => 1,
            'default' => ' <a href="contact.html" class="btn ss-btn">Get A Quote</a>',
            'required'  => array('meika__opt-right-menu', '=', '1'),
          ),
      )
        
        
    ) );


	 ///////////////////////////////////////////////////////// Theme color///////////////////////////////////////
    Redux::setSection( $opt_name, array(
      'title'  => esc_html__( 'Theme Colors', 'meika' ),
      'id'     => 'meika__section-color',
      'icon'   => 'el el-arrow-down',
      'fields' => array(
      )
    ) );

	Redux::setSection( $opt_name, array(
      'title'  => esc_html__( 'General Theme Colors', 'meika' ),
      'id'     => 'meika__subsection-general-theme-color',
	  'subsection' => true,
      'fields' => array(
	   array(
          'id'        => 'meika__opt-body-text-color',
          'type'      => 'color',
          'title'     => esc_html__('Body Text Color', 'meika'),
		   'default' => '#9c9c9c',
		  'output'  => array('body,.widget_categories a'),
		  'subtitle' => esc_html__('Theme Text Body Color Manage from the Redux Controller', 'meika'),
        ),
		 array(
			'id'       => 'opt-color-blog',
			'type'     => 'background',
			'output'   => array('.site-content'),
			'title'    => esc_html__('Page Background Color', 'meika'),
			'subtitle' => esc_html__('Pick a Page Background color for the theme', 'meika'),
            'default'  => array(
            'background-color'    => '#131313',
          ),
		),
		 array(
			'id'       => 'opt-color-breadcums',
			'type'     => 'background',
			'output'  => array('.breadcrumb-area'),
			'title'    => esc_html__('Breadcums Background Color', 'meika'),
			'subtitle' => esc_html__('Pick a Breadcums background color for the theme', 'meika'),
			'default'               => array(
            'background-color'    => '#131313',
			
          ),
		),
		array(
			'id'       => 'opt-color-footer',
			'type'     => 'background',
			'output'  => array('.footer-bg'),
			'title'    => esc_html__('Footer Background Color', 'meika'),
			'subtitle' => esc_html__('Pick a Footer background color for the theme', 'meika'),
			'default'               => array(
            'background-color'    => '#181818',
          ),
		),
          
       array(
			'id'        => 'opt-color-bakground',
			'type'      => 'color',
			'title'     => esc_html__('Primary Color', 'meika'),
			'subtitle'  => esc_html__('Pick a background color.', 'meika'),
			'default'   => '#df2919',
			'output'    => array(
				'background-color' => '.team-social li a:hover,.post__tag ul li a:hover,.services-categories li a::after,.brochures-box .inner,.home-blog-active .slick-arrow:hover, .home-blog-active2 .slick-arrow:hover,.portfolio .col3 .grid-item .box a::after,.comment-form .submit,#scrollUp,.search-form .search-submit, .wp-block-search .wp-block-search__button,.comment-form .submit:hover,.services-08-item:hover .readmore,#scrollUp:hover,.gallery-image figcaption .span::before,.team-thumb .dropdown .xbtn,.f-cta-icon i,.contact-bg02 .btn.ss-btn.active',
				'color'            => '.footer-bg .info .red,.footer-link ul li a:hover,.breadcrumb > .active,blockquote footer,.header-three .main-menu .sub-menu li a:hover, .menu .children li a:hover,.comment-text .avatar-name span,.team-area-content span,.team-area-content li .icon i,a:hover,.services-08-thumb.glyph-icon i,.gallery-image figcaption .span,.team-info span,.testimonial-active .slick-arrow,.blog-btn a,.bsingle__post .video-p .video-i,.bsingle__content .meta-info ul li i,.about-content li .icon i',
				'border-color'     => '.post__tag ul li a:hover,.pricing-box2.active,.menu .children,.sidebar-widget .widgettitle,.tag-cloud-link:hover,.services-08-item:hover .readmore,.team-info .text,.blog-btn a,.contact-bg02 .btn.ss-btn.active'

			)
		),
          
        array(
			'id'        => 'opt-color-whtext',
			'type'      => 'color',
			'title'     => esc_html__('Primary White Text Color', 'meika'),
			'subtitle'  => esc_html__('Pick a White text color.', 'meika'),
			'default'   => '#fff',
			'output'    => array(
				
				'color'  => '.comment-form .submit,.search-form .search-submit,.wp-block-search .wp-block-search__button,.team-thumb .dropdown .xbtn,#scrollUp,.cta-title h2,.footer-widget .widgettitle, .footer-widget .cat-item, .copyright-wrap .text,.f-cta-icon i,.btn-style-one'

			)
		),
        
        array(
			'id'        => 'opt-color-bg-black',
			'type'      => 'color',
			'title'     => esc_html__('Primary Black background Color', 'meika'),
			'subtitle'  => esc_html__('Pick a Black background color.', 'meika'),
			'default'   => '#232323',
			'output'    => array(
				
				'background-color'  => '.copyright-wrap .text,.btn-style-one',
                'color'            => 'h1, h2, h3, h4, h5, h6'

			)
		),
		
		
      )
    ) );
     //  Typography
    Redux::setSection( $opt_name, array(
      'title'  => esc_html__( 'Typography', 'meika' ),
      'id'     => 'meika__subsection-typography-general',
      'fields' => array(
	  
        
        array(
          'id'          => 'meika__custom_body_font',
          'type'        => 'switch',
          'title'       => esc_html__('Customize Body font?', 'meika'),
          'subtitle'    => esc_html__('Turn on to use custom fonts for the theme main text.', 'meika'),
          'default'     => false,
        ),
        array(
          'id'          => 'meika__body-font',
          'type'        => 'typography',
          'title'       => esc_html__('Body font', 'meika'),
          'subtitle'    => esc_html__('Specify the Body font properties.', 'meika'),
          'google'      => true,
          'output'      => array('body'),
          'units'       => 'px',
          'line-height' => false,
          'text-align'  => false,
          'required'    => array('meika__custom_body_font', '=', '1'),
          'default'     => array(
            'color'         => '#6e7b97',
            'font-size'     => '15px',
            'font-family'   => 'Roboto',
            'google'        => true,
            'font-weight'   => '400',
          ),
        ),
        array(
          'id'          => 'meika__custom_heading_font',
          'type'        => 'switch',
          'title'       => esc_html__('Customize Headings?', 'meika'),
          'subtitle'    => esc_html__('Turn on to use custom fonts, change color, line-height etc. for the theme Headings.', 'meika'),
          'default'     => false,
        ),
        array(
          'id'          => 'typography-h1',
          'type'        => 'typography',
          'title'       => esc_html__('H1 Heading', 'meika'),
          'subtitle'    => esc_html__('Specify the H1 heading font properties.', 'meika'),
          'google'      => true,
          'output'      => array('h1'),
          'units'       => 'px',
          'line-height' => false,
          'text-align'  => false,
          'required'    => array('meika__custom_heading_font', '=', '1'),
          'default'     => array(
            'color'         => '#002e5b',
            'font-size'     => '46px',
            'font-family'   => 'Roboto',
            'google'        => true,
            'font-weight'   => '600',
          ),
        ),
        array(
          'id'          => 'typography-h2',
          'type'        => 'typography',
          'title'       => esc_html__('H2 Heading', 'meika'),
          'subtitle'    => esc_html__('Specify the H2 heading font properties.', 'meika'),
          'google'      => true,
          'output'      => array('h2'),
          'units'       => 'px',
          'line-height' => false,
          'text-align'  => false,
          'required'    => array('meika__custom_heading_font', '=', '1'),
          'default'     => array(
            'color'         => '#002e5b',
            'font-size'     => '36px',
            'font-family'   => 'Roboto',
            'google'        => true,
            'font-weight'   => '600',
          ),
        ),
        array(
          'id'          => 'typography-h3',
          'type'        => 'typography',
          'title'       => esc_html__('H3 Heading', 'meika'),
          'subtitle'    => esc_html__('Specify the H3 heading font properties.', 'meika'),
          'google'      => true,
          'output'      => array('h3'),
          'units'       => 'px',
          'line-height' => false,
          'text-align'  => false,
          'required'    => array('meika__custom_heading_font', '=', '1'),
          'default'     => array(
            'color'         => '#002e5b',
            'font-size'     => '28px',
            'font-family'   => 'Roboto',
            'google'        => true,
            'font-weight'   => '600',
          ),
        ),
        array(
          'id'          => 'typography-h4',
          'type'        => 'typography',
          'title'       => esc_html__('H4 Heading', 'meika'),
          'subtitle'    => esc_html__('Specify the H4 heading font properties.', 'meika'),
          'google'      => true,
          'output'      => array('h4'),
          'units'       => 'px',
          'line-height' => false,
          'text-align'  => false,
          'required'    => array('meika__custom_heading_font', '=', '1'),
          'default'     => array(
            'color'         => '#002e5b',
            'font-size'     => '21px',
            'font-family'   => 'Roboto',
            'google'        => true,
            'font-weight'   => '600',
          ),
        ),
        array(
          'id'          => 'typography-h5',
          'type'        => 'typography',
          'title'       => esc_html__('H5 Heading', 'meika'),
          'subtitle'    => esc_html__('Specify the H5 heading font properties.', 'meika'),
          'google'      => true,
          'output'      => array('h5'),
          'units'       => 'px',
          'line-height' => false,
          'text-align'  => false,
          'required'    => array('meika__custom_heading_font', '=', '1'),
          'default'     => array(
            'color'         => '#002e5b',
            'font-size'     => '18px',
            'font-family'   => 'Roboto',
            'google' => true,
            'font-weight'   => '600',
          ),
        ),
        array(
          'id'          => 'typography-h6',
          'type'        => 'typography',
          'title'       => esc_html__('H6 Heading', 'meika'),
          'subtitle'    => esc_html__('Specify the H6 heading font properties.', 'meika'),
          'google'      => true,
          'output'      => array('h6'),
          'units'       => 'px',
          'line-height' => false,
          'text-align'  => false,
          'required'    => array('meika__custom_heading_font', '=', '1'),
          'default'     => array(
            'color'         => '#002e5b',
            'font-size'     => '15px',
            'font-family'   => 'Roboto',
            'google'        => true,
            'font-weight'   => '600',
          ),
        ),
      )
    ) );

	 /////////////////////////////////////////////////footer ///////////////////////////////////////////////
    Redux::setSection( $opt_name, array(
      'title'  => esc_html__( 'Theme Footer', 'meika' ),
      'id'     => 'meika__section-footer',
      'icon'   => 'el el-arrow-down',
      'fields' => array(
      )
    ) );
	

// Footer Text
    Redux::setSection( $opt_name, array(
      'title'  => esc_html__( 'Footer Text', 'meika' ),
      'id'     => 'meika__subsection-footer-text',
      'subsection' => true,
      'fields' => array(
          array(
            'id'        => 'meika__opt-footer-text',
            'type'      => 'switch',
            'title'     => esc_html__('Switch', 'meika'),
			'default'   => 2,
            'on'        => esc_html__( 'Yes', 'meika' ),
            'off'       => esc_html__( 'No', 'meika' ),
          ),
          
       )
    ) );


    // Footer Copyright
    Redux::setSection( $opt_name, array(
      'title'  => esc_html__( 'Copyright', 'meika' ),
      'id'     => 'meika__subsection-footer-copyright',
      'subsection' => true,
      'fields' => array(
          array(
            'id'        => 'meika__opt-copyright',
            'type'      => 'switch',
            'title'     => esc_html__('Switch', 'meika'),
			 'default'   => 2,
            'on'        => esc_html__( 'Yes', 'meika' ),
            'off'       => esc_html__( 'No', 'meika' ),
          ),
		  
          array(
            'id'      => 'meika__copyright',
            'type'    => 'text',
            'title'   => esc_html__( 'Copyright Textarea', 'meika' ),
			'default'   => 1,
            'default' => '&copy; meika All design Zcube.',
            'required'  => array('meika__opt-copyright', '=', '1'),
          ),
          array(
            'id'      => 'meika__copyright_link',
            'type'    => 'textarea',
            'title'   => esc_html__( 'Copyright Link Textarea', 'meika' ),
			'default'   => 1,
            'default' => '',
            'required'  => array('meika__opt-copyright', '=', '1'),
          ),
          
         
      )
    ) );
	

    // Footer Widgets
    Redux::setSection( $opt_name, array(
      'title'  => esc_html__( 'Widgets', 'meika' ),
      'id'     => 'meika__subsection-footer-widgets',
	  'subsection' => true,
      'fields' => array(
        array(
          'id'        => 'meika__opt-footer-widgets',
          'type'      => 'switch',
          'title'     => esc_html__('Switch', 'meika'),
          'default'   => 2,
          'on'        => 'Show',
          'off'       => 'Hide',
        ),
        array(
          'id'        => 'meika__opt-footer-widgets-layout',
          'type'      => 'image_select',
          'compiler'  => true,
          'title'     => esc_html__('Footer Widgets Layout', 'meika'),
          'options'   => array(
            '1' => array(
              'alt' => esc_html__( '4 Columns (equal)', 'meika' ),
              'img' => get_template_directory_uri() . '/inc/admin/images/footer-cols2.png'),
           
          ),
          'default'   => '1',
          'required'  => array('meika__opt-footer-widgets', '=', '1'),
        ),
      )
    ) );
    
    /*
     * <--- END SECTIONS--->
     */