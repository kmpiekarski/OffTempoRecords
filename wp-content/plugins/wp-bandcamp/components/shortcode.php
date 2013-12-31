<?php

add_shortcode('wp_bandcamp_player', 'wp_bandcamp_player_shortcode');

function wp_bandcamp_player_shortcode ( $atts )
{
	return wp_bandcamp_embed_player ( $atts );
}