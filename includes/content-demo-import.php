<?php
/**
 * Register one click import demo data
 */

add_filter( 'caviar_demo_packages', 'caviar_demo_import_register' );

function caviar_demo_import_register() {
	return array(
		array(
			'name'       => 'Fashion Minimal',
			'content'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/fashion/minimal/demo-content.xml',
			'widgets'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/fashion/minimal/widgets.wie',
			'preview'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/fashion/minimal/preview.jpg',
			'customizer' => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/fashion/minimal/customizer.dat',
			'pages'      => array(
				'front_page' => 'Home Minimal',
				'blog'       => 'Blog',
				'shop'       => 'Shop',
				'cart'       => 'Cart',
				'checkout'   => 'Checkout',
				'my_account' => 'My Account',
				'portfolio'  => 'Portfolio',
			),
			'menus'      => array(
				'primary'   => 'main-menu',
				'footer'    => 'footer-menu',
			),
			'options'    => array(
				'shop_catalog_image_size'   => array(
					'width'  => 600,
					'height' => 600,
					'crop'   => 1,
				),
				'shop_single_image_size'    => array(
					'width'  => 850,
					'height' => 850,
					'crop'   => 1,
				),
				'shop_thumbnail_image_size' => array(
					'width'  => 180,
					'height' => 180,
					'crop'   => 1,
				),
			),
		),
		array(
			'name'       => 'Fashion Minimal 02',
			'content'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/fashion/minimal_02/demo-content.xml',
			'widgets'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/fashion/minimal_02/widgets.wie',
			'preview'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/fashion/minimal_02/preview.jpg',
			'customizer' => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/fashion/minimal_02/customizer.dat',
			'pages'      => array(
				'front_page' => 'Home Minimal 02',
				'blog'       => 'Blog',
				'shop'       => 'Shop',
				'cart'       => 'Cart',
				'checkout'   => 'Checkout',
				'my_account' => 'My Account',
				'portfolio'  => 'Portfolio',
			),
			'menus'      => array(
				'primary'   => 'main-menu',
				'footer'    => 'footer-menu',
			),
			'options'    => array(
				'shop_catalog_image_size'   => array(
					'width'  => 600,
					'height' => 600,
					'crop'   => 1,
				),
				'shop_single_image_size'    => array(
					'width'  => 850,
					'height' => 850,
					'crop'   => 1,
				),
				'shop_thumbnail_image_size' => array(
					'width'  => 180,
					'height' => 180,
					'crop'   => 1,
				),
			),
		),
		array(
			'name'       => 'Fashion Classic',
			'content'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/fashion/classic/demo-content.xml',
			'widgets'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/fashion/classic/widgets.wie',
			'preview'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/fashion/classic/preview.jpg',
			'customizer' => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/fashion/classic/customizer.dat',
			'sliders'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/fashion/classic/sliders.zip',
			'pages'      => array(
				'front_page' => 'Home Classic',
				'blog'       => 'Blog',
				'shop'       => 'Shop',
				'cart'       => 'Cart',
				'checkout'   => 'Checkout',
				'my_account' => 'My Account',
				'portfolio'  => 'Portfolio',
			),
			'menus'      => array(
				'primary'   => 'main-menu',
				'footer'    => 'footer-menu',
			),
			'options'    => array(
				'shop_catalog_image_size'   => array(
					'width'  => 600,
					'height' => 600,
					'crop'   => 1,
				),
				'shop_single_image_size'    => array(
					'width'  => 850,
					'height' => 850,
					'crop'   => 1,
				),
				'shop_thumbnail_image_size' => array(
					'width'  => 180,
					'height' => 180,
					'crop'   => 1,
				),
			),
		),
		array(
			'name'       => 'Fashion Classic 02',
			'content'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/fashion/classic_02/demo-content.xml',
			'widgets'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/fashion/classic_02/widgets.wie',
			'preview'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/fashion/classic_02/preview.jpg',
			'customizer' => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/fashion/classic_02/customizer.dat',
			'sliders'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/fashion/classic_02/sliders.zip',
			'pages'      => array(
				'front_page' => 'Home Classic 02',
				'blog'       => 'Blog',
				'shop'       => 'Shop',
				'cart'       => 'Cart',
				'checkout'   => 'Checkout',
				'my_account' => 'My Account',
				'portfolio'  => 'Portfolio',
			),
			'menus'      => array(
				'primary'   => 'main-menu',
				'footer'    => 'footer-menu',
			),
			'options'    => array(
				'shop_catalog_image_size'   => array(
					'width'  => 600,
					'height' => 600,
					'crop'   => 1,
				),
				'shop_single_image_size'    => array(
					'width'  => 850,
					'height' => 850,
					'crop'   => 1,
				),
				'shop_thumbnail_image_size' => array(
					'width'  => 180,
					'height' => 180,
					'crop'   => 1,
				),
			),
		),
		array(
			'name'       => 'Furniture Minimal',
			'content'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/furniture/minimal/demo-content.xml',
			'widgets'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/furniture/minimal/widgets.wie',
			'preview'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/furniture/minimal/preview.jpg',
			'customizer' => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/furniture/minimal/customizer.dat',
			'pages'      => array(
				'front_page' => 'Home Minimal',
				'blog'       => 'Blog',
				'shop'       => 'Shop',
				'cart'       => 'Cart',
				'checkout'   => 'Checkout',
				'my_account' => 'My Account',
				'portfolio'  => 'Portfolio',
			),
			'menus'      => array(
				'primary'   => 'main-menu',
				'footer'    => 'footer-menu',
			),
			'options'    => array(
				'shop_catalog_image_size'   => array(
					'width'  => 600,
					'height' => 600,
					'crop'   => 1,
				),
				'shop_single_image_size'    => array(
					'width'  => 850,
					'height' => 850,
					'crop'   => 1,
				),
				'shop_thumbnail_image_size' => array(
					'width'  => 180,
					'height' => 180,
					'crop'   => 1,
				),
			),
		),
		array(
			'name'       => 'Furniture Minimal 02',
			'content'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/furniture/minimal_02/demo-content.xml',
			'widgets'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/furniture/minimal_02/widgets.wie',
			'preview'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/furniture/minimal_02/preview.jpg',
			'customizer' => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/furniture/minimal_02/customizer.dat',
			'pages'      => array(
				'front_page' => 'Home Minimal 02',
				'blog'       => 'Blog',
				'shop'       => 'Shop',
				'cart'       => 'Cart',
				'checkout'   => 'Checkout',
				'my_account' => 'My Account',
				'portfolio'  => 'Portfolio',
			),
			'menus'      => array(
				'primary'   => 'main-menu',
				'footer'    => 'footer-menu',
			),
			'options'    => array(
				'shop_catalog_image_size'   => array(
					'width'  => 600,
					'height' => 600,
					'crop'   => 1,
				),
				'shop_single_image_size'    => array(
					'width'  => 850,
					'height' => 850,
					'crop'   => 1,
				),
				'shop_thumbnail_image_size' => array(
					'width'  => 180,
					'height' => 180,
					'crop'   => 1,
				),
			),
		),
		array(
			'name'       => 'Furniture Classic',
			'content'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/furniture/classic/demo-content.xml',
			'widgets'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/furniture/classic/widgets.wie',
			'preview'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/furniture/classic/preview.jpg',
			'customizer' => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/furniture/classic/customizer.dat',
			'sliders'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/furniture/classic/sliders.zip',
			'pages'      => array(
				'front_page' => 'Home Classic',
				'blog'       => 'Blog',
				'shop'       => 'Shop',
				'cart'       => 'Cart',
				'checkout'   => 'Checkout',
				'my_account' => 'My Account',
				'portfolio'  => 'Portfolio',
			),
			'menus'      => array(
				'primary'   => 'main-menu',
				'footer'    => 'footer-menu',
			),
			'options'    => array(
				'shop_catalog_image_size'   => array(
					'width'  => 600,
					'height' => 600,
					'crop'   => 1,
				),
				'shop_single_image_size'    => array(
					'width'  => 850,
					'height' => 850,
					'crop'   => 1,
				),
				'shop_thumbnail_image_size' => array(
					'width'  => 180,
					'height' => 180,
					'crop'   => 1,
				),
			),
		),
		array(
			'name'       => 'Furniture Classic 02',
			'content'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/furniture/classic_02/demo-content.xml',
			'widgets'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/furniture/classic_02/widgets.wie',
			'preview'    => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/furniture/classic_02/preview.jpg',
			'customizer' => CAVIAR_DEMO_IMPORTER_URL.'data/caviar/furniture/classic_02/customizer.dat',
			'pages'      => array(
				'front_page' => 'Home Classic 02',
				'blog'       => 'Blog',
				'shop'       => 'Shop',
				'cart'       => 'Cart',
				'checkout'   => 'Checkout',
				'my_account' => 'My Account',
				'portfolio'  => 'Portfolio',
			),
			'menus'      => array(
				'primary'   => 'main-menu',
				'footer'    => 'footer-menu',
			),
			'options'    => array(
				'shop_catalog_image_size'   => array(
					'width'  => 600,
					'height' => 600,
					'crop'   => 1,
				),
				'shop_single_image_size'    => array(
					'width'  => 850,
					'height' => 850,
					'crop'   => 1,
				),
				'shop_thumbnail_image_size' => array(
					'width'  => 180,
					'height' => 180,
					'crop'   => 1,
				),
			),
		),
	);
}

