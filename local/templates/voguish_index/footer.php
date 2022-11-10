<?php
// проверка подключено-ли ядро битрикса, то есть инициализирована ли КОНСТАНТА глубоко в ядре
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

</div>

<div class="col-md-3 bann-left">
   <div class="b-search">
      <form>
         <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
         <input type="submit" value="">
      </form>
   </div>
   <h3>Recent Posts</h3>
   <!-- отключил верстку, ниже вставлен компонент -->
   <!-- <div class="blo-top">
      <div class="blog-grids">
         <div class="blog-grid-left">
            <a href="single.html"><img src="<?= SITE_TEMPLATE_PATH ?>/images/1b.jpg" class="img-responsive" alt=""></a>
         </div>
         <div class="blog-grid-right">
            <h4><a href="single.html">Little Invaders </a></h4>
            <p>pellentesque dui, non felis. Maecenas male </p>
         </div>
         <div class="clearfix"> </div>
      </div>
      <div class="blog-grids">
         <div class="blog-grid-left">
            <a href="single.html"><img src="<?= SITE_TEMPLATE_PATH ?>/images/2b.jpg" class="img-responsive" alt=""></a>
         </div>
         <div class="blog-grid-right">
            <h4><a href="single.html">Little Invaders </a></h4>
            <p>pellentesque dui, non felis. Maecenas male </p>
         </div>
         <div class="clearfix"> </div>
      </div>
      <div class="blog-grids">
         <div class="blog-grid-left">
            <a href=""><img src="<?= SITE_TEMPLATE_PATH ?>/images/3b.jpg" class="img-responsive" alt=""></a>
         </div>
         <div class="blog-grid-right">
            <h4><a href="single.html">Little Invaders </a></h4>
            <p>pellentesque dui, non felis. Maecenas male </p>
         </div>
         <div class="clearfix"> </div>
      </div>
   </div> -->

   <!-- недавние Посты -->
   <? $APPLICATION->IncludeComponent(
      "bitrix:news.list",
      "",
      array(
         "ACTIVE_DATE_FORMAT" => "d.m.Y",
         "ADD_SECTIONS_CHAIN" => "Y",
         "AJAX_MODE" => "N",
         "AJAX_OPTION_ADDITIONAL" => "",
         "AJAX_OPTION_HISTORY" => "N",
         "AJAX_OPTION_JUMP" => "N",
         "AJAX_OPTION_STYLE" => "Y",
         "CACHE_FILTER" => "N",
         "CACHE_GROUPS" => "Y",
         "CACHE_TIME" => "36000000",
         "CACHE_TYPE" => "A",
         "CHECK_DATES" => "Y",
         "DETAIL_URL" => "",
         "DISPLAY_BOTTOM_PAGER" => "Y",
         "DISPLAY_DATE" => "Y",
         "DISPLAY_NAME" => "Y",
         "DISPLAY_PICTURE" => "Y",
         "DISPLAY_PREVIEW_TEXT" => "Y",
         "DISPLAY_TOP_PAGER" => "N",
         "FIELD_CODE" => array("", ""),
         "FILTER_NAME" => "",
         "HIDE_LINK_WHEN_NO_DETAIL" => "N",
         "IBLOCK_ID" => "3",
         "IBLOCK_TYPE" => "content",
         "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
         "INCLUDE_SUBSECTIONS" => "Y",
         "MESSAGE_404" => "",
         "NEWS_COUNT" => "3",
         "PAGER_BASE_LINK_ENABLE" => "N",
         "PAGER_DESC_NUMBERING" => "N",
         "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
         "PAGER_SHOW_ALL" => "N",
         "PAGER_SHOW_ALWAYS" => "N",
         "PAGER_TEMPLATE" => ".default",
         "PAGER_TITLE" => "Новости",
         "PARENT_SECTION" => "",
         "PARENT_SECTION_CODE" => "",
         "PREVIEW_TRUNCATE_LEN" => "",
         "PROPERTY_CODE" => array("", ""),
         "SET_BROWSER_TITLE" => "Y",
         "SET_LAST_MODIFIED" => "N",
         "SET_META_DESCRIPTION" => "Y",
         "SET_META_KEYWORDS" => "Y",
         "SET_STATUS_404" => "N",
         "SET_TITLE" => "Y",
         "SHOW_404" => "N",
         "SORT_BY1" => "ACTIVE_FROM",
         "SORT_BY2" => "SORT",
         "SORT_ORDER1" => "DESC",
         "SORT_ORDER2" => "ASC",
         "STRICT_SECTION_CHECK" => "N"
      )
   ); ?>
   
   <h3>Categories</h3>
   <div class="blo-top">
      <li><a href="#">|| Lorem Ipsum passage</a></li>
      <li><a href="#">|| Finibus Bonorum et</a></li>
      <li><a href="#">|| Treatise on the theory</a></li>
      <li><a href="#">|| Characteristic words</a></li>
      <li><a href="#">|| combined with a handful</a></li>
      <li><a href="#">|| which looks reasonable</a></li>
   </div>
   <h3>Newsletter</h3>

   <div class="blo-top">
      <div class="name">
         <form>
            <input type="text" placeholder="email" required="">
         </form>
      </div>
      <div class="button">
         <form>
            <input type="submit" value="Subscribe">
         </form>
      </div>
      <div class="clearfix"> </div>
   </div>
