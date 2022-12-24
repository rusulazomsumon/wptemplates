<!-- Adding header -->
<?php
    get_header();
?>
    

<div class="container">
    <div class="row">
        <?php

            // Get the current category object
            $category = get_category( get_query_var( 'cat' ) );

            // Display the category name and description
            echo '<h1>' . esc_html( $category->name ) . '</h1>';
            echo '<p>' . esc_html( $category->description ) . '</p>';

            // Set up the arguments for the WP_Query object
            $args = array(
                'category_name' => $category->slug,
                'posts_per_page' => -1, // show all posts
            );

            // Create a new WP_Query object
            $query = new WP_Query( $args );

            // Check if the query has posts
            if ( $query->have_posts() ) {
                // Loop through the posts
                while ( $query->have_posts() ) {
                    $query->the_post();
                    // Display the post title, thumbnail, excerpt, and "see more" link
                    echo '<h2><a href="' . esc_url( get_permalink() ) . '">' . esc_html( get_the_title() ) . '</a></h2>';
                    echo '<a href="' . esc_url( get_permalink() ) . '">' . get_the_post_thumbnail( null, 'medium', array( 'class' => 'aligncenter' ) ) . '</a>';
                    echo '<p>' . esc_html( get_the_excerpt() ) . '</p>';
                    echo '<p><a href="' . esc_url( get_permalink() ) . '">See more</a></p>';
                }
                // Reset the post data
                wp_reset_postdata();
            }

        ?>




    </div>
</div>


<!-- ###########Footer############# -->
  <!-- Adding header -->
  <?php
    get_footer();
  ?>