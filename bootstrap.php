<?php
require_once ('config/config.php');
require_once ('lib/database.php');
require_once ('models/Post.php');
require_once ('helpers/session_helper.php');
require_once ('helpers/url_redirect.php');


$posts = new Post();


$author_id = 89;
$results = $posts->getItems($author_id);
?> 