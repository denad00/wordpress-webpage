<?php ?>
<article <?php post_class(); ?> class="single-post">
<h2 class="entry-title">
    <?php the_title(); ?>
  </h2>

  <div class="entry-thumbnail">
    <?php the_post_thumbnail( ); ?>
  </div>

  <div class="entry-content">
    <?php the_content(  ); ?>
  </div>

</article>

<div class="single-post-navigation">
  	
    <?php previous_post_link('%link'); ?>    <?php next_post_link('%link'); ?>
    </div>  