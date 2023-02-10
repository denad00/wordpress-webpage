<?php get_header(); ?>

<section class="meal-menu">
<?php
$args = array(
  'post_type'       =>        'meal_menu',
  'posts_per_page'  =>        '3',
  'orderby'         =>        'menu_order',
  'order'           =>        'ASC',
);

$my_query = new WP_Query($args);

if ( $my_query->have_posts() ) :
  while ( $my_query->have_posts() ) :
    $my_query->the_post();
    get_template_part('template-parts/content-meal-menu');
  endwhile;
  else :
    get_template_part('template-parts/content-none.php');
endif;  
?>
</section>

<section class="reservations">
  <?php
  $args = array(
    'post_type'       =>    'page',
    'posts_per_page'  =>    '1',
  );

  $my_query = new WP_Query($args);

if ( $my_query->have_posts() ) :
  while ( $my_query->have_posts() ) :
    $my_query->the_post();
    get_template_part('template-parts/reservations');
  endwhile;
  else :
    get_template_part('template-parts/content-none.php');
endif;  
?>
</section>

<section class="blog-front-page">
  <h1>Blog</h1>
  <?php
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
?>

<div class="post-navigation">
  	
  <?php posts_nav_link("", "older posts", "newer posts"); ?>
</div>  
</section>

<section class="staff-members">
<?php
$args = array(
  'post_type'       =>        'staff_member',
  'posts_per_page'  =>        '4',
  'orderby'         =>        'rand'
);

$my_query = new WP_Query($args);
?>

<h1>Staff</h1>

<?php
if ( $my_query->have_posts() ) :
  while ( $my_query->have_posts() ) :
    $my_query->the_post();
    get_template_part('template-parts/content-staff-member');
  endwhile;
  else :
    get_template_part('template-parts/content-none.php');
endif;  
?>
</section>

<?php
get_footer();