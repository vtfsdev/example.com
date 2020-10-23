<?php
require '../../core/bootstrap.php';
include '../../core/db_connect.php';

$input = filter_input_array(INPUT_GET);
$id = preg_replace("/[^a-z0-9-]+/", "", $input['id']);

$content=null;
$stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$stmt->execute([$id]);
$row = $stmt->fetch();

$meta=[];
$meta['first_name']=$row['first_name'];
$meta['last_name']=$row['last_name'];
$meta['email']=$row['email'];

$content=<<<EOT
<h1>{$row['first_name']}</h1>
{$row['last_name']}<br>
{$row['email']}<br>
<hr>
<div>
  <a class="btn btn-link" href="edit.php?id={$row['id']}">Edit</a>
  <a class="btn btn-link text-danger" href="delete.php?id={$row['id']}">Delete</a>
</div>
EOT;



include '../../core/layout.php';
checkSession();
