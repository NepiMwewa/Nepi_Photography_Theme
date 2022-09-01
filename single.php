<?php
  get_header();
?>
<div class="single-post">
  <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="post-container">

      <section class="text-section">
        <h2><?php the_title();?></h2>

        <section class="img-section">
          <?php if(has_post_thumbnail() ):?>
            <div class="single-thumbnail">
              <?php echo get_the_post_thumbnail();?>
            </div>
          <?php endif;?>
        </section>

        <div class="author-link">
          <?php the_author_posts_link(); ?>
        </div>
        <div class="category-link">
          <?php the_category(', '); ?>
        </div>
        <div class="single-content">
          <?php the_content();?>
        </div>
        <br>
        <div class="post-time">
          <?php the_time('F jS, Y'); ?>
        </div>
        <div class="post-edit"><?php edit_post_link('Edit'); ?>
        </div>


      </section>
    </article>
    <?php
    endwhile;

    else:
      echo '<p>No content found</p>';

    endif;?>
</div>

<?php
  get_footer();
?>
