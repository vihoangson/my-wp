
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
                    <?=wp_strip_all_tags($v->post_content)?>
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
            <div class="social-footer hidden">
                <div class="social-comment">
                    <a href="http://vihoangson.com/templates/webapplayers.com/" class="pull-left">
                        <img alt="image"
                             src="http://vihoangson.com/templates/webapplayers.com/img/a3.jpg">
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

                <div class="social-comment">
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

                <div class="social-comment">
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

                <div class="social-comment">
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

                <div class="social-comment">
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