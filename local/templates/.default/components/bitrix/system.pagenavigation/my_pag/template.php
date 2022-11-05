<?
/* проверка на подключение ядра */
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/* hz */
$this->setFrameMode(true);

/* hz */
if (!$arResult["NavShowAlways"]) {
   if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
      return;
}

/* hz */
$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
?>


<!-- пагинацию будем показывать, если стрниц больше чем 1 -->
<?php if ($arResult["NavPageCount"] > 1) : ?>

   <nav>
      <ul class="pagination">

         <!-- кнопка Предыдущая -->
         <!-- если номер текущей страницы > 1, то нам нужна ссылка на предыдущую "prev" страницу -->
         <?php if ($arResult["NavPageNomer"] > 1) : ?>
            <!-- только для 2 странице -->
            <?php if ($arResult["NavPageNomer"] == 2) : ?>
               <li>
                  <a href="/blog/" aria-label="Previous">
                     <span aria-hidden="true">Предыдущая</span>
                  </a>
               </li>
            <?php else : ?>
               <!-- для 3 странице и далее, нужно составить гет-запрос для ссылки -->
               <li>
                  <a href="<?= $arResult["sUrlPath"] ?>?PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["NavPageNomer"] - 1 ?>" aria-label="Previous">
                     <span aria-hidden="true">Предыдущая</span>
                  </a>
               </li>
            <?php endif; ?>
         <?php endif; ?>

         <!-- кнопки страниц выводим в цикле -->
         <!--  -->
         <?php while ($arResult["nStartPage"] <= $arResult["nEndPage"]) : ?>
            <!-- если текущая страница, выводим номер текущей страницы без ссылки -->
            <?php if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
               <li class="active"><a><?=$arResult["nStartPage"]?></a></li>
            <!-- ссылка для первой кнопке страницы -->
            <?php elseif ($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false) :?>
               <li><a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"> <?=$arResult["nStartPage"]?> </a> </li>
            <!-- для остальных кнопок -->
            <?php else :?>
               <li><a href="<?= $arResult["sUrlPath"] ?>?<?=$strNavQueryStringFull ?>PAGEN_<?= $arResult["NavNum"] ?>=<?=$arResult["nStartPage"]?>"> <?=$arResult["nStartPage"]?> </a></li>
            <?php endif; ?>
            <!-- ДЛЯ ЦИКЛА +1, ДЛЯ КАЖДОЙ ИТЕРАЦИИ -->
            <?php $arResult["nStartPage"]++ ?>
         <?php  endwhile; ?>

         <!-- кнопка Следующая -->
         <!-- если текущая страница, меньше чем последняя, кнопку выводим -->
         <?php if (($arResult["NavPageNomer"]) < ($arResult["NavPageCount"])) : ?>
            <!-- только для 1 страници -->
            <?php if ($arResult["NavPageNomer"] == 1) : ?>
               <li>
                  <a href="/blog/?PAGEN_<?= $arResult["NavNum"] ?>=2" aria-label="Next">
                     <span aria-hidden="true">Следующая</span>
                  </a>
               </li>
            <?php else : ?>
               <li>
                  <a href="<?= $arResult["sUrlPath"] ?>?PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["NavPageNomer"] + 1 ?>" aria-label="Previous">
                     <span aria-hidden="true">Следующая</span>
                  </a>
               </li>
            <?php endif; ?>
         <?php endif; ?>

      </ul>
   </nav>

<?php endif; ?>

<!-- <nav>
   <ul class="pagination">
      <li>
         <a href="#" aria-label="Previous">
            <span aria-hidden="true">«</span>
         </a>
      </li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li>
         <a href="#" aria-label="Next">
            <span aria-hidden="true">»</span>
         </a>
      </li>
   </ul>
</nav> -->
