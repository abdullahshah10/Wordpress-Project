<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Widget_Blog extends Widget_Base {

	public function get_name() {
		return 'Elementor-Widget-Blog';
	}

	public function get_title() {
		return esc_html__( 'Zc > Blog Feed', 'meika' );
	}

	public function get_icon() {
		return 'eicon-posts-masonry';
	}

	protected function _register_controls() {
		$traits = new \meika_Elementor_Traits($this);

		$this->start_controls_section(
			'blog_controller',
			['label' => esc_html__( 'Blog Feed', 'meika' ),]
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
				'label' => esc_html__( 'Text Heading' ,'meika'),
				'type' => Controls_Manager::TEXT,
			]
			);
			
            $this->add_control(

			'discretion',
			[
				'label' => esc_html__( 'Discretion' ,'meika'),
				'type' => Controls_Manager::TEXTAREA,
			]
			);
			
        
		$this->add_control(
			'posts_per_page',
			[
				'label'   => esc_html__( 'Number of items to show', 'meika' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 6,
			]
		);

		$this->add_control(
			'select_categories',
			[
				'label' => esc_html__( 'Filter by Categories', 'meika' ),
				'type' => Controls_Manager::SELECT2,
				'options' => meika_el()->get_terms_dropdown_array([
					'taxonomy' => 'category',
					'hide_empty' => false,
					]),
				'multiple' => true,
			]
		);

		$this->add_control(
			'select_posts',
			[
				'label' => esc_html__( 'Filter by Post.', 'meika' ),
				'type' => Controls_Manager::SELECT2,
				'options' => meika_el()->get_posts_dropdown_array([
					'post_type' => 'post',
					'posts_per_page' => -1,
					]),
				'multiple' => true,
			]
		);

		$this->end_controls_section();
        
         $this->start_controls_section(
            'slide_items_style', [
                'label' => esc_html__( 'Blog Style', 'meika' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'color_heading_one', [
                 'label' => esc_html__( 'Heading Color', 'meika' ),
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
            'color_heading', [
                'label' => esc_html__( 'Blog Heading Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-content2 h4 a' => 'color: {{VALUE}};',
                ],
            ]
        );
                
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'typography_heading_blog',
                'selector' => '{{WRAPPER}} .blog-content2 h4 a',
            ]
        );
        
        $this->add_control(
            'color_decriptions', [
                'label' => esc_html__( 'Decriptions Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-content2' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .b-meta ul li' => 'color: {{VALUE}};',
                ],
            ]
        );   
        $this->add_control(
            'color_icon', [
                'label' => esc_html__( 'Icon Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .b-meta i' => 'color: {{VALUE}};',
                ],
            ]
        );   
        $this->add_control(
            'about_content_one', [
                'label' => esc_html__( 'Btn Text Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                   '{{WRAPPER}} .btn.ss-btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'about_content_two', [
                'label' => esc_html__( 'Btn Background Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                   '{{WRAPPER}} .btn.ss-btn' => 'background: {{VALUE}};',
                ],
            ]
        );

    
        $this->end_controls_section();
        
	}

	protected function render( $instance = [] ) {
        
		meika_el()->get_section('blog', [
			
		
			'discretion' => $this->get_settings('discretion'),
            'text_heading' => $this->get_settings('text_heading'),
            'icon' => $this->get_settings('icon'),
			'img' => $this->get_settings('img'),
			'menu-id01' => $this->get_settings('menu-id'),
			'posts_per_page' => $this->get_settings('posts_per_page'),
			'category' => $this->get_settings('select_categories'),
			'include' => $this->get_settings('select_posts'),
          
             'desc' => $this->get_settings('desc'),
			'paged' => ( get_query_var('paged') ) ? get_query_var('paged') : 1,
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_Widget_Blog() );
