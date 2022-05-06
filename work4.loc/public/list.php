<?php
require__DIR__.'/../bootstrap.php';
$posts = $postService->getAllPosts();
require__DIR__.'/../view/list.phtml';