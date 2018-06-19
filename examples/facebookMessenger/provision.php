<?php

require_once('vendor/autoload.php');

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaConversationsLib\MessageMediaConversationsClient($basicAuthUserName, $basicAuthPassword);

$provisioning = $client->getConfiguration();
$bodyValue = "{    \"name\": \"Rainbow Serpent Festival\",    \"callback_url\": \"https://callback.url.com\"}";
$body = APIHelper::deserialize($bodyValue);
$configuration->createConfigureAccount($body);

?>