add_action( 'caviar_demo_import_after_setup_pages', 'caviar_demo_import_order_tracking' );

/**
 * Update more page options
 *
 * @param $pages
 */
function caviar_demo_import_order_tracking( $pages ) {
	if ( isset( $pages['order_tracking'] ) ) {
		$order = get_page_by_title( $pages['order_tracking'] );

		if ( $order ) {
			update_option( 'caviar_order_tracking_page_id', $order->ID );
		}
	}

	if ( isset( $pages['portfolio'] ) ) {
		$portfolio = get_page_by_title( $pages['portfolio'] );

		if ( $portfolio ) {
			update_option( 'caviar_portfolio_page_id', $portfolio->ID );
		}
	}
}

add_action( 'caviar_demo_import_before_import_content', 'caviar_demo_import_product_attributes' );

/**
 * Prepare product attributes before import demo content
 *
 * @param $file
 */
function caviar_demo_import_product_attributes( $file ) {
	global $wpdb;

	if ( ! class_exists( 'WXR_Parser' ) ) {
		require_once CAVIAR_DEMO_IMPORTER_PATH . 'includes/parsers.php';
	}

//	$parser      = new WXR_Parser();
//	$import_data = $parser->parse( $file );
//
//	if ( isset( $import_data['posts'] ) ) {
//		$posts = $import_data['posts'];
//
//		if ( $posts && sizeof( $posts ) > 0 ) {
//			foreach ( $posts as $post ) {
//				if ( 'product' === $post['post_type'] ) {
//					if ( ! empty( $post['terms'] ) ) {
//						foreach ( $post['terms'] as $term ) {
//							if ( strstr( $term['domain'], 'pa_' ) ) {
//								if ( ! taxonomy_exists( $term['domain'] ) ) {
//									$attribute_name = wc_sanitize_taxonomy_name( str_replace( 'pa_', '', $term['domain'] ) );
//
//									// Create the taxonomy
//									if ( ! in_array( $attribute_name, wc_get_attribute_taxonomies() ) ) {
//										$attribute = array(
//											'attribute_label'   => $attribute_name,
//											'attribute_name'    => $attribute_name,
//											'attribute_type'    => 'select',
//											'attribute_orderby' => 'menu_order',
//											'attribute_public'  => 0
//										);
//										$wpdb->insert( $wpdb->prefix . 'woocommerce_attribute_taxonomies', $attribute );
//										delete_transient( 'wc_attribute_taxonomies' );
//									}
//
//									// Register the taxonomy now so that the import works!
//									register_taxonomy(
//										$term['domain'],
//										apply_filters( 'woocommerce_taxonomy_objects_' . $term['domain'], array( 'product' ) ),
//										apply_filters( 'woocommerce_taxonomy_args_' . $term['domain'], array(
//											'hierarchical' => true,
//											'show_ui'      => false,
//											'query_var'    => true,
//											'rewrite'      => false,
//										) )
//									);
//								}
//							}
//						}
//					}
//				}
//			}
//		}
//	}
}