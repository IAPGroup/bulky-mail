<?php

require_once('./vendor/autoload.php');

$mailchimp = new MailchimpMarketing\ApiClient();

$mailchimp->setConfig([
  'apiKey' => '9ff0c0dc2553f9eab0f862d139113b36-us7',
  'server' => 'us7'
]);

$response = $mailchimp->ping->get();
print_r($response);

?>
