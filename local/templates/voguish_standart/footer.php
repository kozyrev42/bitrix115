<?php
// проверка подключено-ли ядро битрикса, то есть инициализирована ли КОНСТАНТА глубоко в ядре
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

</div> <!-- закрывает div "contact" из хедера-->

<div class="clearfix"> </div>
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

</div> <!-- div - закрывает открытый в хедере class="container" -->
</body>

</html>