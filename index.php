<?php
/**
 * Fallback template — WordPress vereist dit bestand.
 * De homepage gebruikt front-page.php.
 */
get_header();
?>

<main style="padding:120px 60px 60px;max-width:800px;margin:0 auto;">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
      <h1><?php the_title(); ?></h1>
      <div><?php the_content(); ?></div>
    </article>
  <?php endwhile; else : ?>
    <p>Geen inhoud gevonden.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
