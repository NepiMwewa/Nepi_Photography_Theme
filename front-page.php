<?php
  get_header();
?>

  <div class="front-page-content">
    <?php if(have_posts()) :
      while (have_posts()) :the_post();
        ?><h2><?php the_title(); ?></h2><?php
        if(has_post_thumbnail() ):
        ?> <div class="front-page-img"><?php echo get_the_post_thumbnail();?></div><?php
      if(is_active_sidebar('middle-area')): ?>
      <div class="middle-widget-area">
        <?php dynamic_sidebar('middle-area');?>
      </div>
    <?php endif;?>
      <hr> <?php
        endif;
        the_content();

      endwhile;

      else:
        echo '<p>No content found</p>';

      endif;
    ?>
  </div>

<?php
  get_footer();
?>
