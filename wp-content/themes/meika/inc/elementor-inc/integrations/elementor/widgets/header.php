<?php
namespace Elementor;
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
class Elementor_Header_box extends Widget_Base {
public function get_name() {
return 'Elementor-Header-widget';
}
public function get_title() {
return __( 'Zc >  Header' ,'meika' );
}
public function get_icon() {
return 'eicon-slider-device';
}
protected function _register_controls() {
$traits = new \meika_Elementor_Traits($this);
$this->start_controls_section(
'section_tab', [
'label' =>esc_html__( 'Header', 'meika' ),
]
);
$this->add_control(
'style', [
'type'         => Controls_Manager::SELECT,
'label'         => esc_html__( 'Choose Style', 'meika' ),
'default'     => 'style1',
'label_block'     => true,
'options'     => [
'style1' =>esc_html__( 'Header Style 1', 'meika' ),
'style2' =>esc_html__( 'Header Style 2', 'meika' ),
'style3' =>esc_html__( 'Header Style 3', 'meika' ),
'style4' =>esc_html__( 'Scrollbox', 'meika' ),

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
                'style' =>['style22','style33'],
                ],
            'selectors' => [
                '{{WRAPPER}} .slider-bg2::before,.slider-bg3::before' => 'background-color: {{VALUE}};',
                '{{WRAPPER}} .slider-bg2 .slider-content.second-slider-content::before,.slider-bg2 .slider-content.second-slider-content::after' => 'border-color: {{VALUE}};',
            ],
        ]
    );

$this->add_control(
    'background_text', [
    'label'             =>esc_html__( 'Header Background Text', 'meika' ),
    'type'             => Controls_Manager::TEXT,
    'condition'      => [
    'style' =>['style1'],
    ],
]
);    
$this->add_control(
    'header_image', [
    'label'             =>esc_html__( 'Header Background', 'meika' ),
    'type'             => Controls_Manager::MEDIA,
    'condition'      => [
    'style' =>['style1','style2','style33'],
        ],
    ]
);
$this->add_control(
    'header_backgrund_images', [
    'label'             =>esc_html__( 'Slider Imges', 'meika' ),
    'type'             => Controls_Manager::MEDIA,
    'condition'      => [
    'style' =>['style3'],
        ],
    ]
);
$this->add_control(
    'header_images', [
    'label'             =>esc_html__( 'Ani Bg Two', 'meika' ),
    'type'             => Controls_Manager::MEDIA,
    'condition'      => [
    'style' =>['style5'],
        ],
    ]
);
$this->add_control(
    'header_images_one', [
    'label'             =>esc_html__( 'Ani Bg One', 'meika' ),
    'type'             => Controls_Manager::MEDIA,
    'condition'      => [
    'style' =>['style1'],
        ],
    ]
);
$this->add_control(
    'header_images_two', [
    'label'             =>esc_html__( 'Ani Bg Two', 'meika' ),
    'type'             => Controls_Manager::MEDIA,
    'condition'      => [
    'style' =>['style1'],
        ],
    ]
);
$this->add_control(
    'header_images_three', [
    'label'             =>esc_html__( 'Ani Bg Three', 'meika' ),
    'type'             => Controls_Manager::MEDIA,
    'condition'      => [
    'style' =>['style1'],
        ],
    ]
);
$this->add_control(
    'header_images_four', [
    'label'             =>esc_html__( 'Ani Bg Four', 'meika' ),
    'type'             => Controls_Manager::MEDIA,
    'condition'      => [
    'style' =>['style1'],
        ],
    ]
);
$this->add_control(
    'header_images_five', [
    'label'             =>esc_html__( 'Ani Bg Five', 'meika' ),
    'type'             => Controls_Manager::MEDIA,
    'condition'      => [
    'style' =>['style1'],
        ],
    ]
);
$this->add_control(
    'header_images_six', [
    'label'             =>esc_html__( 'Ani Bg Six', 'meika' ),
    'type'             => Controls_Manager::MEDIA,
    'condition'      => [
    'style' =>['style1'],
        ],
    ]
);
$this->add_control(
    'header_video', [
    'label'             =>esc_html__( 'Choose File Video', 'meika' ),
    'type'             => Controls_Manager::MEDIA,
    'condition'      => [
    'style' =>['style4'],
        ],
    ]
);
$this->add_control(
    'title_text', [
    'label'             =>esc_html__( 'Heading ', 'meika' ),
    'type'             => Controls_Manager::TEXT,
    'label_block'     => true,
    'placeholder'     =>esc_html__( 'Featured Products', 'meika' ),
    'default'         =>esc_html__( 'Featured', 'meika' ),
     'condition'      => [
    'style' =>['style1','style2','style3'],
    ],
    ]
);
$this->add_control(
    'sub_title', [
    'label'             =>esc_html__( 'Heading Sub Title', 'meika' ),
    'type'             => Controls_Manager::TEXTAREA,
    'label_block'     => true,
    'placeholder'     =>esc_html__( 'meika Text', 'meika' ),
    'default'         =>esc_html__( 'meika', 'meika' ),
    'condition'      => [
    'style' =>['style1','style3'],
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
    'style' => ['style1','style2','style3']
        ],
    ]
);
$this->add_control(
    'scrollbox_title', [
    'label'             =>esc_html__( 'Scrollbox Text', 'meika' ),
    'type'             => Controls_Manager::TEXTAREA,
    'label_block'     => true,
    'placeholder'     =>esc_html__( 'meika Text', 'meika' ),
    'default'         =>esc_html__( 'meika', 'meika' ),
    'condition'      => [
    'style' => ['style4']
        ],
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
    'style' => ['style12']
        ],
    ]
);
$this->add_control(
    'button_text', [
    'label'             =>esc_html__( 'Button Text', 'meika' ),
    'type'             => Controls_Manager::TEXT,
    'condition'      => [
    'style' =>[ 'style1','style2'],
        ],
    ]
);
$this->add_control(
    'button_link', [
    'label'             =>esc_html__( 'Button URL', 'meika' ),
    'type'             => Controls_Manager::URL,
    'condition'      => [
    'style' => ['style1','style2'],
        ],
    ]
);
$this->add_control(
    'button_text_contact', [
    'label'             =>esc_html__( 'Button Text Contact', 'meika' ),
    'type'             => Controls_Manager::TEXT,
    'condition'      => [
    'style' =>['style1','style12'],
        ],
    ]
); 
$this->add_control(
    'button_link_contact', [
    'label'             =>esc_html__( 'Button URL Contact', 'meika' ),
    'type'             => Controls_Manager::URL,
    'condition'      => [
    'style' => ['style1','style12'],
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
    'style' => ['style33']
        ],
    ]
);

$this->end_controls_section();
    
