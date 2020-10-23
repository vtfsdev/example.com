<?php
require '../core/processContactForm.php';

//Build the page metadata
$meta = [];
$meta['description'] = "Contact Victor for full stack web development";
$meta['keywords'] = "contact, web, development";

$content = <<<EOT
<form class="contact-form" action="contact.php" method="POST">
    
    <input type="hidden" name="subject" value="New submission!">
  
  <div class="form-control">
  <label for="name">Name</label>
    <input id="name" type="text" name="name" value="{$valid->userInput('name')}">
    <div class="text-error">{$valid->error('name')}</div>
  </div>
  <div class="form-control">
  <label for="email">Email</label>
    <input id="email" type="text" name="email" value="{$valid->userInput('email')}">
    <div class="text-error">{$valid->error('email')}</div>
  </div>
  <div class="form-control">
  <label for="message">Message</label>
    <textarea id="message" name="message">{$valid->userInput('message')}</textarea>
    <div class="text-error">{$valid->error('message')}</div>
  </div>
  <div class="form-control">
  <input type="submit" value="Send">
  </div>
</form>

EOT;

include '../core/layout.php';