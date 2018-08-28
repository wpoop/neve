<?php
/**
 * Author:          Andrei Baicus <andrei@themeisle.com>
 * Created on:      28/08/2018
 * @package Neve
 */

$container_class = apply_filters( 'neve_container_class_filter', 'container', 'single-post' );

get_header();

do_action( 'neve_page_header', 'single-post' );
?>
	<div class="<?php echo esc_attr( $container_class ); ?> single-post-container">
		<div class="row-no-flex">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content', 'single' );
				}
			} else {
				get_template_part( 'template-parts/content', 'none' );
			}
			?>
		</div>
	</div>
<?php
get_sidebar();
get_footer();
