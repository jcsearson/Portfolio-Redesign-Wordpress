<?php
/*
*  This is the template for the side navigation.
*  Contains information regaurding all blog posts.
*/
?>

<section class="sidebar-nav-wrap">
	<div class="sidebar-nav">
		<ol class="categories-wrap">
			<div class="title-sidebar-wrap">
				<h2>Categories</h2>
				<span class="line-bar-after"></span>
			</div>
			<!-- List all names of categories that are assigned to a post -->
			<?php
				$categories = get_categories();
				foreach($categories as $category) {
			?>
			<li><span>></span><a href="/category"><?php echo $category->name ?></a></li><br>
			<?php } ?>
		</ol>
		<ol class="recent-post-wrap">
			<div class="title-sidebar-wrap">
				<h2>Blog Posts</h2>
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
	</div>  <!-- .sidebar-nav -->
</section>  <!-- .sidebar-nav-wrap -->