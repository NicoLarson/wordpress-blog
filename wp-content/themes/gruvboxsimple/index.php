<?php get_header() ?>
<?php if (have_posts()) : ?>
    <ul class="posts-list">
        <?php while (have_posts()) : the_post(); ?>
            <li class="posts-list-item">
                <h2 class="post-title"><?php the_title() ?></h2>
                <?php the_post_thumbnail('medium') ?>
                <div class="post-info">
                    <p>Date:
                        <time datetime="<?php the_time('Y-m-d h:i') ?>">
                            <?php the_time('d M Y') ?></time>
                    </p>
                    <?php the_tags('#', ' #', '') ?>
                </div>
                <?php the_excerpt() ?>
                <a href="<?php the_permalink() ?>" class="post-link">Lire</a>
            </li>
        <?php endwhile ?>
    </ul>

    <?php the_posts_pagination() ?>
<?php else : ?>
    <h1>Pas d'article</h1>
<?php endif; ?>


<?php get_footer() ?>