<?php
require '../../core/bootstrap.php';
include '../../core/db_connect.php';

$content=null;
$stmt = $pdo->query("SELECT * FROM posts");

while ($row = $stmt->fetch())
{

    $content .= "<a href=\"view.php?slug={$row['slug']}\">{$row['title']}  </a>";
}

$content .= "<br><br><a href=\"add.php\">New Post</a>";


include '../../core/layout.php';
checkSession();
