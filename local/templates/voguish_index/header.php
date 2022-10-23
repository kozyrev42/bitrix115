<?php
// проверка подключено-ли ядро битрикса, то есть инициализирована ли КОНСТАНТА глубоко в ядре
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/* подключим пространство чтобы воспользоваться классом Asset */

use Bitrix\Main\Page\Asset;

/* создадим экземпляр Asset`a */

$asset = Asset::getInstance();

/* воспользуемся методом, для подключения css */
/* .min. подключатся автоматически */
$asset->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/css/style.css");

/* нужно также связать подключенные файлы с телом страницы  $APPLICATION->ShowHead() в теге <head>*/

/* подключение JS-файлов */
$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/responsiveslides.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery.flexisel.js");  /* нижний слайдер */
?>


<!DOCTYPE HTML>
<html>

<head>
   <!-- связываем подключенные стили со страницей -->
   <?php $APPLICATION->ShowHead() ?>

   <title>Voguish a Blogging Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
   <!-- стили подключил -->
   <!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"> -->
   <!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="keywords" content="Voguish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
   <script type="application/x-javascript">
      addEventListener("load", function() {
         setTimeout(hideURLbar, 0);
      }, false);

      function hideURLbar() {
         window.scrollTo(0, 1);
      }
   </script>
   <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
   <!--  -->
   <script src="js/jquery.min.js"></script>
   <script src="js/responsiveslides.min.js"></script>
   <script>
      $(function() {
         $("#slider").responsiveSlides({
            auto: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            pager: true,
         });
      });
   </script>

</head>

<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
   <!-- header -->
   <div class="header">
      <div class="container">
         <div class="logo">
            <a href="index.html"><img src="<?=SITE_TEMPLATE_PATH ?>/images/logo.png" class="img-responsive" alt=""></a>
         </div>

         <div class="head-nav">
            <span class="menu"> </span>
            <ul class="cl-effect-1">
               <li class="active"><a href="index.html">Home</a></li>
               <li><a href="about.html">About Us</a></li>
               <li><a href="services.html">Services</a></li>
               <li><a href="blog.html">Blog</a></li>
               <li><a href="404.html">Shortcodes</a></li>
               <li><a href="login.html">Login</a></li>
               <li><a href="contact.html">Contact</a></li>
               <div class="clearfix"></div>
            </ul>
         </div>
         <!-- script-for-nav -->
         <script>
            $("span.menu").click(function() {
               $(".head-nav ul").slideToggle(300, function() {
                  // Animation complete.
               });
            });
         </script>
         <!-- script-for-nav -->



         <div class="clearfix"> </div>
      </div>
   </div>
   <!-- header -->
   <div class="container">