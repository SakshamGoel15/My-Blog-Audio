<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aarambha_blogger
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php blog_aarambha_post_thumbnail(); ?>

    <div class="post-content-outer">
        <?php if (blog_aarambha_get_meta($post->ID,'_checkbox_check',true) == 'yes'):?>
            <header class="entry-header">
                <h2 class="entry-title">
                    <?php the_title();?>
                </h2>
            </header>
        <?php endif;?>

        <div class="entry-content">
            <?php the_content();

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aarambha-blogger' ),
                'after'  => '</div>',
            ) );
            ?>
        </div>
    </div><!-- .post-content-outer -->

</article>