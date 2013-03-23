<?php
while ( true ): the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header>
			<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
		</header>    
		<div class="content">
			<?php the_excerpt(); ?>
		</div>
		<footer>
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">See post</a>
		</footer>
	</article>

<?php
	if ( have_posts() ):
   		echo "<hr />";
	else:
		break;
	endif;
endwhile;
?>

<nav>
	<div class="alignleft">
		<?php previous_posts_link('&laquo; Newer Posts') ?>
	</div>
	<div class="alignright">
		<?php next_posts_link('Older Posts &raquo;') ?>
	</div>
    <div class="spacer"></div>
</nav>