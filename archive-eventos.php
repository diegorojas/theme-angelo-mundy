<?php get_header(); ?>

		<div class="content">

			<div class="section-inner medium">
				
	<?php
		/* $paged é a variável para paginação do Loop CPT Projetos */	
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		/* $args_loop_cpt_projetos são os argumentos para o Loop */
		$args_loop_cpt_projetos = array(
		'post_type' => 'eventos',
		'orderby' => 'date',
		'order' => 'DESC',
		/*  'posts_per_page' => '5',*/
		'paged' => $paged
		);
		$loop_cpt_projetos = new WP_Query( $args_loop_cpt_projetos ); if ( $loop_cpt_projetos->have_posts() ) {
		while ( $loop_cpt_projetos->have_posts() ) : $loop_cpt_projetos->the_post();
	?>


		<div class="cada-projeto-archive">

			<a href="<?php the_permalink(); ?>">				
			<div class="thumb-cada-projeto-archive">
				<?php the_post_thumbnail('projetos'); ?>
                    
			</div><!-- .thumb--cada-projeto-archive -->
			</a>
				<div class="content-cada-projeto-archive">
					
					<a href="<?php the_permalink(); ?>">
					<?php the_content(); ?>
					</a>
			
				</div><!-- .content-cada-projeto-archive -->

			</div><!-- .cada-projeto-archive -->
			
				<?php
				// Fim do Loop
				endwhile;
				}
				?>

		<div class="clear"></div>

                <?php if (function_exists( 'wp_pagenavi' )) { wp_pagenavi(array( 'query' => $loop_cpt_projetos )); } ?>


            		</div><!-- .section-inner -->
		</div><!-- #content -->
							
<?php get_footer(); ?>
