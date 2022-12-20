<?php
/*
Plugin Name: RA Post View Count
Plugin URI: https://rusulazom.xyz/post-view-count
Description: This plugin displays the post view count for each post.
Author: Md. Rusul Azom Sumon
Version: 1.0
*/
function create_post_view_count_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'post_view_count';
    $charset_collate = $wpdb->get_charset_collate();
  
    $sql = "CREATE TABLE $table_name (
      id bigint(20) NOT NULL AUTO_INCREMENT,
      post_id bigint(20) NOT NULL,
      view_count bigint(20) NOT NULL DEFAULT 0,
      PRIMARY KEY  (id)
    ) $charset_collate;";
  
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
  }
  register_activation_hook( __FILE__, 'create_post_view_count_table' );


  function increment_post_view_count( $post_id ) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'post_view_count';
  
    $view_count = $wpdb->get_var( $wpdb->prepare( "SELECT view_count FROM $table_name WHERE post_id = %d", $post_id ) );
    if ( $view_count ) {
      $view_count++;
      $wpdb->update( $table_name, array( 'view_count' => $view_count ), array( 'post_id' => $post_id ) );
    } else {
      $wpdb->insert( $table_name, array( 'post_id' => $post_id, 'view_count' => 1 ) );
    }
  }
  add_action( 'wp_head', 'increment_post_view_count' );


  function display_post_view_count( $content ) {
  global $wpdb;
  $table_name = $wpdb->prefix . 'post_view_count';

  $view_count = $wpdb->get_var( $wpdb->prepare( "SELECT view_count FROM $table_name WHERE post_id = %d", get_the_ID() ) );
  if ( $view_count ) {
    $view_count_html = '<p>View Count: ' . $view_count . '</p>';
    $content = $view_count_html . $content;
  }
  return $content;
}
add_filter( 'the_content', 'display_post_view_count' );