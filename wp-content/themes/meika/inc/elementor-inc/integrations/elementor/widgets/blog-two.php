<?php
namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Elementor_blog_two extends Widget_Base
{
	public function get_name()
	{
		return 'Elementor-blog-two-widget';
	}

	public function get_title()
	{
		return __('Zc >  Blog Two', 'meika');
	}

	public function get_icon()
	{
		return 'eicon-icon-box';
	}

	protected function _register_controls()
	{
		$traits = new \meika_Elementor_Traits($this);
		$this->start_controls_section('section_tab', ['label' => esc_html__('Blog', 'meika'),]);
        
       
        
         $this->add_control(
             
			'icon',

			[

				'label' => esc_html__( 'Icon Image' ,'meika'),

				'type' => Controls_Manager::MEDIA,
                
                'condition'      => [                    
                'style' =>['style1','style2'],
                ],

			]

			);
        
        
        
          $this->add_control(
             
			'text_heading',

			[

				'label' => esc_html__( 'Text Heading' ,'meika'),

				'type' => Controls_Manager::TEXT,
                
                'condition'      => [                    
                  'style' =>['style1','style2'],
                ],

			]

			);
        
        
          
            $this->add_control(
             
			'decr_heading',

			[

				'label' => esc_html__( 'Description' ,'meika'),

				'type' => Controls_Manager::TEXT,
                
                'condition'      => [                    
                 'style' =>['style1'],
                ],

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
			'style',
			[
				'type' => Controls_Manager::SELECT, 'label' => esc_html__('Choose Style', 'meika'), 'default' => 'style1',
				'label_block' => true, 'options' => [
					'style1' => esc_html__('Blog Style 1', 'meika'), 
					'style2' => esc_html__('Blog Style 2', 'meika'), 
                    'style3' => esc_html__('blog Carousel', 'meika'),
				],
			]
		);
		$this->end_controls_section();
	}
	protected function render($instance = [])
	{
		$settings = $this->get_settings();        
                
        $icon = $settings['icon'];
        $text_heading = $settings['text_heading'];
        $decr_heading = $settings['decr_heading'];
         $posts_per_page = $settings['posts_per_page'];
       $category = $settings['select_categories'];
        
        
        
		$style = $settings['style'];
		switch ($style) {
			case 'style1':
				require get_template_directory() . '/inc/sections/blog/style1.php';
				break;
                
            case 'style2':
				require get_template_directory() . '/inc/sections/blog/style2.php';
				break;              
          

			case 'style3':
				require get_template_directory() . '/inc/sections/blog/style3.php';
				break;
		}
	}
	protected function content_template() {}
	public function render_plain_content() {}
}

Plugin::instance()->widgets_manager->register_widget_type(new Elementor_blog_two());
