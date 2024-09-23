<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_video extends Widget_Base {

	public function get_name() {
		return 'Elementor_video';
	}

	public function get_title() {
		return esc_html__( 'Zc > Video','meika');
	}

	public function get_icon() {
		
		 return 'eicon-image-box';
	 }

	protected function _register_controls() {
		$traits = new \meika_Elementor_Traits($this);

		$this->start_controls_section(
			'the_why_choose_controls',
			['label' => esc_html__( 'Video','meika'),]
		);
        
         $this->add_control(

			'back_img',

                [
                    'label' => esc_html__( 'Background Image' ,'meika'),
                    'type' => Controls_Manager::MEDIA,
                ]

			);
         $this->add_control(

			'ani_img',

                [
                    'label' => esc_html__( 'Animations Image' ,'meika'),
                    'type' => Controls_Manager::MEDIA,
                ]

			);
        $this->add_control(

			'ani_img_two',

                [
                    'label' => esc_html__( 'Animations Image Two' ,'meika'),
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

			'sub_heading',

                [
                    'label' => esc_html__( 'Sub Heading Text' ,'meika'),
                    'type' => Controls_Manager::TEXT,
                ]

			);

      
       $this->add_control(

			'heading_text',

                [
                    'label' => esc_html__( 'Heading Text' ,'meika'),
                    'type' => Controls_Manager::TEXT,
                ]

			);
        
        $this->add_control(

			'decrip',

                [
                    'label' => esc_html__( 'Description Text' ,'meika'),
                    'type' => Controls_Manager::TEXTAREA,
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
        $this->add_control(

			'video_img',

                [
                    'label' => esc_html__( 'Video Image' ,'meika'),
                    'type' => Controls_Manager::MEDIA,
                ]

			);
         $this->add_control(

			'video_link',

                [
                    'label' => esc_html__( 'Video Link' ,'meika'),
                    'type' => Controls_Manager::URL,
                ]

			);
		$this->end_controls_section();
        
        $this->start_controls_section(
            'slide_items_style', [
                'label' => esc_html__( 'Video Style', 'meika' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'color_heading', [
                'label' => esc_html__( 'Heading Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                     '{{WRAPPER}} .s-video-content h2' => 'color: {{VALUE}};',
                     '{{WRAPPER}} .s-video-content h6' => 'color: {{VALUE}};',
                ],
            ]
        );
                
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'typography_heading',
                'selector' => '{{WRAPPER}} .s-video-content h2',
            ]
        );    
      
    
        $this->end_controls_section();
	}

	protected function render( $instance = [] ) {


		meika_el()->get_section('video', [
            
			'back_img' => $this->get_settings('back_img'),
			'icon_img' => $this->get_settings('icon_img'),
			'button_link' => $this->get_settings('button_link'),
			'video_link' => $this->get_settings('video_link'),
			'button_text' => $this->get_settings('button_text'),
			'heading_text' => $this->get_settings('heading_text'),
			'sub_heading' => $this->get_settings('sub_heading'),
			'decrip' => $this->get_settings('decrip'),
			'video_img' => $this->get_settings('video_img'),
			'ani_img' => $this->get_settings('ani_img'),
			'ani_img_two' => $this->get_settings('ani_img_two'),
                   
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_video() );
