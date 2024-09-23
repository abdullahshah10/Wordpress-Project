<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_faq_two extends Widget_Base {

	public function get_name() {
		return 'Elementor_faq_two';
	}

	public function get_title() {
		return esc_html__( 'Zc > Faq Two','meika');
	}

	public function get_icon() {
		
		 return 'eicon-image-box';
	 }

	protected function _register_controls() {
		$traits = new \meika_Elementor_Traits($this);

		$this->start_controls_section(
			'faq_two_controls',
			['label' => esc_html__( 'Faq Two Section','meika'),]
		);        
          $this->add_control(

			'sub_heading',

			[
				'label' => esc_html__( 'Text Heading' ,'meika'),
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

			'decs',

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

						'name' => 'text-id',

						'label' => esc_html__( 'Tab id ' ,'meika' ),

						'type' => Controls_Manager::TEXT,

					],
                    
                     [

						'name' => 'text-class',

						'label' => esc_html__( 'Tab Class ' ,'meika' ),

						'type' => Controls_Manager::TEXT,

					],
                    
                     [

						'name' => 'text-class-two',

						'label' => esc_html__( 'Tab Class Two ' ,'meika' ),

						'type' => Controls_Manager::TEXT,

					],
						 
					[

						'name' => 'text',

						'label' => esc_html__( 'Text' ,'meika' ),

						'type' => Controls_Manager::TEXT,

					],

					[

						'name' => 'content',

						'label' => esc_html__( 'Content','meika'),

						'type' => Controls_Manager::TEXTAREA,

					],
					

				],

			]

		);

		$this->end_controls_section();
	}

	protected function render( $instance = [] ) {


		meika_el()->get_section('faq-two', [
			'service_section_var' => $this->get_settings('service_section'),
            'decs' => $this->get_settings('decs'),
            'text_heading' => $this->get_settings('text_heading'),
            'sub_heading' => $this->get_settings('sub_heading'),           
                   
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_faq_two() );
