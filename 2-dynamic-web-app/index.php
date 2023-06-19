<?php

require 'Database.php';
require 'functions.php';
require 'router.php';

$config = require 'config.php';

// connect to our MySQL database with PDO (PHP data objects, a framework for accessing databases in PHP)

$db = new Database($config);

$posts = $db->query("SELECT * FROM posts")->fetchAll();


foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
