<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<?
ShowMessage($arParams["~AUTH_RESULT"]);
ShowMessage($arResult['ERROR_MESSAGE']);
?>
system.auth.authorize
<!-- шаблон не авторизованных пользователей -->

<!-- <div>
	<span>Email Address<label>*</label></span>
	<input type="text">
</div> -->

<div class="login-right">
	<!-- <? if ($arResult["AUTH_SERVICES"]) : ?>
		<div class="bx-auth-title"><? echo GetMessage("AUTH_TITLE") ?></div>
	<? endif ?> -->
	<!-- <div class="bx-auth-note"><?= GetMessage("AUTH_PLEASE_AUTH") ?></div> -->

	<form name="form_auth" method="post" target="_top" action="<?= $arResult["AUTH_URL"] ?>">

		<input type="hidden" name="AUTH_FORM" value="Y" />
		<input type="hidden" name="TYPE" value="AUTH" />
		<? if ($arResult["BACKURL"] <> '') : ?>
			<input type="hidden" name="backurl" value="<?= $arResult["BACKURL"] ?>" />
		<? endif ?>
		<? foreach ($arResult["POST"] as $key => $value) : ?>
			<input type="hidden" name="<?= $key ?>" value="<?= $value ?>" />
		<? endforeach ?>

		<h3>ЗАРЕГИСТРИРОВАННЫЕ КЛИЕНТЫ</h3>
		<p>Если у вас есть учетная запись у нас, пожалуйста, войдите в систему.</p>
		<!-- поле для логина -->
		<div>
			<span><?= GetMessage("AUTH_LOGIN") ?></span>
			<input class="bx-auth-input form-control" type="text" name="USER_LOGIN" maxlength="255" value="<?= $arResult["LAST_LOGIN"] ?>" />
		</div>

		<!-- поле для пароля -->
		<div>
			<span><?= GetMessage("AUTH_PASSWORD") ?></span>
			<input class="bx-auth-input form-control" type="password" name="USER_PASSWORD" maxlength="255" autocomplete="off" />
			<? if ($arResult["SECURE_AUTH"]) : ?>
				<span class="bx-auth-secure" id="bx_auth_secure" title="<? echo GetMessage("AUTH_SECURE_NOTE") ?>" style="display:none">
					<div class="bx-auth-secure-icon"></div>
				</span>
				<noscript>
					<span class="bx-auth-secure" title="<? echo GetMessage("AUTH_NONSECURE_NOTE") ?>">
						<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
					</span>
				</noscript>
				<script type="text/javascript">
					document.getElementById('bx_auth_secure').style.display = 'inline-block';
				</script>
			<? endif ?>
		</div>

		<!-- каптча -->
		<? if ($arResult["CAPTCHA_CODE"]) : ?>
			<div>
				<input type="hidden" name="captcha_sid" value="<? echo $arResult["CAPTCHA_CODE"] ?>" />
				<img src="/bitrix/tools/captcha.php?captcha_sid=<? echo $arResult["CAPTCHA_CODE"] ?>" width="180" height="40" alt="CAPTCHA" />

			</div>
			<div>
				<span><? echo GetMessage("AUTH_CAPTCHA_PROMT") ?>:</span>
				<input class="bx-auth-input form-control" type="text" name="captcha_word" maxlength="50" value="" size="15" autocomplete="off" />
			</div>
		<? endif; ?>


		<!-- запомнить пароль -->
		<? if ($arResult["STORE_PASSWORD"] == "Y") : ?>
			<div>
				<td><input type="checkbox" id="USER_REMEMBER" name="USER_REMEMBER" value="Y" /><label for="USER_REMEMBER">&nbsp;<?= GetMessage("AUTH_REMEMBER_ME") ?></label></td>
			</div>
		<? endif ?>

		<!-- кнопка войти -->
		<div>
			<input type="submit" class="btn btn-primary" name="Login" value="<?= GetMessage("AUTH_AUTHORIZE") ?>" />
		</div>

		<!-- забыли пароль -->
		<? if ($arParams["NOT_SHOW_LINKS"] != "Y") : ?>
			<noindex>
				<p>
					<a href="<?= $arResult["AUTH_FORGOT_PASSWORD_URL"] ?>" rel="nofollow"><?= GetMessage("AUTH_FORGOT_PASSWORD_2") ?></a>
				</p>
			</noindex>
		<? endif ?>

		<!-- ссылка зарегистрироваться -->
		<!-- хз как работает условие -->
		<!-- <? if ($arParams["NOT_SHOW_LINKS"] != "Y" && $arResult["NEW_USER_REGISTRATION"] == "Y" && $arParams["AUTHORIZE_REGISTRATION"] != "Y") : ?>
			<noindex>
				<p>
					<a href="<?= $arResult["AUTH_REGISTER_URL"] ?>" rel="nofollow"><?= GetMessage("AUTH_REGISTER") ?></a><br />
					<?= GetMessage("AUTH_FIRST_ONE") ?>
				</p>
			</noindex>
		<? endif ?> -->
		<!-- вывел без условия -->
		<p>
			<a href="<?= $arResult["AUTH_REGISTER_URL"] ?>" rel="nofollow"><?= GetMessage("AUTH_REGISTER") ?></a><br />
			<?= GetMessage("AUTH_FIRST_ONE") ?>
		</p>
	</form>
</div>

<script type="text/javascript">
	<? if ($arResult["LAST_LOGIN"] <> '') : ?>
		try {
			document.form_auth.USER_PASSWORD.focus();
		} catch (e) {}
	<? else : ?>
		try {
			document.form_auth.USER_LOGIN.focus();
		} catch (e) {}
	<? endif ?>
</script>

<!-- вход через соцсети -->
<? if ($arResult["AUTH_SERVICES"]) : ?>
	<?
	/* $APPLICATION->IncludeComponent(
		"bitrix:socserv.auth.form",
		"",
		array(
			"AUTH_SERVICES" => $arResult["AUTH_SERVICES"],
			"CURRENT_SERVICE" => $arResult["CURRENT_SERVICE"],
			"AUTH_URL" => $arResult["AUTH_URL"],
			"POST" => $arResult["POST"],
			"SHOW_TITLES" => $arResult["FOR_INTRANET"] ? 'N' : 'Y',
			"FOR_SPLIT" => $arResult["FOR_INTRANET"] ? 'Y' : 'N',
			"AUTH_LINE" => $arResult["FOR_INTRANET"] ? 'N' : 'Y',
		),
		$component,
		array("HIDE_ICONS" => "Y")
	); */
	?>
<? endif ?>