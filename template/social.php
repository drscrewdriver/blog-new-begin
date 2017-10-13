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
		<div class="shang-p">
			<div class="shang-empty"><span></span></div>
			<?php if ( zm_get_option('alipay_name') == '' ) { ?>
				<span class="shang-s"><a title="<?php echo zm_get_option('alipay_t'); ?>"><?php echo zm_get_option('alipay_name'); ?></a></span></span>
			<?php } else { ?>
				

				<span class="shang-p">
				    <div class="shang-s">
				        <a onclick="PaymentUtils.show();" style="cursor:pointer">赏</a>
				    </div>
				</span>
				<!-- js地址自行修改下 -->
				<script type="text/javascript" src="https://js.blog.drscrewdriver.top/wp-content/themes/begin/js/ds.js"></script>

			<?php } ?>
		</div>
		<div class="share-sd">
			<span class="share-s"><a href="javascript:void(0)" id="share-s" title="<?php _e( '分享', 'begin' ); ?>"><i class="fa fa-share-alt"></i><?php _e( '分享', 'begin' ); ?></a></span>
			<?php if (zm_get_option('share')) { ?><?php get_template_part( 'template/share' ); ?><?php } ?>
		</div>
		<div class="clear"></div>
	</div>
</div>
