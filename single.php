<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pnplw2022
 */

get_header();
?>
<div class="container bg-kuning">

    <div class="row">
        <div class="col-md-auto">
            <img class=" img-fluid" src=" <?php echo get_template_directory_uri(); ?>/img/responsive.png">
        </div>
        <div class="col">

            <h1 class="text-white">Kegiatan Pengadilan</h1>


        </div>
       
    </div>
</div>
<div class="container bg-abu">
    <!-- Content here -->
    <div class="row">
        <div class="col-sm-8">
            <main id="primary" class="site-main">

                <?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', get_post_type());

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'pnplw2022') . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'pnplw2022') . '</span> <span class="nav-title">%title</span>',
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

            </main><!-- #main -->
        </div>
        <div class="col-sm-4">
            <div class="col-md-auto"><?php get_sidebar(); ?></div>
        </div>
    </div>

</div>
<?php

get_footer();