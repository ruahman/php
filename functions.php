<?php

function find($needle, $haystack): string
{
    return strpos($haystack, $needle);
}

echo find (
    'PHP is awesome!',
    'awesome'
);

echo find (
    $needle = 'awesome',
    $haystack = 'PHP is awesome!'
);

echo find (
    $needle = 'awesome',
    $haystack = 'PHP is awesome!'
);

echo find (
    $needle = 'awesome',
    $haystack = 'PHP is awesome!'
);

echo find (
    $needle = 'awesome',
    $haystack = 'PHP is awesome!'
);
