			<footer class="site-footer">

					<nav class="site-nav">
						<?php 
							$args = array(

								'menu_location' => 'footer'
								);
					 	?>
						
						<?php wp_nav_menu($args); ?>			
					</nav>


					<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
	
			</footer>
	
	</div>

	<?php wp_footer(); ?>

</body>
</html>
