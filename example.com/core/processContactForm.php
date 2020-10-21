<?php
require '../core/About/src/Validation/Validate.php';
include '../vendor/autoload.php';
require '../config/keys.php';
use Mailgun\Mailgun;
use About\Validation;

$valid = new About\Validation\Validate();

$filters = [
    'name'=>FILTER_SANITIZE_STRING,
    'email'=>FILTER_SANITIZE_EMAIL,
    'message'=>FILTER_SANITIZE_STRING,
];
$input = filter_input_array(INPUT_POST, $filters);

if(!empty($input)){
    $valid->validation = [
        'email'=>[[
                'rule'=>'email',
                'message'=>'Please enter a valid email'
            ],[
                'rule'=>'notEmpty',
                'message'=>'Please enter an email'
        ]],
        'name'=>[[
            'rule'=>'notEmpty',
            'message'=>'Please enter your first name'
        ]],
        'message'=>[[
            'rule'=>'notEmpty',
            'message'=>'Please add a message'
        ]],
    ];

    $valid->check($input);

    if(empty($valid->errors)){

# Instantiate the client.
$mgClient = Mailgun::create(MG_KEY,MG_API); //MailGun key 
$domain = MG_DOMAIN; //API Hostname
$from = "Mailgun Sandbox <postmaster@{$domain}>";
$to = 'Victor Tung vtfsdev@gmail.com';
$subject = 'Hello Victor Tung';
$text = 'Congratulations Victor Tung, you just sent an email with Mailgun! You are truly awesome!';

    $result = $mgClient->messages()->send($domain,
    array(
        'from'    => $from,
        'to'      => $to,
        'subject' => $subject,
        'text'    => $text
    )
);
/* Use To Show Input When Needed
var_dump($result);
*/

    $message = "<div class=\"message-success\">Your form has been submitted!</div>";
    }else{
        $message = "<div class=\"message-error\">Your form has errors!</div>";
    }
}