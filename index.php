<?php get_header(); ?>
<?php
//Check to see what type of page we're dealing with

if ( is_archive() == 1 ) {
	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
	if ( is_tax('Centers') == 1) {
		$tax_verb = "built at";
	}
	if ( is_tax('Version Control System') == 1) {
		$tax_verb = "versioned with";
	}
	
	if ( is_tax('Tags') == 1) {
		$tax_verb = "tagged";
	}
	
	if ( is_tax('Repository') == 1) {
		$tax_verb = "hosted at";
	}
	
	if ( is_tax('License') == 1) {
		$tax_verb = "licensed under";
	}
	
	if ( is_tax('Language') == 1) {
		$tax_verb = "written in";
	}
	
	if ( is_tax() == 1) {
		echo '<h2>NASA Open Source Software '.$tax_verb.' '.$term->name.'</h2>';
	}
}

if ( is_search() == 1 ) {
	echo '<h2>Search Results for '.get_search_query().'</h2>';
}


?>

<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php 
	//defining some stuff
	$repositories = get_the_terms( $post->ID, 'Repository');
	foreach( $repositories as $repository ) {
	}
	
	 ?>
	<article class="project single <?php /* if ( $repository->name == "GitHub" ) { print 'flag'; } */?>">
		<?php /* if ( $repository->name == "GitHub" ) {
		echo '
		<div class="flag">
			<a href="'.get_field('repo_url').'"><img src="' . get_template_directory_uri() . '/github_logo_vert.png" alt="GitHub"></a>
		</div>';
		} */?>
		<header>
			<h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
			<a href="<?php the_field('repo_url'); ?>"><?php the_field('repo_url'); ?></a> <?php if ( $repository->name == "GitHub" ) { echo '<a class="fork" href="'.get_field('repo_url').'/fork_select">Fork</a>'; } unset($repository); ?>
			<div class="share">
				<span  class='st_twitter' st_title="<?php the_title(); ?> | code.nasa.gov" st_url="<?php the_permalink();?>" ></span><span  class='st_facebook' st_title="<?php the_title(); ?> | code.nasa.gov" st_url="<?php the_permalink();?>" ></span><span  class='st_reddit' st_title="<?php the_title(); ?> | code.nasa.gov" st_url="<?php the_permalink();?>"></span><span  class='st_yammer' st_title="<?php the_title(); ?> | code.nasa.gov" st_url="<?php the_permalink();?>"></span><span class="st_plusone" st_title="<?php the_title(); ?> | code.nasa.gov" st_url="<?php the_permalink();?>"></span>
			</div>
		</header>
		<div class="content">
			<?php the_excerpt(); ?>
		</div>
			<aside>
				<?php echo get_the_term_list( $post->ID, 'Version Control System', 'Version Control System: ', ' ', '' ); ?><br />
				<?php echo get_the_term_list( $post->ID, 'Centers', 'Center: ', ' ', '' ); ?> <br />
				<?php echo get_the_term_list( $post->ID, 'License', 'License: ', ' ', '' ); ?> <br />
				<?php echo get_the_term_list( $post->ID, 'Language', 'Language: ', ' ', '' ); ?> <br />
				<ul class="tags">
				<?php # wp_list_categories('taxonomy=Tags&title_li='); ?> 
				</ul>
			</aside>
</article>

<?php endwhile; ?>

<?php if(function_exists('wp_paginate')) {
    wp_paginate();
} ?>
	
<?php else: ?>
	<div class="noresults">
		<p><?php _e('Sorry, no results were found. Instead, here are the latest tweets....<i>FROM SPACE!!!</i>'); ?></p>
		<div id="noresult-tweet"></div>
	</div>
<?php endif; ?>
<!--
<div class="navigation">
	<div class="alignleft"><?php next_posts_link('Previous entries') ?></div>
	<div class="alignright"><?php previous_posts_link('Next entries') ?></div>
</div>
-->

	  <!-- Example row of columns -->

	<?php get_footer(); ?>
