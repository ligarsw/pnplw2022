<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pnplw2022
 */

?>
<div class="container">
	<div class="row">
		<div class="col">
			
		</div>
		<div class="col col-md-auto">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


				<?php pnplw2022_post_thumbnail(); ?>

				<div class="entry-content ">
					<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__('Pages:', 'pnplw2022'),
							'after'  => '</div>',
						)
					);
					?>
				</div><!-- .entry-content -->

				<?php if (get_edit_post_link()) : ?>
					<footer class="entry-footer">
						<?php
						edit_post_link(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__('Edit <span class="screen-reader-text">%s</span>', 'pnplw2022'),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								wp_kses_post(get_the_title())
							),
							'<span class="edit-link">',
							'</span>'
						);
						?>
					</footer><!-- .entry-footer -->
				<?php endif; ?>
			</article><!-- #post-<?php the_ID(); ?> -->
		</div>
		<div class="col">
			
		</div>
	</div>
</div>