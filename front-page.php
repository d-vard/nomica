<?php
get_header(); ?>
    <!-- Banner @s -->
<?php
$intro_title = get_field('intro_title');
$intro_desc = get_field('intro_desc');
$intro_btn = get_field('intro_btn');
if (checkVal($intro_title) && checkVal($intro_desc)):?>
    <div class="header-banner bg-theme-grad">
        <div class="nk-banner">
            <div class="banner banner-fs banner-single banner-gap-b2">
                <div class="banner-wrap">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-5 order-lg-last">
                                <div class="banner-gfx banner-gfx-re-s1 animated " data-animate="fadeInUp"
                                     data-delay=".9">
                                </div>
                            </div><!-- .col -->
                            <div class="col-lg-7 col-sm-10 text-center text-lg-start">
                                <div class="banner-caption cpn tc-light">
                                    <div class="cpn-head">
                                        <h1 class="title animated" data-animate="fadeInUp"
                                            data-delay="1"><?= $intro_title ?></h1>
                                    </div>
                                    <div class="cpn-text">
                                        <?=$intro_desc?>
                                    </div>
                                    <div class="cpn-action">
                                        <div class="cpn-btns animated" data-animate="fadeInUp" data-delay="1.2">
                                            <a class="btn btn-grad" href="#contact"><?=$intro_btn?></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div>
                </div>
            </div>
        </div><!-- .nk-banner -->
        <div class="nk-ovm mask-a shape-a"></div>
        <!-- Place Particle Js -->
        <div id="particles-bg" class="particles-container particles-bg"></div>
    </div>
<?php endif; ?>
    <!-- .header-banner @e -->
    <main class="nk-pages">
        <section class="section no-pd overflow-hidden text-center over-up">
            <h6 class="title title-xs tc-secondary pdb-s animated" data-animate="fadeInUp" data-delay=".8">
                nomicachronika.press</h6>
            <br>
        </section>
        <!-- // -->
        <?php
        $about_title = get_field('about_title');
        $about_desc = get_field('about_desc');
        $about_img = get_field('about_img');
        if (checkVal($about_title) && checkVal($about_desc) && checkVal($about_img)):
            ?>
            <section class="section bg-light section-about" id="about">
                <div class="container">
                    <!-- Block @s -->
                    <div class="nk-block nk-block-about">
                        <div class="row align-items-center gutter-vr-30px pdb-x">
                            <div class="col-lg-6">
                                <div class="nk-block-text">
                                    <h2 class="title animated" data-animate="fadeInUp"
                                        data-delay=".1"><?= $about_title ?></h2>
                                    <?= $about_desc ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="animated custom_img_2" data-animate="fadeInUp" data-delay=".5">
                                    <img src="<?= get_img($about_img['id']) ?>" alt="<?= $about_img['alt'] ?>">
                                </div>
                            </div>
                        </div>
                    </div><!-- .block @e -->
                    <!-- Section Head @s -->
                    <?php
                    $last_news_title = get_field('last_news_title');
                    $posts = get_posts([
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                    ]);
                    ?>
                    <?php if (checkVal($posts)): ?>
                        <div class="section-head" id="news_block">
                            <h2 class="title title-lg animated" data-animate="fadeInUp" data-delay=".6"><?=$last_news_title?></h2>
                        </div>
                        <div class="nk-block nk-block-blog">
                            <div class="row">
                                <?php foreach ($posts as $post): ?>
                                    <?php $terms = get_the_category($post); ?>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="blog">
                                            <div class="blog-photo">
                                                <?= get_the_post_thumbnail($post) ?>
                                            </div>
                                            <div class="blog-text">
                                                <ul class="blog-meta">
                                                    <li><?= date('d.m.Y', strtotime($post->post_date)); ?></li>
