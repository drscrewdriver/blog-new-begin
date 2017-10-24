<?php




























// 小工具
if (function_exists('register_sidebar')){
	register_sidebar( array(
		'name'          => '博客布局侧边栏',
		'id'            => 'sidebar-h',
		'description'   => '显示在首页博客布局侧边栏',
		'before_widget' => '<aside id="%1$s" class="widget %2$s wow fadeInUp" data-wow-delay="0.3s">',
		'after_widget'  => '<div class="clear"></div></aside>',
		'before_title'  => '<h3 class="widget-title"><i class="fa fa-bars"></i>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => '正文侧边栏',
		'id'            => 'sidebar-s',
		'description'   => '显示在文章正文及页面侧边栏',
		'before_widget' => '<aside id="%1$s" class="widget %2$s wow fadeInUp" data-wow-delay="0.3s">',
		'after_widget'  => '<div class="clear"></div></aside>',
		'before_title'  => '<h3 class="widget-title"><i class="fa fa-bars"></i>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => '分类归档侧边栏',
		'id'            => 'sidebar-a',
		'description'   => '显示在文章归档页、搜索、404页侧边栏 ',
		'before_widget' => '<aside id="%1$s" class="widget %2$s wow fadeInUp" data-wow-delay="0.3s">',
		'after_widget'  => '<div class="clear"></div></aside>',
		'before_title'  => '<h3 class="widget-title"><i class="fa fa-bars"></i>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => '杂志布局侧边栏',
		'id'            => 'cms-s',
		'description'   => '只显示在杂志布局侧边栏',
		'before_widget' => '<aside id="%1$s" class="widget %2$s wow fadeInUp" data-wow-delay="0.3s">',
		'after_widget'  => '<div class="clear"></div></aside>',
		'before_title'  => '<h3 class="widget-title"><i class="fa fa-bars"></i>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => '杂志单栏小工具',
		'id'            => 'cms-one',
		'description'   => '显示在首页CMS杂志布局',
		'before_widget' => '<aside id="%1$s" class="widget %2$s wow fadeInUp" data-wow-delay="0.3s">',
		'after_widget'  => '<div class="clear"></div></aside>',
		'before_title'  => '<h3 class="widget-title"><i class="fa fa-bars"></i>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => '杂志两栏小工具',
		'id'            => 'cms-two',
		'description'   => '显示在首页CMS杂志布局',
		'before_widget' => '<div class="xl2"><aside id="%1$s" class="widget %2$s wow fadeInUp" data-wow-delay="0.3s">',
		'after_widget'  => '<div class="clear"></div></aside></div>',
		'before_title'  => '<h3 class="widget-title"><i class="fa fa-bars"></i>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => '正文底部小工具',
		'id'            => 'sidebar-e',
		'description'   => '显示在正文底部',
		'before_widget' => '<aside id="%1$s" class="widget %2$s wow fadeInUp" data-wow-delay="0.3s">',
		'after_widget'  => '<div class="clear"></div></aside>',
		'before_title'  => '<h3 class="widget-title"><span class="s-icon"></span>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => '公司主页“一栏”小工具',
		'id'            => 'group-one',
		'description'   => '显示在公司主页布局',
		'before_widget' => '<aside id="%1$s" class="widget %2$s wow fadeInUp" data-wow-delay="0.3s">',
		'after_widget'  => '<div class="clear"></div></aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => '公司主页“两栏”小工具',
		'id'            => 'group-two',
		'description'   => '显示在公司主页布局',
		'before_widget' => '<div class="xl2"><aside id="%1$s" class="widget %2$s wow fadeInUp" data-wow-delay="0.3s">',
		'after_widget'  => '<div class="clear"></div></aside></div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => '公司主页“三栏”小工具',
		'id'            =>  'group-three',
		'description'   => '显示在公司主页布局',
		'before_widget' => '<div class="xl3"><aside id="%1$s" class="widget %2$s wow fadeInUp" data-wow-delay="0.3s">',
		'after_widget'  => '<div class="clear"></div></aside></div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => '页脚小工具',
		'id'            => 'sidebar-f',
		'description'   => '显示在页脚',
		'before_widget' => '<aside id="%1$s" class="widget %2$s wow fadeInUp" data-wow-delay="0.3s">',
		'after_widget'  => '<div class="clear"></div></aside>',
		'before_title'  => '<h3 class="widget-title"><span class="s-icon"></span>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => '菜单页面',
		'id'            => 'all-cat',
		'description'   => '只适用于菜单页面模板，添加自定义菜单小工具',
		'before_widget' => '<aside id="%1$s" class="widget %2$s wow fadeInUp" data-wow-delay="0.3s">',
		'after_widget'  => '<div class="clear"></div></aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => '网址侧边栏',
		'id'            => 'favorites',
		'description'   => '只适用于网址分类法页面 ',
		'before_widget' => '<aside id="%1$s" class="widget %2$s wow fadeInUp" data-wow-delay="0.3s">',
		'after_widget'  => '<div class="clear"></div></aside>',
		'before_title'  => '<h3 class="widget-title"><i class="fa fa-bars"></i>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => '网址单栏小工具',
		'id'            => 'favorites-one',
		'description'   => '显示网址页面',
		'before_widget' => '<aside id="%1$s" class="widget %2$s wow fadeInUp" data-wow-delay="0.3s">',
		'after_widget'  => '<div class="clear"></div></aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

register_nav_menus(
	array(
		'primary' => '主要菜单',
		'header' => '顶部菜单',
		'mobile' => '移动端菜单'
	)
);

add_theme_support( 'custom-background' );
add_theme_support( 'post-formats', array(
	'aside', 'image', 'video', 'quote', 'link'
) );
require get_template_directory() . '/inc/call.php';
if (zm_get_option('languages_en')) {
add_action('after_setup_theme', 'begin_theme_setup');
function begin_theme_setup(){
	load_theme_textdomain( 'begin', get_template_directory() . '/languages' );
}
}
if ( ! zm_get_option('wp_title') ) {
// 默认title
	add_theme_support( 'title-tag' );

/** 兼容模式
function theme_slug_render_title() {
    echo '<title>' . wp_title( '|', false, 'right' ) . "</title>\n";
}
add_action( 'wp_head', 'theme_slug_render_title' );
 */
}
if (function_exists( 'is_shop' )) {
	add_theme_support( 'woocommerce' );
}
add_editor_style( '/css/editor-style.css' );
add_theme_support( 'automatic-feed-links' );
show_admin_bar(false);
function default_menu() {
	echo '<ul class="default-menu"><li><a href="'.home_url().'/wp-admin/nav-menus.php">设置菜单</a></li></ul>';
}
define( 'version', '2017.05.10' );

function zmingcx_scripts() {
	$my_theme = wp_get_theme();
	$theme_version = $my_theme->get( 'Version' );
	wp_enqueue_style( 'begin-style', get_stylesheet_uri(), array(), esc_attr( $theme_version ) );
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts.css', array(), version );
	if (zm_get_option('highlight')) {
		if ( is_singular() ) {
			wp_enqueue_style( 'highlight', get_template_directory_uri() . '/css/highlight.css', array(), version );
		}
	}
	if (function_exists( 'is_shop' )) {
		wp_enqueue_style( 'woo', get_template_directory_uri() . '/css/woo.css', array(), version );
	}
	if (function_exists( 'edd_get_actions' )) {
		wp_enqueue_style( 'edd', get_template_directory_uri() . '/css/edd.css', array(), version );
	}
	if (function_exists( 'dwqa_breadcrumb' )) {
		wp_enqueue_style( 'dw', get_template_directory_uri() . '/css/dw.css', array(), version );
	}
	if (function_exists( 'is_bbpress' )) {
		wp_enqueue_style( 'bbpress', get_template_directory_uri() . '/css/bbp.css', array(), version );
	}
	if ( !is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.10.1', false );
		wp_enqueue_script( 'jquery' );
	}
	wp_enqueue_script( 'slides', get_template_directory_uri() . '/js/slides.js', array(), version, false );
	if (zm_get_option('qr_img')) {
		wp_enqueue_script( 'jquery.qrcode.min', get_template_directory_uri() . '/js/jquery.qrcode.min.js', array(), version, false );
	}
	if (zm_get_option('wow_no')) {
		wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.js', array(), '0.1.9', false );
	}
	if (zm_get_option('sidebar_sticky')) {
		wp_enqueue_script( 'sticky', get_template_directory_uri() . '/js/sticky.js', array(), '1.6.0', false );
	}
	wp_enqueue_script( 'jquery-ias', get_template_directory_uri() . '/js/jquery-ias.js', array(), '2.2.1', false );
	wp_enqueue_script( 'lazyload', get_template_directory_uri() . '/js/jquery.lazyload.js', array(), version, false );
	wp_enqueue_script( 'tipso', get_template_directory_uri() . '/js/tipso.js', array(), '1.0.1', false );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), version, false );
	wp_register_script( 'flexisel', get_template_directory_uri() . '/js/flexisel.js', array(), version, false );
	wp_enqueue_script( 'flexisel' );
	if ( is_singular() ) {
		if (zm_get_option('no_admin')) {
			wp_localize_script( 'script', 'wpl_ajax_url', get_template_directory_uri() . '/inc/admin-ajax.php');
		} else { 
			wp_localize_script( 'script', 'wpl_ajax_url', admin_url() . "admin-ajax.php");
		}
	}
	if (zm_get_option('comment_ajax')) {
		if ( is_singular() ) {
			wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/fancybox.js', array(), version, false);
			if (zm_get_option('qt')) {
				wp_enqueue_script( 'comments-ajax-qt', get_template_directory_uri() . '/js/comments-ajax-qt.js', array(), version, false);
			} else {
				wp_enqueue_script( 'comments-ajax', get_template_directory_uri() . '/js/comments-ajax.js', array(), version, false);
			}
		}
	} else { 
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'zmingcx_scripts' );

// 页脚JS
function footerscript() {
	wp_register_script( 'superfish', get_template_directory_uri() . "/js/superfish.js", array(), version, true );
	if (zm_get_option('gb2')) {
		wp_register_script( 'gb2big5', get_template_directory_uri() . "/js/gb2big5.js", array(), version, true );
	}
	if (zm_get_option('group_carousel')) {
		wp_register_script( 'carousel', get_template_directory_uri() . "/js/carousel.min.js", array(), version, true );
	}
	if ( !is_admin() ) {
		wp_enqueue_script( 'superfish' );
		wp_enqueue_script( 'gb2big5' );
		wp_enqueue_script( 'carousel' );
	}
}
add_action( 'wp_enqueue_scripts', 'footerscript' );






//侧边栏支持短代码
add_filter('widget_text', 'do_shortcode');
//让文本小工具支持PHP代码
add_filter('widget_text','execute_php',100);
function execute_php($html){
     if(strpos($html,"<"."?php")!==false){
ob_start();
eval("?".">".$html);
          $html=ob_get_contents();
          ob_end_clean();
     }
     return $html;
}




ob_start("Static_Switch_css");
function Static_Switch_css($buffer){
$buffer_out = preg_replace('/http(s|):\/\/([^"\']*?)blog\.drscrewdriver\.cn\/wp-content\/themes\/([^"\']*?)\.css/i','https://css.blog.drscrewdriver.top/wp-content/themes/$3.css',$buffer);
return $buffer_out;
}
ob_start("Static_Switch_js");
function Static_Switch_js($buffer){
$buffer_out = preg_replace('/http(s|):\/\/([^"\']*?)blog\.drscrewdriver\.cn\/wp-content\/([^"\']*?)\.js/i','https://js.blog.drscrewdriver.top/wp-content/$3.js',$buffer);
return $buffer_out;
}

ob_start("Static_Switch_img");
function Static_Switch_img($buffer){
$buffer_out = preg_replace('/blog\.drscrewdriver\.cn\/wp-content\/themes\/begin\/timthumb\.php?src=([^"\']*?)?w=([^"\']*?)&h=([^"\']*?)&([^"\']*?)/i','blog.drscrewdriver.cn/wp-content/themes/begin/timthumb.php?$1',$buffer);
$buffer = preg_replace('/blog\.drscrewdriver\.cn\/wp-content\/themes\/begin\/img\/random\/([^"\']*?)\.jpg/i','img.blog.drscrewdriver.top/wp-content/themes/begin/img/random/$1.jpg',$buffer);
$buffer_out = preg_replace('/blog\.drscrewdriver\.cn\/wp-content\/themes\/([^"\']*?)\.(bmp|gif|jpeg|jpg|png)/i','imgs.blog.drscrewdriver.top/wp-content/themes/$1.$2',$buffer);
$buffer_out = preg_replace('/blog\.drscrewdriver\.cn\/wp-content\/plugins\/([^"\']*?)\.(bmp|gif|jpeg|jpg|png)/i','imgs.blog.drscrewdriver.top/wp-content/plugins/$1.$2',$buffer);
return $buffer_out;
}

ob_start("Static_Switch_thumb");
function Static_Switch_thumb($buffer){
$buffer_out = preg_replace('/blog\.drscrewdriver\.cn([^"\']*?)\/timthumb\.php([^"\']*?)src=http(s|):\/\/blog.drscrewdriver.cn\/([^"\']*?)\.(bmp|gif|jpeg|jpg|png)&/i','thumbs.blog.drscrewdriver.top/$4.$5?',$buffer);
$buffer_out = preg_replace('/blog\.drscrewdriver\.cn\/wp-content\/uploads\/([^"\']*?)\.(bmp|gif|jpeg|jpg|png)/i','thumbs.blog.drscrewdriver.top/wp-content/uploads/$1.$2',$buffer_out);
return $buffer_out;
}

add_filter ('the_content', 'fix_fancybox');
function fix_fancybox($content) {
    global $post;
    #修复图片暗箱属性
    $content = preg_replace("/<a(.*?)rel=('|\")(.*?)('|\")(.*?)><img(.*?)<\/a>/i", '<a$1rel="example_group"$5><img$6</a>', $content);
    #去掉 srcset 属性（若不需要缩略图尺寸可注释或删除）
    $content = preg_replace("/srcset=('|\")(.*?)('|\")/i", '', $content);
    #去掉图片尺寸属性（若不需要缩略图尺寸可注释或删除）
    $content = preg_replace('/<img(.*?)width="(.*?)" height="(.*?)"(.*?)>/i', '<img$1$4>', $content);
    return $content;
}



function mytheme_get_avatar($avatar) {
$avatar = str_replace(array("www.gravatar.com","0.gravatar.com","1.gravatar.com","2.gravatar.com","cn.gravatar.com"),"gravatar.cat.net",$avatar);
return $avatar;
}
add_filter( 'get_avatar', 'mytheme_get_avatar', 10, 3 );
/**
       ob_start("rewrite_urls");
function rewrite_urls($buffer){
	$buffer= preg_replace('/("|\')http(s|):\/\/([^"\']*?)'.$_SERVER["HTTP_HOST"].'/i','$1//$3'.$_SERVER["HTTP_HOST"],$buffer);
	
	return $buffer;
}

function my_avatar( $email = 'gravatarcache@ilxtx.com', $size = '32', $default = '', $alt = '') {
  // 设置$email默认值为一个不存在的邮箱，如：gravatarcache@ilxtx.com
  // 防止空的$email导致出错
  $f = md5( strtolower( $email ) );
  // 以下代码将头像缓存到wp-content目录下
  $a = WP_CONTENT_URL . '/avatar/'. $f . $size . '.png';
  $e = WP_CONTENT_DIR . '/avatar/' . $f . $size . '.png';
  $d = WP_CONTENT_DIR . '/avatar/' . $f . '-d.png';
  // 如果要将头像缓存到当前主题目录下，请将11-13行代码改成：
  // $a = get_bloginfo('template_url') . '/avatar/'. $f . $size . '.png';
  // $e = get_template_directory() . '/avatar/' . $f . $size . '.png';
  // $d = get_template_directory() . '/avatar/' . $f . '-d.png';
  if($default=='')
    $default = 'https://img.blog.drscrewdriver.top/wp-content/avatar/gravatar.jpg';
  $t = 2592000; // 缓存有效期30天, 这里单位:秒
  if ( !is_file($e) || (time() - filemtime($e)) > $t ) {
    if ( !is_file($d) || (time() - filemtime($d)) > $t ) {
       验证是否有头像
      $uri = 'https://gravatar.cat.net/avatar/' . $f . '?d=404';
      $headers = @get_headers($uri);
      if (!preg_match("|200|", $headers[0])) {
         没有头像，则新建一个空白文件作为标记
        $handle = fopen($d, 'w');
        fclose($handle);
        $a = $default;
      }
      else {
         有头像且不存在则更新
        $r = get_option('avatar_rating');
        $g = 'http://gravatar.cat.net/avatar/'. $f. '?s='. $size. '&r=' . $r;
        copy($g, $e);
      }
    }
    else {
      $a = $default;

  }
  $avatar = "<img alt='{$alt}' src='{$a}' class='avatar avatar-{$size} photo' height='{$size}' width='{$size}' />";
//  return apply_filters('my_avatar', $avatar, $email, $size, $default, $alt);
}
function cache_avatar($avatar) {
$tmp = strpos($avatar, 'http');
$g = substr($avatar, $tmp, strpos($avatar, "'", $tmp) - $tmp);
$tmp = strpos($g, 'avatar/') + 7;
$f = substr($g, $tmp, strpos($g, "?", $tmp) - $tmp);
$w = WP_CONTENT_URL ;
$e = WP_CONTENT_DIR .'avatar/'. $f .'.jpg';
$t = 1209600; //設定14天, 單位:秒
if ( !is_file($e) || (time() - filemtime($e)) > $t ) { //當頭像不存在或文件超過14天才更新
copy(htmlspecialchars_decode($g), $e);
} else $avatar = strtr($avatar, array($g => $w.'/avatar/'.$f.'.jpg'));
if (filesize($e) < 500) copy($w.'/avatar/default.jpg', $e);
return $avatar;
}
add_filter('get_avatar', 'cache_avatar');

//xiangduilink

add_filter('get_comment_author_link', 'add_redirect_comment_link', 5);
add_filter('comment_text', 'add_redirect_comment_link', 99);
function add_redirect_comment_link($text = ''){
$text=str_replace('href="', 'href="'.get_option('home').'/go/?url=', $text);
    return $text;
}





// 全部结束
