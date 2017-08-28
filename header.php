<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/lib/css/bootstrap.min.css' ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

<?php wp_head(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom-header.css' ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom-footer.css' ?>">
</head>

<body <?php body_class(); ?>>
  <script
    src="https://code.jquery.com/jquery-1.12.4.min.js"
    integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
    crossorigin="anonymous"></script>
  <script>

  $(document).ready(function() {
    $("body").click(function(event) {
      console.log(event.target, '--------');
      if (event.target.id === 'bars') {
        slide();
      } else {
        if (event.target.tagName !== 'UL')
          close();
      }
    });
    $("body").bind( "touchstart", function(event) {
      console.log(event.target, '--------');
      if (event.target.id === 'bars') {
        slide();
      } else {
        if (event.target.tagName !== 'UL')
          close();
      }
    });
  });
  function close () {
    if (document.querySelector('#hamburgerMenu').classList.contains('showMenu')) {
      document.querySelector('#hamburgerMenu').classList.add('slideOutRight');
      document.querySelector('#hamburgerMenu').classList.remove('slideInRight');
      setTimeout(function () {
        document.querySelector('#hamburgerMenuIcon').classList.add('hiddeOnWeb');
        document.querySelector('#imgMenu').classList.add('hiddeOnWeb');
        document.querySelector('#principalHeader').classList.remove('hiddeInMobil');
        document.querySelector('#hamburgerMenu').classList.remove('showMenu');
        document.querySelector('#bars').classList.remove('hiddeOnMobil');
        document.querySelector('#hamburgerMenu').classList.add('hiddeOnMobil');
        document.querySelector('#logo').classList.remove('hiddeOnMobil');
      }, 500);
    }
  }
  function slide() {
    if (document.querySelector('#hamburgerMenu').classList.contains('showMenu')) {
      document.querySelector('#hamburgerMenu').classList.add('slideOutRight');
      document.querySelector('#hamburgerMenu').classList.remove('slideInRight');
      setTimeout(function () {
        document.querySelector('#hamburgerMenuIcon').classList.add('hiddeOnWeb');
        document.querySelector('#imgMenu').classList.add('hiddeOnWeb');
        document.querySelector('#principalHeader').classList.remove('hiddeInMobil');
        document.querySelector('#hamburgerMenu').classList.remove('showMenu');
        document.querySelector('#bars').classList.remove('hiddeOnMobil');
        document.querySelector('#hamburgerMenu').classList.add('hiddeOnMobil');
        document.querySelector('#logo').classList.remove('hiddeOnMobil');
      }, 500);
    } else {
      document.querySelector('#hamburgerMenu').classList.add('slideInRight');
      document.querySelector('#hamburgerMenu').classList.add('showMenu');
      document.querySelector('#hamburgerMenu').classList.remove('slideOutRight');
      document.querySelector('#hamburgerMenuIcon').classList.remove('hiddeOnWeb');
      document.querySelector('#hamburgerMenu').classList.remove('hiddeOnWeb');
      document.querySelector('#hamburgerMenu').classList.remove('hiddeOnMobil');
      document.querySelector('#imgMenu').classList.remove('hiddeOnWeb');
      document.querySelector('#bars').classList.add('hiddeOnMobil');
      document.querySelector('#logo').classList.add('hiddeOnMobil');
    }
  }
  </script>


  <script type="text/javascript">
    window.addEventListener('click', function(e) {
      if (!e.target.dataset.hasOwnProperty('attribute')) {
        document.querySelector('#menuContainer').style.width = '0%';
        document.querySelector('#hamburgerMenu').style.display = 'inline';
      }
    });

    function hideMenuHamburger () {
      document.querySelector('#menuContainer').style.width = '0%';
      document.querySelector('#hamburgerMenu').style.display = 'inline';
    }

    function showMenuHamburger () {
      document.querySelector('#menuContainer').style.width = '85%';
      document.querySelector('#hamburgerMenu').style.display = 'none';
    }
  </script>
<!--NEW HAMBURGER AND NAVBAR MENU-->

  <nav class="site-navbar">
    <div class="site-navbar__desktop-logo-container">
      <a href="index.html">
        <img class="navbar-logo-mobile" src="<?php echo get_template_directory_uri() . '/img/logo/white-rer-logo.png' ?>" alt="Logo RER">
      </a>
    </div>
    <div class="site-navbar__menu-container">
      <div class="site-navbar__mobile-logo-container">
        <a href="index.html"><img src="<?php echo get_template_directory_uri() . '/img/logo/white-rer-logo.png' ?>" alt="Logo"></a>
      </div>
      <div class="site-navbar__menu rer-font-opensans">
        <a href="index.html" class="site-navbar__menu-link">
          <div class="nav_stroke-container">
            <div class="nav_stroke"></div>
          </div>
          <span>Inicio</span>
        </a>
        <a href="plans-services.html" class="site-navbar__menu-link">
          <div class="nav_stroke-container">
            <div class="nav_stroke"></div>
          </div>
          <span>Planes y servicios</span>
        </a>
        <a href="solar-benefits.html" class="site-navbar__menu-link">
          <div class="nav_stroke-container">
            <div class="nav_stroke"></div>
          </div>
          <span>Beneficios solares</span>
        </a>
        <a href="projects.html" class="site-navbar__menu-link">
          <div class="nav_stroke-container">
            <div class="nav_stroke"></div>
          </div>
          <span>Proyectos</span>
        </a>
        <a href="news.html" class="site-navbar__menu-link active">
          <div class="nav_stroke-container">
            <div class="nav_stroke"></div>
          </div>
          <span>Noticias</span>
        </a>
        <a href="about.html" class="site-navbar__menu-link">
          <div class="nav_stroke-container">
            <div class="nav_stroke"></div>
          </div>
          <span>Quiénes somos</span>
        </a>
        <a href="contact.html" class="site-navbar__menu-link">
          <div class="nav_stroke-container">
            <div class="nav_stroke"></div>
          </div>
          <span>Contacto</span>
        </a>
      </div>
    </div>
    <div data-attribute="" class="navbar-hamburguer-visibility" onclick="showMenuHamburger()" id="hamburgerMenu">
      <div class="navbar-hamburguer" data-attribute="">
        <div class="align-content-hamburguer" data-attribute="">
          <div class="line-hamburguer-base line-hamburguer-lg" data-attribute=""></div>
          <div class="line-hamburguer-base line-hamburguer-lg margin-vertical-4px" data-attribute=""></div>
          <div class="line-hamburguer-base line-hamburguer-md" data-attribute=""></div>
        </div>
      </div>
    </div>
    <div class="hamburger-menu-container rer-font-opensans" id="menuContainer" data-attribute="">
      <div class="hamburger-menu-header" data-attribute="">
        <div class="" data-attribute="">
          <a href="" data-attribute="">
            <img class="hamburger-logo" src="<?php echo get_template_directory_uri() . '/img/logo/white-rer-logo.png' ?>" data-attribute="">
          </a>
        </div>
        <div class="hamburger-close-container" onclick="hideMenuHamburger()">
          <img class="hamburger-close" src="<?php echo get_template_directory_uri() . '/img/icons/close-menu.png' ?>">
        </div>
      </div>
      <div class="hamburger-menu-body" data-attribute="">
        <a data-attribute="" href="index.html" class="hamburger-menu-link">
          <div class="hamburger-link-container">
            <div class="hamburger-stroke-container">
              <div class="hamburger-stroke"></div>
            </div>
            <span class="hamburger-text">Inicio</span>
          </div>
        </a>
        <a data-attribute="" href="plans-services.html" class="hamburger-menu-link">
          <div class="hamburger-link-container">
            <div class="hamburger-stroke-container">
              <div class="hamburger-stroke"></div>
            </div>
            <span class="hamburger-text">Planes y servicios</span>
          </div>
        </a>
        <a data-attribute="" href="solar-benefits.html" class="hamburger-menu-link">
          <div class="hamburger-link-container">
            <div class="hamburger-stroke-container">
              <div class="hamburger-stroke"></div>
            </div>
            <span class="hamburger-text">Beneficios solares</span>
          </div>
        </a>
        <a data-attribute="" href="projects.html" class="hamburger-menu-link">
          <div class="hamburger-link-container">
            <div class="hamburger-stroke-container">
              <div class="hamburger-stroke"></div>
            </div>
            <span class="hamburger-text">Proyectos</span>
          </div>
        </a>
        <a data-attribute="" href="news.html" class="hamburger-menu-link link-active">
          <div class="hamburger-link-container">
            <div class="hamburger-stroke-container">
              <div class="hamburger-stroke"></div>
            </div>
            <span class="hamburger-text">Noticias</span>
          </div>
        </a>
        <a data-attribute="" href="about.html" class="hamburger-menu-link">
          <div class="hamburger-link-container">
            <div class="hamburger-stroke-container">
              <div class="hamburger-stroke"></div>
            </div>
            <span class="hamburger-text">Quiénes somos</span>
          </div>
        </a>
        <a data-attribute="" href="contact.html" class="hamburger-menu-link">
          <div class="hamburger-link-container">
            <div class="hamburger-stroke-container">
              <div class="hamburger-stroke"></div>
            </div>
            <span class="hamburger-text">Contacto</span>
          </div>
        </a>
      </div>
    </div>
  </nav>