<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_service_two_box extends Widget_Base {

	public function get_name() {
		return 'Elementor-service-two-widget';
	}

	public function get_title() {
		return __( 'Zc >  Service Two Box' ,'meika' );
	}

	public function get_icon() {
		
		return 'eicon-icon-box';
	}

	protected function _register_controls() {
		$traits = new \meika_Elementor_Traits($this);
		
		$this->start_controls_section(
			'services_section',
			['label' => esc_html__( 'Service One Section','meika'),]
		);
          $this->add_control(

            'icon',
            [
                'label' => esc_html__( 'Icon Image' ,'meika'),
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
             
			'description',
			[

				'label' => esc_html__( 'Description' ,'meika'),
				'type' => Controls_Manager::TEXTAREA,
			]
			);
        
        
		 $repeater = new \Elementor\Repeater();

         $repeater->add_control(
            'icon',
            [
                'label' => esc_html__( 'Icon image', 'meika' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'feature_img',
            [
                'label' => esc_html__( 'Feature Image', 'meika' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
            ]
        );
        
        $repeater->add_control(
            'heading_text',
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
        $repeater->add_control(
            'button_link',
            [
                'label' => esc_html__( 'Button Link', 'meika' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
            ]
        );
        
        $repeater->add_control(
            'box_img',
            [
                'label' => esc_html__( 'Box Bg Image', 'meika' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
            ]
        );
        
         

      
        $this->add_control(
            'service_repeater',
            [
                'label' => esc_html__( 'All Slides', 'meika' ),
                'type' =>Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                          'heading_text'   => 'Web Designe',
                    ],
                   
                ],
                'title_field' => '{{{heading_text}}}'
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
            'color_decriptions', [
                'label' => esc_html__( 'Text Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .services-content-05 p' => 'color: {{VALUE}};',
                ],
            ]
        );
        
         $this->add_control(
            'about_content_one', [
                'label' => esc_html__( 'Box Heading Text Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .services-content-05 h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'about_content_two', [
                'label' => esc_html__( 'Dots Background Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .services-active .slick-dots li.slick-active button' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .services-content-05 a' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .hover-underline-animation::after' => 'background: {{VALUE}};',
                ],
            ]
        );

    
        $this->end_controls_section();
        
	}

	protected function render( $instance = [] ) {

		meika_el()->get_section('service-two', [
            'service_repeater' => $this->get_settings('service_repeater'), 
			'icon' => $this->get_settings('icon'),
			'description' => $this->get_settings('description'),
			'text_heading' => $this->get_settings('text_heading'),
			'posts_per_page' => $this->get_settings('posts_per_page'),

			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_service_two_box() );