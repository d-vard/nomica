<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package default
 */
$currentLang = pll_current_language('slug');
$logo_white = get_field('logo_white', $currentLang);
$address = get_field('address', $currentLang);
$phone_number = get_field('phone_number', $currentLang);
$email = get_field('email', $currentLang);
$social_links = get_field('social_links', $currentLang);
$copyright = get_field('copyright', $currentLang);
$footer_menu_title = get_field('footer_menu_title', $currentLang);
$contact_form_title = get_field('contact_form_title', $currentLang);
$social_links_title = get_field('social_links_title', $currentLang);
?>

<footer class="nk-footer bg-theme-grad">
    <section class="section no-pdy overflow-hidden section-contact bg-transparent" id="contact">
        <div class="container">
            <!-- Block @s -->
            <div class="nk-block block-contact animated" data-animate="fadeInUp" data-delay=".9">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-6">
                        <div class="contact-wrap split split-left split-lg-left bg-white">
                            <h5 class="title title-md"><?= $contact_form_title ?></h5>
                            <?php echo do_shortcode('[contact-form-7 id="7558" title="Footer form" html_class="form contact-form"]'); ?>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-4">
                        <div class="contact-wrap split split-right split-lg-right bg-genitian bg-theme tc-light">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <ul class="contact-list">
                                    <li>
                                        <em class="contact-icon fas fa-building"></em>
                                        <div class="contact-text"><?= $address ?></div>
                                    </li>
                                    <li>
                                        <em class="contact-icon fas fa-phone"></em>
                                        <div class="contact-text">
                                            <a href="tel:<?= str_replace(' ', '', $phone_number) ?>"><?= $phone_number ?></a>
                                        </div>
                                    </li>
                                    <li>
                                        <em class="contact-icon fas fa-envelope"></em>
                                        <div class="contact-text">
                                            <a href="mailto:<?= $email ?>"><?= $email ?></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="contact-social">
                                    <h6><?=$social_links_title?></h6>
                                    <ul class="social-links">
                                        <?php foreach ($social_links as $link): ?>
                                            <?php if ($link['social_button']): ?>
                                                <li class="svg_icon">
                                                    <a href="<?= $link['link'] ?>">
                                                        <img src="<?= get_img($link['icon_svg']['id']) ?>"
                                                             alt="<?= $link['icon_svg']['alt'] ?>">
                                                        <img src="<?= get_img($link['icon_active']['id']) ?>"
                                                             alt="<?= $link['icon_active']['alt'] ?>"
                                                             class="icon_active">
                                                    </a>
                                                </li>
                                            <?php else: ?>
                                                <li><a href="<?= $link['link'] ?>"><?= $link['icon_font'] ?></a></li>
                                            <?php endif ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .block @e -->
        </div>
        <div class="nk-ovm ovm-top ovm-h-60 bg-light"></div><!-- .nk-ovm -->
    </section>
    <!-- // -->
    <section class="section section-footer tc-light bg-transparent">
        <div class="container">
            <!-- Block @s -->
            <div class="nk-block block-footer mgb-m30">
                <div class="row">
                    <div class="col-lg-3 col-sm-4">
                        <div class="wgs wgs-menu animated" data-animate="fadeInUp" data-delay=".2">
                            <h6 class="wgs-title"><?= $footer_menu_title ?></h6>
                            <div class="wgs-body">
                                <?php
                                wp_nav_menu([
                                    'theme_location' => 'header',
                                    'container' => false,
                                    'menu_class' => 'wgs-links'
                                ]);
                                ?>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-6 order-lg-first">
                        <div class="wgs wgs-text animated" data-animate="fadeInUp" data-delay=".1">
                            <div class="wgs-body">
                                <a href="/" class="wgs-logo">
                                    <img src="<?= get_img($logo_white['id']) ?>" alt="<?= $logo_white['alt'] ?>"
                                         width="200">
                                </a>
                                <?= $copyright ?>
                            </div>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .block @e -->
        </div>
    </section>
    <div class="nk-ovm shape-b"></div>
</footer>
</div>
<!-- preloader -->
<div class="preloader preloader-alt no-split">
    <span class="spinner spinner-alt">
        <img class="spinner-brand"
             src="<?= get_img($logo_white['id']) ?>"
             alt="<?= $logo_white['alt'] ?>">
    </span>
</div>

<?php wp_footer(); ?>

</body>
</html>
