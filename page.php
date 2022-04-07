<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
            <div class="d-inline-flex p-2 bd-highlight">

                <h1 class="text-white"><a><?php the_title(); ?></a></h1>
                </p>
            </div>
        </div>

    </div>
</div>


</div>
<div class="container bg-abu">
    <!-- Content here -->
    <div class="row">
        <div class="col-12">
            <main id="primary" class="site-main">

                <?php
                while (have_posts()) :
                    the_post();

                    get_template_part('template-parts/content', 'page');

                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>

            </main><!-- #main -->
        </div>

    </div>

</div>
<?php

get_footer();