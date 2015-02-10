<?php 

/**
 * Template Name: Home
 *
 *
 * @package Angelo Mundy
 */

get_header('home'); ?>

<div class="content">	

<div id="site-image"></div>

<div id="site-title">Angelo Mundy</div>

	<div class="header-search-block section light-padding hidden">
		
			<div class="section-inner">
			
				<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="search" placeholder="<?php _e('Type and press enter', 'radcliffe'); ?>" name="s" id="s" /> 
				</form>
			
			</div>
		
		</div>
	
		<div class="header section light-padding">
		
			<div class="header-inner section-inner">
				
				<div class="nav-toggle">
				
					<p><?php _e('Menu','radcliffe') ?></p>
				
					<div class="bars">
					
						<div class="bar"></div>
						<div class="bar"></div>
						<div class="bar"></div>
						
						<div class="clear"></div>
					
					</div>
				
				</div>
				<ul class="main-menu home">
					
					<?php if ( has_nav_menu( 'primary' ) ) {
																		
						wp_nav_menu( array( 
						
							'container' => '', 
							'items_wrap' => '%3$s',
							'theme_location' => 'primary'
														
						) ); } else {
					
						wp_list_pages( array(
						
							'container' => '',
							'title_li' => ''
						
						));
						
					} ?>
											
				 </ul>
				<div class="clear"></div>
			
			</div> <!-- /header -->
			
		</div> <!-- /header.section -->
		
		<div class="mobile-menu-container hidden">
		
			<ul class="mobile-menu">
					
					<?php if ( has_nav_menu( 'primary' ) ) {
																		
						wp_nav_menu( array( 
						
							'container' => '', 
							'items_wrap' => '%3$s',
							'theme_location' => 'primary'
														
						) ); } else {
					
						wp_list_pages( array(
						
							'container' => '',
							'title_li' => ''
						
						));
						
					} ?>
					
			 </ul>
			 
			 <form method="get" class="mobile-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="search" placeholder="<?php _e('Search form', 'radcliffe'); ?>" name="s" id="s" /> 
					<input type="submit" value="<?php _e('Search', 'radcliffe'); ?>" class="search-button">
				</form>
			 
		</div> <!-- /mobile-menu-container -->
				
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>				
	
		<div <?php post_class('post single'); ?>>
															    
		    <div class="post-content section-inner thin">
		    
		    	<?php the_content(); ?>
		    	
				<div class="clear"></div>
					
		    	</div>

		</div> <!-- /post -->
		
	<?php endwhile; else: ?>
	
		<p><?php _e("We couldn't find any posts that matched your query. Please try again.", "radcliffe"); ?></p>

		<div class="clear"></div>

	<?php endif; ?>

		<div class="download-link"><a href="http://angelomundy.com.br/abrigacao/angelo_mundy_abrigacao.zip">download do disco abrigação</a></div>

		<div class="clear"></div>

		<div class="section-inner row">
		
			<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
			
				<div class="column column-1 two-third">
				
					<div class="small-padding">
			
						<?php dynamic_sidebar( 'sidebar-4' ); ?>
											
					</div>
					
				</div>
				
			<?php endif; ?> <!-- /footer-a -->

		</div>
	<div class="clear"></div>
	
</div> <!-- /content -->
								
<?php get_footer(); ?>
