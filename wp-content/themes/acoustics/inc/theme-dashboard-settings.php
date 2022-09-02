<?php
/**
 * Theme Dashboard Settings
 *
 * @param array $settings.
 */
function acoustics_dashboard_settings( $settings ) {

	// Starter.
	$settings['starter_plugin_slug'] = 'codegear-starter-sites';

	// Hero.
	$settings['hero_title']       = esc_html__( 'Welcome to acoustics', 'acoustics' );
	$settings['hero_themes_desc'] = esc_html__( 'acoustics is now installed and ready to use. Click on Starter Sites to get off to a flying start with one of our pre-made templates, or go to Theme Dashboard to get an overview of everything.', 'acoustics' );
	$settings['hero_desc']        = esc_html__( 'acoustics is now installed and ready to go. To help you with the next step, we\'ve gathered together on this page all the resources you might need. We hope you enjoy using acoustics.', 'acoustics' );
	$settings['hero_image']       = get_template_directory_uri() . '/theme-dashboard/images/welcome-banner@2x.png';


	$settings['tabs'] = array(
		array(
			'name'    => esc_html__( 'Theme Features', 'acoustics' ),
			'type'    => 'features',
			'visible' => array( 'free', 'pro' ),
			'data'    => array(
				array(
					'name'          => esc_html__( 'Change Site Title or Logo', 'acoustics' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=title_tagline' ),
				),
				array(
					'name'          => esc_html__( 'Typography', 'acoustics' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[panel]=acoustics_panel_typography' ),
				),	
				array(
					'name'          => esc_html__( 'Color Options', 'acoustics' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=colors' ),
				),		
				array(
					'name'          => esc_html__( 'Main Header', 'acoustics' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=acoustics_section_main_header' ),
				),
				array(
					'name'          => esc_html__( 'Mobile Header', 'acoustics' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=acoustics_section_mobile_header' ),
				),		
				array(
					'name'          => esc_html__( 'Footer Copyright', 'acoustics' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=acoustics_section_footer_credits' ),
				),		
				array(
					'name'          => esc_html__( 'Blog Archives', 'acoustics' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=acoustics_section_blog_archives' ),
				),	
				array(
					'name'          => esc_html__( 'Single Posts', 'acoustics' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=acoustics_section_blog_singles' ),
				),	
				array(
					'name'          => esc_html__( 'Button Options', 'acoustics' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=acoustics_section_buttons' ),
				),				
				array(
					'name'          => esc_html__( 'Product Catalog', 'acoustics' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=woocommerce_product_catalog' ),
				),	
				array(
					'name'          => esc_html__( 'Single Products', 'acoustics' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=acoustics_section_single_product' ),
				),
				array(
					'name'          => esc_html__( 'Cart Layout', 'acoustics' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=acoustics_section_shop_cart' ),
				),		
				array(
					'name'          => esc_html__( 'Checkout Options', 'acoustics' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=woocommerce_checkout' ),
				),			
				array(
					'name'          => esc_html__( 'Scroll to Top', 'acoustics' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=acoustics_section_scrolltotop' ),
				),
				array(
					'name'          => esc_html__( 'Wishlist', 'acoustics' ),
					'type'          => 'pro',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=acoustics_section_wishlist' ),
				),
				array(
					'name'          => esc_html__( 'Product Swatch', 'acoustics' ),
					'type'          => 'pro',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=acoustics_section_single_product&control=customize-control-accordion_single_product_swatch' ),
				),
				array(
					'name'          => esc_html__( 'More Header Layouts', 'acoustics' ),
					'type'          => 'pro',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=acoustics_section_main_header' ),
				),
				array(
					'name'          => esc_html__( 'Shop Header Styles', 'acoustics' ),
					'type'          => 'pro',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=woocommerce_product_catalog&control=customize-control-accordion_shop_layout' ),
				),
				array(
					'name'          => esc_html__( 'More Single Product Gallery Styles', 'acoustics' ),
					'type'          => 'pro',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=acoustics_section_single_product&control=customize-control-accordion_single_product_layout' ),
				),
				array(
					'name'          => esc_html__( 'Single Product Sticky Add to Cart', 'acoustics' ),
					'type'          => 'pro',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=acoustics_section_single_product&control=customize-control-accordion_single_product_sticky_add_to_cart' ),
				),
				array(
					'name'          => esc_html__( 'Single Product Tab Styles', 'acoustics' ),
					'type'          => 'pro',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=acoustics_section_single_product&control=customize-control-accordion_single_product_tabs' ),
				),
				array(
					'name'          => esc_html__( 'More Sidebar Layouts', 'acoustics' ),
					'type'          => 'pro',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=woocommerce_product_catalog&control=customize-control-accordion_shop_layout' ),
				),
				array(
					'name'          => esc_html__( 'Distraction Free Checkout', 'acoustics' ),
					'type'          => 'pro',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=woocommerce_checkout' ),
				),
				array(
					'name'          => esc_html__( 'More Footer Copyright Elements', 'acoustics' ),
					'type'          => 'pro',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=acoustics_section_footer_credits' ),
				),																		
			),
		),
		array(
			'name'    => esc_html__( 'Free vs PRO', 'acoustics' ),
			'type'    => 'html',
			'visible' => array( 'free' ),
			'data'    => ''//acoustics_free_vs_pro_html(),
		),
		array(
			'name'    => esc_html__( 'Performance', 'acoustics' ),
			'type'    => 'performance',
			'visible' => array( 'free', 'pro' ),
		),
	);

	// Documentation.
	$settings['documentation_link'] = 'https://docs.athemes.com/collection/318-acoustics';

	// Promo.
	$settings['promo_title']  = esc_html__( 'Upgrade to Pro', 'acoustics' );
	$settings['promo_desc']   = esc_html__( 'Take acoustics to a whole other level by upgrading to the Pro version.', 'acoustics' );
	$settings['promo_button'] = esc_html__( 'Discover acoustics Pro', 'acoustics' );
	$settings['promo_link']   = 'https://athemes.com/theme/acoustics?utm_source=theme_info&utm_medium=link&utm_campaign=acoustics#pro';

	// Review.
	$settings['review_link']       = 'https://wordpress.org/support/theme/acoustics/reviews/';
	$settings['suggest_idea_link'] = 'https://athemes.com/feature-request/';

	// Support.
	$settings['support_link']     = 'https://wordpress.org/support/theme/acoustics/';
	$settings['support_pro_link'] = 'https://athemes.com/theme/acoustics?utm_source=theme_table&utm_medium=button&utm_campaign=acoustics#pro';

	// Community.
	$settings['community_link'] = 'https://www.facebook.com/groups/athemes/';

	$theme = wp_get_theme();
	// Changelog.
	$settings['changelog_version'] = $theme->version;
	$settings['changelog_link']    = 'https://athemes.com/changelog/acoustics/';
	
	//Has pro
	$settings['has_pro'] = false;

	return $settings;
}
add_filter( 'thd_register_settings', 'acoustics_dashboard_settings' );