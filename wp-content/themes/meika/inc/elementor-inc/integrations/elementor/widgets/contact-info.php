<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Contact_Info extends Widget_Base {

	public function get_name() {
		return 'Elementor-contact-info';
	}

	public function get_title() {
		return __( 'Zc >  Contact Info' ,'meika' );
	}

	public function get_icon() {
		
		return 'eicon-icon-box';
	}

	protected function _register_controls() {
		$traits = new \meika_Elementor_Traits($this);
		
		$this->start_controls_section(
			'services_section',
			['label' => esc_html__( 'Contact Info','meika'),]
		);
        
        $this->add_control(

			'text_heading',
                [

                    'label' => esc_html__( 'Heading' ,'meika'),
                    'type' => Controls_Manager::TEXT,
                ]
			);
        $this->add_control(

			'sub_heading',
                [

                    'label' => esc_html__( 'Sub Heading' ,'meika'),
                    'type' => Controls_Manager::TEXTAREA,
                ]
			);
        
        
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'hero_image', [
                'label' => esc_html__( 'Icon', 'meika' ),
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
                'label' => esc_html__( 'Content Text', 'meika' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => 'Get <span>Insurance</span> For Anything You Need',
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

		meika_el()->get_section('contact-info', [
            
			'hero_slides' => $this->get_settings('hero_slides'),
            'text_heading' => $this->get_settings('text_heading'),
			'sub_heading' => $this->get_settings('sub_heading'),
          
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_Contact_Info() );