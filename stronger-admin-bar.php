<?php
/*
Plugin Name: Stronger Admin Bar
Plugin URI:  http://wordpress.org/plugins/stronger-admin-bar
Description: Adds more space to the admin bar from top and bottom to make it more useful.
Version:     1.0
Author:      silver530
Author URI:  http://www.pixelwars.org
License:     GPLv2 or later
Text Domain: stronger_admin_bar
Domain Path: /langs/
*/


/*
Copyright (c) 2014, silver530.

This program is free software; you can redistribute it and/or 
modify it under the terms of the GNU General Public License 
as published by the Free Software Foundation; either version 2 
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, 
but WITHOUT ANY WARRANTY; without even the implied warranty of 
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the 
GNU General Public License for more details.

You should have received a copy of the GNU General Public License 
along with this program; if not, write to the Free Software 
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/


/* ============================================================================================================================================= */

	function stronger_admin_bar_load_textdomain()
	{
		load_plugin_textdomain( 'stronger_admin_bar', false, dirname( plugin_basename( __FILE__ ) ) . '/langs/' ); 
	}
	
	add_action( 'plugins_loaded', 'stronger_admin_bar_load_textdomain' );

/* ============================================================================================================================================= */

	function stronger_admin_bar_admin_head()
	{
		echo '<style>
			
				html.wp-toolbar
				{
					padding-top: 52px;
				}
				
				#wpadminbar
				{
					padding-top: 10px;
					padding-bottom: 10px;
				}
			
			</style>';
	}
	
	add_action( 'admin_head', 'stronger_admin_bar_admin_head' );

/* ============================================================================================================================================= */
	
?>