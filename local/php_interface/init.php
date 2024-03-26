<?php

if (!file_exists($_SERVER['DOCUMENT_ROOT'] . '/local/libs/vendor/autoload.php')) {
    die('composer not installed');
}

const DEFAULT_TEMPLATE_PATH = "/local/templates/.default";

require_once $_SERVER['DOCUMENT_ROOT'] . '/local/libs/vendor/autoload.php';
