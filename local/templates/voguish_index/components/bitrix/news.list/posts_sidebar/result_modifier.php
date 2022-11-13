<?php

// для того, чтобы напрямую изменять элементы массива внутри цикла, переменной $arItem должен предшествовать знак &
foreach ($arResult["ITEMS"] as &$arItem) {
    $arItem["PREVIEW_TEXT"] = "изменён в result_modifier... " . $arItem["PREVIEW_TEXT"];
}

// Ссылка $value на последний элемент массива останется после окончания цикла foreach.
// Рекомендуется уничтожать её с помощью unset().
unset($arItem);