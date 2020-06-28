<?php
/**
 * Wordpress podcast player
 * 
 * Plugin Name: Wordpress Podcast Player
 * Description: A simple wordpress podcast player
 * Author: Peter Jackson LInk <pjacksonlink@gmail.com>
 *
 * PHP version 7.4.3
 * 
 * @category Wordpress-plugin
 * @package  Wordpresspodcastplayer
 * @author   Peter Jackson Link <pjacksonlink@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.en.html GNU GPLv3
 * @link     https://github.com/pjackson3/wordpress-podcast-player
 */

// Fail if run directly
defined('ABSPATH') or die("No script kiddies please!\n");

/**
 * Wordpress podcast player shortcode.
 * 
 * @param $atts Is the shortcode attributes from wordpress.
 * 
 * @return str
 */
function wordpressPodcastPlayerShortcode($atts)
{
    // Get the url from the shortcode.
    extract(
        shortcode_atts(
            array(
                'url' => ''
            ),
            $atts,
            'podcast'
        )
    );
    
    // Return a HTML5 audio element.
    return "
    <audio controls>
    <source src='$url' />
    Sorry, your browser is incompatible. Here is the <a href='$url'>direct link.</a>
    </audio>
    ";
}

// Add both shortcodes to the site.
add_shortcode('smart_track_player', 'wordpressPodcastPlayerShortcode');
add_shortcode('wordpress_podcast_player', 'wordpressPodcastPlayerShortcode');

?>
