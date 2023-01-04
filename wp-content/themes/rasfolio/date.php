<?php
  // get the year, month, and day from the URL
  $year = get_query_var( 'year' );
  $month = get_query_var( 'monthnum' );
  $day = get_query_var( 'day' );
  
  // set up the arguments for the WP_Query object
  $args = array(
    'date_query' => array(
      array(
        'year'  => $year,
        'month' => $month,
        'day'   => $day,
      ),
    ),
  );
  
  // create a new WP_Query object
  $date_query = new WP_Query( $args );
  
  // start the loop
  if ( $date_query->have_posts() ) :
    while ( $date_query->have_posts() ) :
      $date_query->the_post();
      
      // post content goes here
      
    endwhile;
  endif;
  
  // reset the post data
  wp_reset_postdata();
?>
