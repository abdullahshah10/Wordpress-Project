<?php
namespace Elementor;
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
class Elementor_About_Box extends Widget_Base {
public function get_name() {
return 'Elementor-About-widget';
}
public function get_title() {
return __( 'Zc >  About' ,'meika' );
}
public function get_icon() {
return 'eicon-slider-device';
}
protected function _register_controls() {
$traits = new \meika_Elementor_Traits($this);
$this->start_controls_section(
'section_tab', [
'label' =>esc_html__( 'About', 'meika' ),
]
);
$this->add_control(
'style', [
'type'         => Controls_Manager::SELECT,
'label'         => esc_html__( 'Choose Style', 'meika' ),
'default'     => 'style1',
'label_block'     => true,
'options'     => [
'style1' =>esc_html__( 'About Style 1', 'meika' ),
'style2' =>esc_html__( 'About Style 2', 'meika' ),
'style3' =>esc_html__( 'About Style 3', 'meika' ),
'style4' =>esc_html__( 'About Style 4', 'meika' ),
'style5' =>esc_html__( 'About Style 5', 'meika' ),
'style6' =>esc_html__( 'What we do', 'meika' ),
                  
],
]
);
$this->add_control(
'icon', [
'label'             =>esc_html__( 'Icon', 'meika' ),
'type'             => Controls_Manager::TEXT,
'condition'      => [
'style' =>['style5'],
],
]
);

$this->add_control(
			'header_background_color',
			[
				'label' => __( 'Background Color Overlay', 'meika' ),
				'type' => Controls_Manager::COLOR,
				'condition'      => [
					'style' =>['style2','style3'],
					],
				'selectors' => [
					'{{WRAPPER}} .slider-bg2::before,.slider-bg3::before' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .slider-bg2 .slider-content.second-slider-content::before,.slider-bg2 .slider-content.second-slider-content::after' => 'border-color: {{VALUE}};',
				],
			]
		);
		
		

$this->add_control(
    'about_backgrund_images', [
    'label'             =>esc_html__( 'Background Image', 'meika' ),
    'type'             => Controls_Manager::MEDIA,
    'condition'      => [
    'style' =>['style1','style6'],
    ],
]
);
$this->add_control(
    'main_img', [
    'label'             =>esc_html__( 'Main Image', 'meika' ),
    'type'             => Controls_Manager::MEDIA,
    'condition'      => [
    'style' =>['style1','style2','style3','style4','style5'],
    ],
    ]
);
    
$this->add_control(
    'icon_image', [
    'label'             =>esc_html__( 'Icon Images', 'meika' ),
    'type'             => Controls_Manager::MEDIA,
    'condition'      => [
    'style' =>['style1','style2','style3','style5','style6'],
    ],
    ]
);  
$this->add_control(
    'text_heading', [
    'label'             =>esc_html__( 'Text Heading', 'meika' ),
    'type'             => Controls_Manager::TEXT,
    'condition'      => [
    'style' =>['style1','style2','style3','style4','style5','style6'],
    ],
    ]
);    
$this->add_control(
    'sub_heading', [
    'label'             =>esc_html__( 'Sub Heading', 'meika' ),
    'type'             => Controls_Manager::TEXT,
    'label_block'     => true,
    'placeholder'     =>esc_html__( 'meika Text', 'meika' ),
    'default'         =>esc_html__( 'meika', 'meika' ),
    'condition'      => [
    'style' =>['style1','style2','style3','style6'],
    ],
    ]
);      

$this->add_control(
    'header_video', [
    'label'             =>esc_html__( 'Choose File Video', 'meika' ),
    'type'             => Controls_Manager::MEDIA,
    'condition'      => [
    'style' =>['style8'],
    ],
    ]
);
$this->add_control(
    'exp', [
    'label'             =>esc_html__( 'Experience', 'meika' ),
    'type'             => Controls_Manager::TEXTAREA    ,
    'condition'      => [
    'style' =>['style8','style2'],
    ],
    ]
);        
$this->add_control(
    'desc_title', [
    'label'             =>esc_html__( 'Description', 'meika' ),
    'type'             => Controls_Manager::TEXTAREA,
    'label_block'     => true,
    'placeholder'     =>esc_html__( 'meika Text', 'meika' ),
    'default'         =>esc_html__( 'meika', 'meika' ),
    'condition'      => [
    'style' => ['style1','style2','style3','style5']
    ],
    ]
);
$this->add_control(
'desc_title1', [
'label'             =>esc_html__( 'Description 1', 'meika' ),
'type'             => Controls_Manager::TEXTAREA,
'label_block'     => true,
'placeholder'     =>esc_html__( 'meika Text', 'meika' ),
'default'         =>esc_html__( 'meika', 'meika' ),
'condition'      => [
'style' => ['style8']
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
    'icon',
    [
        'label' => esc_html__( 'Icon Image', 'meika' ),
        'type' => Controls_Manager::MEDIA,
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
    'ptext',
    [
        'label' => esc_html__( 'Content Text', 'meika' ),
        'type' => Controls_Manager::TEXT,
        'label_block' => true,
    ]    
);


$this->add_control(
    'about_service_repeater',
    [
        'label' => esc_html__( 'Counter Slides', 'meika' ),
        'type' =>Controls_Manager::REPEATER,
        'condition'      => [
            'style' => ['style3','style6']
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
    
$this->add_control(
    'slider_button', [
    'label'             =>esc_html__( 'Slider Button Text', 'meika' ),
    'type'             => Controls_Manager::TEXTAREA,
    'label_block'     => true,
    'placeholder'     =>esc_html__( 'meika Text', 'meika' ),
    'default'         =>esc_html__( 'Read More', 'meika' ),
    'condition'      => [
    'style' => ['style8']
    ],
    ]
);
$this->add_control(
    'button_text', [
    'label'             =>esc_html__( 'Button Text', 'meika' ),
    'type'             => Controls_Manager::TEXT,
    'condition'      => [
    'style' =>['style1','style2','style4','style5','style6'],
    ],
    ]
);
$this->add_control(
    'button_link', [
    'label'             =>esc_html__( 'Button URL', 'meika' ),
    'type'             => Controls_Manager::URL,
    'condition'      => [
    'style' => ['style1','style2','style4','style5','style6'],
    ],
    ]
);
$this->add_control(
    'button_text1', [
    'label'             =>esc_html__( 'Button Text 1', 'meika' ),
    'type'             => Controls_Manager::TEXT,
    'condition'      => [
    'style' =>['style6'],
    ],
    ]
);   
$this->add_control(
    'button_text_icon', [
    'label'             =>esc_html__( 'Video Icon', 'meika' ),
    'type'             => Controls_Manager::MEDIA,
    'condition'      => [
    'style' =>['style1'],
    ],
    ]
); 
$this->add_control(
    'button_link1', [
    'label'             =>esc_html__( 'Button URL 1', 'meika' ),
    'type'             => Controls_Manager::URL,
    'condition'      => [
    'style' => ['style1','style6'],
    ],
    ]
);
$this->add_control(
    'gal_img_one', [
    'label'             =>esc_html__( 'Galler Image One', 'meika' ),
    'type'             => Controls_Manager::MEDIA,
    'condition'      => [
    'style' =>['style58'],
    ],
    ]
);
$this->add_control(
    'gal_img_two', [
    'label'             =>esc_html__( 'Galler Image Two', 'meika' ),
    'type'             => Controls_Manager::MEDIA,
    'condition'      => [
    'style' =>['style58'],
    ],
    ]
);
$this->add_control(
    'gal_img_three', [
    'label'             =>esc_html__( 'Galler Image Three', 'meika' ),
    'type'             => Controls_Manager::MEDIA,
    'condition'      => [
    'style' =>['style58'],
    ],
    ]
);
$this->add_control(
    'posts_per_page',
    [
    'label'   => esc_html__( 'Number of items to show', 'meika' ),
    'type'    => Controls_Manager::NUMBER,
    'default' => 10,
    'condition' => [
      'style' => ['style58']  
    ],
    ]
);
$this->add_control(
    'shortcode',
    [
    'label' => __( 'Enter your shortcode', 'meika' ),
    'type' => Controls_Manager::TEXTAREA,
    'dynamic' => [
    'active' => true,
    ],
    'placeholder' => '[gallery id="123" size="medium"]',
    'default' => '',
    'condition'      => [
    'style' => ['style10']
    ],
    ]
);

$this->end_controls_section();
 $this->start_controls_section(
            'slide_items_style', [
                'label' => esc_html__( 'About Style', 'meika' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'color_heading', [
                'label' => esc_html__( 'Heading Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                     '{{WRAPPER}} .about-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );
                
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'typography_heading',
                'selector' => '{{WRAPPER}} .about-title h2',
            ]
        );
    
        $this->add_control(
            'color_decriptions', [
                'label' => esc_html__( 'Decriptions Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .s-about-content p' => 'color: {{VALUE}};',
                ],
            ]
        );
        
        $this->add_control(
            'about_content_one', [
                'label' => esc_html__( 'Ul li Text Color - Active', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-content li' => 'color: {{VALUE}};',
                ],
            ]
        );
         $this->add_control(
            'about_content_three', [
                'label' => esc_html__( 'Ul li Before Text Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-content3 li::before' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'about_content_two', [
                'label' => esc_html__( 'Ul li Before Background Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-content3 li::before' => 'background: {{VALUE}};',
                ],
            ]
        );

    
        $this->end_controls_section();
}
protected function render( $instance = [] ) {
$settings = $this->get_settings();
$style = $settings[ 'style' ];
$about_backgrund_images = $settings[ 'about_backgrund_images' ];    
$main_img = $settings[ 'main_img' ];    
$icon_image = $settings[ 'icon_image' ];
$text_heading = $settings[ 'text_heading' ];
$sub_heading = $settings[ 'sub_heading' ];
$exp = $settings[ 'exp' ];
$desc_title = $settings[ 'desc_title' ];
$desc_title1 = $settings[ 'desc_title1' ];
$slider_button = $settings[ 'slider_button' ];
$icon = $settings[ 'icon' ];
$button_text = $settings[ 'button_text' ];
$button_link = $settings[ 'button_link' ];
$button_text1 = $settings[ 'button_text1' ];
$button_link1 = $settings[ 'button_link1' ];
$shortcode = $settings[ 'shortcode' ];
$posts_per_page = $settings['posts_per_page'];
$header_video = $settings[ 'header_video' ];
$gal_img_one = $settings[ 'gal_img_one' ];
$gal_img_two = $settings[ 'gal_img_two' ];
$gal_img_three = $settings[ 'gal_img_three' ];
$button_text_icon = $settings[ 'button_text_icon' ];
$about_service_repeater = $settings[ 'about_service_repeater' ];

switch ( $style ) {
case 'style1':
require get_template_directory() . '/inc/sections/about/style1.php';
break;
case 'style2':
require get_template_directory() . '/inc/sections/about/style2.php';
break;
case 'style3':
require get_template_directory() . '/inc/sections/about/style3.php';
break;
case 'style4':
require get_template_directory() . '/inc/sections/about/style4.php';
break;
case 'style5':
require get_template_directory() . '/inc/sections/about/style5.php';
break;
case 'style6':
require get_template_directory() . '/inc/sections/about/style6.php';
break;
}
}
protected function content_template() {}
public function render_plain_content() {}
}
Plugin::instance()->widgets_manager->register_widget_type( new Elementor_About_Box() );