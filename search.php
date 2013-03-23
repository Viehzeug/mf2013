<?php
get_header(); 

if (have_posts()) :
get_template_part( 'loop', 'index' );
else :
  echo "<h2>No posts found. Try a different search?</h2>"
endif;

get_footer();
?>

