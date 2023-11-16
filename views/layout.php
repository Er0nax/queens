<?php
global $settings;
global $page;
?>

<!doctype html>
<html lang="en-US"
      class="no-featured-area is-header-small is-body-full-width is-single-post-title-default is-post-title-align-center is-post-media-fixed is-blog-text-align-left is-meta-with-icons is-header-light is-header-full-width is-header-parallax-no is-menu-sticky is-menu-fixed-width is-menu-align-right is-menu-light is-submenu-light is-submenu-align-left is-menu-uppercase is-featured-area-fixed is-slider-buttons-center-margin is-slider-buttons-rounded is-slider-buttons-dark is-slider-title-default is-slider-parallax is-slider-title-none-uppercase is-slider-more-link-show is-slider-more-link-button-style is-slider-text-align-center is-slider-v-align-center is-slider-h-align-center is-link-box-title-default is-link-box-title-transform-none is-link-box-text-align-center is-link-box-v-align-center is-link-box-parallax is-intro-align-center is-intro-text-dark is-intro-parallax-no is-more-link-border-bottom-light is-about-author-minimal is-related-posts-parallax is-related-posts-overflow is-share-links-boxed is-tagcloud-minimal is-nav-single-rounded is-nav-single-no-animated is-comments-minimal is-comments-image-rounded is-comment-form-boxed is-comment-form-border is-sidebar-right is-sidebar-sticky is-sidebar-align-left is-widget-title-align-left is-widget-bottomline is-trending-posts-default is-footer-subscribe-light is-footer-widgets-align-left is-footer-full-width is-meta-uppercase is-site-title-uppercase is-top-bar-uppercase is-sub-menu-ani-fade-in-left is-menu-hover-solid is-menu-hover-overflow is-menu-hover-cut-left is-copyright-uppercase is-header-sticky-shadow-soft-shorter is-header-border-fixed is-header-float is-header-transparent"
      data-title-ratio="0.5" data-link-box-title-ratio="0.5" data-generic-button-style="" data-header-bg-shape="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $settings->pageTitle ?> | <?= $page->pageName ?></title>

    <!-- #### css includes here #### -->
    <?php include('assets/css/includes.html'); ?>
    <!-- #### css includes ends here #### -->
</head>

<body class="color-body home page-template page-template-elementor_header_footer page page-id-2871 qodef-qi--no-touch qi-addons-for-elementor-1.6.3 elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-2871">
<div id="page" class="hfeed site">

    <!-- #### header start #### -->
    <?php include('partials/header.php'); ?>
    <!-- #### header end #### -->

    <div data-elementor-type="wp-page" data-elementor-id="2871" class="elementor elementor-2871">
        <!-- #### view start #### -->
        <?php include($page->viewPath); ?>
        <!-- #### view end #### -->

        <?php include('../views/matrix/information.view.php'); ?>
    </div>

    <!-- #### footer start #### -->
    <?php include('partials/footer.php'); ?>
    <!-- #### footer end #### -->
</div>

<!-- #### js includes here #### -->
<?php include('assets/js/includes.html'); ?>
<!-- #### js includes ends here #### -->

</body>
</html>