</div>

<div class="clearfix"> </div>

<!-- слайдер, рендерится только на главной -->
<?php if ($APPLICATION->GetCurPage(false) === "/") : ?>
   <div class="fle-xsel">
      <ul id="flexiselDemo3">
         <li>
            <a href="#">
               <div class="banner-1">
                  <img src="<?= SITE_TEMPLATE_PATH ?>/images/6.jpg" class="img-responsive" alt="">
               </div>
            </a>
         </li>
         <li>
            <a href="#">
               <div class="banner-1">
                  <img src="<?= SITE_TEMPLATE_PATH ?>/images/5.jpg" class="img-responsive" alt="">
               </div>
            </a>
         </li>
         <li>
            <a href="#">
               <div class="banner-1">
                  <img src="<?= SITE_TEMPLATE_PATH ?>/images/1.jpg" class="img-responsive" alt="">
               </div>
            </a>
         </li>
         <li>
            <a href="#">
               <div class="banner-1">
                  <img src="<?= SITE_TEMPLATE_PATH ?>/images/4.jpg" class="img-responsive" alt="">
               </div>
            </a>
         </li>
         <li>
            <a href="#">
               <div class="banner-1">
                  <img src="<?= SITE_TEMPLATE_PATH ?>/images/6.jpg" class="img-responsive" alt="">
               </div>
            </a>
         </li>
         <li>
            <a href="#">
               <div class="banner-1">
                  <img src="<?= SITE_TEMPLATE_PATH ?>/images/1.jpg" class="img-responsive" alt="">
               </div>
            </a>
         </li>
      </ul>

      <script type="text/javascript">
         $(window).load(function() {

            $("#flexiselDemo3").flexisel({
               visibleItems: 5,
               animationSpeed: 1000,
               autoPlay: true,
               autoPlaySpeed: 3000,
               pauseOnHover: true,
               enableResponsiveBreakpoints: true,
               responsiveBreakpoints: {
                  portrait: {
                     changePoint: 480,
                     visibleItems: 2
                  },
                  landscape: {
                     changePoint: 640,
                     visibleItems: 3
                  },
                  tablet: {
                     changePoint: 768,
                     visibleItems: 3
                  }
               }
            });

         });
      </script>
      <!-- подключил -->
      <!-- <script type="text/javascript" src="js/jquery.flexisel.js"></script> -->
      <div class="clearfix"> </div>
   </div>
<? endif; ?>



<div class="footer">

   <div class="col-md-3 foot-1">
      <h4>Quick Links</h4>
      <!-- сделаем из списка меню -->
      <!-- <ul>
					<li><a href="#">||   Lorem Ipsum passage</a></li>
					<li><a href="#">||   Finibus Bonorum et</a></li>
					<li><a href="#">||   Treatise on the theory</a></li>
				</ul> -->

      <!-- компонент меню -->
      <? $APPLICATION->IncludeComponent(
         "bitrix:menu",
         "niz1_menu",
         array(
            "ALLOW_MULTI_SELECT" => "N",   // Разрешить несколько активных пунктов одновременно
            "CHILD_MENU_TYPE" => "left",   // Тип меню для остальных уровней
            "DELAY" => "N",   // Откладывать выполнение шаблона меню
            "MAX_LEVEL" => "1",   // Уровень вложенности меню
            "MENU_CACHE_GET_VARS" => array(   // Значимые переменные запроса
               0 => "",
            ),
            "MENU_CACHE_TIME" => "3600",   // Время кеширования (сек.)
            "MENU_CACHE_TYPE" => "N",   // Тип кеширования
            "MENU_CACHE_USE_GROUPS" => "Y",   // Учитывать права доступа
            "ROOT_MENU_TYPE" => "bottom1",   // Тип меню для первого уровня
            "USE_EXT" => "N",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
         ),
         false
      ); ?>
   </div>

   <div class="col-md-3 foot-1">
      <h4>Favorite Resources</h4>
      <ul>
         <li><a href="#">|| Characteristic words</a></li>
         <li><a href="#">|| combined with a handful</a></li>
         <li><a href="#">|| which looks reasonable</a></li>
      </ul>
   </div>
   <div class="col-md-3 foot-1">
      <h4>About Us</h4>
      <ul>
         <li><a href="#">|| Even slightly believable</a></li>
         <li><a href="#">|| Hidden in the middle</a></li>
         <li><a href="#">|| Ipsum therefore always</a></li>
      </ul>
   </div>
   <div class="col-md-3 foot-1">
      <h4>Custom Menu</h4>
      <ul>
         <li><a href="#">|| Internet tend to repeat</a></li>
         <li><a href="#">|| Alteration in some form</a></li>
         <li><a href="#">|| This book is a treatise</a></li>
      </ul>
   </div>

   <div class="clearfix"> </div>
   <div class="copyright">
      <p>Copyrights © 2015 Voguish All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
   </div>
</div>
</div>
</body>

</html>