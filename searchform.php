<div id="search">
	<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
		<div>
			<input type="text" value="<?php the_search_query(); ?>" name="s" class="input" />
			<input type="image" src="<?php bloginfo('template_url'); ?>/images/search_button.jpg" class="button" />
		</div>
	</form>
</div>