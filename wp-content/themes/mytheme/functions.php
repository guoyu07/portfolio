<?php

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );

remove_action( 'wp_head', 'wp_generator' );
show_admin_bar(false);
//нужна для добавления миниатюр в посты
add_theme_support( 'post-thumbnails' );

