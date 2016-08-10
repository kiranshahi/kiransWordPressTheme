<?php  

	get_header(); ?>

	<div class="site-content">

		<?php if (have_posts()) :
		
			while (have_posts()) : the_post();

				the_content();

			endwhile;

			else :
				echo '<p>No content found</p>';
			endif; 
		?>

		<div class="home-columns clearfix">

			<div class="one-half">

			<?php

				//Catagory posts loop begins here
				$opinionPosts = new WP_Query('cat=1&posts_per_page=2&orderby=title&order=ASC');

				if ($opinionPosts->have_posts()) :
		
					while ($opinionPosts->have_posts()) : $opinionPosts->the_post(); 
			?>

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt(); ?>

			<?php 

				endwhile;
				
				else :
		
				endif;


				wp_reset_postdata();
			?>

		</div>

		<div class="one-half last">

			<?php


				//Catagory posts loop begins here
				$newsPosts = new WP_Query('cat=6&posts_per_page=2');

				if ($newsPosts->have_posts()) :
		
					while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>

						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>

					<?php 
						endwhile;
						else :
		
						endif;

						wp_reset_postdata();

					?>
			</div>		
		</div>

	</div>

<?php

	get_footer();

?>
