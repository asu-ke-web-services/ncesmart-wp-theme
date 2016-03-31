<?php if (is_single()) : ?>



<?php else : ?>

<ul id="paging">
	<li class="older"><?php next_posts_link('&larr; Older Posts') ?></li>
	<li class="newer"><?php previous_posts_link('Newer Posts &rarr;') ?></li>
</ul>

<?php endif; ?>