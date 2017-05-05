# markdown-blogger-iterator
First plugin for the Markdown Blogger project

## testing
```php
<?php

require 'vendor/autoload.php';

use MarkdownBlogger\Application;
use MarkdownBlogger\Plugin\IteratorPlugin;

// bootstrap the blog
$app = Application::getInstance();
$app->bootstrap([
    'data_dir'    => realpath(__DIR__ . '/../data'),
    'blog_title'  => 'The Default Title',
    'keywords'    => 'Testing, Stuff',
    'description' => 'The default description',
]);

$plugins = [
    'iterator' => new IteratorPlugin(),
];

foreach ($plugins as $plugin) {
    $plugin->initialize($app);
}
```
