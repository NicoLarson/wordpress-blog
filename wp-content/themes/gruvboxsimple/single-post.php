<?php get_header() ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
    <article>
      <header>
        <img src="<?php the_post_thumbnail_url() ?>" alt="">
      </header>
      <p>Date: <time datetime="<?php the_time('Y-m-d h:i') ?>"><?php the_time('d M Y') ?></time> </p>
      <div>Catégories: </div> <?php the_category(' | ') ?> 
      <p><?php the_content() ?></p>
    </article>
  <?php endwhile ?>
<?php else : ?>
  <h1>Pas d'article</h1>
<?php endif; ?>


<?php get_footer() ?>