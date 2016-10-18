<?php $sidebar = snape_option('side_bar');
	  $sidebar = (empty($sidebar)) ? 'right_side' : $sidebar;
	  $ad = snape_option('ad_show');
	  $banner_image = snape_option('banner_image');
	  $background_color = snape_option('background_color');
	  $background_image = snape_option('background_image');
	  $banner_single_color = snape_option('banner_single_color');
	  get_header(); ?>
<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
<div class="pageheader headtbanner" style="<?php echo (!snape_option('banner_image')) ? 'background:' . $banner_single_color  :'background-image: url('. $banner_image .');background-position: center' ; ?>">
    <div class="container text-center">
        <h2 class="title"><?php the_title(); ?></h2>
        <div class="text-center">
            <span>
                <i class="fa fa-calendar"></i> <?php the_time('Y/n/j') ?>
                <i class="fa fa-commenting-o"></i> <?php echo snape_comments_users($post->ID); ?> Comments
                <i class="fa fa-eye"></i> <?php echo snape_get_post_views();?> Views
                <i class="fa fa-thumbs-o-up"></i> <?php if( get_post_meta($post->ID,'love',true) ){ echo get_post_meta($post->ID,'love',true); } else { echo '0'; }?> Times
            </span>
        </div>
    </div>
</div>
<div class="post-section post-main" style="<?php echo (!snape_option('background_image')) ? 'background:' . $background_color  :'background-image: url('. $background_image .');' ; ?>">
    <div class="container">
        <div class="row">
        	<?php if($sidebar == 'left_side'){ ?>
				<div id="widget-area" class="col-md-4 hidden-xs hidden-sm">
					<?php dynamic_sidebar('sidebar_single'); ?>
				</div>
			<?php } ?>
            <div class='<?php echo ($sidebar == 'single') ? 'col-md-12' : 'col-md-8'; ?>'>
                <article>
                    <div class="post-inner post-border clearfix">
                        <div class="post-content">
						<?php if ($ad['top']==1): ?>
	                    <img src="<?php echo snape_option('ad_img')?>">
	                    <?php endif ?>
                        <?php the_content(); ?>
                        <?php if ($ad['footer']==1): ?>
	                    <img src="<?php echo snape_option('ad_img')?>">
	                    <?php endif ?>
                        </div>
						<div class="entry-footer clearfix">
							<div class="post-like-donate text-center clearfix" id="post-like-donate">
							<?php if ( snape_option( 'post_like_donate' )==1 ) : ?>
				   			<a href="<?php echo snape_option('donate_links'); ?>" class="Donate"><i class="fa fa-bitcoin"></i> 打赏</a>
				   			<?php endif; ?>
				   			<a href="javascript:;" data-action="love" data-id="<?php the_ID(); ?>" class="Love <?php if(isset($_COOKIE['love_'.$post->ID])) echo 'done';?>" ><i class="fa fa-thumbs-o-up"></i> 点赞</a>
							<?php if ( snape_option( 'post_share' )==1 ) : ?>
							<a href="javascript:;"  class="Share" ><i class="fa fa-share-alt"></i> 分享</a>
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
										_URL=weiboShareURL+"&appkey="+appkey+"$url="+host_url+"&title="+title+"&pic="+pic;
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
							<div class="footer-tag clearfix">
								<div class="pull-left">
								<i class="fa fa-tags"></i>
								<?php if ( get_the_tags() ) { the_tags('', ' ', ''); } else{ echo '<a>No Tag</a>';  }?>
								</div>
							</div>
						</div>
					</div>
					<?php if ( snape_option( 'post_cc' )==1 ) : ?>
					<div class="hentry copyright text-center clearfix">
						<img alt="知识共享许可协议" src="<?php echo get_template_directory_uri(); ?>/images/licenses.png">
						<h5>本作品采用 <a rel="license nofollow" target="_blank" href="http://creativecommons.org/licenses/by-sa/4.0/">知识共享署名-相同方式共享 4.0 国际许可协议</a> 进行许可</h5>
					</div>
					<?php endif; ?>
					<nav class="navigation post-navigation clearfix" role="navigation">
						<?php $prev_post = get_previous_post(TRUE); if(!empty($prev_post)):?>
						<div class="nav-previous clearfix">
							<a title="<?php echo $prev_post->post_title;?>" href="<?php echo get_permalink($prev_post->ID);?>">&lt; 上一篇</a>
						</div>
						<?php endif;?>
						<?php $next_post = get_next_post(TRUE); if(!empty($next_post)):?>
						<div class="nav-next">
							<a title="<?php echo $next_post->post_title;?>" href="<?php echo get_permalink($next_post->ID);?>">下一篇 &gt;</a>
						</div>
						<?php endif;?>
					</nav>
					<?php comments_template(); ?>
				</article>
			<?php endif; ?>
			</div>
			<?php if($sidebar == 'right_side'){ ?>
				<div id="widget-area" class="col-md-4 hidden-xs hidden-sm">
					<?php dynamic_sidebar('sidebar_single'); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>