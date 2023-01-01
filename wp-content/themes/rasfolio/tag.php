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
                ?>
                <div class="post-thumbnail">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">See more</a>
                <?php
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