<?php

if ( ! defined( 'ABSPATH' ) ) exit;

require_once wp_elementor . '/elementor/traits.php';

class meika_Elementor_Integration {

	public $widgets;

	public function __construct()
	{
		$this->widgets = [
            
        'header',
        'footer',
        'header-slider',       
        'header-slider-two',       
        'skill',       
        'our-steps',       
        'features',
        'about',      
        'video',      
        'video-two',      
        'price-home',      
        'newsletter',  
        'service', 
        'service-one', 
        'service-two', 
        'service-four', 
        'portfolio', 
        'counter', 
        'team',
        'team-two',     
        'team-three',     
        'testimonial', 
        'testimonial-two', 
        'testimonial-three', 
        'support',   
        'blog', 
        'blog-two', 
        'price',
        'faq',  
        'faq-two',  
        'faq-three',  
        'brand', 
        'contact-sections',       
        'contact-sections-two',       
        'contact-sections-three',       
        'contact-info',       
                
		];
		add_action( 'elementor/init', array( $this, 'widgets_registered' ) );
	}
	public function widgets_registered()
	{
		if ( ! defined( 'ELEMENTOR_PATH' ) || ! class_exists( 'Elementor\Widget_Base' ) || ! class_exists( 'Elementor\Plugin' ) ) {
			return false;
		}

		$elementor = Elementor\Plugin::instance();


		foreach ($this->widgets as $widget) {
			$template_file = wp_elementor . "/elementor/widgets/{$widget}.php";
			if ( file_exists( $template_file ) ) {
				require_once $template_file;
			}
		}
	}
}
new meika_Elementor_Integration;