<?php

function normalizeUrl($url)
{
    if (strpos($url, 'http://') === 0) {
        return 'https://' . substr($url, 7);
    } elseif (strpos($url, 'https://') === 0) {
        return $url;
    } else {
        return 'https://' . $url;
    }
}
// echo normalizeUrl('https://google.com');

// echo normalizeUrl('http://google.com');
// Output: https://google.com

// echo normalizeUrl('google.com');
// Output: https://google.com

