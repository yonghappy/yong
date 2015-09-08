<?php
/*
Template Name: 相册
*/
?>
<?php get_header(); ?>
	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>	
	<div id="map_box">
		<div id="map_l">
			<div class="browse">现在位置： <a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a> &gt; <?php the_title(); ?></div>
		</div>
		<div id="map_r">
			<div id="feed"><a href="<?php bloginfo('rss2_url'); ?>" title="RSS">RSS</a></div>
		</div>
	</div>
	<div class="clear"></div>
	
		
			<div class="page" id="post-<?php the_ID(); ?>">
				<?php the_content('More &raquo;'); ?>
				<div class="clear"></div>
				<?php the_tags('标签: ', ', ', ' '); ?>
				<span class="edit"><?php edit_post_link('<span class="edita">&nbsp&nbsp&nbsp&nbsp&nbsp</span>', '  ', '  '); ?></span>
				<?php if(function_exists('the_views')) { print ' 被围观 '; the_views(); print '+';  } ?>
		
	
	</div>
	<div class="entry_sb_l">
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>