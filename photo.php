<?php
/*
Template Name: Шаблон фото
*/
?>

<?php get_header(); ?>

    <div class="container">
		<div class="content">
        <h2 class="photo">Фото</h2>
        <div class="photo-list">
          <img src="<?= get_template_directory_uri(); ?>/img/photo1.jpg" alt="">
          <img src="<?= get_template_directory_uri(); ?>/img/photo2.jpg" alt="">
          <img src="<?= get_template_directory_uri(); ?>/img/photo3.jpg" alt="">
          <img src="<?= get_template_directory_uri(); ?>/img/photo4.jpg" alt="">
        </div>
		</div>

    <div class="right"="right">
      <img src="<?= get_template_directory_uri(); ?>/img/gd.jpg" alt="">
      <img src="<?= get_template_directory_uri(); ?>/img/es-new.jpg" alt="">
      <img src="<?= get_template_directory_uri(); ?>/img/dumatv-logo.jpg" alt="">
      <img src="<?= get_template_directory_uri(); ?>/img/karta.jpg" alt="">
  </div>
	</div>
	<?php get_footer ();?>
