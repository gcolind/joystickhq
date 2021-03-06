<?php get_header(); ?>




<div class="wrap">
<div id="content-full" class="blogpage">
<div id="content-left" >

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<header>

				<div class="blogmeta">
					<span onclick="window.location.href='<?php the_permalink() ?>'" class="post-time"><?php the_time('M d, Y') ?></span> -
					<span onclick="window.location.href='<?php the_permalink() ?>'" class="post-comment"><?php comments_number( '0 Comments', '1 Comments', '% Comments' ); ?></span> -
					<span onclick="window.location.href='<?php the_permalink() ?>'" class="post-categories"><?php the_category(', '); ?> </span>
				</div>

				<div class="pagetitle"><h1><?php the_title();?></h1></div>
		        <div class="pagesocial">
		        	<?php do_action('addthis_widget',get_permalink($post->ID), get_the_title($post->ID), 'fb_tw_sc'); ?>
		        </div>
		        <div class="clear"></div>
		</header>


		<article>
				<div class="alignright"><?php the_post_thumbnail('postfeatured'); ?></div>
				<?php the_content( __( '<br>Read more...' ) );
				wp_link_pages();
				?>
				<?php echo get_the_tag_list('<p class="thetags">','','</p>'); ?>
		</article>



<?php if (comments_open()){ ?>
		<footer>
					    <?php comments_template(); ?>
		</footer>
<?php } ?>



				<div class="clear"></div>
				<?php endwhile; ?>

				<?php endif; ?>
			<div class="clear"></div>
		</div>

	<?php get_sidebar(); ?>
	<div class="clear"></div>
</div>

<div class="clear"></div>
</div>

<?php get_footer(); ?>
