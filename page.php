<?php get_header();?>

<div class="spacer"></div>

<main class="main">

  <div class="grid grid--center">
    <div class="col-100">

      <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); // start of the loop ?>

      <!-- loop content -->

      <article class="article">

        <h1><?php the_title(); ?></h1>

        <?php the_post_thumbnail('image-big', array('class' => 'img-res mb-2','alt' => get_the_title()));?>

        <?php the_content(); ?>

      </article>


      <?php endwhile; else : // if no result dispaly message ?>

      <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'nextframe'); // dispaly no result message ?></p>

      <?php endif; ?>

    </div>
  </div>

</main>

<?php get_footer();?>