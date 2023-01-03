
 <!-- Adding header -->
 <?php
    get_header();
  ?>

  <?php
    // Get the current author
    $author = get_userdata(get_query_var('author'));
    // Set up the query to display the author's posts
    $args = array(
      'author' => $author->ID
    );
    $query = new WP_Query($args);
  ?>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- Display the author's name and bio -->
        <h1 style="color: red;"><?php echo esc_html($author->display_name); ?></h1>
        <p><?php echo esc_html($author->user_description); ?></p>
      </div>
    </div>
  </div>

 <!-- Adding footer -->
 <?php
    get_footer();
  ?>