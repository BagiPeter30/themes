<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body>
  <header class="header">
        <?php
        wp_nav_menu(
            array(
                'theme-location' => 'top-menu',
                'menu_class' => 'top-bar',

            )
        );
        ?>
  </header>