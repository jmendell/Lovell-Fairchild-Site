<article <?php post_class('cf'); ?>>
  	
  	<div class="col-4">
  		<?php if ( has_post_thumbnail() ) : ?>
		    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		        <?php the_post_thumbnail(); ?>
		    </a>
		<?php endif; ?>
  	</div>
  	<div class="col-8">
	    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	    <?php get_template_part('templates/entry-meta'); ?>

		<div class="entry-summary">
		    <?php 
	    	the_excerpt(); 
	    	echo '<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'sandoval-lang') . '</a>';
		    ?>
		    
		</div>
	</div>
</article>
