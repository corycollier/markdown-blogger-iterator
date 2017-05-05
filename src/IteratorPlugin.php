<?php

namespace MarkdownBlogger\Plugin;

use MarkdownBlogger\PluginInterface;
use MarkdownBlogger\Application;

class IteratorPlugin implements PluginInterface
{
    public function __construct()
    {
        echo 'got here';
    }

    public function initialize(Application $app)
    {

    }
}
