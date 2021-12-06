<!DOCTYPE html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="header-top">
            <div class="logo">
                <a href="index.php">
                    <?php echo get_bloginfo('name'); ?>
                </a>
            </div>
            <div class="search">
                <input type="text" />
                <input type="submit" value="Sök">
            </div>
        </div>
        <div class="header-bottom">
            <div class="nav">
                <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
            </div>
        </div>
    </header>