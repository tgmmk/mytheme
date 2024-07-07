<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>日本の景色写真展</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" media="screen and (max-width: 767px)">
    <?php wp_head(); ?>
</head>

<body >
    <header id="<?php echo $slug = get_post(get_the_ID())->post_name; ?>">
        <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.gif" alt="日本の景色写真展"></a></h1>
        <nav>
        <?php wp_nav_menu( array( 'theme_location' => 'global-nav' ) ); ?>
        </nav>
    </header>