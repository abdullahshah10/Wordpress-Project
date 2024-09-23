<?php
/**
 * Post metaboxes configuration
 *
 * @package  meika.
 */

add_filter( 'rwmb_meta_boxes', 'meikazc_register_meta_boxes' );
function meikazc_register_meta_boxes( $meta_boxes ) {
    $prefix = 'meikazc_';
	$meta_boxes[] = array(
        'id'         => 'Quote',
        'title'      => esc_html__( 'Post Quote', 'meika' ),
        'post_types' => 'post',
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(          
			 array(
                'name'  => esc_html__( 'Quote', 'meika' ),
                'desc'  => esc_html__( 'Quote Text Add Here', 'meika' ),
                'id'    => $prefix . 'post_quote',
                 'type'    => 'textarea',
            ),
        )
    );
	$meta_boxes[] = array(
        'id'         => 'Link',
        'title'      => esc_html__( 'Post Link', 'meika' ),
        'post_types' => 'post',
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(          
			 array(
                'name'  => esc_html__( 'Link', 'meika' ),
                'desc'  => esc_html__( 'Link Add Here', 'meika' ),
                'id'    => $prefix . 'post_link',
                 'type'    => 'text',
            ),
        )
    );
    $meta_boxes[] = array(
        'id'         => 'blog-sections',
        'title'      => esc_html__( 'Post Gallery', 'meika' ),
        'post_types' => 'post',
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(
            array(
                'name'  => esc_html__( 'Gallery', 'meika' ),
                'desc'  => '',
                'id'    => $prefix . 'post_gallery',
                'type'             => 'image_advanced',

				// Delete file from Media Library when remove it from post meta?
				// Note: it might affect other posts if you use same file for multiple posts
				'force_delete'     => false,

				// Maximum file uploads.
				'max_file_uploads' => 10,

				// Do not show how many files uploaded/remaining.
				'max_status'       => 'false',

				// Image size that displays in the edit page.
				'image_size'       => 'thumbnail',
            ),
			
        )
    );
	$meta_boxes[] = array(
        'id'         => 'video-sections',
        'title'      => esc_html__( 'Post Video', 'meika' ),
        'post_types' => 'post',
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(          
			 array(
                'name'  => esc_html__( 'Video', 'meika' ),
                'desc'  => esc_html__( 'Youtube & Viemo Url Add Here', 'meika' ),
                'id'    => $prefix . 'post_video',
                'type'  => 'text',

				// Input size
				'size'  => 30,
            ),
        )
    );
	$meta_boxes[] = array(
        'id'         => 'audio-sections',
        'title'      => esc_html__( 'Post Audio', 'meika' ),
        'post_types' => 'post',
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(          
			 array(
                'name'  => esc_html__( 'Audio', 'meika' ),
                'desc'  => esc_html__( 'Soundcloud Embed Ifram Add Here', 'meika' ),
                'id'    => $prefix . 'post_audio',
                'type'  => 'text',

				// Input size
				'size'  => 30,
            ),
        )
    );
	


      $meta_boxes[] = array(
        'id'         => 'Banner',
        'title'      => esc_html__( 'Banner Img', 'meika' ),
        'post_types' => 'portfolio',
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(          
			 array(
                'name'  => esc_html__( 'Banner Img', 'meika' ),
                'desc'  => esc_html__( 'Banner Img Text Here', 'meika' ),
                'id'    => $prefix . 'post_banner',
                 'type'    => 'image_advanced',
            ),
        )
    );
	
	$meta_boxes[] = array(
        'id'         => 'team-postions-sections',
        'title'      => esc_html__( 'Team Post', 'meika' ),
        'post_types' => 'team',
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(          
			 array(
                'name'  => esc_html__( 'Team Post', 'meika' ),
                'desc'  => esc_html__( 'Text Add Here', 'meika' ),
                'id'    => $prefix . 'post_team_postions',
                'type'  => 'text',

				// Input size
				'size'  => 30,
            ),
        )
    );
    
    $meta_boxes[] = array(
        'id'         => 'team-social-sections',
        'title'      => esc_html__( 'Team Social Icons', 'meika' ),
        'post_types' => 'team',
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(          
			 array(
                'name'  => esc_html__( 'Team Social', 'meika' ),
                'desc'  => esc_html__( 'Text Add Here', 'meika' ),
                'id'    => $prefix . 'post_social',
                'type'  => 'textarea',

				// Input size
				'size'  => 50,
            ),
        )
    );
    
    $meta_boxes[] = array(
        'id'         => 'team-info-sections',
        'title'      => esc_html__( 'Team Info Text', 'meika' ),
        'post_types' => 'team',
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(          
			 array(
                'name'  => esc_html__( 'Team Info', 'meika' ),
                'desc'  => esc_html__( 'Text Add Here', 'meika' ),
                'id'    => $prefix . 'post_team_info',
                'type'  => 'textarea',

				// Input size
				'size'  => 50,
            ),
        )
    );
    
    $meta_boxes[] = array(
        'id'         => 'service-icon-sections',
        'title'      => esc_html__( 'Service Icons', 'meika' ),
        'post_types' => 'service',
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(          
			 array(
                'name'  => esc_html__( 'Service Icon', 'meika' ),
                'desc'  => esc_html__( 'Icon Add Here', 'meika' ),
                'id'    => $prefix . 'post_single_sicon',
                'type'  => 'image_advanced',

				// Input size
				'size'  => 50,
            ),
            array(
                'name'  => esc_html__( 'Service Icon Hover', 'meika' ),
                'desc'  => esc_html__( 'Icon Add Here', 'meika' ),
                'id'    => $prefix . 'post_single_sicon_hover',
                'type'  => 'image_advanced',

				// Input size
				'size'  => 50,
            ),
            array(
                'name'  => esc_html__( 'Service bg Hover', 'meika' ),
                'desc'  => esc_html__( 'Icon Add Here', 'meika' ),
                'id'    => $prefix . 'post_single_sicon_bghover',
                'type'  => 'image_advanced',

				// Input size
				'size'  => 50,
            ),
        )
    );
    
    $meta_boxes[] = array(
        'id'         => 'service-image-sections',
        'title'      => esc_html__( 'Service Image', 'meika' ),
        'post_types' => 'service',
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(          
			 array(
                'name'  => esc_html__( 'Service Image', 'meika' ),
                'desc'  => esc_html__( 'Image Add Here', 'meika' ),
                'id'    => $prefix . 'post_single_img',
                'type'  => 'image_advanced',

				// Input size
				'size'  => 50,
            ),
        )
    );
    
    $meta_boxes[] = array(
        'id'         => 'protfolio-image-sections',
        'title'      => esc_html__( 'Banner Image', 'meika' ),
        'post_types' => 'zcportfolio',
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(          
			 array(
                'name'  => esc_html__( 'Banner Image', 'meika' ),
                'desc'  => esc_html__( 'Image Add Here', 'meika' ),
                'id'    => $prefix . 'post_single_img',
                'type'  => 'image_advanced',

				// Input size
				'size'  => 50,
            ),
        )
    );
    
   
    // Add more meta boxes if you want
    // $meta_boxes[] = ...

    return $meta_boxes;
}