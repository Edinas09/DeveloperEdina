<?php 
/* 	SunRain Theme's Index Page to hsow Blog Posts
	Copyright: 2012-2018, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since SunRain 1.0
*/

get_header(); ?>
<div id="container">
<div id="content">
 <?php if (have_posts()) : while (have_posts()) : the_post();?>
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
 <?php sunrain_post_date(); ?><div class="post-container">	
 <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
 <div class="content-ver-sep"> </div>
 <div class="entrytext">
 <?php the_post_thumbnail('thumbnail'); ?>
 <?php sunrain_content(); ?>
 <div class="clear"> </div>
 <div class="up-bottom-border">
 <?php sunrain_post_meta(); ?>
 </div>
 </div></div></div><div class="clear"> </div>
 
 <?php endwhile; ?>

<div id="page-nav">
<div class="alignleft"><?php previous_posts_link(__('&laquo; Previous Entries','sunrain')) ?></div>
<div class="alignright"><?php next_posts_link(__('Next Entries &raquo;','sunrain'),'') ?></div>
</div>
  
 
 <?php else: ?>
 
 		<h1 class="arc-post-title"><?php _e('Sorry, we could not find anything that matched your search', 'sunrain'); ?></h1>
		<h3 class="arc-src"><span><?php _e('You Can Try Another Search...', 'sunrain'); ?></span></h3>
		<?php get_search_form(); ?>
		<p><a href="<?php echo home_url(); ?>" title="Browse the Home Page"><?php _e('&laquo; Or Return to the Home Page', 'sunrain'); ?></a></p><br />
		<h2 class="post-title-color"><?php _e('You can also Visit the Following. These are the Featured Contents', 'sunrain'); ?></h2>
		<div class="content-ver-sep"></div></div>
		<?php get_template_part( 'featured-box' ); ?>
 
<?php endif; ?>
 

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>