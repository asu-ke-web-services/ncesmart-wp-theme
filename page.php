<?php
	$title = "Heat-Waves.org";
	get_header();
?>
			
                <div id="bottom">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div id="content">
                    	<?php the_content('<p>Read the rest of this page &rarr;</p>'); ?>
                        
                    </div>
                    <?php endwhile; endif; ?>
                    
					<?php get_sidebar(); ?>

                </div>
               		
                
<?php
	get_footer();
?>