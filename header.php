<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Startup</title>
    <?php wp_head(); ?>
</head>
<body>
<header class="header text-bg-primary p-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <?php 
                wp_nav_menu( array( 
                    'theme_location' => 'primary',
                    'menu_class' => 'nav text-white',
                    'menu_id' => 'primary-menu',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'item_spacing' => 'preserve',
                    'depth' => 0,
                    'walker' => '',        
                    ) 
                );
                ?>
            </div>
            <div class="col-md-4 text-end">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</header>
