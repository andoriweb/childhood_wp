<?php
/* 
Template Name: Наша история
*/
?>

<?php get_header(); ?>

<div class="aboutus">
  <div class="container">
    <h1 class="title"><?php the_field('main-history_title'); ?></h1>

    <div class="row">
      <div class="col-lg-6">
        <div class="subtitle">
          <?php the_field('history_title-1'); ?>
        </div>
        <div class="aboutus__text">
          <?php the_field('history_descr-1'); ?>
        </div>
      </div>
      <div class="col-lg-6">
        <img class="aboutus__img" src="<?php the_field('history_img-1'); ?>" alt="мир детства">
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <img class="aboutus__img" src="<?php the_field('history_img-2'); ?>" alt="мир детства">
      </div>
      <div class="col-lg-6">
        <div class="subtitle">
          <?php the_field('history_title-2'); ?>
        </div>
        <div class="aboutus__text">
          <?php the_field('history_descr-2'); ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="subtitle">
          <?php the_field('history_title-3'); ?>
        </div>
        <div class="aboutus__text">
          <?php the_field('history_descr-3'); ?>
        </div>
      </div>
      <div class="col-lg-6">
        <img class="aboutus__img" src="<?php the_field('history_img-3'); ?>" alt="мир детства">
      </div>
    </div>
    
  </div>
</div>

<?php get_footer(); ?>