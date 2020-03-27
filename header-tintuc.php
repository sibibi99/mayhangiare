<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maymocvn
 */

?>
<html lang="vi">
<link type="text/css" id="dark-mode" rel="stylesheet" href="">
<style type="text/css" id="dark-mode-custom-style"></style>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- SEO Meta description -->
  <meta name="description" content="Công Ty Cổ Phần Máy Móc Việt Nam">
  <link rel="canonical" href="https://maymocvietnam.com" />
  <meta name="author" content="Công Ty Cổ Phần Máy Móc Việt Nam">
  <meta name="keywords" content="Cung Cấp Máy Hàn Giá Rẻ Tại TP HCM" />

  <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
  <meta property="og:locale" content="vi_VN" />
  <meta property="og:site_name" content="Máy hàn giá rẻ"> <!-- website name -->
  <meta property="og:site" content="Máy hàn giá rẻ"> <!-- website link -->
  <meta property="og:title" content="Máy hàn giá rẻ">
  <!-- title shown in the actual shared post -->
  <meta property="og:description" content="Máy hàn giá rẻ">
  <!-- description shown in the actual shared post -->
  <meta property="og:image" content="Máy hàn giá rẻ"> <!-- image link, make sure it's jpg -->
  <meta property="og:type" content="article">

  <!--title-->
  <title><?php the_title()?></title>

  <!--favicon icon-->
  <link rel="icon" href="<?php bloginfo('stylesheet_directory')?>/img/favicon.ico" type="image/png" sizes="16x16">

  <!--google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <!-- Add icon library -->

  <!--Bootstrap css-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/bootstrap.min.css">

  <!--Themify icon css-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/themify-icons.css">
  <!--flaticon css-->
  <!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory')?>/fonts/flaticon.css"> -->
  <!--animated css-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/animate.min.css">

  <!--Owl carousel css-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/owl.theme.default.min.css">
  <!--custom css-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/style.css">
  <!--responsive css-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/responsive.css">
</head>

<body class="bg-light">
  <header class="header ">
    <!--start navbar-->
    <nav id="nav" class="navbar navbar-expand-lg custom-nav">
      <div class="container">
        <a class="navbar-brand" href="<?php bloginfo('siteurl'); ?>"><img src="<?php bloginfo('stylesheet_directory')?>/img/logo.png" width="160" alt="logo" class="pb-2"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="ti-menu"></span>
        </button>      

        <!-- Bat Dau Menu -->
        <?php 
        wp_nav_menu(array(
          'container' => 'div',
          'container_class' => 'collapse navbar-collapse main-menu',
          'container_id' => 'navbarSupportedContent',
          'menu_class' => 'navbar-nav ml-auto'
        ));
      ?>        
         <!-- End Menu -->
				
				<form action="#" method="get" class="subscribe-form subscribe-form-footer ml-4">
          <div class="d-flex align-items-center">
            <input type="search" class="form-control input" id="email-footer" name="s" value=""
              placeholder="Hôm nay bạn tìm gì?">
            <input type="submit" class="button btn secondary-btn" id="submit-footer" value="Tìm">
          </div>
				</form>

      </div>
    </nav>
    <!--end navbar-->
  </header>

  <section class="hero-section ptb-100  background-img" style="background: url('<?php bloginfo('stylesheet_directory')?>/img/header may han.png')no-repeat bottom center / cover">
        <div class="container">
            <div class="row align-items-center justify-content-between pt-4">
                <div class="col-md-12"> 
                                
                        <h2 class="text-white text-center  gioithieu pt-4">
                          <?php 
                            if(is_home()) {
                            echo get_post(get_option("page_for_posts"))->post_title;
                          }
                            else if(is_category('danh-sach-tin-tuc')) {
                            single_cat_title();
                          }
                            else {
                              the_title();
                          } ?>
                        </h2>
                        <h5 class="text-center text-white">
                        <?php 
                        if(is_home()) {
                          echo 'Khuyến Mãi - Sự Kiện - Tin Tức';
                        }
                        else if(is_category('danh-sach-tin-tuc')) {
                          echo 'Khuyến Mãi - Sự Kiện - Tin Tức Mới Cập Nhật';
                        }
                                            
                        ?>
                        </h5>
                </div>

            </div>
        </div>
    </section>
    <nav class="container my-4" aria-label="breadcrumb">
        <?php dimox_breadcrumbs(); ?>
    </nav> <hr>