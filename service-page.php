<?php
/**
 * Template Name: 取扱業務
**/

get_header(); ?>
<main id="main">
  <section class="service-bg" data-aos="fade-up">
  </section>
  <section data-aos="fade-up">
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<h2 class="mb-5 h1 text-center">取扱業務のご紹介</h2>
					<p>取扱業務の要約文がはいります。取扱業務の要約文がはいります。取扱業務の要約文がはいります。取扱業務の要約文がはいります。
          取扱業務の要約文がはいります。取扱業務の要約文がはいります。取扱業務の要約文がはいります。取扱業務の要約文がはいります。
					</p>
				</div>
			</div>
		</div>
	</section>
  <section data-aos="fade-up">
    <div class="container">
      <div class="row">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a href="#service1" class="nav-link active" data-bs-toggle="tab">遺言</a>
          </li>
          <li class="nav-item">
            <a href="#service2" class="nav-link" data-bs-toggle="tab">家族信託</a>
          </li>
          <li class="nav-item">
            <a href="#service3" class="nav-link" data-bs-toggle="tab">助成金</a>
          </li>
        </ul>
        <div class="tab-content">
          <div id="service1" class="tab-pane active">
            <?php get_template_part('template/1'); ?>
          </div>
          <div id="service2" class="tab-pane">
            <?php get_template_part('template/2'); ?>
          </div>
          <div id="service3" class="tab-pane">
            <?php get_template_part('template/3'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>