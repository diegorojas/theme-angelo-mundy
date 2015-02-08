<?php if ( has_post_thumbnail() ) : ?>

	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' ); $thumb_url = $thumb['0']; ?>

	<script type="text/javascript">
	
		jQuery(document).ready(function($) {

			$("#post-<?php the_ID(); ?>").backstretch("<?php echo $thumb_url; ?>");
			
		});
		
	</script>

	<a class="featured-media" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
		
		<?php the_post_thumbnail('post-image'); ?>
		
	</a> <!-- /featured-media -->
		
<?php endif; ?>	
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-header section medium-padding">   
    	    
</a> <!-- /post-header -->
