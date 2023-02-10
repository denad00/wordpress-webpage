<?php ?>
<article <?php post_class(); ?>>

    <div class="post-thumbnail">
      <?php the_post_thumbnail(); ?>
    </div>
    <div class="staff-header">
      <h2><?php the_title(); ?></h2>
      <div class="staff-member-position">
        <?php the_field('staff_member_position'); ?>
      </div>
    </div>
    <div class="staff-member-description">
      <?php the_field('staff_member_description'); ?>
    </div>

</article>