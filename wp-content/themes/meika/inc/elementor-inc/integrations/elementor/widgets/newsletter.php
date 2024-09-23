<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_newsletter_box extends Widget_Base {

	public function get_name() {
		return 'Elementor-newsletter-widget';
	}

	public function get_title() {
		return __( 'Zc >  Newsletter Box' ,'meika' );
	}

	public function get_icon() {
		
		return 'eicon-icon-box';
	}

	protected function _register_controls() {
		$traits = new \meika_Elementor_Traits($this);
		
		$this->start_controls_section(
			'services_section',
			['label' => esc_html__( 'Newsletter','meika'),]
		);
        
        $this->add_control(

			'back_img',
            
                [

                    'label' => esc_html__( 'Background Image' ,'meika'),
                    'type' => Controls_Manager::MEDIA,
                ]
			);
         $this->add_control(

			'sub_heading',
            
                [

                    'label' => esc_html__( 'Sub Heading' ,'meika'),
                    'type' => Controls_Manager::TEXT,
                ]
			);
        
        $this->add_control(

			'text_heading',
            
                [

                    'label' => esc_html__( 'Top Heading' ,'meika'),
                    'type' => Controls_Manager::TEXT,
                ]
			);
        
      
          $this->add_control(

			'shortcode_newsletter',
              
                [

                    'label' => esc_html__( 'Shortcode' ,'meika'),
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
                    '{{WRAPPER}} .newslater-area h2' => 'color: {{VALUE}};',
                ],
            ]
        );
                
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'typography_heading',
                'selector' => '{{WRAPPER}} .newslater-area h2',
            ]
        );
        $this->add_control(
            'color_decriptions', [
                'label' => esc_html__( 'Decriptions Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .newslater-area p' => 'color: {{VALUE}};',
                ],
            ]
        );   
        $this->add_control(
            'about_content_one', [
                'label' => esc_html__( 'Btn Text Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                   '{{WRAPPER}} .newslater-area #contact-form4 button' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'about_content_two', [
                'label' => esc_html__( 'Btn Background Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                   '{{WRAPPER}} .newslater-area #contact-form4 button' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'about_content_three', [
                'label' => esc_html__( 'Btn Hover Background Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                   '{{WRAPPER}} .newslater-area #contact-form4 button:hover' => 'background: {{VALUE}};',
                ],
            ]
        );
    
        $this->end_controls_section();
        
	}

	protected function render( $instance = [] ) {

		meika_el()->get_section('newsletter', [
            
			'back_img' => $this->get_settings('back_img'),
			'text_heading' => $this->get_settings('text_heading'),
			'sub_heading' => $this->get_settings('sub_heading'),
			'shortcode_newsletter' => $this->get_settings('shortcode_newsletter'),
           
          
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_newsletter_box() );