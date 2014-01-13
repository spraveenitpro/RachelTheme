<?php get_header(); ?>

<div id="content" class="two-thirds">
		
			
		<?php while (have_posts()) : the_post(); ?>
			<article class="<?php post_class(); ?>" id="post-<?php the_id(); ?>">
			
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/featured-image.JPG" class="size-large">

				<section class="entry-meta">
					<p>Posted on <?php the_date(); ?> by <?php the_author(); ?></p>
				</section><!-- .entry-meta -->

				<section class="entry-content">
					
					<?php the_content(); ?>

				</section><!-- .entry-content -->
		
				<section class="entry-meta">
					<?php if (count(get_the_category() ) ) : ?>
						<span cat="cat-links">
							Categories : <?php echo get_the_category_list( ', ' ); ?>
						</span>
					<?php endif ?>
				</section><!-- .entry-meta -->
				
			</article><!-- #01-->
		<?php endwhile; ?>
			
</div><!-- #content-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>