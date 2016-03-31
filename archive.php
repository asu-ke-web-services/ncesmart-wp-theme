<?php get_header(); ?>	
				
			<div id="article_banner"><h1 class="article"><?php the_title(); ?></h1></div>
				<div id="bottom">
					<?php get_sidebar(); ?>
                    <div id="content">
					<?php if (have_posts()) : ?> 
			
						<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
				
						<?php /* If this is a category archive */ if (is_category()) { ?>				
						<h1>Entries Tagged '<?php echo single_cat_title(); ?>' &darr;</h1>
						
						<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
						<h1>Entries from <?php the_time('F Y'); ?> &darr;</h1>
			
						<?php } ?>
			
						<?php while (have_posts()) : the_post(); ?>
						<div class="entry">
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
							<p class="post_date"><?php the_time('F jS, Y') ?> &#8212; <?php the_category(', ') ?></p>
							
								<?php the_content("Continue reading &rarr;"); ?>
							
							<p class="post_meta"><span class="add_comment"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span></p>
						</div>		
						<?php endwhile; ?>
						
						<?php include (TEMPLATEPATH . '/navigation.php'); ?>
			
					<?php else : ?>
					
						<h2>Welp, we couldn't find that...try again?</h2>
						<p class="post_date">* * *</p>
						<div class="entry">
							<?php include (TEMPLATEPATH . '/searchform.php'); ?>
						</div>
						
					<?php endif; ?>
						
					</div>
				
					
				</div>
					
			<?php get_footer(); ?>