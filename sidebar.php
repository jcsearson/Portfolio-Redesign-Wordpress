<?php
/*
*  This is the template for the side navigation.
*  Contains information regaurding all blog posts.
*/
?>

<section class="sidebar-nav-wrap">
	<div class="sidebar-nav">



		<!-- List of 5 Recent Posts -->
		<ol class="recent-post-wrap">
			<div class="title-sidebar-wrap">
				<h2>Recent Posts</h2>
				<span class="line-bar-after"></span>
			</div>
			<!-- Query through 5 most recent post titles -->
			<?php
				$args = array(
					'posts_per_page' => '5',
					'status' => 'published',
					'order' => 'DEC'
				);
			?>
			<?php $query = new WP_Query( $args ); ?>
			<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
			<li><span>></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li><br>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
		</ol>



		<!-- List of all Post Categories -->
		<ol class="categories-wrap">
			<div class="title-sidebar-wrap">
				<h2>Categories</h2>
				<span class="line-bar-after"></span>
			</div>
			<?php
				//  List all names of categories that are assigned to a post
				$categories = get_categories();
				foreach($categories as $category) {
					//query the total number of posts in category
					$number_posts += $category->count;
					// assign category names to a new variable for modifications
					$cat_clean = $category->name;
					// strip out all whitespace
					$cat_clean = preg_replace('/\s*/', '', $cat_clean);
					// convert the string to lowercase
					$cat_clean = strtolower($cat_clean);
			?>
			<li><span>></span><a href="/category-<?php echo $cat_clean ?>"><?php echo $category->name ?>  ( <?php echo $number_posts; ?> )</a></li><br>
			<?php
				$number_posts = '0';
			} ?>
		</ol>
	</div>  <!-- .sidebar-nav -->
</section>  <!-- .sidebar-nav-wrap -->