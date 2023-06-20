<?php

require 'Database.php';
require 'functions.php';
require 'router.php';

$config = require 'config.php';

// connect to our MySQL database with PDO (PHP data objects, a framework for accessing databases in PHP)

$db = new Database($config);

$id = $_GET['id'];
$query = "select * from posts where id = :id";

$posts = $db->query($query, [':id' => $id])->fetchAll();

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
