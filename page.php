<?php
/*
Template Name: 默认模版
*/
$page_side_bar = snape_option('page_side_bar');
$page_side_bar = (empty($page_side_bar)) ? 'right_side' : $page_side_bar;
$background_color = snape_option('background_color');
$background_image = snape_option('background_image');
$page_banner_image = snape_option('page_banner_image');
$page_banner_single_color = snape_option('page_banner_single_color');
get_header(); ?>
<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
<div class="pageheader pageheaders headtbanner" style="<?php echo (!snape_option('page_banner_image')) ? 'background:' . $page_banner_single_color  :'background-image: url('. $page_banner_image .');background-position: center' ; ?>">
    <div class="container text-center">
        <h2 class="title"><?php the_title(); ?></h2>
    </div>
</div>
<div class="post-section post-main" style="<?php echo (!snape_option('background_image')) ? 'background:' . $background_color  :'background-image: url('. $background_image .');' ; ?>">
    <div class="container">
        <div class="row">
        	<?php if($page_side_bar == 'left_side'){ ?>
				<div id="widget-area" class="col-md-4 hidden-xs hidden-sm">
					<?php dynamic_sidebar('sidebar_single'); ?>
				</div>
			<?php } ?>
            <div class='<?php echo ($page_side_bar == 'single') ? 'col-md-12' : 'col-md-8'; ?>'>
                <article>
                    <div class="post-inner post-border clearfix">
                        <div class="post-content"><?php the_content(); ?></div>
						<?php if(snape_option('page_like_donate')||snape_option('page_share')) {?>
						<div class="entry-footer clearfix">
							<div class="post-like-donate text-center clearfix" id="post-like-donate">
							<?php if ( snape_option( 'page_like_donate' )==1 ) : ?>
				   			<a href="<?php echo snape_option('donate_links'); ?>" class="Donate"><i class="fa fa-bitcoin"></i> 打赏</a>
				   			<?php endif; ?>
							<?php if ( snape_option( 'page_share' )==1 ) : ?>
							<a href="javascript:;"  class="Share"><i class="fa fa-share-alt"></i> 分享</a>
							<div class="share-wrap" style="display: none;">
								<div class="share-group">
									<a href="javascript:;" class="share-plain weibo" onclick="share('weibo');" rel="nofollow">
										<div class="icon-wrap">
											<i class="fa fa-weibo"></i>
										</div>
									</a>
									<a href="javascript:;" class="share-plain twitter style-plain" onclick="share('twitter');" rel="nofollow">
										<div class="icon-wrap">
											<i class="fa fa-twitter"></i>
										</div>
									</a>
									<a href="javascript:;" class="share-plain facebook style-plain" onclick="share('facebook');" rel="nofollow">
										<div class="icon-wrap">
											<i class="fa fa-facebook"></i>
										</div>
									</a>
									<a href="javascript:;" class="share-plain googleplus style-plain" onclick="share('googleplus');" rel="nofollow">
										<div class="icon-wrap">
											<i class="fa fa-google-plus"></i>
										</div>
									</a>
									<a href="javascript:;" class="share-plain weixin pop style-plain" rel="nofollow">
										<div class="icon-wrap">
											<i class="fa fa-weixin"></i>
										</div>
										<div class="share-int">
											<div class="qrcode" data-url="<?php the_permalink() ?>"></div>
											<p>打开微信“扫一扫”，打开网页后点击屏幕右上角分享按钮</p>
										</div>
									</a>
								</div>
								<script type="text/javascript">
								function share(obj){
									var weiboShareURL="http://service.weibo.com/share/share.php?";
									var facebookShareURL="https://www.facebook.com/sharer/sharer.php?";
									var twitterShareURL="https://twitter.com/intent/tweet?";
									var googleplusShareURL="https://plus.google.com/share?";
									var host_url="<?php the_permalink(); ?>";
									var title="【<?php the_title(); ?>】<?php echo get_the_excerpt(); ?>";
									var pic="<?php echo share_post_image(); ?>";
									var appkey="<?php echo snape_option('sina_appkey'); ?>";
									var _URL;
									if(obj=="weibo"){
										_URL=weiboShareURL+"url="+host_url+"&title="+title+"&appkey="+appkey+"&pic="+pic+"&searchPic=true";
									}else if(obj=="facebook"){
								 		_URL=facebookShareURL+"u="+host_url;
									}else if(obj=="twitter"){
								 		_URL=twitterShareURL+"text="+title+"&url="+host_url;
									}else if(obj=="googleplus"){
								 		_URL=googleplusShareURL+"url="+host_url;
									}
									window.open(_URL);
								}
								</script>
							</div>
							<?php endif; ?>
				    		</div>
						</div>
						<?php }?>
					</div>
					<?php if ( snape_option( 'page_cc' )==1 ) : ?>
					<div class="hentry copyright text-center clearfix">
						<img alt="知识共享许可协议" src="<?php echo get_template_directory_uri(); ?>/images/licenses.png">
						<h5>本作品采用 <a rel="license nofollow" target="_blank" href="http://creativecommons.org/licenses/by-sa/4.0/">知识共享署名-相同方式共享 4.0 国际许可协议</a> 进行许可</h5>
					</div>
					<?php endif; ?>
					<?php comments_template(); ?>
				</article>
			<?php endif; ?>
			</div>
			<?php if($page_side_bar == 'right_side'){ ?>
				<div id="widget-area" class="col-md-4 hidden-xs hidden-sm">
					<?php dynamic_sidebar('sidebar_page'); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>