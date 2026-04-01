<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yokota-Portfolio</title>
    <!-- reset -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@4.0.1/destyle.min.css">

    <!-- WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monomaniac+One&family=Noto+Sans+JP:wght@100..900&display=swap"
        rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <!-- original -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>

<body>
    <header class="l-header">
        <div class="l-nav c-header ">
            <a href="<?php echo esc_url(home_url('/')); ?>">Yokota</a></h1>
            <nav>
                <ul class="l-nav__link c-nav">
                    <?php if (is_front_page()): ?>
                        <li><a href="#works">Works</a></li>
                        <li><a href="#about-me">About Me</a></li>
                    <?php else: ?>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>#works">Works</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>#about-me">About Me</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>