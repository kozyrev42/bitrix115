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

<!-- верстака по умолчанию, отключаем -->
<?php /*  
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						/></a>
			<?else:?>
				<img
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
			<?endif;?>
		<?endif?>
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
			<?else:?>
				<b><?echo $arItem["NAME"]?></b><br />
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>
	</p>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
*/ ?>

<div class="blog-articals">
   <? foreach ($arResult["ITEMS"] as $arItem) : ?>
      <div class="blog-artical">
         <div class="blog-artical-info">
            <div class="blog-artical-info-img">
               <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" title="post-name"></a>
            </div>
            <div class="blog-artical-info-head">
               <h2><a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><? echo $arItem["NAME"] ?></a></h2>
               <h6>Posted on, <?= $arItem["DISPLAY_ACTIVE_FROM"] ?> </h6>

            </div>
            <div class="blog-artical-info-text">
               <p><?= $arItem["PREVIEW_TEXT"] ?>
                  <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">[...]</a>
               </p>
            </div>
            <div class="artical-links">
               <ul>
                  <li><small> </small><span><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></span></li>
                  <li><a href="#"><small class="admin"> </small><span><?= $arItem["PROPERTIES"]["AUTHOR"]["VALUE"] ?></span></a></li>
                  <li><a href="#"><small class="no"> </small><span>No comments</span></a></li>
                  <li><a href="#"><small class="posts"> </small><span>View posts: <?= $arItem["SHOW_COUNTER"] ?></span></a></li>
                  <li><a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><small class="link"> </small><span>permalink</span></a></li>
               </ul>
            </div>
         </div>
         <div class="clearfix"> </div>
      </div>
   <? endforeach; ?>

   <!-- пагинация -->
   <? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
      <br /><?= $arResult["NAV_STRING"] ?>
   <? endif; ?>

</div>


<!-- <?php dd($arResult["ITEMS"]); ?> -->

<!-- <div class="blog-articals">
	<div class="blog-artical">
		<div class="blog-artical-info">
			<div class="blog-artical-info-img">
				<a href="single.html"><img src="images/7.jpg" title="post-name"></a>
			</div>
			<div class="blog-artical-info-head">
				<h2><a href="single.html">Printing and typesetting industry</a></h2>
				<h6>Posted on, 12 July 2014 at 10.30am by <a href="#"> admin</a></h6>

			</div>
			<div class="blog-artical-info-text">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
					Ipsum dummy text of the printing and typesetting industry. Lorem Ipsum dummy
					text of the printing and typesetting industry. Lorem Ipsum has been the
					industry's standard dummy has been the industry's standard dummy has been the
					industry's standard dummy text ever since the 1500s, when an unknown printer
					took a galley of type and scrambled it to make a type specimen book.<a href="#">[...]</a></p>
			</div>
			<div class="artical-links">
				<ul>
					<li><small> </small><span>june 14, 2013</span></li>
					<li><a href="#"><small class="admin"> </small><span>admin</span></a></li>
					<li><a href="#"><small class="no"> </small><span>No comments</span></a></li>
					<li><a href="#"><small class="posts"> </small><span>View posts</span></a></li>
					<li><a href="#"><small class="link"> </small><span>permalink</span></a></li>
				</ul>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div> -->