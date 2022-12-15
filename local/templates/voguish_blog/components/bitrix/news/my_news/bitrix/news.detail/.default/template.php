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
// dd($arResult);
?>



<!-- скрипт фэнси бокс -->
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>

<!-- встроенный шаблон, был, удалён -->

<!-- мой шаблон -->

<img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" width="<?= $arResult["DETAIL_PICTURE"]["WIDTH"] ?>" height="<?= $arResult["DETAIL_PICTURE"]["HEIGHT"] ?>" class="img-responsive" alt="">

<!-- текст публикации -->
<p class="sin"><? echo $arResult["DETAIL_TEXT"]; ?></p>

<!-- вывод галереи -->
<?php if(!empty($arResult["PROPERTIES"]["GALLERY"]["VALUE"])):?>
	<?php foreach ($arResult["PROPERTIES"]["GALLERY"]["VALUE"] as $id_image):?>
		<a class="fancybox" rel="group" href="<?=CFile::GetPath($id_image)?>"><img src="<?=CFile::GetPath($id_image)?>" alt="" width="130px"></a>
	<?php endforeach;?>
<?php endif;?>	

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
