<div class="clearfix"></div>
    <footer>
        <a class="cd-top visible-lg"><span class=" fa fa-chevron-up"></span></a>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <p class="social-icons">
                    <?php echo (!Snape_option('social_weibo')) ? '' : '<a target="_blank" rel="nofollow" href="' . Snape_option('social_weibo') . '"><i class="fa fa-weibo"></i></a>'; ?>
                    <?php echo (!Snape_option('social_tweibo')) ? '' : '<a target="_blank" rel="nofollow" href="' . Snape_option('social_tweibo') . '"><i class="fa fa-tencent-weibo"></i></a>'; ?>
                    <?php echo (!Snape_option('social_twitter')) ? '' : '<a target="_blank" rel="nofollow" href="' . Snape_option('social_twitter') . '"><i class="fa fa-twitter"></i></a>'; ?>
                    <?php echo (!Snape_option('social_facebook')) ? '' : '<a target="_blank" rel="nofollow" href="' . Snape_option('social_facebook') . '"><i class="fa fa-facebook-official"></i></a>'; ?>
                    <?php echo (!Snape_option('social_linkedin')) ? '' : '<a target="_blank" rel="nofollow" href="' . Snape_option('social_linkedin') . '"><i class="fa fa-linkedin-square"></i></a>'; ?>
                    <?php echo (!Snape_option('social_github')) ? '' : '<a target="_blank" rel="nofollow" href="' . Snape_option('social_github') . '"><i class="fa fa-github"></i></a>'; ?>
                    </p>
                    <p>© 2016 <a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a> All Rights Reserved.<br>Theme <a href="https://github.com/vtrois/snape" target="_blank" rel="nofollow">Snape</a> made by <a href="https://www.vtrois.com/" target="_blank" rel="nofollow">Vtrois</a><br><a href="http://www.miitbeian.gov.cn/" rel="external nofollow" target="_blank"><?php echo get_option( 'zh_cn_l10n_icp_num' );?></a></p>
                    <p><?php echo (!snape_option('site_tongji')) ? '' : '<script>' . snape_option('site_tongji') . '</script>'; ?></p>
                </div>
            </div>
        </div>
        <?php echo (!snape_option('ad_code')) ? '' : '<script>' . snape_option('ad_code') . '</script>'; ?>
    </footer>
    <?php wp_footer();?>
    </body>
</html>