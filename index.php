<?php 

get_header(); 

if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
    if(is_single()):
      get_template_part( 'template-parts/single');
    else:
    get_template_part('template-parts/content');
    endif;
  endwhile;
else :
    get_template_part('template-parts/content-none.php');
endif;  

get_footer();