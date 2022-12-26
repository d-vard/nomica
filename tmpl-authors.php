<?php /* Template Name: tmpl-text page */ ?>

<?php get_header(); ?>
<?php $content = get_field('content'); ?>
<?php get_tmpl('tmpl-hero'); ?>
<main class="nk-pages">
    <section class="section bg-light">
        <div class="container">
            <div class="nk-block nk-block-blog">
                <div class="row">
                    <div class="col-12">
                        <div class="blog-details">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-10">
                                    <div class="blog-content"><?= $content ?></div>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div><!-- .container -->
    </section><!-- .section -->
</main>
<?php get_footer(); ?>
