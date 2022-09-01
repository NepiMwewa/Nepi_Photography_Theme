<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
//define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');
get_header();?>
<div class="blog-content post-content">
  <?php if(is_active_sidebar('photo-upper-area')): ?>
    <div class="upper-widget-area">
      <?php dynamic_sidebar('photo-upper-area');?>
    </div>
  <?php endif;?>
  <?php global $wp_query;
  if(have_posts()) :
    while (have_posts())
      :the_post();
      if(0 === $wp_query->current_post %2){?>
      <article class="post-container">
        <section class="img-section">
          <?php if(has_post_thumbnail() ):?>
            <div class="thumbnail">
              <?php echo get_the_post_thumbnail();?>
            </div>
          <?php endif;?>
        </section>

        <section class="text-section text-right">

          <h2><?php the_title();?></h2>

          <?php the_excerpt();?>
          <div class="author-link">
            <?php the_author_posts_link(); ?>
          </div>
          <div class="post-time">
            <?php the_time('F jS, Y'); ?>
          </div>
          <div class="read-more-button read-more-right">
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to
              <?php the_title_attribute(); ?>">
                Continue Reading</a>
            </div>
          </section>


        <div class="float-clear"></div>
      </article>
      <br>
      <hr>

      <?php continue;
      }
      ?>
      <article class="post-container">

        <section class="text-section text-left">

          <h2><?php the_title();?></h2>
          <?php the_excerpt();?>
          <div class="author-link">
            <?php the_author_posts_link(); ?>
          </div>
          <div class="post-time">
            <?php the_time('F jS, Y'); ?>
          </div>
          <div class="read-more-button read-more-left">
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to
              <?php the_title_attribute(); ?>">
              Continue Reading</a>
            </div>
          </section>

          <section class="img-section">
            <?php if(has_post_thumbnail() ):?>
              <div class="thumbnail">
                <?php echo get_the_post_thumbnail();?>
              </div>
            <?php endif;?>
          </section>

        <div class="float-clear"></div>
      </article>
      <br>
      <hr>
    <?php
    endwhile;

    else:
      echo '<p>No content found</p>';

    endif;?>
</div>

<?php get_footer();
?>
