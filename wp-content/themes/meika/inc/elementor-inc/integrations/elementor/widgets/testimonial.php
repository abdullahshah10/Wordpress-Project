<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_testimonial extends Widget_Base {

	public function get_name() {
		return 'Elementor-testimonial';
	}

	public function get_title() {
		return esc_html__( 'Zc >  Testimonial' ,'meika' );
	}

	public function get_icon() {
		
		return 'eicon-icon-box';
	}

	protected function _register_controls() {
		$traits = new \meika_Elementor_Traits($this);
		
		$this->start_controls_section(
			'services_section',
			['label' => esc_html__( 'Testimonials','meika'),]
		);
        
        
         $this->add_control(

            'back_img',

            [
                'label' => esc_html__( 'Background Image' ,'meika'),
                'type' => Controls_Manager::MEDIA,
            ]
            );
        
        $this->add_control(

            'icon_img',

            [
                'label' => esc_html__( 'Icon Image' ,'meika'),
                'type' => Controls_Manager::MEDIA,
            ]
            );
        $this->add_control(

            'qt_img',

            [
                'label' => esc_html__( 'Quotation Image' ,'meika'),
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

            'descr',

            [
                'label' => esc_html__( 'Description Text' ,'meika'),
                'type' => Controls_Manager::TEXTAREA,
            ]
            );
         				
		

        $repeater = new \Elementor\Repeater();

         $repeater->add_control(
            'avtar',
            [
                'label' => esc_html__( 'Avatar imag', 'meika' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'review',
            [
                'label' => esc_html__( 'Review image', 'meika' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'tlogo',
            [
                'label' => esc_html__( 'Logo image', 'meika' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'name',
            [
                'label' => esc_html__( 'Name', 'meika' ),
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
            'testimonial_repeater',
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
                'label' => esc_html__( 'Skill Style', 'meika' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'color_heading', [
                'label' => esc_html__( 'Heading Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-area h2' => 'color: {{VALUE}};',
                ],
            ]
        );
                
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'typography_heading',
                'selector' => '{{WRAPPER}} .testimonial-area h2',
            ]
        );
    
        $this->add_control(
            'color_decriptions', [
                'label' => esc_html__( 'Decriptions Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-testimonial p' => 'color: {{VALUE}};',
                ],
            ]
        );        
        
         $this->add_control(
            'color_name', [
                'label' => esc_html__( 'Name Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-active .ta-info h6' => 'color: {{VALUE}};',
                ],
            ]
        );        
        $this->add_control(
            'color_postions', [
                'label' => esc_html__( 'Postions Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-active .ta-info span' => 'color: {{VALUE}};',
                ],
            ]
        );       
        $this->add_control(
            'color_bigtext', [
                'label' => esc_html__( 'Big Text Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-area .text-bg h2' => 'color: {{VALUE}};',
                ],
            ]
        );        
    
        $this->add_control(
            'about_content_two', [
                'label' => esc_html__( 'Dots Background Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                   '{{WRAPPER}} .testimonial-active .slick-dots .slick-active button' => 'background: {{VALUE}};',
                ],
            ]
        );

    
        $this->end_controls_section();
		
	}

	protected function render( $instance = [] ) {

		meika_el()->get_section('testimonial', [
            
			'testimonial_repeater' => $this->get_settings('testimonial_repeater'), 
			'hading_section_data' => $this->get_settings('heading-text'),
			'back_img' => $this->get_settings('back_img'),
			'icon_img' => $this->get_settings('icon_img'),
			'qt_img' => $this->get_settings('qt_img'),
            'text_heading' => $this->get_settings('text_heading'),    
            'descr' => $this->get_settings('descr'),    
                   
          
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_testimonial() );