<?php

function dd($variable)
{
    dump($variable);
    die('END');
}

function dump($variable)
{
    echo "<pre>";
    print_r($variable);
    echo "</pre>";
}

function asset($asset)
{
    return BASE_URL . $asset;
}

function page_url($page)
{
    return BASE_URL . "?p=$page";
}

function is_post()
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}
