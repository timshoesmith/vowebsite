<?php 

function vo_resources() {
    wp_enqueue_script('vojavascript', get_theme_file_uri('build/index.js'), NULL, '1.0', true);
    wp_enqueue_style('leaflet', '//unpkg.com/leaflet@1.4.0/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""');
    wp_enqueue_style('voutilities', get_theme_file_uri('build/utilities.css'));
    wp_enqueue_style('vostyles', get_theme_file_uri('build/style.css'));
    wp_enqueue_style('voaudio', get_theme_file_uri('build/audio.css'));
    wp_enqueue_style('vohero', get_theme_file_uri('build/hero.css'));
    wp_enqueue_style('vomodal', get_theme_file_uri('build/modal.css'));
}


add_action('wp_enqueue_scripts','vo_resources'); ?>