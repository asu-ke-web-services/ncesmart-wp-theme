<?php get_header(); ?>
				
				
				<div id="bottom">
                    <div id="content">
				
					<?php if (have_posts()) : ?>
   					<?php while (have_posts()) : the_post(); ?>
   					<div class="entry">
   						<? if (is_category('climate') || is_category('energy') || is_category('materials')) { }
   						else { ?>
   						<h4 class="date"><?php the_time('F j, Y'); ?></h4>
   						<? } ?>
						<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						
						<?php the_excerpt('Read more...', TRUE, ''); ?><div style="clear:both;"></div>
					</div>

                <!--
				<?php trackback_rdf(); ?>
				-->

				<?php endwhile; ?>
					<?php include (TEMPLATEPATH . '/navigation.php'); ?>
				<?php else : ?>
				  	<strong>Not Found</strong>
					<p>Sorry, but you are looking for something that isn't here.</p>
				<?php endif; ?>
					</div>
					
					
						<?php get_sidebar(); ?>
				</div>
				
		

<!-- The main column ends  -->

<?php get_footer(); ?>