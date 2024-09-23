<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Widget_contacts extends Widget_Base {

	public function get_name() {

		return 'Elementor_contacts-widget';

	}

	public function get_title() {

		return esc_html__( 'Zc > Contact Sections','meika');

	}

	public function get_icon() {		

		 return 'eicon-image-box';

	 }

	protected function _register_controls() {

		$traits = new \meika_Elementor_Traits($this);   


		$this->start_controls_section(

			'the_header_controls',

			['label' => esc_html__( 'Contact Section','meika'),]

		);
       $this->add_control(

			'background',

			[
				'label' => esc_html__( 'Map Image' ,'meika'),
				'type' => Controls_Manager::MEDIA,
			]

			);  
         $this->add_control(

			'text_heading',

			[
				'label' => esc_html__( 'Text Heading' ,'meika'),
				'type' => Controls_Manager::TEXT,
			]

			);  
        
         $this->add_control(

			'social_icon',

			[
				'label' => esc_html__( 'Social Icon' ,'meika'),
				'type' => Controls_Manager::TEXTAREA,
			]

			);
        
        $this->add_control(

			'shortcode',

			[
				'label' => esc_html__( 'Enter your shortcode' ,'meika'),
				'type' => Controls_Manager::TEXTAREA,
			]

			);
        
        $repeater = new \Elementor\Repeater();

         $repeater->add_control(
            'avtar',
            [
                'label' => esc_html__( 'Icon imag', 'meika' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
            ]
        );      
        $repeater->add_control(
            'heading',
            [
                'label' => esc_html__( 'Heading Text', 'meika' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => '01',
            ]
        );
        $repeater->add_control(
            'description',
            [
                'label' => esc_html__( 'Description', 'meika' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => 'Insurance Police',
            ]
        );
        
         

      
        $this->add_control(
            'contact_repeater',
            [
                'label' => esc_html__( 'All Slides', 'meika' ),
                'type' =>Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                          'heading'   => 'Contact Phone',
                    ],
                   
                ],
                'title_field' => '{{{heading}}}'
            ]
        );

		$this->end_controls_section();

	}

	protected function render( $instance = [] ) {

        meika_el()->get_section('contact-sections', [
            
            'contact_repeater' => $this->get_settings('contact_repeater'),
            'text_heading' => $this->get_settings('text_heading'),
        	'shortcode' => $this->get_settings('shortcode'),
        	'social_icon' => $this->get_settings('social_icon'),
        	'background' => $this->get_settings('background'),
            
			]);

	}

	protected function content_template() {}
    
	public function render_plain_content() {}

}
Plugin::instance()->widgets_manager->register_widget_type( new Elementor_Widget_contacts() );