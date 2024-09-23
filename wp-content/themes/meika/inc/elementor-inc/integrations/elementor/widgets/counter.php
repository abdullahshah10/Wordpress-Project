<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_counter_box extends Widget_Base {

	public function get_name() {
		return 'Elementor-counter-widget';
	}

	public function get_title() {
		return __( 'Zc >  Counter Box' ,'meika' );
	}

	public function get_icon() {
		
		return 'eicon-icon-box';
	}

	protected function _register_controls() {
		$traits = new \meika_Elementor_Traits($this);
		
		$this->start_controls_section(
			'services_section',
			['label' => esc_html__( 'Counter','meika'),]
		);
        
          $this->add_control(

            'back_img',

            [
                'label' => esc_html__( 'Background Image' ,'meika'),
                'type' => Controls_Manager::MEDIA,
            ]
            );
        
		 $repeater = new \Elementor\Repeater();

      
        $repeater->add_control(
            'increment',
            [
                'label' => esc_html__( 'Number Text', 'meika' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => 'Get <span>Insurance</span> For Anything You Need',
            ]
        );
         $repeater->add_control(
            'symbols',
            [
                'label' => esc_html__( 'Symbols Text', 'meika' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => 'Welcome <span>Insureyou</span>',
            ]
        );       
        $repeater->add_control(
            'dec_text',
            [
                'label' => esc_html__( 'Description', 'meika' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => 'View Causes',                
            ]
        );      

        $this->add_control(
            'count_slides',
            [
                'label' => esc_html__( 'All Slides', 'meika' ),
                'type' =>Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),    
            ]
        );

		$this->end_controls_section();
        
        $this->start_controls_section(
            'slide_items_style', [
                'label' => esc_html__( 'Counter Style', 'meika' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'color_heading', [
                'label' => esc_html__( 'Heading Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                     '{{WRAPPER}} .counter span' => 'color: {{VALUE}};',
                ],
            ]
        );
                
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'typography_heading',
                'selector' => '{{WRAPPER}} .count',
            ]
        );
    
        $this->add_control(
            'color_decriptions', [
                'label' => esc_html__( 'Decriptions Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter-area .container p' => 'color: {{VALUE}};',
                ],
            ]
        );
        
      

    
        $this->end_controls_section();
        
	}

	protected function render( $instance = [] ) {

		meika_el()->get_section('counter', [
            
			'count_slides' => $this->get_settings('count_slides'),
			'back_img' => $this->get_settings('back_img'),
          
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_counter_box() );