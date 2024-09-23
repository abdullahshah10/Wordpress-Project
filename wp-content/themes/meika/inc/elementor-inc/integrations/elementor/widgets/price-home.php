<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_price_home_widget extends Widget_Base {

	public function get_name() {
		return 'Elementor-price-home';
	}

	public function get_title() {
		return esc_html__( 'Zc > Home Price' ,'meika');
	}

	public function get_icon() {
		
		return 'eicon-price-table';
	}

	protected function _register_controls() {
		$traits = new \meika_Elementor_Traits($this);
		
		$this->start_controls_section(
			'price-icon-control',
			['label' => esc_html__( 'Price Section','meika'),]
		);
        
          $this->add_control(

			'text_heading',
			[
				'label' => esc_html__( 'Text Heading' ,'meika'),
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
		$this->add_control(
			'Repeator',
			[
				'label' => esc_html__( 'Price Icon','meika'),
				'type' => Controls_Manager::REPEATER,
				'fields' =>array_merge([
                    
                  [
						'name' => 'active_changer',
					   'label' => esc_html__( 'active', 'meika'),
					   'type' => Controls_Manager::SELECT2,
					   'default' => 'd-active',
					   'options' => [
						'd-active' => esc_html__( 'D-Active', 'meika'),
						'active' => esc_html__( 'Active', 'meika'),

                        ],

                    ],

                   [
                        'name' => 'text',
                        'label' => esc_html__( 'Text' ,'meika' ),
                        'type' => Controls_Manager::TEXT,

                    ],	
				
				
                    [
						'name' => 'price',
						'label' => esc_html__( 'price','meika'),
						'type' => Controls_Manager::TEXT,
					],
				    
                     [
						'name' => 'price_text',
						'label' => esc_html__( 'Price Text','meika'),
						'type' => Controls_Manager::TEXTAREA,
					],
                    
                    [
						'name' => 'content',
						'label' => esc_html__( 'content' ,'meika'),
						'type' => Controls_Manager::TEXTAREA,
					],
                    
					[

						'name' => 'price-button',

						'label' => esc_html__( 'Price Button Text' ,'meika'),

						'type' => Controls_Manager::TEXT,

					],
					
					[

						'name' => 'price-button-link',

						'label' => esc_html__( 'url' ,'meika'),

						'type' => Controls_Manager::URL,

						'default' => [

							'url' => '',

							'is_external' => true,

						],

						'show_external' => false,

						'separator' => 'after',

					],
					
				]),
			]
		);
         
		$this->end_controls_section();
        
         $this->start_controls_section(
            'slide_items_style', [
                'label' => esc_html__( 'Pricing Style', 'meika' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'color_heading', [
                'label' => esc_html__( 'Price Color', 'meika' ),
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
                'label' => esc_html__( 'Decriptions Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title p' => 'color: {{VALUE}};',
                ],
            ]
        );        
    
        $this->add_control(
            'about_content_one', [
                'label' => esc_html__( 'Pricing Text And Background Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                   '{{WRAPPER}} .pricing-box2.active' => 'background: {{VALUE}};',
                   '{{WRAPPER}} .pricing-btn .btn' => 'background: {{VALUE}};',
                   '{{WRAPPER}} .price-count h2' => 'color: {{VALUE}};',
                   '{{WRAPPER}} .pricing-body li::before' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .pricing-box.active .pricing-btn .btn' => 'color: {{VALUE}};',
                ],
            ]
        );
         $this->add_control(
            'about_content_two', [
                'label' => esc_html__( 'Pricing Active Text And Background Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                   '{{WRAPPER}} .pricing-box.active .pricing-btn .btn' => 'background: {{VALUE}};',
                   '{{WRAPPER}} .pricing-box2.active .price-count h2' => 'color: {{VALUE}};',
                   '{{WRAPPER}} .pricing-box2.active .pricing-head h3' => 'color: {{VALUE}};',
                   '{{WRAPPER}} .pricing-box2.active .pricing-body li::before' => 'color: {{VALUE}};',
                ],
            ]
        );
    
        $this->end_controls_section();
		
	}

	protected function render( $instance = [] ) {

		meika_el()->get_section('price-home', [
            
			'Repeators' => $this->get_settings('Repeator'),
            'text_heading' => $this->get_settings('text_heading'),
            'sub_heading' => $this->get_settings('sub_heading'),
	       
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_price_home_widget() );