<!-- Adding header -->
<?php
        /*
        * Template Name: Tag Archive
        * Description: A page template for displaying a list of posts that have been tagged with a particular term.
        */
    get_header();
?>
    

<div class="container">
    <div class="row">
    <?php
       

        // Display the tag name
        $tag = get_term_by( 'slug', get_query_var( 'tag' ), 'post_tag' );
        echo '<h1>Posts Tagged: ' . $tag->name . '</h1>';

        // Display a list of posts that have been tagged with the current term
        $args = array(
            'tag' => $tag->slug,
            'posts_per_page' => 10,
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();
                the_title( '<h2>', '</h2>' );
                the_excerpt();
            }
        }


        ?>

    </div>
</div>


<!-- ###########Footer############# -->
  <!-- Adding header -->
  <?php
    get_footer();
  ?>