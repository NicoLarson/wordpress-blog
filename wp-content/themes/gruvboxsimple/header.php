<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php if (is_home()) {
      bloginfo('name');
    } else {
      the_title();
    }
    ?>
  </title>
  <?php wp_head() ?>
</head>

<body>
  <header>
    <nav>
      <h1><a href="/"><?php bloginfo('name') ?></a> </h1>
      <p><?php bloginfo('description')  ?></p>
      
      <?php wp_nav_menu([
        'theme_location' => 'header',
        'container' => false,
      ]) ?>
    </nav>
    <div class="search-content">
      <?php get_search_form() ?>
    </div>
  </header>

  <main>