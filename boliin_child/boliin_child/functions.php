<?php
/**
 *
 * @package [Parent Theme]
 * @author  gaviasthemes <gaviasthemes@gmail.com>
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 * 
 */

function boliin_child_scripts() {
   wp_enqueue_style( 'boliin-parent-style', get_template_directory_uri(). '/style.css');
   wp_enqueue_style( 'boliin-child-style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'boliin_child_scripts', 9999 );