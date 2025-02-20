<?php
/**
 * Template Name: 記事一覧
**/

get_header(); ?>
<main id="main">
  <section class="single-bg main-bg" data-aos="fade-up">
  </section>
  
  <section data-aos="fade-up">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-8">
          <h1 class="section-heading">一覧</h1>
        </div>
      </div>
      <div class="col-md-8 mx-auto">
        <ul class="list-group list-group-flush">
          <?php
            $args = array(
              // 'posts_per_page' => 5
            );
            $posts = get_posts( $args );
            foreach ( $posts as $post ):
            setup_postdata( $post );
          ?>
          <li class="h6 mb-4 pb-4 list-group-item">
            <a href="<?php the_permalink(); ?>"><span><?php the_time('Y年m月d日'); ?></span>　<?php the_title(); ?></a>
          </li>
          <?php
            endforeach;
            wp_reset_postdata();
          ?>
        </ul>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>