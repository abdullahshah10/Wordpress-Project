<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_service_box extends Widget_Base {

	public function get_name() {
		return 'Elementor-service-widget';
	}

	public function get_title() {
		return __( 'Zc >  Service Box' ,'meika' );
	}

	public function get_icon() {
		
		return 'eicon-icon-box';
	}

	protected function _register_controls() {
		$traits = new \meika_Elementor_Traits($this);
		
		$this->start_controls_section(
			'services_section',
			['label' => esc_html__( 'Service Section','meika'),]
		);
        
        $this->add_control(
             
			'icon',

			[
				'label' => esc_html__( 'Icon' ,'meika'),
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
             
			'decs',
			[

				'label' => esc_html__( 'Description' ,'meika'),
				'type' => Controls_Manager::TEXTAREA,
			]
			);
        
            $this->add_control(

			'button_text',
			[
				'label' => esc_html__( 'Button Text' ,'meika'),
				'type' => Controls_Manager::TEXT,
			]
			);
			
            $this->add_control(

			'button_url',
			[
				'label' => esc_html__( 'Button Url' ,'meika'),
				'type' => Controls_Manager::URL,
			]
			);
        
       
		$this->add_control(
			'posts_per_page',
			[
				'label'   => esc_html__( 'Number of items to show', 'meika' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 6,
			]
		);
        
         
		$this->end_controls_section();
        
        $this->start_controls_section(
            'slide_items_style', [
                'label' => esc_html__( 'Services Style', 'meika' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'color_heading', [
                'label' => esc_html__( 'Heading Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                     '{{WRAPPER}} .services-05 h2' => 'color: {{VALUE}};',
                ],
            ]
        );
                
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'typography_heading',
                'selector' => '{{WRAPPER}} .services-05 h2',
            ]
        );
    
        $this->add_control(
            'color_decriptions', [
                'label' => esc_html__( 'Text Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .services-box-02 .services-content2 p' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .services-box-02 .services-content2 h4' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .services-box-02 .services-content2 .link' => 'color: {{VALUE}};',
                ],
            ]
        );
        
         $this->add_control(
            'about_content_one', [
                'label' => esc_html__( 'BG Text Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .services-05 .text-bg h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'about_content_two', [
                'label' => esc_html__( 'Dots Background Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .services-active .slick-dots li.slick-active button' => 'background: {{VALUE}};',
                ],
            ]
        );

    
        $this->end_controls_section();
        
	}

	protected function render( $instance = [] ) {

		meika_el()->get_section('service', [

			'service_section_var' => $this->get_settings('service_section'),
			'decs' => $this->get_settings('decs'),
			'text_heading' => $this->get_settings('text_heading'),
            'button_text' => $this->get_settings('button_text'),
            'button_url' => $this->get_settings('button_url'),
			'posts_per_page' => $this->get_settings('posts_per_page'),
			'icon' => $this->get_settings('icon'),

			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_service_box() );