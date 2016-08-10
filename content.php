<article class="post has-thumbnail">

	<div class="post-thumbnail">

		<?php 

			// the_post_thumbnail('small-thumbnail');

		?>
				
	</div>

	<h2>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h2>

	<p class="post-info"><?php the_time('F j, Y g:i a'); ?> | By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in 
		<?php 
			$categories = get_the_category();
			$separator = ", ";
			$output = '';

			if ($categories) {
				foreach ($categories as $category)
					$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
			} 

			echo trim($output, $separator);

		?>
	</p>

		
	<?php 

		if (is_search() OR is_archive()) { ?>

			<p>
				<?php echo get_the_excerpt(); ?>

				<a href="<?php the_permalink(); ?>">Read More &raquo;</a>
			</p>
	<?php
			
		} else {

			if ($post->post_excerpt) { ?>
			
		<p>
			<?php echo get_the_excerpt(); ?>

			<a href="<?php the_permalink(); ?>">Read More &raquo;</a>
		</p>

		<?php
			} else {
				the_content();
			}

		}

	 ?>


</article>