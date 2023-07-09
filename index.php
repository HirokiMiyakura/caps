<?php get_header(); ?>
<section class="hero" data-aos="fade-up">
</section>
<main id="main">
	<section data-aos="fade-up">
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<h2 class="mb-5 h1 text-center">ご挨拶</h2>
					<p>ここに挨拶が入ります。ここに挨拶が入ります。ここに挨拶が入ります。ここに挨拶が入ります。
					ここに挨拶が入ります。ここに挨拶が入ります。ここに挨拶が入ります。ここに挨拶が入ります。
					ここに挨拶が入ります。ここに挨拶が入ります。ここに挨拶が入ります。ここに挨拶が入ります。
					</p>
				</div>
			</div>
		</div>
	</section>

	<section data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-md-5">
					<h2 class="mb-4 h1 text-center">取扱業務</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-12 px-4">
					<div class="service_box">
						<p class="py-4 text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/1.jpg" alt=""></p>
						<h3 class="pb-2">遺言</h3>
						<p>遺言の説明文が入ります。遺言の説明文が入ります。遺言の説明文が入ります。遺言の説明文が入ります。</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 px-4">
					<div class="service_box">
						<p class="py-4 text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/2.png" alt=""></p>
						<h3 class="pb-2">家族信託</h3>
						<p>家族信託の説明文が入ります。家族信託の説明文が入ります。家族信託の説明文が入ります。家族信託の説明文が入ります。</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 px-4">
					<div class="service_box">
						<p class="py-4 text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/3.png" alt=""></p>
						<h3 class="pb-2">助成金</h3>
						<p>助成金の説明文が入ります。助成金の説明文が入ります。助成金の説明文が入ります。助成金の説明文が入ります。</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-md-5">
					<h2 class="mb-5 section-heading h1">新着記事</h2>
				</div>
			</div>
			<div class="col-md-8 mx-auto">
				<ul class="list-group list-group-flush">
					<?php
						$args = array(
							'posts_per_page' => 5
						);
						$posts = get_posts( $args );
						foreach ( $posts as $post ):
						setup_postdata( $post );
					?>
					<li class="h5 mb-4 pb-4 list-group-item">
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
	
	<section data-aos="fade-up">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mx-auto">
					<h2 class="mb-5 h1 text-center">アクセス</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.5360487025264!2d139.70997861204464!3d35.688424272470556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ce9ebc5b7ad%3A0x76be1b40803694af!2z44CSMTYwLTAwMjIg5p2x5Lqs6YO95paw5a6_5Yy65paw5a6_77yR5LiB55uu77yZ4oiS77ySIOODiuODquOCs-ODniBIRCDmlrDlrr_jg5Pjg6s!5e0!3m2!1sja!2sjp!4v1686553602302!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
