<?php

require_once('vendor/autoload.php');

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaConversationsLib\MessageMediaConversationsClient($basicAuthUserName, $basicAuthPassword);
$appUsers = $client->getAppUsers();
$appUserId = 'appUserId';

$result = $appUsers->getAppUserMessages($appUserId);

?>