 $this->start_controls_section(
            'slide_items_style', [
                'label' => esc_html__( 'Slide Style', 'meika' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'color_heading', [
                'label' => esc_html__( 'Heading Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                     '{{WRAPPER}} .slider-content h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        
        $this->add_control(
            'color_heading_span', [
                'label' => esc_html__( 'Heading Span Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                     '{{WRAPPER}} .slider-content h4 span' => 'color: {{VALUE}};',
                ],
            ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'typography_heading',
                'selector' => '{{WRAPPER}} .slider-content h2',
            ]
        );

        $this->add_control(
            'color_subheading', [
                'label' => esc_html__( 'Sub Heading Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .slider-content h5' => 'color: {{VALUE}};',
                ],
            ]
        );
          $this->add_control(
            'color_subheading_span', [
                'label' => esc_html__( 'Heading Span Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                     '{{WRAPPER}} .slider-content h5 span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'typography_subheading',
                'selector' => '{{WRAPPER}} .slider-content h5',
            ]
        );
        $this->add_control(
            'color_decriptions', [
                'label' => esc_html__( 'Decriptions Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .slider-content p' => 'color: {{VALUE}};',
                ],
            ]
        );
        
        $this->add_control(
            'button_color1', [
                'label' => esc_html__( 'Button Text Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .btn.ss-btn' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_bg_color1', [
                'label' => esc_html__( 'Button Background Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .btn.ss-btn' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'button_color2', [
                'label' => esc_html__( 'Button Text Color - Active', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .btn.ss-btn.active' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'button_bg_color2', [
                'label' => esc_html__( 'Button Background Two Color', 'meika' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .btn.ss-btn.active' => 'background: {{VALUE}};',
                ],
            ]
        );
    
        $this->end_controls_section();
}
protected function render( $instance = [] ) {
$settings = $this->get_settings();
$style = $settings[ 'style' ];
$title_text = $settings[ 'title_text' ];
$sub_title = $settings[ 'sub_title' ];
$desc_title = $settings[ 'desc_title' ];
$slider_button = $settings[ 'slider_button' ];
$header_backgrund_images = $settings[ 'header_backgrund_images' ];
$background_text = $settings[ 'background_text' ];
$header_image = $settings[ 'header_image' ];
$header_images = $settings[ 'header_images' ];
$icon = $settings[ 'icon' ];
$button_text = $settings[ 'button_text' ];
$button_text_contact = $settings[ 'button_text_contact' ];
$button_link = $settings[ 'button_link' ];
$button_link_contact = $settings[ 'button_link_contact' ];
$shortcode = $settings[ 'shortcode' ];
$header_video = $settings[ 'header_video' ];
$header_images_one = $settings[ 'header_images_one' ];
$header_images_two = $settings[ 'header_images_two' ];
$header_images_three = $settings[ 'header_images_three' ];
$header_images_four = $settings[ 'header_images_four' ];
$header_images_five = $settings[ 'header_images_five' ];
$header_images_six = $settings[ 'header_images_six' ];
$scrollbox_title = $settings[ 'scrollbox_title' ];

switch ( $style ) {
case 'style1':
require get_template_directory() . '/inc/sections/header/style1.php';
break;
case 'style2':
require get_template_directory() . '/inc/sections/header/style2.php';
break;
case 'style3':
require get_template_directory() . '/inc/sections/header/style3.php';
break;
case 'style4':
require get_template_directory() . '/inc/sections/header/style4.php';
break;
}
}
protected function content_template() {}
public function render_plain_content() {}
}
Plugin::instance()->widgets_manager->register_widget_type( new Elementor_Header_box() );