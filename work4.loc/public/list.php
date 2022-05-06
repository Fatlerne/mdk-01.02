<?php
require_DIR_.'/../bootstrap.php';
$posts = $postService->getAllPosts();
require_DIR_.'/../viem/list.html';

