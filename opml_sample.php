<?php
require_once 'opml.php';

$opml_data = array(
    'head' => array(
        'title' => 'My First OPML Document',
        'ownerId' => 'http://blog.mbpfefferle.com'
        ),
    'body' => array(
        array(
            'text' => 'Matt Pfefferle',
            'category' => 'blog',
            'type' => 'rss',
            'xmlUrl' => 'http://blog.mbpfefferle.com/feeds/posts/default',
            'description' => 'My Personal Blog'
            ),
        array(
            'text' => 'Twitter / mpfefferle',
            'category' => 'status',
            'type' => 'rss',
            'xmlUrl' => 'http://twitter.com/statuses/user_timeline/1035781.rss',
            'description' => 'My Twitter Profile'
            )
        )
    );

$opml = new OPML($opml_data);
echo $opml->render();
?>