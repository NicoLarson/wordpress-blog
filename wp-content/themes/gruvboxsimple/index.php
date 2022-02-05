<?php get_header() ?>
<?php if (have_posts()) : ?>
    <ul class="posts-list">
        <?php while (have_posts()) : the_post(); ?>
            <li class="posts-list-item">
                <?php the_post_thumbnail('medium') ?>
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><?php the_title() ?></h2>
                        <?php the_excerpt() ?>
                    </div>
                    <a href="<?php the_permalink() ?>" class="card-link">Lire</a>
                </div>
            </li>
        <?php endwhile ?>
    </ul>

<?php else : ?>
    <h1>Pas d'article</h1>
<?php endif; ?>


<?php get_footer() ?>