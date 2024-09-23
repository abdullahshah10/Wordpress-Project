<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Widget_header_slider extends Widget_Base {

	public function get_name() {
		return 'Elementor-Widget-header-slider';
	}

	public function get_title() {
		return esc_html__( 'Zc > Header Slider', 'meika' );
	}

	public function get_icon() {
		return 'eicon-slider-device';
	}

	protected function _register_controls() {
		$traits = new \meika_Elementor_Traits($this);
        
         $this->start_controls_section(
            'hero_section_heading',
            [
                'label' => esc_html__( 'Slider - Hero', 'meika' ),
            ]
        );
        
       $this->add_control(

            'ani_bg',
            [
                'label' => esc_html__( 'Animations Bg' ,'meika'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'hero_image', [
                'label' => esc_html__( 'Slide Background Image', 'meika' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
                'default' => [
                    'url' => plugin_dir_url( __DIR__ ).'assets/img/slide1.jpg',
                ],
            ]
        );
        $repeater->add_control(
            'hero_subtitle',
            [
                'label' => esc_html__( 'Sub Heading Text', 'meika' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => 'Welcome <span>Insureyou</span>',
            ]
        );
        $repeater->add_control(
            'hero_heading',
            [
                'label' => esc_html__( 'Heading Text', 'meika' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => 'Get <span>Insurance</span> For Anything You Need',
            ]
        );
        
       
        $repeater->add_control(
            'button_text',
            [
                'label' => esc_html__( 'Button Title - Active', 'meika' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => 'View Causes',                
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
            'hero_slides',
            [
                'label' => esc_html__( 'All Slides', 'meika' ),
                'type' =>Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'hero_image' => [
                            'url' => plugin_dir_url( __DIR__ ).'assets/img/slide1.jpg',
                        ],
                        'hero_heading'   => 'Get <span>Insurance</span> For Anything You Need',
                    ],
                   
                ],
                'title_field' => '{{{hero_heading}}}'
            ]
        );

        $this->end_controls_section();
        
        $this->start_controls_section(
            'slide_items_style', [
                'label' => esc_html__( 'Slide Style', 'meika' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'color_heading', [
                'label' => esc_html__( 'Heading Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                     '{{WRAPPER}} .slider-content h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        
        $this->add_control(
            'color_heading_span', [
                'label' => esc_html__( 'Heading Span Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                     '{{WRAPPER}} .slider-content h2 span' => 'color: {{VALUE}};',
                ],
            ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'typography_heading',
                'selector' => '{{WRAPPER}} .slider-content h2',
            ]
        );

        $this->add_control(
            'color_subheading', [
                'label' => esc_html__( 'Sub Heading Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .slider-content h5' => 'color: {{VALUE}};',
                ],
            ]
        );
          $this->add_control(
            'color_subheading_span', [
                'label' => esc_html__( 'Heading Span Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                     '{{WRAPPER}} .slider-content h5 span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'typography_subheading',
                'selector' => '{{WRAPPER}} .slider-content h5',
            ]
        );
        $this->add_control(
            'color_decriptions', [
                'label' => esc_html__( 'Decriptions Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .slider-content p' => 'color: {{VALUE}};',
                ],
            ]
        );
        
        $this->add_control(
            'button_color1', [
                'label' => esc_html__( 'Button Text Color - Active', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .btn.ss-btn' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_bg_color1', [
                'label' => esc_html__( 'Button Background Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .btn.ss-btn' => 'background: {{VALUE}};',
                ],
            ]
        );

    
        $this->end_controls_section();
		
	}

	protected function render( $instance = [] ) {

		meika_el()->get_section('header-slider', [
			'ani_bg' => $this->get_settings('ani_bg'),
			'hero_slides' => $this->get_settings('hero_slides'),
			'hero_ani_one' => $this->get_settings('hero_ani_one'),
			'hero_ani_two' => $this->get_settings('hero_ani_two'),
			'hero_ani_three' => $this->get_settings('hero_ani_three'),
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_Widget_header_slider() );