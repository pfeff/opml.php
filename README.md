OPML.php
========

This is a very simple PHP to OPML converter. It takes an appropriately
formatted PHP array as input and can output a string containing an OPML
document.

Sample Code
-----------

See opml\_sample.php.

What should the input array look like?
--------------------------------------

The input array mirrors the structure of the OPML document:

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

The OPML generator is pretty liberal in what it outputs. If you add any
key/value pairs to head array they'll be added as child elements of head. If
you add any fields to the body arrays (which correspond to outline elements),
they'll be added as attributes on the outline element.