<?php

//Build the page metadata
$meta = [];
$meta['description'] = "Victor Tung's Website";
$meta['keywords'] = "full stack developer, scrum master, LAMP, MEAN";

$content = <<<EOT
<h1>Hello I am Victor Tung</h1>
<img src="https://www.gravatar.com/avatar/4678a33bf44c38e54a58745033b4d5c6?d=mm&s=64" alt="Victor Tung">

<p>I'm from Chicago. I have two childrens - boy and a girl. I'm here to learn 
    full stack development</p>

EOT;

include '../core/layout.php';

