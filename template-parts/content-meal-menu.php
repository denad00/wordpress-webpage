<?php ?>
<article <?php post_class(); ?> id="<?php the_title_attribute(); ?>"
  style = "background-image: url('<?php the_field('background_image'); ?>');
          background-size: cover;
          background-repeat: no-repeat";
>


  <div class="menu-header">
    <h2><?php the_title(); ?></h2>
    
    <div class="menu-times">
      <div class="menu-start-time">
        <?php the_field('menu_start_time'); ?>
      </div>
      to
      <div class="menu-end-time">
        <?php the_field('menu_end_time'); ?>
      </div>
    </div>
  </div>

    <?php the_content() ?>

</article>