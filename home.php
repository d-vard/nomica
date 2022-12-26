<?php get_header();
$current = absint(
    max(
        1,
        get_query_var('paged') ? get_query_var('paged') : get_query_var('page')
    )
);
$posts = get_posts([
    'post_type' => 'post',
    'posts_per_page' => 9,
    'paged' => $current,
]);
?>
    <?php get_tmpl('tmpl-hero');?>
<?php if (checkVal($posts)): ?>
    <main class="nk-pages">
        <section class="section bg-white">
            <div class="container">
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
<!--                                            --><?php //foreach ($terms as $term): ?>
<!--                                                <li><a href="--><?//= get_term_link($term); ?><!--">--><?//= $term->name ?><!--</a></li>-->
<!--                                            --><?php //endforeach; ?>
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
                    <?php the_posts_pagination(array(
                        'show_all' => true, // показаны все страницы участвующие в пагинации
                        'end_size' => 1,     // количество страниц на концах
                        'mid_size' => 1,     // количество страниц вокруг текущей
                        'prev_next' => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                        'prev_text' => __('<em class="icon ti ti-angle-left"></em>'),
                        'next_text' => __('<em class="icon ti ti-angle-right"></em>'),
                        'add_args' => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                        'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                        'screen_reader_text' => '',
                        'class' => 'd-flex', // CSS класс, добавлено в 5.5.0.
                    )) ?>
                </div><!-- .nk-block -->
            </div><!-- .container -->
        </section><!-- .section -->
    </main><!-- .nk-pages -->
<?php endif; ?>
<?php get_footer(); ?>