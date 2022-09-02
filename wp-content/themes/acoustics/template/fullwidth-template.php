<?php
/**
 *Template Name: FullWidth
 *
 * @author      CodeGearThemes
 * @category    WordPress
 * @package     Acoustics
 * @version     1.0.0
 *
 **/

get_header();
?>
<div class="section-default section--fullwidth-template">
	<div class="container-fluid">
		<div class="row">
			<section id="primary" class="section-primary col-md-12 content-area">
				<main id="main" class="site-main">
					<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
					?>
				</main>
			</section>
		</div>
	</div>
</div>
<?php
get_footer();
