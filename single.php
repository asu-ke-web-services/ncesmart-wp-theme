<?php get_header(); ?>
		
				<div id="bottom">
					<?php get_sidebar(); ?>
                    <div id="content">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<? if (is_category('climate') || is_category('energy') || is_category('materials')) { }
   						else { ?>
   						<h4 class="date"><?php the_time('F j, Y'); ?></h4>
   						<? } ?>

						<h2><?php the_title(); ?></h2>
						
						
							<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
							<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
						
		<?php endwhile; else: ?>
		
			<h1>Uh oh.</h1>
			<p class="post_date">You better <em>never</em> see this text.</p>
			
				<p>Sorry, no posts matched your criteria. Wanna search instead?</p>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			
			
		<?php endif; ?>
		
					</div>

				</div>

<?php get_footer(); ?>
