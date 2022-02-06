</main>
<footer>

    <?php wp_nav_menu([
        'theme_location' => 'footer',
        'container' => 'nav',
    ]) ?>
    <iframe class="gif" src="https://giphy.com/embed/l0NwETBRcH7iWerCM" width="100%" height="auto" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
    <p class="copyright">&copy; Copyright - <?= date('Y') ?> - <a href="/">gruvboxtheme</a> made by <a href="/">NY</a></p>
</footer>
<?php wp_footer() ?>

</body>

</html>