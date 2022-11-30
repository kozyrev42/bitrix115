<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();
?>
<!-- страница "Login", user не авторизован -->
system.auth.form
<div class="login-right">

	<?php
	if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
		ShowMessage($arResult['ERROR_MESSAGE']);
	?>

	<div class="panel panel-default">
		<div class="panel heading">
			<h3 class="panel-title">Профиль пользователя</h3>
		</div>
		<div class="panel-body">
			Добро пожаловать, <?=$arResult['USER_NAME'];?><br>
			Ваш профиль: <a href="<?=$arResult['PROFILE_URL'];?>"><?=$arResult['USER_LOGIN'];?></a><br>

			<!-- форма для выхода -->
			<form action="<?=$arResult["AUTH_URL"]?>">
				<?=bitrix_sessid_post()?>
				<input type="hidden" name="logout" value="yes" />
				<input type="submit" name="logout_butt" value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>" />
			</form>
		</div>
	</div>

</div>
