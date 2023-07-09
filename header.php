<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="" name="description" />
<meta content="" name="keywords" />
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon" />
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
<!-- Vendor CSS Files -->
<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
<!-- Template Main CSS File -->
<link href="<?php echo get_template_directory_uri(); ?>/assets/scss/main.css" rel="stylesheet" />
<?php wp_head(); ?>
</head>
<body>
<header>
  <div class="container">
    <div class="row">
      <h1 class="text-center pt-4">
        <a href="<?php echo home_url(); ?>/">鈴木義典行政書士事務所</a>
      </h1>
    </div>
  </div>
  <nav>
    <div class="container">
      <div class="row">
        <ul class="d-flex justify-content-center pt-4">
          <li class="px-4"><a <?php if( is_front_page() ): ?> class="active" <?php endif; ?> href="<?php echo home_url(); ?>/">ホーム</a></li>
          <li class="px-4"><a <?php if( is_page('service') ): ?> class="active" <?php endif; ?> href="<?php echo home_url(); ?>/service">取扱業務</a></li>
          <li class="px-4"><a <?php if( is_page('price') ): ?> class="active" <?php endif; ?> href="<?php echo home_url(); ?>/price">報酬表</a></li>
          <li class="px-4"><a <?php if( is_page('about') ): ?> class="active" <?php endif; ?> href="<?php echo home_url(); ?>/about">事務所概要</a></li>
          <li class="px-4"><a <?php if( is_page('blogs') ): ?> class="active" <?php endif; ?> href="<?php echo home_url(); ?>/blogs">記事一覧</a></li>  
          <li class="px-4"><a <?php if( is_page('contact') ): ?> class="active" <?php endif; ?> href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
        </ul>
        <!-- <i class="bi bi-list mobile-nav-toggle"></i> -->
      </div>
    </div>
  </nav>
</header>