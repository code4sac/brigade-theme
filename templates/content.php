<article <?php post_class(); ?>>
	<span class="glyphicon glyphicon-time pull-left"></span><h5 class="date"><?php the_date();?></h5>
	<h2 class="title"><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
	<div class="meta">
		<div class="author-image"><?php $author_email = get_the_author_email(); echo get_avatar($author_email, '38'); ?></div>
		<p class="the-author">by <?php the_author(); ?><br><span><?php the_tags('Tags: ', ', ', ''); ?></span></p>
	</div>
	<?php the_excerpt(); ?>
	<a class="btn btn-outline btn-xs" href="<?php the_permalink(); ?>" title="Read more">READ MORE</a>
</article>
