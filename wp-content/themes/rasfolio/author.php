<?php
  // Get the current author
  $author = get_userdata(get_query_var('author'));
  // Set up the query to display the author's posts
  $args = array(
    'author' => $author->ID
  );
  $query = new WP_Query($args);
?>

<!-- Display the author's name and bio -->
<h1><?php echo esc_html($author->display_name); ?></h1>
<p><?php echo esc_html($author->user_description); ?></p>

<!-- Display a list of the author's posts -->
<h2>Posts by <?php echo esc_html($author->display_name); ?></h2>
<ul>
  <?php while ($query->have_posts()) : $query->the_post(); ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
  <?php endwhile; wp_reset_postdata(); ?>
</ul>