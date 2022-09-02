<?php
/**
 * @author      CodeGearThemes
 * @category    WordPress
 * @package     Acoustics
 * @version     1.1.7
 *
 */

 class Acoustics_Theme_Dashboard{

    /**
	 * The slug name to refer to this menu by.
	 *
	 * @var string $menu_slug The menu slug.
	 */
	public $menu_slug = 'acoustics';

    /**
	 * Premium Status
	 *
	 * @var string $premium
	 */
	public $premium = false;

    /**
	 * Theme Settings
	 *
	 * @var array $settings
	 */
	public $settings = array(
		'version'             => '1.1.9',
		'review_link'         => '#',
		'suggest_idea_link'   => '#',
        'promo_link'          => '#',
		'changelog_link'      => '#',
		'support_link'        => '#',
		'support_pro_link'    => '#',
		'community_link'      => '#',
	);

    /**
	 * Constructor.
	 */
	public function __construct() {

        add_action( 'init', function (){
			add_action( 'admin_menu', array( $this, 'add_menu_page' ) );
		} );

        add_action( 'admin_enqueue_scripts', array( $this, 'acoustics_admin_enqueue_scripts' ), 5 );

    }


    /**
	 * Add menu page
	 */
	public function add_menu_page() {
		add_submenu_page( 'themes.php', esc_html__( 'Acoustics Theme Dashboard', 'acoustics' ), esc_html__( 'Acoustics', 'acoustics' ), 'manage_options', $this->menu_slug, array( $this, 'html' ), 1 ); // phpcs:ignore WPThemeReview.PluginTerritory.NoAddAdminPages.add_menu_pages_add_submenu_page
	}

    /**
	 * This function will register scripts and styles for admin dashboard.
	 *
	 * @param string $page Current page.
	 */
	public function acoustics_admin_enqueue_scripts( $page ) {
		wp_enqueue_style( 'acoustic-theme-dashboard-style', get_template_directory_uri() . '/dashboard/assets/css/style.css', array(), filemtime( get_template_directory() . '/dashboard/assets/css/style.css' ) );
	}

    public function html(){
        ?>
        <div class="wrapper codegear--theme-dashboard">
			<div class="codegear-header">
				<div class="codegear--header-left">
					<div class="codegear--header-column codegear--header-logo">
						<div class="codegear-branding">
							<a href="<?php echo esc_url( 'https://codegearthemes.com/' ); ?>" target="_blank">
								<img width="220px" src="<?php echo esc_url( get_template_directory_uri() . '/dashboard/assets/src/logo.png' ); ?>" alt="<?php esc_attr_e( 'CodeGearThemes', 'acoustics' ); ?>">
							</a>
						</div>
					</div>
				</div>

				<div class="codegear--header-right">
					<a href="<?php echo esc_url( $this->settings['documentation_link'] ); ?>" class="codegear--documentation-link" target="_blank">
						<span><?php esc_html_e( 'Documentation', 'acoustics' ); ?></span>
						<i class="dashicons dashicons-external"></i>
					</a>
				</div>
			</div>

            <div class="wrap">

				<div class="main-hero">
					<div class="content">
                        <div class="section--hero-image">
                            <div class="hero-content">
                                <div class="hero--user-welcome">
                                    <?php esc_html_e( 'Hello, ', 'acoustics' ); ?>
                                    <?php
                                        $current_user = wp_get_current_user();
                                        echo esc_html( $current_user->display_name );
                                    ?>
                                    <?php esc_html_e( '👋', 'acoustics' ); ?>
                                </div>

                                <div class="hero-title">
                                    <?php esc_html_e( 'Welcome to Acoustics', 'acoustics' ); ?>
                                    <?php if ( $this->premium ) { ?>
                                        <span class="badge badge-info">pro</span>
                                    <?php } else { ?>
                                        <span class="badge badge-success">free</span>
                                    <?php } ?>
                                </div>
                                <div class="hero-description">
                                    Acoustics is now installed and ready to go. To help you with the next step, we've gathered together on this page all the resources you might need. We hope you enjoy using Acoustics.
                                </div>

                                <!-- <div class="hero-actions">
                                    <a href="/wp-admin/themes.php?page=starter-sites" data-target="active" class="button button-primary">
                                        Starter Sites					
                                    </a>
                                </div> -->
                            </div>
                            <div class="hero-image">
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-content">
                    <div class="panel primary">
                        <div class="content-inner">
                            <div class="block-features">
                                <div class="">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="aside">
                        <div class="secondary">
                            <div class="panel">
                                <div class="panel-head">
                                    <h3 class="panel-title">Review</h3>
                                </div>
                                <div class="panel-content">
                                    <div class="stars">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="24" height="24" x="0" y="0" viewBox="0 0 24 24" class="star"><g><path xmlns="http://www.w3.org/2000/svg" d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107" data-original="#ffc107" class=""></path></g></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="24" height="24" x="0" y="0" viewBox="0 0 24 24" class="star"><g><path xmlns="http://www.w3.org/2000/svg" d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107" data-original="#ffc107" class=""></path></g></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="24" height="24" x="0" y="0" viewBox="0 0 24 24" class="star"><g><path xmlns="http://www.w3.org/2000/svg" d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107" data-original="#ffc107" class=""></path></g></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="24" height="24" x="0" y="0" viewBox="0 0 24 24" class="star"><g><path xmlns="http://www.w3.org/2000/svg" d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107" data-original="#ffc107" class=""></path></g></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="24" height="24" x="0" y="0" viewBox="0 0 24 24" class="star"><g><path xmlns="http://www.w3.org/2000/svg" d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107" data-original="#ffc107" class=""></path></g></svg>
                                    </div>
                                    <p class="description">It makes us happy to hear from our users. We would appreciate a review.</p>
                                    <div class="action-button">
                                        <a href="https://wordpress.org/support/theme/acoustics/reviews/" class="button button-secondary" target="_blank">Submit a Review</a>
                                    </div>
                                    <div class="divider"></div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-head">
                                    <h3 class="panel-title">Changelog</h3>
                                </div>
                                <div class="panel-content">
                                    <p class="description">Keep informed with the latest changes about each theme.</p>
                                    <div class="action-button">
                                        <a href="https://wordpress.org/support/theme/acoustic/reviews/" target="_blank">See the Changelog</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
			</div>

        </div>
        <?php
    }

 }

new Acoustics_Theme_Dashboard();