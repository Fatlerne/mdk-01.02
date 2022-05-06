<?php
require __DIR__ .'/../bootstrap.php';
$posts = $postService -> getAllPosts();
require __DIR__ .'/../view/list.phtml';