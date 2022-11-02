<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)) : ?>

	<div class="head-nav">
		<span class="menu"> </span> <!-- иконка бургера -->
		<ul class="cl-effect-1">
			<!-- каждый пункт вывведем с помощью цикла -->
			<?php foreach ($arResult as $arItem) : ?>
				<!-- настройка связана с выпадающим -->
				<?php if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) continue;?>

				<!-- сам пункт -->
				<!-- если выбран то с классом "active" -->
				<?php if ($arItem["SELECTED"]) : ?>
					<li class="active"><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
				<?php else : ?>
					<li class=""><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
				<?php endif ?>
			<?php endforeach ?>
			<div class="clearfix"></div>
		</ul>
	</div>

	<!-- ниже заводские настройки -->
	<!-- <ul class="left-menu">

		<?
		/* есть массив $arResult с пунктами меню $arItem */
		/* каждый $arItem содержит какую-то информацию, например $arItem["LINK"] */
		foreach ($arResult as $arItem) :
			if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) continue;
		?>
			<? if ($arItem["SELECTED"]) : ?>
				<li><a href="<?= $arItem["LINK"] ?>" class="selected"><?= $arItem["TEXT"] ?></a></li>
			<? else : ?>
				<li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
			<? endif ?>

		<? endforeach ?>

	</ul> -->
<? endif ?>