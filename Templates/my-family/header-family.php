<?php
define('URL_TEMPLATE', 'http://vihoangson.com/templates/webapplayers.com/');
/**
 *
 *
 * @package    WordPress
 * @subpackage Twenty_Fourteen
 * @since      Twenty Fourteen 1.0
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

    <link href="<?=URL_TEMPLATE?>css/bootstrap.min.css" rel="stylesheet">
<!--    <link href="--><?//=URL_TEMPLATE?><!--font-awesome/css/font-awesome.css" rel="stylesheet">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css" rel="stylesheet">

    <link href="<?=URL_TEMPLATE?>css/animate.css" rel="stylesheet">

    <link href="<?=URL_TEMPLATE?>css/style.css" rel="stylesheet">

    <style>
        figure.wp-block-image img {
            width: 100%;
        }

        .social-body .content {
            padding-bottom: 10px;
        }
    </style>
</head>

<body <?php body_class(); ?>>


<div id="wrapper">


    <div id="" class="container gray-bg">

        <div class="top-navigation">
            <div class="row border-bottom white-bg">
                <nav class="navbar navbar-static-top" role="navigation">
                    <div class="navbar-header">
                        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar"
                                data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <i class="fa fa-reorder"></i>
                        </button>
                        <a href="#" class="navbar-brand">Family</a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbar">
                        <?php if (has_nav_menu('footer')) : ?>

                            <?php
                            $defaults = [
                                'menu'            => '',
                                'container'       => 'div',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'menu',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul class="nav navbar-nav" id="%1$s" class="%2$s">%3$s</ul>',
                                'item_spacing'    => 'preserve',
                                'depth'           => 0,
                                'walker'          => '',
                                'theme_location'  => 'footer',
                            ];
                            wp_nav_menu($defaults);
                            ?>

                        <?php endif; ?>
                        <ul class="nav navbar-nav hidden">
                            <li class="">
                                <a aria-expanded="false" role="button" href="layouts.html"> Back to main Layout page</a>
                            </li>
                            <li class="dropdown">
                                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle"
                                   data-toggle="dropdown"> Menu item <span class="caret"></span></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="">Menu item</a></li>
                                    <li><a href="">Menu item</a></li>
                                    <li><a href="">Menu item</a></li>
                                    <li><a href="">Menu item</a></li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="nav navbar-top-links navbar-right hidden">
                            <li>
                                <a href="#login.html">
                                    <i class="fa fa-sign-out"></i> Log out
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2><?= the_title() ?></h2>
                <?=  get_breadcrumb() ?>
                <ol class="breadcrumb hidden">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class='hidden'>
                        <a>App views</a>
                    </li>
                    <li class="active hidden">
                        <strong>Social feed</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
