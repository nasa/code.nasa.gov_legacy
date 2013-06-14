<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php 
	//defining some stuff
	$repositories = get_the_terms( $post->ID, 'Repository');
	foreach( $repositories as $repository ) {
	}
	
	 ?>
	<article class="project single">
		<header>
			<h1><?php the_title(); ?></h1>
			<a href="<?php the_field('repo_url'); ?>"><?php the_field('repo_url'); ?></a> <?php if ( $repository->name == "GitHub" ) { echo '<a class="fork" href="'.get_field('repo_url').'/fork_select">Fork</a>'; } ?>
			<div class="share">
				<span  class='st_twitter' ></span><span  class='st_facebook' ></span><span  class='st_reddit' ></span><span  class='st_yammer' ></span><span class="st_plusone"></span>
			</div>
		</header>
		<div class="content">
			<?php the_content(); ?>
		</div>
			<aside>
				<?php echo get_the_term_list( $post->ID, 'Version Control System', 'Version Control System: ', ' ', '' ); ?><br />
				<?php echo get_the_term_list( $post->ID, 'Centers', 'Center: ', ' ', '' ); ?> <br />
				<?php echo get_the_term_list( $post->ID, 'License', 'License: ', ' ', '' ); ?> <br />
				<?php echo get_the_term_list( $post->ID, 'Language', 'Language: ', ' ', '' ); ?> <br />
				<ul class="tags">
				<?php wp_list_categories('taxonomy=Tags&title_li='); ?> 
				</ul>
			</aside>
</article>
	
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

	  <!-- Example row of columns -->

	<?php get_footer(); ?>
