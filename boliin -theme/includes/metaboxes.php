<?php
function boliin_register_meta_boxes(){
	$prefix = 'boliin_';
	global $meta_boxes;
	$meta_boxes = array();

	/* ====== Metabox Template ====== */
	$meta_boxes[] = array(
		'id'    => 'gavias_metaboxes_page',
		'title' => esc_html__('Page Meta', 'boliin'),
		'pages' => array( 'gva__template'),
		'priority'   => 'high',
		'fields' => array(
			array(
				'name' => esc_html__('Template Type', 'boliin'),
				'id'   => "gva_template_type",
				'type' => 'text'
			),
		)
	);

	/* ====== Metabox Page ====== */
	$meta_boxes[] = array(
		'id'    => 'gavias_metaboxes_page',
		'title' => esc_html__('Page Meta', 'boliin'),
		'pages' => array( 'page'),
		'priority'   => 'high',
		'fields' => array(
			array(
            'name' => esc_html__('Full Width', 'boliin'),
            'id'   => "{$prefix}page_full_width",
            'type' => 'switch',
            'desc' => esc_html__('Turn on to have the main area display at 100% width according to the window size. Turn off to follow site width.', 'boliin'),
            'std' => 0,
         ),
			array(
				'name' => esc_html__('Header Layout', 'boliin'),
				'id'   => "{$prefix}header_layout",
				'type' => 'select',
				'options' => boliin_list_header_layout(),
				'multiple' => false,
				'std'  => '_default_active',
			),
			array(
				'name' => esc_html__('Footer Layout', 'boliin'),
				'id'   => "{$prefix}footer_layout",
				'type' => 'select',
				'options' => boliin_list_footer_layout(),
				'multiple' => false,
				'std'  => '_default_active',
			),
			array(
				'name' => esc_html__('Extra page class', 'boliin'),
				'id' => $prefix . 'extra_page_class',
				'desc' => esc_html__("If you wish to add extra classes to the body class of the page (for custom css use), then please add the class(es) here.", 'boliin'),
				'clone' => false,
				'type'  => 'text',
				'std' => '',
			),
		)
	);

	/* ====== Metabox Page Title ====== */
	$meta_boxes[] = array(
		'id' => 'gavias_metaboxes_page_heading',
		'title' => esc_html__('Page Title & Breadcrumb', 'boliin'),
		'pages' => array( 'post', 'page', 'product', 'portfolio', 'tribe_events'),
		'context' => 'normal',
		'priority'   => 'high',
		'fields' => array(
		  	array(
				'name' => esc_html__('Remove Title of Page', 'boliin'),   
				'id'   => "{$prefix}disable_page_title",
				'type' => 'switch',
				'std'  => 0,
		  	),
		  	array(
			 	'name' => esc_html__('Disable Breadcrumbs', 'boliin'),
			 	'id'   => "{$prefix}no_breadcrumbs",
			 	'type' => 'switch',
			 	'desc' => esc_html__('Disable the breadcrumbs from under the page title on this page.', 'boliin'),
			 	'std' => 0,
		  	),
		  	array(
			 	'name' => esc_html__('Breadcrumb Layout', 'boliin'),
			 	'id'   => "{$prefix}breadcrumb_layout",
			 	'type' => 'select',
			 	'options' => array(
				 	'layout_options'    => esc_html__('Default Options in Layout Template', 'boliin'),
				 	'page_options'      => esc_html__('Individuals Options This Page', 'boliin')
			 	),
			 	'multiple' => false,
			 	'std'  => 'theme_options',
			 	'desc' => esc_html__('You can use breadcrumb settings default in Layout Template or individuals this page', 'boliin')
		  	),
		  	array(
			 	'name' 	=> esc_html__( 'Background Overlay Color', 'boliin' ),
			 	'id'   	=> "{$prefix}boliin_breacrumb_bg_color",
			 	'desc' 	=> esc_html__( "Set an overlay color for hero heading image.", 'boliin' ),
			 	'type' 	=> 'color',
			 	'class' => 'breadcrumb_setting',
			 	'std'  	=> '',
		  	),
		  	array(
			 	'name'       => esc_html__( 'Overlay Opacity', 'boliin' ),
			 	'id'         => "{$prefix}breacrumb_bg_opacity",
			 	'desc'       => esc_html__( 'Set the opacity level of the overlay. This will lighten or darken the image depening on the color selected.', 'boliin' ),
			 	'clone'      => false,
			 	'type'       => 'slider',
			 	'prefix'     => '',
			 	'class'   	  => 'breadcrumb_setting',
			 	'js_options' => array(
				  	'min'  => 0,
				  	'max'  => 100,
				  	'step' => 1,
			 	),
			 	'std'   => '50'
		  	),
		  	array(
			 	'name'  	=> esc_html__('Breadcrumb Background Image', 'boliin'),
			 	'id'    	=> "{$prefix}boliin_breacrumb_image",
			 	'type'  	=> 'image_advanced',
			 	'class'   	=> 'breadcrumb_setting',
			 	'max_file_uploads' => 1
		  	),
		)
	);

	/* ====== Metabox Page ====== */
	$meta_boxes[] = array(
		'id'    => 'gavias_metaboxes_page',
		'title' => esc_html__('Booking Meta', 'boliin'),
		'pages' => array( 'to_book'),
		'fields' => array(
			array(
				'name' => esc_html__('Layout Page', 'boliin'),
				'id'   => "{$prefix}template_layout",
				'type' => 'select',
				'options' => boliin_get_booking_layout(),
				'multiple' => false,
				'std'  => '_default_active',
			),
		)
	);

	return $meta_boxes;
 }  
  /********************* META BOX REGISTERING ***********************/
  add_filter( 'rwmb_meta_boxes', 'boliin_register_meta_boxes' , 99 );

