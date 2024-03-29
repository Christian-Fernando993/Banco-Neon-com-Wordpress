<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(  )?>/css/main.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(  )?>/img/favicon-32x32.png" type="image/x-icon">
  <title><?php bloginfo('name')?> <?php wp_title('-')?></title>
  <?php 
    wp_head();
  ?>
</head>

<body>

  <header id="js-header">
    <div class="container">
      <a href="" class="logo"></a>
      <nav>
        <div class="dropdown js-dropdown">
          <div class="item">
            <strong>Cartão de Crédito</strong>
            <p>Cartão de crédito sem anuidade</p>
          </div>
          <div class="item">
            <strong>Cartão Pré-Pago</strong>
            <p>Cartão de débito internacional Neon</p>
          </div>
          <div class="item">
            <strong>Neon Mais</strong>
            <p>4 saques grátis para quem compra com a Neon</p>
          </div>
          <div class="item">
            <strong>Investimentos</strong>
            <p>A evolução da poupança</p>
          </div>
          <div class="item">
            <strong>Empréstimo pessoal</strong>
            <p>Faça uma simulação de empréstimo pessoal</p>
          </div>
        </div>

        <?php
            $args = array(
              'menu' => 'Header Principal',
              'theme_location' => 'header-principal',
              'container' => false
            );
            wp_nav_menu( $args );
        ?>
        <button class="btn-secondary white">Abra sua conta digital</button>
        <button class="btn-mobile" id="js-btn-menu-mobile">
          <img src="<?php echo get_template_directory_uri(  )?>/img/btn-mobile.svg" alt="">
        </button>
      </nav>
    </div>
  </header>

  <div class="menu-mobile">
    <div class="overlay js-overlay">
      <aside>
        <img src="<?php echo get_template_directory_uri() ?>/img/logo-neon-color.svg"  class="logo" alt="">
      
        <?php
            $args = array(
              'menu' => 'Header Principal',
              'theme_location' => 'header-principal',
              'container' => false
            );
            wp_nav_menu( $args );
        ?>
      </aside>
    </div>
  </div>