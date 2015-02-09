<?php get_header(); ?>

		<div class="content">

			<div class="section-inner medium">
				
	<?php
		/* $paged é a variável para paginação do Loop CPT Projetos */	
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		/* $args_loop_cpt_projetos são os argumentos para o Loop */
		$args_loop_cpt_projetos = array(
		'post_type' => 'projetos',
		'orderby' => 'date',
		'order' => 'DESC',
		/*  'posts_per_page' => '5',*/
		'paged' => $paged
		);
		$loop_cpt_projetos = new WP_Query( $args_loop_cpt_projetos ); if ( $loop_cpt_projetos->have_posts() ) {
		while ( $loop_cpt_projetos->have_posts() ) : $loop_cpt_projetos->the_post();
	?>

		 

		<div class="titulo-cada-projeto-archive">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  </div><!-- .titulo-cada-projeto-archive -->


		<div class="cada-projeto-archive">

			<div class="thumb-cada-projeto-archive">
				<?php the_post_thumbnail('projetos'); ?>
                    
			</div><!-- .thumb--cada-projeto-archive -->

				<div class="content-cada-projeto-archive">
					<?php the_excerpt(); ?>
				<div class="mais-cada-projeto-archive">
				<a class="a-mais" href="<?php the_permalink(); ?>">
					<div class="mais">
						Mais
					</div><!-- .mais -->
					</a>
				</div><!-- .mais-cada-projeto-archive -->

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
