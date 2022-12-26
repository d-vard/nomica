<?php /* Template Name: tmpl-archive */ ?>
<?php get_header(); ?>
<?php get_tmpl('tmpl-hero'); ?>
<?php
$arc_title = get_field('arc_title');
$arc_desc = get_field('arc_desc');
$link = get_field('link');
$arc_imge = get_field('arc_imge');
if (checkVal($arc_title) && checkVal($arc_desc) && checkVal($link)):
    ?>
    <main class="bg-light pb-mb-5">
        <div class="header-banner has-ovm has-mask">
            <div class="nk-banner">
                <div class="banner banner-fs banner-single tc-dark pb-0">
                    <div class="banner-wrap">
                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-6 order-lg-last">
                                    <div class="banner-gfx banner-gfx-re-s3">
                                        <img src="<?= get_img($arc_imge['id']) ?>"
                                             alt="<?= $arc_imge['alt'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="banner-caption wide-auto text-center text-lg-start">
                                        <div class="cpn-head">
                                            <h1 class="title title-xl-2 title-semibold"><?= $arc_title ?></h1>
                                        </div>
                                        <div class="cpn-text cpn-text-s1">
                                            <div class="lead"><?= $arc_desc ?></div>
                                        </div>
                                        <div class="cpn-btns ">
                                            <ul class="btn-grp">
                                                <li><a href="<?= $link['url'] ?>"
                                                       class="btn btn-md btn-grad btn-round"><?=$link['title']?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div>
                    </div>
                </div>
            </div><!-- .nk-banner -->
        </div>
    </main>
<?php endif; ?>
<?php get_footer(); ?>