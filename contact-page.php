<?php
/**
 * Template Name: お問い合わせ
**/

get_header(); ?>
<main id="main">
  <section class="contact-bg main-bg" data-aos="fade-up">
  </section>
  
  <section data-aos="fade-up">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-8">
          <h1 class="section-heading mb-4">お問い合わせフォーム</h1>
        </div>
      </div>
      <div class="col-md-10 mx-auto">
        <?php echo do_shortcode('[contact-form-7 id="15" title="お問い合わせフォーム"]'); ?>
        <p>※ ご記入頂きました個人情報は個別面談の日時等に関するご案内以外には使用いたしません。</p>
      </div>
      <!-- <p>ご記入頂きました個人情報は個別面談の日時等に関するご連絡およびセミナーのご案内以外には使用いたしません。</p> -->
    </div>
  </section>
</main>
<?php get_footer(); ?>