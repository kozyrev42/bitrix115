<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<!-- <?php dd($arResult); ?> -->

<!-- <div class="news-list">
	<? if ($arParams["DISPLAY_TOP_PAGER"]) : ?>
		<?= $arResult["NAV_STRING"] ?><br />
	<? endif; ?>
	<? foreach ($arResult["ITEMS"] as $arItem) : ?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<p class="news-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
			<? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])) : ?>
				<? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])) : ?>
					<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><img class="preview_picture" border="0" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>" height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" style="float:left" /></a>
				<? else : ?>
					<img class="preview_picture" border="0" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>" height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" style="float:left" />
				<? endif; ?>
			<? endif ?>
			<? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]) : ?>
				<span class="news-date-time"><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></span>
			<? endif ?>
			<? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]) : ?>
				<? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])) : ?>
					<a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><b><? echo $arItem["NAME"] ?></b></a><br />
				<? else : ?>
					<b><? echo $arItem["NAME"] ?></b><br />
				<? endif; ?>
			<? endif; ?>
			<? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]) : ?>
				<? echo $arItem["PREVIEW_TEXT"]; ?>
			<? endif; ?>
			<? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])) : ?>
		<div style="clear:both"></div>
	<? endif ?>
	<? foreach ($arItem["FIELDS"] as $code => $value) : ?>
		<small>
			<?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;<?= $value; ?>
		</small><br />
	<? endforeach; ?>
	<? foreach ($arItem["DISPLAY_PROPERTIES"] as $pid => $arProperty) : ?>
		<small>
			<?= $arProperty["NAME"] ?>:&nbsp;
			<? if (is_array($arProperty["DISPLAY_VALUE"])) : ?>
				<?= implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]); ?>
			<? else : ?>
				<?= $arProperty["DISPLAY_VALUE"]; ?>
			<? endif ?>
		</small><br />
	<? endforeach; ?>
	</p>
	<? endforeach; ?>
	<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
		<br /><?= $arResult["NAV_STRING"] ?>
	<? endif; ?>
</div> -->

<div class="blo-top">
	<? foreach ($arResult["ITEMS"] as $arItem) : ?>
		<div class="blog-grids">
			<div class="blog-grid-left">

				<!-- изображение будем редактировать/обрезать -->
				<?php
					$file = CFile::ResizeImageGet(
						$arItem["PREVIEW_PICTURE"],		 // изменяемый файл
						['width'=>100, 'height'=>100],   // необходимые размеры
						BX_RESIZE_IMAGE_EXACT,  		 // константа - тип масштабирования
						true
						// $file['src'] - вернет путь к уменьшенной картинке
					);

					// назначаем путь к новой картинке
					$arItem["PREVIEW_PICTURE"]["SRC"] = $file['src'];

				?>
				<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" class="img-responsive" alt=""></a>
			</div>

			<div class="blog-grid-right">
				<h4><a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><? echo $arItem["NAME"] ?></a></h4>
				<p><?= $arItem["PREVIEW_TEXT"] ?></p>
			</div>

			<div class="clearfix"> </div>

		</div>

	<? endforeach; ?>
</div>

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