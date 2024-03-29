<?php get_header(); 


$url_dir = $wp->request;
if(str_contains($url_dir,'coming-soon')){
    $status = get_field('location_status');
    if($status){
        $url_dir = $wp->request;
        if($status['presale'][0]=='1'){
          if($status['template']=='coming-soon'){
            require get_template_directory() . '/template-parts/coming-soon.php';
          } else {
            require get_template_directory() . '/template-parts/presale.php';
          }
        } 
    }
} else {
    require get_template_directory() . '/template-parts/live-location.php';
}

get_footer();