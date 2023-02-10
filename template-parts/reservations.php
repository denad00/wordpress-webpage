<?php ?>
<article <?php post_class(); ?> id="<?php the_title_attribute(); ?>"
  style = "background-image: url('<?php the_field('background_image'); ?>');
          background-size: cover;
          background-repeat: no-repeat";
>


  <div class="reservation-header">
    <h2><?php the_title(); ?></h2>
  </div>

  <div class="reservation-content">
    <?php the_content() ?>
  </div>

</article>