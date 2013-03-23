<?php

automatic_feed_links();

function get_avatar_url($get_avatar){
    preg_match("/src='(.*?)'/i", $get_avatar, $matches);
    return $matches[1];
}


/*https://wordpress.org/support/topic/remove-content-within-the-header-tags-in-the-excerpt*/
function wp_strip_header_tags( $excerpt='' ) {

	$raw_excerpt = $excerpt;
	if ( '' == $excerpt ) {
		$excerpt = get_the_content(''); 
		$excerpt = strip_shortcodes( $excerpt );
		$excerpt = apply_filters('the_content', $excerpt);
		$excerpt = str_replace(']]>', ']]&gt;', $excerpt);
}

$regex = '#(<h([1-6])[^>]*>)\s?(.*)?\s?(<\/h\2>)#';
		$excerpt = preg_replace($regex,'', $excerpt);

		$excerpt_length = apply_filters('excerpt_length', 100);
		$excerpt_more = apply_filters('excerpt_more', ' ' . ' ...');
		$excerpt = wp_trim_words( $excerpt, $excerpt_length, $excerpt_more );

return apply_filters('wp_trim_excerpt', preg_replace($regex,'', $excerpt), $raw_excerpt);
}
add_filter( 'get_the_excerpt', 'wp_strip_header_tags', 9);



function themeoptions_admin_menu() 
{
	// here's where we add our theme options page link to the dashboard sidebar
	add_theme_page("Theme Options", "Theme Options", 'edit_themes', basename(__FILE__), 'themeoptions_page');
}

function themeoptions_page() 
{
	// here's the main function that will generate our options page
	
	if ( $_POST['update_themeoptions'] == 'true' ) { themeoptions_update(); }
	
	//if ( get_option() == 'checked'
	
	?>
	<div class="wrap">
		<div id="icon-themes" class="icon32"><br /></div>
		<h2>Theme Options</h2>
	
		<form method="POST" action="">
			<input type="hidden" name="update_themeoptions" value="true" />

			<h4>Gravatar</h4>
			<p><input type="text" name="gravatar" id="gravatar" value="<?php echo get_option('mf2013_gravatar'); ?>"/> Header gravatar mail adress</p>						

			<h4>Contact</h4>
			<p><input type="text" name="mail" id="mail" value="<?php echo get_option('mf2013_mail'); ?>"/> Contact mail adress</p>
			<p><input type="text" name="github" id="github"value="<?php echo get_option('mf2013_github'); ?>"/> Github user name</p>
			<p><input type="text" name="fb" id="fb" value="<?php echo get_option('mf2013_fb'); ?>"/> Facebook user name</p>
			<p><input type="text" name="twitter" id="twitter"value="<?php echo get_option('mf2013_twitter'); ?>"/> Twitter user name</p>
			<p><input type="text" name="adn" id="adn"value="<?php echo get_option('mf2013_adn'); ?>"/> ADN user name</p>

			<p><input type="submit" name="search" value="Update Options" class="button" /></p>
		</form>
	
	</div>
	<?php
}

function themeoptions_update()
{
	// this is where validation would go
	update_option('mf2013_gravatar', $_POST['gravatar']);	
	update_option('mf2013_mail', $_POST['mail']);
	update_option('mf2013_github', $_POST['github']);	
	update_option('mf2013_fb', $_POST['fb']);
	update_option('mf2013_twitter',	$_POST['twitter']);
	update_option('mf2013_adn', $_POST['adn']);	
}

add_action('admin_menu', 'themeoptions_admin_menu');

?>
