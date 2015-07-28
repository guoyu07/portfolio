<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR...ml1/DTD/xhtml1-
strict.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/libs/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/libs/animate.css">	
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/libs/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/libs/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/libs/font-awesome-4.3.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri();?>/libs/html5shiv.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/libs/html5shiv-printshiv.min.js"></script>
    <![endif]-->
    <!--[if(ie7) | (ie8)]><link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/ie.css"><![endif]-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/media.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/fonts.css">
	<!--[if lt IE 9]>
		<script>
		document.createElement('header');
		document.createElement('nav');
		document.createElement('section');
		document.createElement('article');
		document.createElement('aside');
		document.createElement('footer');
		</script>
		<style>
		header, nav, section, article, aside, footer { display:block; }
		</style>
	<![endif]-->
    <?php wp_head(); ?>

</head>
<body>


<div class="main">
    <header>
        <div class="container">
            <div class="row">

                <div class="col-md-2 col-md-push-5">
                    <div class="foto">


<!--Вывод на страницу рисунка для конкретного ID чтобы работал magnific-popup-->
                        <?php
                        if ( has_post_thumbnail(6) ) {
                            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(6) , 'large' );
                        echo '<a class="test-popup-link" href="' . $large_image_url[0] . '" >';
                            echo get_the_post_thumbnail( 6, 'thumbnail' );
                            echo '</a>';
                        }
                        ?>

                    </div>
                </div>

                <div class="col-md-5 col-md-pull-2">
<!-- Вывод на страницу главной информации о блоге                   -->
                    <h3 id="move"><?php echo get_bloginfo(); ?>/<span><?php echo get_bloginfo('description'); ?></span></h3>
                </div>

            </div>
        </div>
    </header>