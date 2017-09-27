<?php

if (!function_exists("skarla_assets_url")) {

    function skarla_assets_url($url) {
        return url("vendor/skarla/assets/{$url}");
    }

}

