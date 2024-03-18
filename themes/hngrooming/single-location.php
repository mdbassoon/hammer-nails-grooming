<?php get_header(); 


$url_dir = $wp->request;
if(str_contains($url_dir,'coming-soon')){
    require get_template_directory() . '/template-parts/coming-soon.php';
} else {
    require get_template_directory() . '/template-parts/live-location.php';
}

get_footer();