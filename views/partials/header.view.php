<?php

global $settings;

?>

<header id="masthead" class="site-header" role="banner">
    <div class="header-wrap" data-parallax-video="">
        <div class="header-wrap-inner">
            <div class="site-branding">
                <div class="site-branding-wrap">
                    <div class="site-branding-left">
                    </div>
                    <div class="site-branding-center">
                        <h1 class="site-title">
                            <a href="<?= $settings->mainUrl ?>" rel="home">
                                <span class="screen-reader-text">Queens-log</span>
                                <span class="site-title-text">Queens-log</span>
                            </a>
                        </h1>
                        <p class="site-description"></p>
                    </div>
                    <div class="site-branding-right"></div>
                </div>
            </div>

            <nav id="site-navigation" class="main-navigation site-navigation" role="navigation">
                <div class="menu-wrap">
                    <div class="layout-medium">
                        <a class="menu-toggle"><span class="lines"></span></a>
                        <div class="nav-menu">
                            <ul id="menu-main-menu" class="">
                                <li id="menu-item-12260"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2871 current_page_item menu-item-12260">
                                    <a href="<?= $settings->mainUrl ?>" aria-current="page">Home</a>
                                </li>
                                <li id="menu-item-1001" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1001">
                                    <a href="about">Über uns</a>
                                </li>
                                <li id="menu-item-1247" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1247">
                                    <a href="services">Leistungen</a>
                                </li>
                                <li id="menu-item-1729" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1729">
                                    <a href="projects">Projekte</a>
                                </li>
                                <li id="menu-item-6411" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6411">
                                    <a href="news">News</a>
                                </li>
                                <li id="menu-item-1000" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1000">
                                    <a href="contact">Kontakt</a>
                                </li>
                            </ul>
                        </div>

                        <!--
                        <a class="search-toggle toggle-link"></a>
                        <div class="search-container">
                            <div class="search-box">
                                <form class="search-form" method="get" action="https://themes.pixelwars.org/logistica/demo-01/">
                                    <label>
                                        <span>Search for</span>
                                        <input type="search" id="search-field" name="s" placeholder="type and hit enter">
                                    </label>
                                    <input type="submit" class="search-submit" value="Search">
                                </form>
                            </div>
                        </div>-->
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>