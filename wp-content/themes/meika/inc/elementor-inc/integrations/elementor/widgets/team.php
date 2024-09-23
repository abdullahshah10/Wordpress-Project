<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_team extends Widget_Base {

	public function get_name() {

		return 'Elementor-team';

	}

	public function get_title() {

		return esc_html__( 'Zc >  Team' ,'meika' );

	}

	public function get_icon() {

		return 'eicon-icon-box';

	}

	protected function _register_controls() {

		$traits = new \meika_Elementor_Traits($this);


		$this->start_controls_section(

			'services_section',

			['label' => esc_html__( 'Our Team','meika'),]

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
				'label' => esc_html__( 'Top Heading' ,'meika'),
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
        	
            $this->add_control(
                    'posts_per_page',
                    [
                        'label'   => esc_html__( 'Number of items to show', 'meika' ),
                        'type'    => Controls_Manager::NUMBER,
                        'default' => 4,
                    ]
                );
         

		$this->end_controls_section();

	}

	protected function render( $instance = [] ) {
        
		meika_el()->get_section('team', [

        'icon' => $this->get_settings('icon'),
        'text_heading' => $this->get_settings('text_heading'),
        'description' => $this->get_settings('description'),
        'posts_per_page' => $this->get_settings('posts_per_page'),
            
        ]);

	}


	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_team() );