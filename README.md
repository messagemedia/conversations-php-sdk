# MessageMedia Conversations PHP SDK
[![Travis Build Status](https://api.travis-ci.org/messagemedia/conversations-php-sdk.svg?branch=master)](https://travis-ci.org/messagemedia/conversations-php-sdk)
[![PHP version](https://badge.fury.io/ph/messagemedia%2Fconversations-sdk.svg)](https://badge.fury.io/ph/messagemedia%2Fconversations-sdk)

The MessageMedia Conversations API allows users to communicate by sending and receiving messages via OTT messaging services. This feature is disabled by default. To enable it, you don't need to make any changes to your application, just an account configuration change by MessageMedia's support team (support@messagemedia.com).

## ⭐️ Installing via Composer
Run the Composer command to install the latest stable version of the Messages SDK:
```
composer require messagemedia/conversations-sdk
```

## 🎬 Get Started
It's easy to get started. Simply enter the API Key and secret you obtained from the [MessageMedia Developers Portal](https://developers.messagemedia.com) into the code snippet below.

### 🚀 Provision an account
```php
require_once('vendor/autoload.php');

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaConversationsLib\MessageMediaConversationsClient($basicAuthUserName, $basicAuthPassword);

$provisioning = $client->getProvisioning();
$request = new ProvisionAccountRequest("https://callback.url.com", "Rainbow Serpent Festival");

$provisioning->createProvisionAccountUsingPOST($request);

```

### 🔐 Facebook Authorization
```php
require_once('vendor/autoload.php');

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaConversationsLib\MessageMediaConversationsClient($basicAuthUserName, $basicAuthPassword);

$facebook = $client->getFacebook();
$result = $facebook->getFacebookAuthorisationUrlUsingGET();

```

### ⬇️ Get Facebook pages
```php
require_once('vendor/autoload.php');

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaConversationsLib\MessageMediaConversationsClient($basicAuthUserName, $basicAuthPassword);
$result = $facebook->getFacebookPagesUsingGET();

```

### ♻️ Integrate Facebook page
You can get the facebookPageId by looking at the response of the Get Facebook pages example.
```php
require_once('vendor/autoload.php');

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaConversationsLib\MessageMediaConversationsClient($basicAuthUserName, $basicAuthPassword);
$facebookPageId = 'facebookPageId';

$facebook->createIntegrateFacebookPageUsingPOST($facebookPageId);

```

### 👤 Get users
```php
require_once('vendor/autoload.php');

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaConversationsLib\MessageMediaConversationsClient($basicAuthUserName, $basicAuthPassword);
$appUsers = $client->getAppUsers();

$result = $appUsers->getAppUsersUsingGET();

```

### 💬 Get user messages
You can get the appUserId from the response of the Get users example.
```php
require_once('vendor/autoload.php');

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaConversationsLib\MessageMediaConversationsClient($basicAuthUserName, $basicAuthPassword);
$appUsers = $client->getAppUsers();
$appUserId = 'appUserId';

$result = $appUsers->getAppUserMessagesUsingGET($appUserId);

```

### ✉️ Send message to user
You can get the appUserId from the response of the Get users example.
```php
require_once('vendor/autoload.php');

$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaConversationsLib\MessageMediaConversationsClient($basicAuthUserName, $basicAuthPassword);
$appUsers = $client->getAppUsers();
$appUserId = 'appUserId';
$message = new BaseMessageDto({"key":"value"});

$appUsers->createSendMessageUsingPOST($appUserId, $message);

```

## 📕 Documentation
Check out the [full API documentation](DOCUMENTATION.md) for more detailed information.

## 😕 Need help?
Please contact developer support at developers@messagemedia.com or check out the developer portal at [developers.messagemedia.com](https://developers.messagemedia.com/)

## 📃 License
Apache License. See the [LICENSE](LICENSE) file.
