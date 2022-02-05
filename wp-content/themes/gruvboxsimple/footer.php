</main>
<footer>

    <?php wp_nav_menu(array(
        'container'            => 'nav',
        'menu_class'           => 'menu',
    )) ?>
    <iframe class="gif" src="https://giphy.com/embed/l0NwETBRcH7iWerCM" width="100%" height="auto" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
    <p>&copy; Copyright <?= date('Y') ?> <a href="/">NMY</a></p>
</footer>
<?php wp_footer() ?>

</body>

</html>