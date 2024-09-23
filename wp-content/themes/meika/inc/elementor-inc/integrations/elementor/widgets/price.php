<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_price_icon_widget extends Widget_Base {

	public function get_name() {
		return 'Elementor-price-icon';
	}

	public function get_title() {
		return esc_html__( 'Zc > Price' ,'meika');
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

            'icon_img',

            [
                'label' => esc_html__( 'Icon Image' ,'meika'),
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
            'classtext',
            [
                'label' => esc_html__( 'Class Text', 'meika' ),
                'type' => Controls_Manager::TEXT,
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
            'heading',
            [
                'label' => esc_html__( 'Heading', 'meika' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => '01',
            ]
        );
       
        
         $repeater->add_control(
            'price',
            [
                'label' => esc_html__( 'Price', 'meika' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => 'Insurance Police',
            ]
        );
        $repeater->add_control(
            'price_text',
            [
                'label' => esc_html__( 'Price Text', 'meika' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => 'Insurance Police',
            ]
        );
        $repeater->add_control(
            'content',
            [
                'label' => esc_html__( 'Content', 'meika' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => 'Insurance Police',
            ]
        );
        
         $repeater->add_control(
            'price_button_text',
            [
                'label' => esc_html__( 'Price Button Text', 'meika' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => 'Insurance Police',
            ]
        );
        
      $repeater->add_control(
            'price_button_link',
            [
                'label' => esc_html__( 'Price Button Link', 'meika' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
            ]
        );
         $repeater->add_control(
            'price_trusted_text',
            [
                'label' => esc_html__( 'Price Trusted Text', 'meika' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => 'Insurance Police',
            ]
        );
        $this->add_control(
            'price_repeater',
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
                   '{{WRAPPER}} .pricing-box.active' => 'background: {{VALUE}};',
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
                   '{{WRAPPER}} .pricing-box.active .price-count h2' => 'color: {{VALUE}};',
                   '{{WRAPPER}} .pricing-box.active .pricing-head h3' => 'color: {{VALUE}};',
                   '{{WRAPPER}} .pricing-box.active .pricing-body li::before' => 'color: {{VALUE}};',
                ],
            ]
        );
    
        $this->end_controls_section();
		
	}

	protected function render( $instance = [] ) {

		meika_el()->get_section('price', [
            
			'price_repeater' => $this->get_settings('price_repeater'),
            'icon_img' => $this->get_settings('icon_img'),
            'text_heading' => $this->get_settings('text_heading'),
            'descr' => $this->get_settings('descr'),
	       
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_price_icon_widget() );