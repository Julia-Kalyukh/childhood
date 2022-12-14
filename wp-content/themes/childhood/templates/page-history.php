<?php
/*
Template Name: Наша история
*/
?>

<?php
get_header();
?>

<div class="aboutus">
  <div class="container">
    <h1 class="title"><?php the_field('history_title'); ?></h1>
    <div class="row">
      <div class="col-lg-6">
        <div class="subtitle">
          <?php the_field('history_subtitle_1'); ?>
        </div>
        <div class="aboutus__text">
          <?php the_field('history_descr_1'); ?>
        </div>
      </div>
      <div class="col-lg-6">
        <?php
        $history_img_1 = get_field('history_img_1');
        if (!empty($history_img_1)) : ?>
          <img class="aboutus__img" src="<?php echo $history_img_1['url']; ?>" alt="<?php echo $history_img_1['alt']; ?>">
        <?php endif;
        ?>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <?php
        $history_img_2 = get_field('history_img_2');
        if (!empty($history_img_2)) : ?>
          <img class="aboutus__img" src="<?php echo $history_img_2['url']; ?>" alt="<?php echo $history_img_2['alt']; ?>">
        <?php endif;
        ?>
      </div>
      <div class="col-lg-6">
        <div class="subtitle">
          <?php the_field('history_subtitle_2'); ?>
        </div>
        <div class="aboutus__text">
          <?php the_field('history_descr_2'); ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="subtitle">
          <?php the_field('history_subtitle_3'); ?>
        </div>
        <div class="aboutus__text">
          <?php the_field('history_descr_3'); ?>
        </div>
      </div>
      <div class="col-lg-6">
        <?php
        $history_img_3 = get_field('history_img_3');
        if (!empty($history_img_3)) : ?>
          <img class="aboutus__img" src="<?php echo $history_img_3['url']; ?>" alt="<?php echo $history_img_3['alt']; ?>">
        <?php endif;
        ?>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
?>