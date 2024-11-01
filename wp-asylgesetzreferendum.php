<?php
/*
Plugin Name: WP Asylgesetz-Referendum
Plugin URI: http://www.asyl.ch/
Description: In der linken Ecke fixierter Link zur Homepage des Asylgesetz-Referendums von 2012
Version: 0.4
Revision Date: 08.10.2012
Author: politbuero kampagnen und webdesign. Nach einem Muster von Yaway Media;
Author URI: http://www.politbuero-kampagnen.ch
License: GNU General Public License 2.0 (GPL) http://www.gnu.org/licenses/gpl.html
*/

add_action('wp_footer', 'asylgesetzecke');
$asylgesetzecke_src = plugins_url( 'wp-plugin_ecke_referendum.png' , __FILE__ );
$asylgesetzecke_link = "http://www.asyl.ch?src=" . home_url();


function asylgesetzecke() {
	global $asylgesetzecke_src;
	global $asylgesetzecke_link;
	echo ('<!-- plugin WP Asylgesetz-Referendum -->');
	echo ('<style type="text/css">@media screen and (max-width:1024px){#asylgreferendum { display: none; }}</style>');
	echo ('<style type="text/css">@media print {#asylgreferendum { display: none; }}</style>');
	echo ('<div style="width: 172px; background:transparent; position:absolute;left:0;top:0;z-index: 1;" id="asylgreferendum">');
	echo ('<a style="background:transparent;"target="_blank" href="' . $asylgesetzecke_link . '">');
	echo ('<img style="border:none;" src="'. $asylgesetzecke_src .'" /></a></div>');
	echo ('<!-- /plugin WP Asylgesetz-Referendum -->');
}
?>