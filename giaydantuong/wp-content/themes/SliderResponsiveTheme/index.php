<?php get_header(); ?>
	<?php $shortname = "typographic"; ?>
	
	<?php if(get_option($shortname.'_disable_slideshow','') != "Yes") { ?>
	
		<section id="slideshow_cont">
			<?php echo do_shortcode("[huge_it_slider id='1']"); ?>
		</section><!--//slideshow_cont-->
	<?php } ?>
	
	
	<?php
	$category_ID = get_category_id('blog');
	$args = array(
		 'post_type' => 'post',
		
		 'post__not_in' => $slider_arr,
		 //'cat' => '-' . $category_ID,
		 //'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)
	 );
	query_posts($args);
	$x = 0;
	while (have_posts()) : the_post(); ?>                        			
	
		<?php if($x == 0) { ?>
			
			
		<?php } elseif($x == 1) { ?>
			
				
		<?php } elseif($x == 2) { ?>
			
				
		<?php } else { ?>
			
				
		<?php } ?>
		
			
		</div>
		
		<?php if($x == 2) { ?>
			<div class="clear"></div>
		<?php } ?>
	
	<?php $x++; ?>
	<?php endwhile; ?>        				
	
	
	<div class="clear"></div>
	
<?php get_footer(); ?>            	