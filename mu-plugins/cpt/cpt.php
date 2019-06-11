<?php
/**
 * Plugin Name: ECA Custom Post Types
 * Description: A plugin that set needed theme Custom Post Types
 * Version: 0.1
 * Author: eCommerceAcademy
 * Author URI: http://ecommercebg.com
 * License: GPL2
 */

/*  Copyright 2019  I.Sholekov  (email : sholeka@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


function thnw_custom_post_types() {


    $labels = array(
        'name'               => 'Clients',
        'singular_name'      => 'Client',
        'menu_name'          => 'Clients',
        'name_admin_bar'     => 'Client',
        'add_new'            => 'Add New Client',
        'add_new_item'       => 'Add New Client',
        'new_item'           => 'New Client',
        'edit_item'          => 'Edit Client',
        'view_item'          => 'View Client',
        'all_items'          => 'All Clients',
        'search_items'       => 'Search Clients',
        'parent_item_colon'  => 'Parent Clients:',
        'not_found'          => 'No Clients found.',
        'not_found_in_trash' => 'No Clients found in Trash.',
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-id-alt',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'clients' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 10,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'         => array( 'category' ),
    );
    register_post_type( 'clients', $args );


    $labels = array(
        'name'               => 'Projects',
        'singular_name'      => 'Project',
        'menu_name'          => 'Projects',
        'name_admin_bar'     => 'Project',
        'add_new'            => 'Add New Project',
        'add_new_item'       => 'Add New Project',
        'new_item'           => 'New Project',
        'edit_item'          => 'Edit Project',
        'view_item'          => 'View Project',
        'all_items'          => 'All Projects',
        'search_items'       => 'Search Projects',
        'parent_item_colon'  => 'Parent Projects:',
        'not_found'          => 'No Projects found.',
        'not_found_in_trash' => 'No Projects found in Trash.',
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-schedule',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projects' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 10,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'         => array( 'category' ),
    );
    register_post_type( 'projects', $args );

}
add_action( 'init', 'thnw_custom_post_types' );

function my_rewrite_flush() {
    thnw_custom_post_types();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );