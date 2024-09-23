<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_plans extends Widget_Base {

	public function get_name() {
		return 'Elementor_plans';
	}

	public function get_title() {
		return esc_html__( 'Zc > Our Plans','meika');
	}

	public function get_icon() {
		
		 return 'eicon-image-box';
	 }

	protected function _register_controls() {
		$traits = new \meika_Elementor_Traits($this);

		$this->start_controls_section(
			'the_why_choose_controls',
			['label' => esc_html__( 'Our Plans','meika'),]
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
                    'label' => esc_html__( 'Text Heading' ,'meika'),
                    'type' => Controls_Manager::TEXT,
                ]

			);
        $this->add_control(

			'text_desic',

                [
                    'label' => esc_html__( 'Text Dsiccation' ,'meika'),
                    'type' => Controls_Manager::TEXTAREA,
                ]

			);


		$this->end_controls_section();
	}

	protected function render( $instance = [] ) {


		meika_el()->get_section('our-plans', [
            
			'back_img' => $this->get_settings('back_img'),
			'text_desic' => $this->get_settings('text_desic'),
			'text_heading' => $this->get_settings('text_heading'),
			'sub_heading' => $this->get_settings('sub_heading'),
                   
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_plans() );
