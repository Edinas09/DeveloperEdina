<?php
/*
	Template Name: Full Width
 	SunRain Theme's Full Width Page to show the Pages Selected Full Width
	Copyright: 2012-2018, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since SunRain 1.0
*/
get_header(); ?>
<div id="container">
<div id="content-full">
 <?php if (have_posts()) : while (have_posts()) : the_post();?>
 
 <h1 id="post-<?php the_ID(); ?>" class="page-title"><?php the_title();?></h1>
 <div class="content-ver-sep"> </div>
 <div class="entrytext">
 <?php the_post_thumbnail('thumbnail');  ?>
 <?php sunrain_content(); ?>
 </div><div class="clear"> </div>
 <?php edit_post_link(__('Edit','sunrain'), '<p>', '</p>'); ?><br />
 <?php comments_template(); ?>
 <?php endwhile; endif; ?>
 



</div>
<?php get_footer(); ?>