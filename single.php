<?php
/**
 * Template Name: 新着記事
**/

get_header(); ?>
<main id="main">
  <section class="single-bg" data-aos="fade-up">
  </section>
  <!-- ======= Blog Section ======= -->
  <section class="section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <h2 class="mb-5"><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
    </div>
  </section>
  <!-- ======= End Blog Section ======= -->

</main><!-- End #main -->
<?php get_footer(); ?>