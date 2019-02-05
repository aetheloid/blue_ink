<?php
/**
 *  Template: front page
 * 
 * @package     WordPress
 * @subpackage  blue_ink
 */


get_header();

if( get_option( 'show_on_front') == 'posts'): ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <section id="blog">
                    <?php do_action( '????open'); ?>
                    <?php
                    if( have_posts() ):
                        while ( have_posts()):
                            the_post();
                            get_template_part( 'template_parts/content', get_post_format());
                        endwhile;
                        wp_reset_query();
                    else:
                        get_template_part( 'template_parts/content', 'none' );
                    endif;
                    ?>
                    <?php do_action( '????close'); ?>
                </section>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php
else:
    ENTER SECTIONS HERE

    if( have_posts()):
        while( have_posts()): the_posts();
            $static_page_content = get_the_content();
            if ($static_page_content != '') : ?>
                <section class="front-page-piece" id="static-page-content">
                    <div class="piece-header">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="piece-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <?php echo $static_page_content; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif;
        endwhile;
    endif;

    blue_ink_pieces();

endif;

get_footer(); ?>