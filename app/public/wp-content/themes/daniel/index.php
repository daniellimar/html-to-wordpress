<?php get_header(); ?>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">
<?php
  if (have_posts()) {
    while ( have_posts()) {
        the_post();
          the_content();
    }
  }
?>
</div>

<?php get_footer(); ?>