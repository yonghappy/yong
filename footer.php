</div>

<div class="clear"></div>

<div class="foot1">

    <div class="footer_top">

	<div id="menu">

		<?php 

			$catNav = '';

			if (function_exists('wp_nav_menu')) {

				$catNav = wp_nav_menu( array( 'theme_location' => 'footer-menu',  'echo' => false, 'fallback_cb' => '' ) );};

			if ($catNav == '') { ?>

				<ul id="cat-nav" class="nav">
                <?php wp_list_pages('include=648&title_li=0'); ?> 

				</ul>

		<?php } else echo($catNav); ?>

	</div>

	<?php wp_reset_query();if ( is_home()){ ?><h2 class="blogtitle">

	<a href="<?php echo stripslashes(get_option('swt_link_s')); ?>" title="申请友链">友情链接</a></h2><?php } ?>

        <?php wp_reset_query();if ( !is_home()){ ?><h2 class="blogtitle">

	<a href="<?php bloginfo('home'); ?>/" title="<?php bloginfo('name'); ?>">返回首页</a></h2><?php } ?>

    </div>

</div>

<!-- 页脚 -->

<?php wp_reset_query();if (is_single() || is_page() || is_archive() || is_search() || is_404()) { ?>

<div class="foot">
    <div class="footer_bottom_a">
	<a href="/about/"rel="author" target="_blank" >关于本站</a> |
    <a href="/sitemap_baidu.xml" target="_blank">百度地图</a> | 
    <a href="/sitemap.html" target="_blank">HTML地图</a>
	<p>Powered by Nate & <a href="http://www.yonghappy.com" title="心晴客栈" target="_blank">心晴客栈</a>.
	<?php echo stripslashes(get_option('swt_track_code')); ?><?php echo get_num_queries(); ?>次查询<br>
    </div>
</div>
<?php } ?>

<!-- 首页页脚 -->

<?php wp_reset_query();if ( is_home()){ ?>

<div class="foot">

    <div class="link">

	<?php

		if(function_exists('wp_hto_get_links')){

		wp_hot_get_links();

		}else{

		wp_list_bookmarks('title_li=&categorize=&orderby=rand&limit=32&show_images=');

		}

	?>

	<div class="clear"></div>

    </div>

<!-- end: link -->

    <div class="footer_bottom">
    <a href="/about/"rel="author" target="_blank" >关于本站</a> |
    <a href="/sitemap_baidu.xml" target="_blank">百度地图</a> | 
    <a href="/sitemap.html" target="_blank">HTML地图</a>
	<p>Powered by Nate & <a href="http://www.yonghappy.com" title="心晴客栈" target="_blank">心晴客栈</a>.
	<?php echo stripslashes(get_option('swt_track_code')); ?><?php echo get_num_queries(); ?>次查询</p>  
    </div>
<?php } ?>
<div class="clear"></div>
</div>

<!-- 侧边栏滚动 -->

<?php wp_reset_query();if (!is_home()) { ?>

<script type="text/javascript">// <![CDATA[

/* <![CDATA[ */ (new SidebarFollow()).init({ 	element: jQuery('#sidebar-follow'), 	prevElement: jQuery('#random_r'), 	distanceToTop: 10  }); /* ]]> */

// ]]></script>
<?php } ?>

<?php wp_footer(); ?>
<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&img=5&pos=left&uid=292260" ></script>
<script type="text/javascript" id="bdshell_js"></script>

<script type="text/javascript">
var bds_config={"bdTop":300};
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<!-- Baidu Button END -->

<script language="Javascript"> 
document.oncontextmenu=new Function("event.returnValue=false"); 
document.onselectstart=new Function("event.returnValue=false"); 
</script> 

</html>