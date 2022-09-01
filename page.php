<?php
  get_header();
?>

  <div class="page-content">
      <?php if(have_posts()) :
        while (have_posts()) :the_post();
          ?><h2><?php the_title(); ?></h2><?php

          if(has_post_thumbnail() ):
          ?> <div class="page-img"><?php echo get_the_post_thumbnail();?></div><?php
          endif;

          ?> <div class="content-column"><?php the_content();?></div><?php

        endwhile;

        else:
          echo '<p>No content found</p>';

        endif;
      ?>
  </div>


<?php
  get_footer();
?>
