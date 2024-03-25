<?php
const DEFAULT_TEMPLATE_PATH = "/local/templates/.default";

function debag($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}