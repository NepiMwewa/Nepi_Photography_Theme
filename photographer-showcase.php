<?php
/*
Template Name: Photographer Showcase
*/
  get_header();
?>
<div class="photographer-showcase">
  <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="page-container">

      <section class="text-section">

        <h2><?php the_title();?></h2>
        <section class="img-section">
          <?php if(has_post_thumbnail() ):?>
            <div class="photographer-thumbnail">
              <?php echo get_the_post_thumbnail();?>
            </div>
          <?php endif;?>
        </section>
        
        <div class="photographer-content">
          <?php the_content();?>
        </div>
      </section>
      <br>
      <?php if(is_active_sidebar('lower-area')): ?>
        <div class="lower-widget-area">
          <?php dynamic_sidebar('lower-area');?>
        </div>
      <?php endif;?>
    </article>
    <br>

    <?php

    endwhile;

    else:
      echo '<p>No content found</p>';

    endif;?>
</div>

<?php
  get_footer();
?>
