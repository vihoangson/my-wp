<?php
define('URL_TEMPLATE', 'http://vihoangson.com/templates/webapplayers.com/');
/**
 * Template Name: Blogs
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
        <link href="<?=URL_TEMPLATE?>font-awesome/css/font-awesome.css" rel="stylesheet">

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

            <?php
            $args = [
                'numberposts'    => 100,
                'post_type'      => 'post',
                'posts_per_page' => 10,
                'meta_query'     => [

                ]
            ];

            $posts = get_posts($args); ?>
            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-lg-6">
                        <?php
                        foreach ($posts as $k => $v) {
                            if ($k % 2 != 0) {
                                continue;
                            }
                            show_content($v);
                        }
                        ?>
                    </div>
                    <div class="col-lg-6">
                        <?php
                        foreach ($posts as $k => $v) {
                            if ($k % 2 == 0) {
                                continue;
                            }
                            show_content($v);
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?=URL_TEMPLATE?>js/jquery-2.1.1.js"></script>
    <script src="<?=URL_TEMPLATE?>js/bootstrap.min.js"></script>
    <script src="<?=URL_TEMPLATE?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?=URL_TEMPLATE?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?=URL_TEMPLATE?>js/inspinia.js"></script>
    <script src="<?=URL_TEMPLATE?>js/plugins/pace/pace.min.js"></script>

    <?php wp_footer(); ?>

    </body>

    </html>
<?php
function show_content($v) {
    $featured_img_url = get_the_post_thumbnail_url($v->ID, 'full');
    $user_post        = get_user_by("ID", $v->post_author);

    ?>
    <div class="social-feed-separated">
        <div class="social-avatar">
            <a href="#">
                <img alt="image" src="<?=get_field('avatar', 'user_' . $v->post_author)['url']?>">
            </a>
        </div>
        <div class="social-feed-box">
            <div class="pull-right social-action dropdown">
                <button data-toggle="dropdown" class="dropdown-toggle btn-white">
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu m-t-xs">
                    <li><a href="#">Config</a></li>
                </ul>
            </div>
            <div class="social-avatar">
                <a href="#">
                    <?=$user_post->display_name?>
                </a>
                <small class="text-muted"><?=$v->post_modified?></small>
            </div>
            <div class="social-body">
                <h3><a href="<?=get_permalink($v->ID)?>"><?=$v->post_title?></a></h3>
                <div class="content">
                    <?= wp_trim_words(wp_strip_all_tags($v->post_content),55,' [...]') ?>
                </div>
                <? if ($featured_img_url): ?>
                    <img src="<?=$featured_img_url?>"
                         class="img-responsive">
                <? endif; ?>
                <div class="btn-group">
                    <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Like this!
                    </button>
                    <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment
                    </button>
                    <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> Share</button>
                </div>
            </div>
            <div class="social-footer">

                <?php
                $comments_args = array(
                    // change the title of send button
                    'label_submit'=>'Send',
                    // change the title of the reply section
                    'title_reply'=>'Write a Reply or Comment',
                    // remove "Text or HTML to be displayed after the set of comment fields"
                    'comment_notes_after' => '',
                    // redefine your own textarea (the comment body)
                    'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
                );
                comment_form($comments_args,$v->ID);

                $comments = (hs_get_discussion_data($v->ID));
                foreach ($comments as $c){
                    $user_post        = get_user_by("email", $c->comment_author_email);


                    ?>

                    <div class="social-comment ">
                        <a href="http://vihoangson.com/templates/webapplayers.com/" class="pull-left">
                            <img alt="image"
                                 src="<?=get_field('avatar', 'user_' . $user_post->ID)['url']?>">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <?= $c->comment_author ?>
                            </a>
                            <?= $c->comment_content ?>
                            <br>
                            <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26 Like this!</a>
                            -
                            <small class="text-muted"><?= $c->comment_date ?></small>
                        </div>
                    </div>
                    <?php
                }
                ?>


                <div class="social-comment hidden ">
                    <a href="http://vihoangson.com/templates/webapplayers.com/" class="pull-left">
                        <img alt="image"
                             src="http://vihoangson.com/templates/webapplayers.com/img/a4.jpg">
                    </a>
                    <div class="media-body">
                        <a href="#">
                            Andrew Williams
                        </a>
                        Making this the first true generator on the Internet. It uses a dictionary
                        of.
                        <br>
                        <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11 Like this!</a>
                        -
                        <small class="text-muted">10.07.2014</small>
                    </div>

                    <div class="social-comment">
                        <a href="http://vihoangson.com/templates/webapplayers.com/"
                           class="pull-left">
                            <img alt="image"
                                 src="http://vihoangson.com/templates/webapplayers.com/img/a7.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                Andrew Williams
                            </a>
                            Making this the first true generator on the Internet. It uses a
                            dictionary
                            of.
                            <br>
                            <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11 Like this!</a>
                            -
                            <small class="text-muted">10.07.2014</small>
                        </div>
                    </div>

                    <div class="social-comment">
                        <a href="http://vihoangson.com/templates/webapplayers.com/"
                           class="pull-left">
                            <img alt="image"
                                 src="http://vihoangson.com/templates/webapplayers.com/img/a8.jpg">
                        </a>
                        <div class="media-body">
                                                <textarea class="form-control"
                                                          placeholder="Write comment..."></textarea>
                        </div>
                    </div>

                </div>

                <div class="social-comment hidden ">
                    <a href="http://vihoangson.com/templates/webapplayers.com/" class="pull-left">
                        <img alt="image"
                             src="http://vihoangson.com/templates/webapplayers.com/img/a6.jpg">
                    </a>
                    <div class="media-body">
                        <a href="#">
                            Andrew Williams
                        </a>
                        Internet tend to repeat predefined chunks as necessary, making this the
                        first
                        true generator on the Internet. It uses a dictionary of over 200 Latin
                        words.
                        <br>
                        <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26 Like this!</a>
                        -
                        <small class="text-muted">12.06.2014</small>
                    </div>
                </div>

                <div class="social-comment hidden ">
                    <a href="http://vihoangson.com/templates/webapplayers.com/" class="pull-left">
                        <img alt="image"
                             src="http://vihoangson.com/templates/webapplayers.com/img/a7.jpg">
                    </a>
                    <div class="media-body">
                        <a href="#">
                            Andrew Williams
                        </a>
                        Making this the first true generator on the Internet. It uses a dictionary
                        of
                        over 200 Latin words.
                        <br>
                        <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26 Like this!</a>
                        -
                        <small class="text-muted">12.06.2014</small>
                    </div>
                </div>

                <div class="social-comment hidden">
                    <a href="http://vihoangson.com/templates/webapplayers.com/" class="pull-left">
                        <img alt="image"
                             src="http://vihoangson.com/templates/webapplayers.com/img/a3.jpg">
                    </a>
                    <div class="media-body">
                        <textarea class="form-control" placeholder="Write comment..."></textarea>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <?php
}

function hs_get_discussion_data($current_post_id) {
    static $discussion, $post_id;

    //$current_post_id = get_the_ID();
    if ( $current_post_id === $post_id ) {
        return $discussion; /* If we have discussion information for post ID, return cached object */
    } else {
        $post_id = $current_post_id;
    }

    $comments = get_comments(
        array(
            'post_id' => $current_post_id,
            'orderby' => 'comment_date_gmt',
            'order'   => get_option( 'comment_order', 'desc' ), /* Respect comment order from Settings » Discussion. */
            'status'  => 'approve',
            'number'  => 20, /* Only retrieve the last 20 comments, as the end goal is just 6 unique authors */
        )
    );
    return $comments;
}