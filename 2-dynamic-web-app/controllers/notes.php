<?php

$config = require('config.php');
$db = new Database($config);

$heading = "My Notes";

$notes = $db->query('select * from notes where user_id = 4')->get();

require "views/notes.view.php";
