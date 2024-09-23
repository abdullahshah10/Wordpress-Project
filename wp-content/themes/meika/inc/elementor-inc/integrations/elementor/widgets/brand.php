<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Brand_Box extends Widget_Base {

	public function get_name() {
		return 'Elementor-brand-widget';
	}

	public function get_title() {
		return __( 'Zc >  Brand Box' ,'meika' );
	}

	public function get_icon() {
		
		return 'eicon-icon-box';
	}

	protected function _register_controls() {
		$traits = new \meika_Elementor_Traits($this);
		
		$this->start_controls_section(
			'services_section',
			['label' => esc_html__( 'Brand','meika'),]
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
        
       
      
        $this->add_control(
            'clogo_repeater',
            [
                'label' => esc_html__( 'All Slides', 'meika' ),
                'type' =>Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                          'avtar'   => 'Insurance Police',
                    ],
                   
                ],
                'title_field' => '{{{avtar}}}'
            ]
        );

         
		$this->end_controls_section();
	}

	protected function render( $instance = [] ) {

		meika_el()->get_section('brand', [
            
			'clogo_repeater' => $this->get_settings('clogo_repeater'),
          
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_Brand_Box() );