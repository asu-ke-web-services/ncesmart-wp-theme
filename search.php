<?php get_header(); ?>
			
				<div id="article_banner"><h1 class="article">Search results for "<?php echo $s; ?>"</h1></div>
				
                <div id="bottom">
                	
                	<div id="content">
                    

					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>		
						
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<p class="post_date"><?php the_time('F jS, Y') ?> &#8212; <?php the_category(', ') ?></p>
							<?php the_excerpt("Continue reading &rarr;"); ?>
						
							<p class="post_meta"><span class="add_comment"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span></p>
								
						<?php endwhile; ?>
						
						<?php include (TEMPLATEPATH . '/navigation.php'); ?>
					
					<?php else : ?>
				
						<h2>Nothing was found with that search term. Please try again.</h2>
						<?php include (TEMPLATEPATH . '/searchform.php'); ?>
						
					
					<?php endif; ?>
						
					</div>
			
					
			
				</div>
			
			<?php get_footer(); ?>