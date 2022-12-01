<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "профиль");
$APPLICATION->SetPageProperty("title", "профиль");
$APPLICATION->SetPageProperty("keywords", "профиль");
$APPLICATION->SetPageProperty("description", "профиль");
$APPLICATION->SetTitle("профиль");
?><?$APPLICATION->IncludeComponent("bitrix:main.profile", "profile", Array(
	"CHECK_RIGHTS" => "N",	// Проверять права доступа
		"SEND_INFO" => "N",	// Генерировать почтовое событие
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"USER_PROPERTY" => "",	// Показывать доп. свойства
		"USER_PROPERTY_NAME" => "",	// Название закладки с доп. свойствами
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>