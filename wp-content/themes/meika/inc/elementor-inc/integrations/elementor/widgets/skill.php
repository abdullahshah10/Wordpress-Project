<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Skill_Box extends Widget_Base {

	public function get_name() {
		return 'Elementor-skill-widget';
	}

	public function get_title() {
		return __( 'Zc >  Skill Box' ,'meika' );
	}

	public function get_icon() {
		
		return 'eicon-icon-box';
	}

	protected function _register_controls() {
		$traits = new \meika_Elementor_Traits($this);
		
		$this->start_controls_section(
			'services_section',
			['label' => esc_html__( 'Skill','meika'),]
		);
        
        
        
        $this->add_control(

			'icon_img',

			[
				'label' => esc_html__( 'Feature Image' ,'meika'),
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
				'label' => esc_html__( 'Text Heading' ,'meika'),
				'type' => Controls_Manager::TEXT,

			]
			);  
        
    
        
        $this->add_control(

			'desc',

			[
				'label' => esc_html__( 'Description' ,'meika'),
				'type' => Controls_Manager::TEXTAREA,

			]
			);  
    
        
        
		$this->add_control(
			'service_section',
			[
				'label' => esc_html__( 'Repeator Text','meika'),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					
                    [                    
						'name' => 'text',
						'label' => esc_html__( 'Heading' ,'meika' ),
						'type' => Controls_Manager::TEXT,
					],
                    
                    [                    
						'name' => 'increment',
						'label' => esc_html__( 'Increment' ,'meika' ),
						'type' => Controls_Manager::TEXT,
					],
                              
				],
			]
		);
         
		$this->end_controls_section();
        $this->start_controls_section(
            'slide_items_style', [
                'label' => esc_html__( 'Skill Style', 'meika' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'color_heading', [
                'label' => esc_html__( 'Heading Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .skills-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );
                
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'typography_heading',
                'selector' => '{{WRAPPER}} .skills-title h2',
            ]
        );
    
        $this->add_control(
            'color_decriptions', [
                'label' => esc_html__( 'Decriptions Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .s-about-content p' => 'color: {{VALUE}};',
                ],
            ]
        );        
    
        $this->add_control(
            'about_content_two', [
                'label' => esc_html__( 'Skill Bar Background Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                   '{{WRAPPER}} .skill-per::before' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .skill-per::after' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .skill-per' => 'background: {{VALUE}};',
                ],
            ]
        );

    
        $this->end_controls_section();
       
        
	}

	protected function render( $instance = [] ) {

		meika_el()->get_section('skill', [
            
			'service_section_var' => $this->get_settings('service_section'),
			'icon_img' => $this->get_settings('icon_img'),
			'sub_heading' => $this->get_settings('sub_heading'),
			'text_heading' => $this->get_settings('text_heading'),
			'desc' => $this->get_settings('desc'),
          
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_Skill_Box() );