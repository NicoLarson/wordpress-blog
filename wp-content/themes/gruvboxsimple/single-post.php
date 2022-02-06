<?php get_header() ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
    <article>
      <header>
        <h2><?php the_title() ?></h2>
      </header>
      <div>
        <p>Date: <time datetime="<?php the_time('Y-m-d h:i') ?>"><?php the_time('d M Y') ?></time> </p>
        <?php the_tags('#', ' #', '') ?>
      </div>
      <p><?php the_content() ?></p>
    </article>
  <?php endwhile ?>
<?php else : ?>
  <h1>Pas d'article</h1>
<?php endif; ?>


<?php get_footer() ?>