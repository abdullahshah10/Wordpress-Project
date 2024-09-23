<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_support extends Widget_Base {

	public function get_name() {
		return 'Elementor_support';
	}

	public function get_title() {
		return esc_html__( 'Zc > Support','meika');
	}

	public function get_icon() {
		
		 return 'eicon-image-box';
	 }

	protected function _register_controls() {
		$traits = new \meika_Elementor_Traits($this);

		$this->start_controls_section(
			'the_why_choose_controls',
			['label' => esc_html__( 'Support','meika'),]
		);
        
         $this->add_control(

			'sub_text',

                [
                    'label' => esc_html__( 'Sub Text' ,'meika'),
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

			'text_phone',

                [
                    'label' => esc_html__( 'Phone No' ,'meika'),
                    'type' => Controls_Manager::TEXT,
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

			'button_link',

                [
                    'label' => esc_html__( 'Button Link' ,'meika'),
                    'type' => Controls_Manager::URL,
                ]

			);

		$this->end_controls_section();
	}

	protected function render( $instance = [] ) {


		meika_el()->get_section('support', [
            
			'sub_text' => $this->get_settings('sub_text'),
			'text_heading' => $this->get_settings('text_heading'),
			'text_phone' => $this->get_settings('text_phone'),
			'button_text' => $this->get_settings('button_text'),
			'button_link' => $this->get_settings('button_link'),
                   
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_support() );
