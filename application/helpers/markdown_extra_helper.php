<?php

defined('BASEPATH') or exit('No direct script access allowed');

require_once(APPPATH.'third_party/php-markdown/Michelf/MarkdownExtra.inc.php');


if ( ! function_exists('markdown_extra_decode'))
{
    function markdown_extra_decode($text)
    {
        return Markdown::defaultTransform($text);
    }
}

/* EOF mardown_extra_helper.php */
/* Path: ./application/helpers/markdown_extra_helper.php */