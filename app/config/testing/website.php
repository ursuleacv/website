<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Content Directory
    |--------------------------------------------------------------------------
    |
    | The directory in which the website will search for its markdown content
    | files. Article files must use the .md extension.
    |
    */

    'content' => __DIR__.'/../../../tests/fixtures',

    /*
    |--------------------------------------------------------------------------
    | Article Cache Duration
    |--------------------------------------------------------------------------
    |
    | How long to cache the entire Article collection before regenerating the
    | index in minutes.
    |
    */

    'cache' => 30,
);
