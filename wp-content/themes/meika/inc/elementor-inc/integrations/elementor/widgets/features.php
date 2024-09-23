<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_features_box extends Widget_Base {

	public function get_name() {
		return 'Elementor-features-widget';
	}

	public function get_title() {
		return __( 'Zc >  Features Box' ,'meika' );
	}

	public function get_icon() {
		
		return 'eicon-icon-box';
	}

	protected function _register_controls() {
		$traits = new \meika_Elementor_Traits($this);
		
	        
         $this->start_controls_section(
            'hero_section_heading',
            [
                'label' => esc_html__( 'Feature - Box', 'meika' ),
            ]
        );      

        $repeater = new \Elementor\Repeater();
        
        $repeater->add_control(
            'icon_font',
            [
                'label' => esc_html__( 'Icon', 'meika' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => '01',
            ]
        );
        $repeater->add_control(
            'heading',
            [
                'label' => esc_html__( 'Heading Text', 'meika' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => 'Insurance Police',
            ]
        );
        $repeater->add_control(
            'button_link',
            [
                'label' => esc_html__( 'Button Link', 'meika' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'placeholder' => __( 'https://', 'meika' ),
                'default' => [
                    'url' => '#',
                ],
            ]
        );

     

        $this->add_control(
            'feature_box_repeater',
            [
                'label' => esc_html__( 'All Slides', 'meika' ),
                'type' =>Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                          'heading'   => 'Insurance Police',
                    ],
                   
                ],
                'title_field' => '{{{heading}}}'
            ]
        );

        $this->end_controls_section();
        
        $this->start_controls_section(
            'slide_items_style', [
                'label' => esc_html__( 'Feature Box Style', 'meika' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'color_heading', [
                'label' => esc_html__( 'Heading Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                     '{{WRAPPER}} .services-box01 h5' => 'color: {{VALUE}};',
                ],
            ]
        );
                
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'typography_heading',
                'selector' => '{{WRAPPER}} .services-box01 h5',
            ]
        );
    
        $this->add_control(
            'color_decriptions', [
                'label' => esc_html__( 'Decriptions Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .services-box01 p' => 'color: {{VALUE}};',
                ],
            ]
        );
      
        $this->add_control(
            'about_content_two', [
                'label' => esc_html__( 'Link and Background Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .services-box01 h5::before' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .hover-underline-animation::after' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .services-box01 a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'about_content_one', [
                'label' => esc_html__( 'Number Text Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .services-box01 .number' => 'color: {{VALUE}};',
                ],
            ]
        );
    
        $this->end_controls_section();
        
	}

	protected function render( $instance = [] ) {

		meika_el()->get_section('features', [
            'feature_box_repeater' => $this->get_settings('feature_box_repeater'),
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_features_box() );