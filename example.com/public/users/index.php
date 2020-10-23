<?php
include '../../core/db_connect.php';

$content=null;
$stmt = $pdo->query("SELECT * FROM users");

while ($row = $stmt->fetch())
{

    $content .= "<a href=\"view.php?id={$row['id']}\">{$row['first_name']} {$row['last_name']}  </a>";
}

$content .= "<br><br><a href=\"add.php\">Add user</a>";


include '../../core/layout.php';