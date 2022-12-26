<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package default
 */

get_header();
the_post();
?>
    <?php get_tmpl('tmpl-hero');?>
    <main class="nk-pages ">
        <section class="section bg-light">
            <div class="container">
                <div class="nk-block nk-block-blog">
                    <div class="row">
                        <div class="col-12">
                            <div class="blog-details">
                                <div class="row justify-content-center">
                                    <div class="col-xl-10 col-lg-12">
                                        <div class="blog-featured">
                                            <?=get_the_post_thumbnail()?>
<!--                                            <img class="round" src="images/blog/large-a.jpg" alt="featured">-->
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-10">
                                        <ul class="blog-meta">
                                            <li><a href="#"><?=get_the_date()?></a></li>
                                        </ul>
                                        <div class="blog-content"><?php the_content(); ?></div>
                                        <ul class="blog-tags">
                                            <li><a href="#">bitcoin</a></li>
                                            <li><a href="#">tokens</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div><!-- .container -->
        </section><!-- .section -->
    </main>
<?php
get_footer();
