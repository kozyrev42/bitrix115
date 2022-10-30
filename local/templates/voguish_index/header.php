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

/* подключение ШРИФТОВ */
$asset->addString("<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>");
$asset->addString("<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>");
?>


<!DOCTYPE HTML>
<html>

<head>
   <!-- связываем подключенные стили со страницей -->
   <?php $APPLICATION->ShowHead() ?>

   <title><?php $APPLICATION->ShowTitle() ?></title>
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
   <!-- подключил -->
   <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'> -->
   <!-- <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'> -->
   <!--  -->
   <!-- <script src="js/jquery.min.js"></script> -->
   <!-- <script src="js/responsiveslides.min.js"></script> -->
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
   <div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
   <!-- header -->
   <div class="header">
      <div class="container">

         <!-- необходимо логотип заменить на компонент "включаемая область" -->
         <!-- <div class="logo">
            <a href="/"><img src="<?php /* SITE_TEMPLATE_PATH */ ?>/images/logo.png" class="img-responsive" alt=""></a>
         </div> -->

         <!-- "bitrix:main.include" - наименование компонента -->
         <?php $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
               "AREA_FILE_SHOW" => "file",
               "AREA_FILE_SUFFIX" => "inc",
               "EDIT_TEMPLATE" => "",
               "PATH" => "/include/logo.php"
            )
         ); ?>

         <!-- меню -->
         <!-- <div class="head-nav">
            <span class="menu"> </span>
            <ul class="cl-effect-1">
               <li class="active"><a href="/">Home</a></li>
               <li><a href="about.html">About Us</a></li>
               <li><a href="services.html">Services</a></li>
               <li><a href="blog.html">Blog</a></li>
               <li><a href="404.html">Shortcodes</a></li>
               <li><a href="login.html">Login</a></li>
               <li><a href="contact.html">Contact</a></li>
               <div class="clearfix"></div>
            </ul>
         </div> -->

         <!-- компонент меню -->
         <? $APPLICATION->IncludeComponent("bitrix:menu", "main_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "main",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
); ?>

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
      <!-- НУЖНО ПОДУМАТЬ ПОЧЕМУ bann-right ОТКРЫВАЕТСЯ ЗДЕСЬ -->
      <!-- короче, в это открывающийся DIV вставится контент из index.php/либо другой открытой страници -->
      <!-- верстка при этом, не поломается -->
      <div class="col-md-9 bann-right">