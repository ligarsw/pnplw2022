<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pnplw2022
 */

?>
<div class="container bg-merah">
    <div class="row">
        <div class="col-12">
            <footer id="colophon" class="site-footer">
                <div class="site-info text-white">
                    <a href="<?php echo esc_url(__('https://wordpress.org/', 'pnplw2022')); ?>" >
                        <?php
                        /* translators: %s: CMS name, i.e. WordPress. */
                        printf(esc_html__('Proudly powered by %s', 'pnplw2022'), 'WordPress');
                        ?>
                    </a>
                    <span class="sep"> | </span>
                    <?php
                    /* translators: 1: Theme name, 2: Theme author. */
                    printf(esc_html__('Theme: %1$s by %2$s.', 'pnplw2022'), 'pnplw2022', '<a href="http://underscores.me/">IT Pengadila Negeri Pelalawan</a>');
                    ?>
                </div><!-- .site-info -->
            </footer><!-- #colophon -->
        </div><!-- .col-12 -->
    </div><!-- .row -->
</div><!-- .container -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>