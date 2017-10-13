<div class="clear"></div>
<div id="social">
	<div class="social-main">
		<span class="like">
			<a href="javascript:;" data-action="ding" data-id="<?php the_ID(); ?>" title="<?php _e( '点赞', 'begin' ); ?>" class="dingzan<?php if(isset($_COOKIE['zm_like_'.$post->ID])) echo ' done';?>"><i class="fa fa-thumbs-up"></i><?php _e( '赞', 'begin' ); ?> <i class="count">
				<?php if( get_post_meta($post->ID,'zm_like',true) ){
					echo get_post_meta($post->ID,'zm_like',true);
				} else {
					echo '0';
				}?></i>
			</a>
		</span>
		<span class="shang-p">
			<div class="ds-reward-stl">
				<a id="dsRewardBtn" onclick="PaymentUtils.show();" title="点击打赏">赏</a>
			</div>
		</span>
		
		<div class="share-sd">
			<span class="share-s"><a href="javascript:void(0)" id="share-s" title="<?php _e( '分享', 'begin' ); ?>"><i class="fa fa-share-alt"></i><?php _e( '分享', 'begin' ); ?></a></span>
			<?php if (zm_get_option('share')) { ?><?php get_template_part( 'template/share' ); ?><?php } ?>
		</div>
		<div class="clear"></div>
	</div>
</div>
