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


<!-- встроенный шаблон, был, удалён -->

<!-- мой шаблон -->

<img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" width="<?= $arResult["DETAIL_PICTURE"]["WIDTH"] ?>" height="<?= $arResult["DETAIL_PICTURE"]["HEIGHT"] ?>" class="img-responsive" alt="">

<p class="sin"><? echo $arResult["DETAIL_TEXT"]; ?></p>

<div class="artical-links">
	<ul>
		<li><small> </small><span><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></span></li>
		<li><a href="#"><small class="admin"> </small><span><?= $arResult["PROPERTIES"]["AUTHOR"]["VALUE"] ?></span></a></li>
		<!-- выведем количество комментариев, в противном случае 'No comments' , может быть $arResult вместо $arItem -->
		<li><a href="#"><small class="no"> </small><span><?= $arItem["PROPERTIES"]["BLOG_COOMMENTS_CNT"]["VALUE"] ?
			$arItem["PROPERTIES"]["BLOG_COOMMENTS_CNT"]["VALUE"] : 'No comments';?></span></a></li>
		<li><a href="#"><small class="posts"> </small><span>View posts: <?= $arResult["SHOW_COUNTER"] ?></span></a></li>
		<li><a href="<?= $arResult["DETAIL_PAGE_URL"] ?>"><small class="link"> </small><span>permalink</span></a></li>
	</ul>
</div>

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.comments",
	".default",
	Array(
		"BLOG_TITLE" => "Комментарии",
		"BLOG_URL" => "catalog_comments",
		"BLOG_USE" => "Y",
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMMENTS_COUNT" => "5",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => $arResult["ID"],
		"EMAIL_NOTIFY" => "N",
		"FB_USE" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "content",
		"PATH_TO_SMILE" => "/bitrix/images/blog/smile/",
		"SHOW_DEACTIVATED" => "N",
		"SHOW_RATING" => "N",
		"SHOW_SPAM" => "Y",
		"TEMPLATE_THEME" => "blue",
		"URL_TO_COMMENT" => $arResult["DETAIL_PAGE_URL"],
		"VK_USE" => "N",
		"WIDTH" => "200"
	)
);?>