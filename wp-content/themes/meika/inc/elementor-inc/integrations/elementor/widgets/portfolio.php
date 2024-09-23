<?php
namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Elementor_portfolio extends Widget_Base
{
	public function get_name()
	{
		return 'Elementor-portfolio-widget';
	}

	public function get_title()
	{
		return __('Zc >  Portfolio', 'meika');
	}

	public function get_icon()
	{
		return 'eicon-icon-box';
	}

	protected function _register_controls()
	{
		$traits = new \meika_Elementor_Traits($this);
		$this->start_controls_section('section_tab', ['label' => esc_html__('Portfolio', 'meika'),]);
        
        
        $this->add_control(

			'back_img',

			[

				'label' => esc_html__( 'Background Image' ,'meika'),
				'type' => Controls_Manager::MEDIA,
                'condition'      => [
                          'style' =>['style2','style3'],
                        ],
			]

			);
        
        $this->add_control(

			'icon_img',

			[

				'label' => esc_html__( 'Icon Image' ,'meika'),
				'type' => Controls_Manager::MEDIA,
                'condition'      => [
                          'style' =>['style1','style2','style3'],
                        ],
			]

			);
        $this->add_control(

			'sub_heading',

			[

				'label' => esc_html__( 'Sub Heading' ,'meika'),
				'type' => Controls_Manager::TEXT,
                'condition'      => [
                        'style' =>['style8'],
                        ],

			]

			);
        
        $this->add_control(

			'text_heading',

			[

				'label' => esc_html__( 'Heading' ,'meika'),
				'type' => Controls_Manager::TEXT,
                'condition'      => [
                        'style' =>['style1','style2','style3'],
                        ],

			]

			);
         $this->add_control(

			'text_description',

			[

				'label' => esc_html__( 'Description' ,'meika'),
				'type' => Controls_Manager::TEXTAREA,
                'condition'      => [
                        'style' =>['style1','style2','style3'],
                        ],

			]

			);
        $this->add_control(
            'button_text', [
            'label'             =>esc_html__( 'Button Text', 'meika' ),
            'type'             => Controls_Manager::TEXT,
            'condition'      => [
            'style' =>['style2'],
            ],
            ]
        );
        
        $this->add_control(
            'button_link', [
            'label'             =>esc_html__( 'Button URL', 'meika' ),
            'type'             => Controls_Manager::URL,
            'condition'      => [
            'style' => ['style2'],
            ],
            ]
        );        
        
      
        $this->add_control(
			'posts_per_page',
			[
				'label'   => esc_html__( 'Number of items to show', 'meika' ),
				'type'    => Controls_Manager::NUMBER,
                 'condition'      => [
                    'style' => ['style4'],
                    ],
				'default' => 8,
			]
		);
        
        $this->add_control(
			'select_categories',
			[
				'label' => esc_html__( 'Filter by Categories', 'meika' ),
				'type' => Controls_Manager::SELECT2,
                 'condition'      => [
                    'style' => ['style3'],
                    ],
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
					'style1' => esc_html__('Portfolio Style 1', 'meika'), 
					'style2' => esc_html__('Portfolio Style 2', 'meika'), 
                    'style3' => esc_html__('Portfolio Style 3', 'meika'),
                    'style4' => esc_html__('Portfolio Style 4', 'meika'),
				],
			]
		);
        
            
            $repeater = new \Elementor\Repeater();  

            $repeater->add_control(
                'classtext',
                [
                    'label' => esc_html__( 'Class', 'meika' ),
                    'type' => Controls_Manager::TEXT,
                    'label_block' => true,
                ]    
            );
            $repeater->add_control(
                'main_image',
                [
                    'label' => esc_html__( 'Main Image', 'meika' ),
                    'type' => Controls_Manager::MEDIA,
                    'label_block' => true,
                ]    
            );
            $repeater->add_control(
                'date',
                [
                    'label' => esc_html__( 'Date Text', 'meika' ),
                    'type' => Controls_Manager::TEXT,
                    'label_block' => true,
                ]    
            );
            $repeater->add_control(
                'category',
                [
                    'label' => esc_html__( 'Category Text', 'meika' ),
                    'type' => Controls_Manager::TEXT,
                    'label_block' => true,
                ]    
            );
            $repeater->add_control(
                'htext',
                [
                    'label' => esc_html__( 'Heading Text', 'meika' ),
                    'type' => Controls_Manager::TEXT,
                    'label_block' => true,
                ]    
            );
             $repeater->add_control(
                'button_link',
                [
                    'label' => esc_html__( 'Button URL', 'meika' ),
                    'type' => Controls_Manager::URL,
                    'label_block' => true,
                ]    
            );
            $this->add_control(
                'about_service_repeater',
                [
                    'label' => esc_html__( 'Counter Slides', 'meika' ),
                    'type' =>Controls_Manager::REPEATER,
                    'condition'      => [
                        'style' => ['style2','style3']
                        ],
                    'fields' => $repeater->get_controls(),
                    'default' => [
                        [
                              'htext'   => 'UX/UI Design',
                        ],

                    ],
                    'title_field' => '{{{htext}}}'
                ]
            );
        
        
         $repeater = new \Elementor\Repeater();  


            $repeater->add_control(
                'main_image',
                [
                    'label' => esc_html__( 'Logo Image', 'meika' ),
                    'type' => Controls_Manager::MEDIA,
                    'label_block' => true,
                ]    
            );
         
            $this->add_control(
                'about_brand_repeater',
                [
                    'label' => esc_html__( 'Barnd Logo Slides', 'meika' ),
                    'type' =>Controls_Manager::REPEATER,
                    'condition'      => [
                        'style' => ['style3']
                        ],
                    'fields' => $repeater->get_controls(),
                    'default' => [
                        [
                              'main_image'   => 'UX/UI Design',
                        ],

                    ],
                    'main_image' => '{{{main_image}}}'
                ]
            );


		$this->end_controls_section();
        
        $this->start_controls_section(
            'slide_items_style', [
                'label' => esc_html__( 'Portfolio Style', 'meika' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        
        
        
        $this->add_control(
            'color_heading', [
                'label' => esc_html__( 'Heading Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery-image figcaption h4' => 'color: {{VALUE}};',
                ],
            ]
        );
                
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'typography_heading',
                'selector' => '{{WRAPPER}} .gallery-image figcaption h4',
            ]
        );
    
        $this->add_control(
            'color_decriptions', [
                'label' => esc_html__( 'Decriptions Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery-image figcaption p' => 'color: {{VALUE}};',
                ],
            ]
        );   
    
        $this->add_control(
            'about_content_two', [
                'label' => esc_html__( 'Background Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                   '{{WRAPPER}} .gallery-image figcaption' => 'background: {{VALUE}};',
                ],
            ]
        );

    
        $this->end_controls_section();
	}
	protected function render($instance = [])
	{
		$settings = $this->get_settings();
        $back_img = $settings[ 'back_img' ];  
        $icon_img = $settings[ 'icon_img' ];  
        $sub_heading = $settings[ 'sub_heading' ];  
        $text_heading = $settings[ 'text_heading' ];  
        $text_description = $settings[ 'text_description' ];  
        $button_text = $settings[ 'button_text' ];
        $button_link = $settings[ 'button_link' ];
        $posts_per_page = $settings['posts_per_page'];
        $category = $settings['select_categories'];
        $about_service_repeater = $settings['about_service_repeater'];
        $about_brand_repeater = $settings['about_brand_repeater'];
		$style = $settings['style'];
		switch ($style) {
			case 'style1':
				require get_template_directory() . '/inc/sections/portfolio/style1.php';
				break;
                
            case 'style2':
				require get_template_directory() . '/inc/sections/portfolio/style2.php';
				break;  
                
			case 'style3':
				require get_template_directory() . '/inc/sections/portfolio/style3.php';
				break;
                
            case 'style4':
            require get_template_directory() . '/inc/sections/portfolio/style4.php';
            break;
		}
	}
	protected function content_template() {}
    
	public function render_plain_content() {}
}

Plugin::instance()->widgets_manager->register_widget_type(new Elementor_portfolio());
