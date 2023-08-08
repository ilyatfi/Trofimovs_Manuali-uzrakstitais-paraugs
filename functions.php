<?php

function getNewUrl(string $url, string $route)
{
    $uri = parse_url($_SERVER['REQUEST_URI']);

    if (empty($uri['query'])) {
        $new_url = $url.'?r='.$route;
    }
    else {
        $new_url = str_replace($uri['query'], 'r='.$route, $url);
    }

    return $new_url;
}
