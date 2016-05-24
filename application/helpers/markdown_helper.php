<?php

defined('BASEPATH') or exit('No direct script access allowed');

require_once(APPPATH.'third_party/php-markdown/Michelf/Markdown.inc.php');


if ( ! function_exists('markdown_decode'))
{
    function markdown_decode($text)
    {
        return Michelf\Markdown::defaultTransform($text);
    }
}

/* EOF mardown_helper.php */
/* Path: ./application/helpers/markdown_helper.php */
