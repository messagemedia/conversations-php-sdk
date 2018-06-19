# Getting started

The Conversations API allows users to communicate by sending and receiving messages via Over-The-Top (OTT) messaging services. OTT application is an app or service that provides a product over the Internet and bypasses traditional distribution. Here's an in-depth explanation of what the term means.This feature is disabled by default. To enable it, you don't need to make any changes to your application, just an account configuration change by MessageMedia's support team support@messagemedia.com.For our initial release, we're releasing Facebook Messenger which allows you to send messages as a Facebook page owner and receive messages from other Facebook users.

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=MessageMediaConversations-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the MessageMediaConversations library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=MessageMediaConversations-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=MessageMediaConversations-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=MessageMediaConversations-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=MessageMediaConversations-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=MessageMediaConversations-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=MessageMediaConversations-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=MessageMediaConversations-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=MessageMediaConversations-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=MessageMediaConversations-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=MessageMediaConversations-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=MessageMediaConversations-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=MessageMediaConversations-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| basicAuthUserName | The username to use with basic authentication |
| basicAuthPassword | The password to use with basic authentication |



API client can be initialized as following.

```php
$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new MessageMediaConversationsLib\MessageMediaConversationsClient($basicAuthUserName, $basicAuthPassword);
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [AppUsersController](#app_users_controller)
* [ConfigurationController](#configuration_controller)
* [FacebookController](#facebook_controller)

## <a name="app_users_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AppUsersController") AppUsersController

### Get singleton instance

The singleton instance of the ``` AppUsersController ``` class can be accessed from the API Client.

```php
$appUsers = $client->getAppUsers();
```

### <a name="create_send_message"></a>![Method: ](https://apidocs.io/img/method.png ".AppUsersController.createSendMessage") createSendMessage

> Sends a message to the App User with the given ID.
> You can use this endpoint in conjuction with the app users or app user by id endpoint where the response from one of the latter endpoints would display the user id and this can be used with this endpoint to send a message to that user. A successful response from this endpoint will have the following structure:
> ```
> {
>   "channel": "facebook",
>   "text": "Thank you for your query we'll be in touch with an answer shortly."
> }
> ```


```php
function createSendMessage(
        $appUserId,
        $body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| appUserId |  ``` Required ```  | appUserId |
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$appUserId = 'appUserId';
$body = new BaseMessageDto();

$result = $appUsers->createSendMessage($appUserId, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | The posted request is invalid or the account is not provisioned. |
| 404 | The app user does not exist. |



### <a name="get_app_user_messages"></a>![Method: ](https://apidocs.io/img/method.png ".AppUsersController.getAppUserMessages") getAppUserMessages

> Gets the list of messages sent to and received by the App User with the given ID. A successful response from this endpoint will have the following structure:
> ```
> {
>   "messages": {
>     "data": [
>       {
>         "direction": "RECEIVED",
>         "text": "Hey, I was just wondering how much shipping would be to Australia for one of them awesome t-shirts?",
>         "channel": "FACEBOOK",
>         "timestamp": "2017-12-12T18:18:40.000Z"
>       },
>       {
>         "direction": "SENT",
>         "text": "Thank you for your query we'll be in touch with an answer shortly.",
>         "channel": "FACEBOOK",
>         "timestamp": "2017-12-08T10:12:16.000Z"
>       }
>     ]
>   },
>   "metadata" : {
>     "user_id": "{id}",
>     "account_id": "FunGuys007"
>   }
> }
> ```


```php
function getAppUserMessages($appUserId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| appUserId |  ``` Required ```  | appUserId |



#### Example Usage

```php
$appUserId = 'appUserId';

$result = $appUsers->getAppUserMessages($appUserId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | The app user does not exist. |



### <a name="get_app_user_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".AppUsersController.getAppUserById") getAppUserById

> Gets the App User with the given ID. A successful response from this endpoint will have the following structure:
> ```
> {
>   "id": "3898c5e4-73cc-44f9-812f-3698a4c3bb1d",
>   "surname": "Sims",
>   "given_name": "Ben"
> }
> ```


```php
function getAppUserById($appUserId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| appUserId |  ``` Required ```  | appUserId |



#### Example Usage

```php
$appUserId = 'appUserId';

$result = $appUsers->getAppUserById($appUserId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | The app user does not exist. |



### <a name="get_app_users"></a>![Method: ](https://apidocs.io/img/method.png ".AppUsersController.getAppUsers") getAppUsers

> Gets a list of App Users that belong to the configured account. A successful response from this endpoint will have the following structure:
> ```
> {
>   "data": [
>     {
>       "id": "3898c5e4-73cc-44f9-812f-3698a4c3bb1d",
>       "surname": "Sims",
>       "given_name": "Ben"
>     },
>     {
>       "id": "331b1da8-10a5-44c7-91df-1dc14cc2f373",
>       "surname": "Hood",
>       "given_name": "Robert"
>     }
>   ]
> }
> ```


```php
function getAppUsers()
```

#### Example Usage

```php

$result = $appUsers->getAppUsers();

```


[Back to List of Controllers](#list_of_controllers)

## <a name="configuration_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ConfigurationController") ConfigurationController

### Get singleton instance

The singleton instance of the ``` ConfigurationController ``` class can be accessed from the API Client.

```php
$configuration = $client->getConfiguration();
```

### <a name="create_configure_account"></a>![Method: ](https://apidocs.io/img/method.png ".ConfigurationController.createConfigureAccount") createConfigureAccount

> Configures your existing MessageMedia account to use the Conversations API by giving it a human readable name (for reference later on), and also by specifying a callback URL which is where any Inbound Messages and/or Notifications will be pushed to. The request would have the following structure:
> ```
> {
>   "name": "Rainbow Serpent Festival",
>   "callback_url": "http://accounts-domain.com/callback"
> }
> ```
> * `name` is a required property and is a customer friendly name to identify your provisioned account
> * `callback_url` is an optional property is the callback URL to forward inbound messages to.
> *Note: We are currently NOT using our Webhooks functionality for this while it's in beta, when we make this production ready we will look at switching to having these webhooks managed via the Webhooks Management API*


```php
function createConfigureAccount($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$bodyValue = "{    \"name\": \"Rainbow Serpent Festival\",    \"callback_url\": \"https://callback.url.com\"}";
$body = APIHelper::deserialize($bodyValue);

$result = $configuration->createConfigureAccount($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Not a valid request body. |
| 409 | The account has already been provisioned. |



[Back to List of Controllers](#list_of_controllers)

## <a name="facebook_controller"></a>![Class: ](https://apidocs.io/img/class.png ".FacebookController") FacebookController

### Get singleton instance

The singleton instance of the ``` FacebookController ``` class can be accessed from the API Client.

```php
$facebook = $client->getFacebook();
```

### <a name="create_integrate_facebook_page"></a>![Method: ](https://apidocs.io/img/method.png ".FacebookController.createIntegrateFacebookPage") createIntegrateFacebookPage

> Integrates the Facebook page with the given ID with the configured account.


```php
function createIntegrateFacebookPage($facebookPageId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| facebookPageId |  ``` Required ```  | facebookPageId |



#### Example Usage

```php
$facebookPageId = 'facebookPageId';

$result = $facebook->createIntegrateFacebookPage($facebookPageId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | The account is not provisioned or the Facebook user isn't authenticated or the facebookPageId is invalid. |



### <a name="get_facebook_pages"></a>![Method: ](https://apidocs.io/img/method.png ".FacebookController.getFacebookPages") getFacebookPages

> Gets a list of Facebook pages belonging to the provisioned and Facebook authorised account. A successful response from this endpoint will have the following structure:
> ```
> {
>   "data": [
>     {
>       "id": "1573307926039629",
>       "name": "Rainbow Serpent Festival"
>     },
>     {
>       "id": "373479609790958",
>       "name": "Fans of Doing Live Demos"
>     }
>   ]
> }
> ```


```php
function getFacebookPages()
```

#### Example Usage

```php

$result = $facebook->getFacebookPages();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | The account is not provisioned or the Facebook user isn't authenticated. |



### <a name="get_facebook_authorisation_url"></a>![Method: ](https://apidocs.io/img/method.png ".FacebookController.getFacebookAuthorisationURL") getFacebookAuthorisationURL

> Before you can start integrating Facebook pages on your Facebook account, MessageMedia's messaging platform needs access to that page via what Facebook call a page access token. To get the page access token you first need to provide MessageMedia limited access to your Facebook account.
> Calling this endpoint will get the Facebook authorisation URL which you are required to go through before you can call the integration endpoints. A successful response from this endpoint will have the following structure:
> ```
> {
>   "authorisation_url": "https://www.facebook.com/v2.12/dialog/oauth?client_id={facebookAppId}&amp;redirect_uri={apiUrl}/beta/integration/authenticated&amp;state={provisionedAccountUUID}&amp;response_type=token&amp;scope=email,manage_pages,pages_messaging"
> }
> ```
> *Note: Granting MessageMedia access will only see allow us to see your basic details and the list of pages you have*


```php
function getFacebookAuthorisationURL()
```

#### Example Usage

```php

$result = $facebook->getFacebookAuthorisationURL();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | The account is not provisioned |



[Back to List of Controllers](#list_of_controllers)



