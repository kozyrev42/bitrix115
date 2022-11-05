<?php

/* define("DEFAULT_TEMPLATE_PATH", "local/templates/.default"); */

/* функция для отладки с коротким наименованием */
/* <?php dd();?> */
function dd($data)
{
    echo '<pre>';
        /* var_dump($data); */ print_r($data);
    echo '</pre>';
}