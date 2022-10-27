<?php
/*
Template Name: Наша команда
*/
?>

<?php
get_header();
?>

<div class="specialists">
  <div class="container">
    <div class="title"> <?php the_field('team_title'); ?> </div>
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <?php
        $team_img = get_field('team_img');

        if (!empty($team_img)) : ?>
          <img class="specialists__img" src="<?php echo $team_img['url']; ?>" alt="<?php echo $team_img['alt']; ?>">

        <?php endif;
        ?>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
?>