<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Widget_contacts_two extends Widget_Base {

	public function get_name() {

		return 'Elementor_contacts_two';

	}

	public function get_title() {

		return esc_html__( 'Zc > Contact Sections Two','meika');

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

			'feature_img',

			[
				'label' => esc_html__( 'Featue Img' ,'meika'),
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

			'tab_heading_one',

			[
				'label' => esc_html__( 'Sub Heading' ,'meika'),
				'type' => Controls_Manager::TEXT,
			]

			); 
        $this->add_control(

			'shortcode_one',

			[
				'label' => esc_html__( 'Enter your shortcode' ,'meika'),
				'type' => Controls_Manager::TEXTAREA,
			]

			);
         $this->add_control(

			'tab_heading_two',

			[
				'label' => esc_html__( 'Sub Heading' ,'meika'),
				'type' => Controls_Manager::TEXT,
			]

			); 
        $this->add_control(

			'shortcode_two',

			[
				'label' => esc_html__( 'Enter your shortcode' ,'meika'),
				'type' => Controls_Manager::TEXTAREA,
			]

			);
         $this->add_control(

			'tab_heading_three',

			[
				'label' => esc_html__( 'Sub Heading' ,'meika'),
				'type' => Controls_Manager::TEXT,
			]

			); 
        $this->add_control(

			'shortcode_three',

			[
				'label' => esc_html__( 'Enter your shortcode' ,'meika'),
				'type' => Controls_Manager::TEXTAREA,
			]

			);

		$this->end_controls_section();
        
         $this->start_controls_section(
            'slide_items_style', [
                'label' => esc_html__( 'Contact Style', 'meika' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'color_heading', [
                'label' => esc_html__( 'Heading Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );
                
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'typography_heading',
                'selector' => '{{WRAPPER}} .section-title h2',
            ]
        );
        
        $this->add_control(
            'about_content_one', [
                'label' => esc_html__( 'Btn Text Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                   '{{WRAPPER}} .contact-area li span.active' => 'color: {{VALUE}};',
                   '{{WRAPPER}} .contact-area li span:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'about_content_two', [
                'label' => esc_html__( 'Btn Background Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                   '{{WRAPPER}} .contact-area li span' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'about_content_three', [
                'label' => esc_html__( 'Btn Active Background Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                   '{{WRAPPER}} .contact-area li span:hover' => 'background: {{VALUE}};',
                   '{{WRAPPER}} .contact-area li span.active' => 'background: {{VALUE}};',
                   '{{WRAPPER}}  .btn.ss-btn' => 'background: {{VALUE}};',
                ],
            ]
        );
    
        $this->end_controls_section();

	}

	protected function render( $instance = [] ) {

        meika_el()->get_section('contact-sections-two', [
            
            'feature_img' => $this->get_settings('feature_img'),
            'text_heading' => $this->get_settings('text_heading'),
            'tab_heading_one' => $this->get_settings('tab_heading_one'),
        	'shortcode_one' => $this->get_settings('shortcode_one'),
            'tab_heading_two' => $this->get_settings('tab_heading_two'),
        	'shortcode_two' => $this->get_settings('shortcode_two'),
            'tab_heading_three' => $this->get_settings('tab_heading_three'),
        	'shortcode_three' => $this->get_settings('shortcode_three'),
            
			]);

	}

	protected function content_template() {}
    
	public function render_plain_content() {}

}
Plugin::instance()->widgets_manager->register_widget_type( new Elementor_Widget_contacts_two() );