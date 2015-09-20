			<footer class="footer" role="contentinfo">
				<div class="top-footer">
					<div class="footer-links">
						<nav role="navigation">
							<?php 
							wp_nav_menu( array(
								'menu'              => 'footer-nav',
								'theme_location'    => 'footer-links',
								'depth'             => 2,
								'container'         => 'div',
								'container_id'   	=>	'navbar' ,
								'container_class'   => '',
								'menu_class'        => 'nav nav-justified',
								'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
								'walker'            => new wp_bootstrap_navwalker())
							);
						?>
						</nav>
					</div>
				</div>
				<div id="inner-footer" class="wrap clearfix">
					<div class="row">
						<div class="col-xs-6 col-sm-4">
							<img id='random' src="<?php echo get_stylesheet_directory_uri()?>/library/images/family/family1.png" />
							<?php //dynamic_sidebar( 'footer1' ); ?>
						</div>
						<div class="col-xs-6 col-sm-2 contact-info">
							<?php dynamic_sidebar( 'footer2' ); ?>
						</div>
						<div class="col-xs-6 col-sm-2">
							<?php dynamic_sidebar( 'footer3' ); ?>
						</div>
						<div class="col-xs-6 col-sm-2">
							<?php dynamic_sidebar( 'footer4' ); ?>
						</div>
					</div>				
					<div class="bottom-footer clearfix">
						<p class="source-org copyright pull-right">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
						<p class="credits pull-left"><a href="https://he-il.facebook.com/moderntalkingil" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/library/images/mt-logo.png"/></a></p>
					</div>
				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html>