<!--                                                    --><?php //foreach ($terms as $term): ?>
<!--                                                        <li>-->
<!--                                                            <a href="--><?//= get_term_link($term); ?><!--">--><?//= $term->name ?><!--</a>-->
<!--                                                        </li>-->
<!--                                                    --><?php //endforeach; ?>
                                                </ul>
                                                <h4 class="title title-sm"><a
                                                            href="<?= get_permalink($post); ?>"><?= $post->post_title; ?></a>
                                                </h4>
                                                <p><?= get_the_excerpt($post->ID); ?></p>
                                            </div>
                                        </div><!-- .blog -->
                                    </div><!-- .col -->
                                <?php endforeach; ?>
                            </div><!-- .row -->
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>
        <!-- // -->
        <?php wp_reset_postdata(); ?>
        <?php
        $college_title = get_field('сollege_title');
        $college = get_field('сollege');
        if (checkVal($college_title) && checkVal($college)):
            ?>
            <section class="section section-team bg-light pt-0" id="team">
                <div class="container">
                    <!-- Block @s -->
                    <?php
                    $main_collages = get_field('main_collages');
                    if (checkVal($main_collages)):
                        ?>
                        <?php foreach ($main_collages as $collage): ?>
                        <div class="nk-block nk-block-team-featured team-featured">
                            <div class="row align-items-center">
                                <div class="col-lg-3 mb-4 mb-lg-0">
                                    <div class="team-featured-photo tc-light animated fadeInUp" data-animate="fadeInUp"
                                         data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">
                                        <img src="<?= get_img($collage['chief_img']['id']) ?>"
                                             alt="<?= $collage['chief_img']['alt'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="team-featured-cont">
                                        <h2 class="title title-lg title-dark animated fadeInUp" data-animate="fadeInUp" data-delay=".3" style="visibility: visible; animation-delay: 0.3s;"><?= $collage['chief_editor'] ?></h2>
                                        <h6 class="title title-xs title-dark animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;"><?= $collage['job_title'] ?></h6>
                                        <div class="animated fadeInUp" data-animate="fadeInUp" data-delay=".4"
                                           style="visibility: visible; animation-delay: 0.4s;"><?= $collage['chief_desc'] ?></div>
                                    </div>
                                </div>
                            </div><!-- .row -->
                        </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    <!-- Block @e -->
                    <!-- Section Head @s -->
                    <div class="section-head text-center wide-auto mt-2">
                        <h2 class="title title-lg title-dark animated"
                            data-animate="fadeInUp"
                            data-delay=".1"><?= $college_title ?></h2>
                    </div><!-- .section-head @e -->
                    <!-- Block @s -->
                    <div class="nk-block">
                        <div class="row justify-content-center">
                            <?php foreach ($college as $key => $item): ?>
                                <div class="col-md-3 col-6">
                                    <div class="team animated" data-animate="fadeInUp" data-delay=".2">
                                        <div class="team-photo">
                                            <img src="<?= get_img($item['img']['id']) ?>"
                                                 alt="<?= $item['img']['alt'] ?>">
                                            <a href="#team-popup-<?= $key ?>" class="team-show content-popup"></a>
                                            <?php if (checkVal($item['social'])): ?>
                                                <ul class="team-social">
                                                    <?php foreach ($item['social'] as $value): ?>
                                                        <li><a href="<?= $value['link'] ?>"><?= $value['icon'] ?></a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </div>
                                        <h5 class="team-name title title-sm"><?= $item['title'] ?></h5>
                                        <span class="team-position"></span>
                                    </div>
                                    <!-- Start .team-profile  -->
                                    <div id="team-popup-<?= $key ?>" class="team-popup mfp-hide">
                                        <a title="Close" class="mfp-close">×</a>
                                        <div class="row align-items-start">
                                            <div class="col-md-4">
                                                <div class="team-photo">
                                                    <img src="<?= get_img($item['img']['id']) ?>"
                                                         alt="<?= $item['img']['alt'] ?>">
                                                </div>
                                            </div><!-- .col  -->
                                            <div class="col-md-6">
                                                <div class="team-popup-info ps-md-3">
                                                    <h3 class="team-name title title-lg pt-4"><?= $item['title'] ?></h3>
                                                    <p class="team-position"></p>
                                                    <?php if (checkVal($item['social'])): ?>
                                                        <ul class="team-social mb-4">
                                                            <?php foreach ($item['social'] as $value): ?>
                                                                <li>
                                                                    <a href="<?= $value['link'] ?>"><?= $value['icon'] ?></a>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    <?php endif; ?>
                                                    <p><?= $item['desc'] ?></p>
                                                </div>
                                            </div><!-- .col  -->
                                        </div><!-- .row  -->
                                    </div><!-- .team-profile  -->
                                </div><!-- .col -->
                            <?php endforeach; ?>
                        </div><!-- .row -->
                    </div>
                    <!-- Block @r -->
                </div>
            </section>
        <?php endif; ?>
        <!-- // -->
        <?php
        $partners_title = get_field('partners_title');
        $partners = get_field('partners');
        if (checkVal($partners_title) && checkVal($partners)):
            ?>
            <section class="section section-m section-partners bg-light" id="partners">
                <div class="container">
                    <!-- Block @s -->
                    <div class="nk-block block-partners">
                        <h6 class="title title-xs tc-primary text-center animated" data-animate="fadeInUp"
                            data-delay=".1">
                            <?= $partners_title ?></h6>
                        <ul class="partner-list flex-lg-nowrap">
                            <?php foreach ($partners as $partner): ?>
                                <li class="partner-logo animated" data-animate="fadeInUp" data-delay=".2">
                                    <img src="<?= get_img($partner['img']['id']) ?>" alt="<?= $partner['img']['alt'] ?>">
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <!-- Block @e -->
                </div>
            </section>
        <?php endif; ?>
        <!-- // -->
    </main>

<?php get_footer();

