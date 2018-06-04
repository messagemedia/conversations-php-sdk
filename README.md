# Getting started

The Conversations API allows users to communicate by sending and receiving messages via OTT messaging services.

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

* [ProvisioningController](#provisioning_controller)
* [AppUsersController](#app_users_controller)
* [FacebookController](#facebook_controller)

## <a name="provisioning_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ProvisioningController") ProvisioningController

### Get singleton instance

The singleton instance of the ``` ProvisioningController ``` class can be accessed from the API Client.

```php
$provisioning = $client->getProvisioning();
```

### <a name="create_provision_account_using_post"></a>![Method: ](https://apidocs.io/img/method.png ".ProvisioningController.createProvisionAccountUsingPOST") createProvisionAccountUsingPOST

> Provisions an account to use the Conversations API.


```php
function createProvisionAccountUsingPOST($request)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| request |  ``` Required ```  | request |



#### Example Usage

```php
$request = new ProvisionAccountRequest();

$provisioning->createProvisionAccountUsingPOST($request);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | Unauthorized |
| 403 | Forbidden |
| 404 | Not Found |



[Back to List of Controllers](#list_of_controllers)

## <a name="app_users_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AppUsersController") AppUsersController

### Get singleton instance

The singleton instance of the ``` AppUsersController ``` class can be accessed from the API Client.

```php
$appUsers = $client->getAppUsers();
```

### <a name="create_send_message_using_post"></a>![Method: ](https://apidocs.io/img/method.png ".AppUsersController.createSendMessageUsingPOST") createSendMessageUsingPOST

> Sends a message to the App User with the given ID.


```php
function createSendMessageUsingPOST(
        $appUserId,
        $message)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| appUserId |  ``` Required ```  | appUserId |
| message |  ``` Required ```  | message |



#### Example Usage

```php
$appUserId = 'appUserId';
$message = new BaseMessageDto();

$appUsers->createSendMessageUsingPOST($appUserId, $message);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | Unauthorized |
| 403 | Forbidden |
| 404 | Not Found |



### <a name="get_app_user_messages_using_get"></a>![Method: ](https://apidocs.io/img/method.png ".AppUsersController.getAppUserMessagesUsingGET") getAppUserMessagesUsingGET

> Gets the list of messages for the App User with the given ID.


```php
function getAppUserMessagesUsingGET($appUserId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| appUserId |  ``` Required ```  | appUserId |



#### Example Usage

```php
$appUserId = 'appUserId';

$result = $appUsers->getAppUserMessagesUsingGET($appUserId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | Unauthorized |
| 403 | Forbidden |
| 404 | Not Found |



### <a name="get_app_user_using_get"></a>![Method: ](https://apidocs.io/img/method.png ".AppUsersController.getAppUserUsingGET") getAppUserUsingGET

> Gets the App User with the given ID.


```php
function getAppUserUsingGET($appUserId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| appUserId |  ``` Required ```  | appUserId |



#### Example Usage

```php
$appUserId = 'appUserId';

$result = $appUsers->getAppUserUsingGET($appUserId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | Unauthorized |
| 403 | Forbidden |
| 404 | Not Found |



### <a name="get_app_users_using_get"></a>![Method: ](https://apidocs.io/img/method.png ".AppUsersController.getAppUsersUsingGET") getAppUsersUsingGET

> Gets a list of App Users that belong to the provisioned account.


```php
function getAppUsersUsingGET()
```

#### Example Usage

```php

$result = $appUsers->getAppUsersUsingGET();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | Unauthorized |
| 403 | Forbidden |
| 404 | Not Found |



[Back to List of Controllers](#list_of_controllers)

## <a name="facebook_controller"></a>![Class: ](https://apidocs.io/img/class.png ".FacebookController") FacebookController

### Get singleton instance

The singleton instance of the ``` FacebookController ``` class can be accessed from the API Client.

```php
$facebook = $client->getFacebook();
```

### <a name="create_integrate_facebook_page_using_post"></a>![Method: ](https://apidocs.io/img/method.png ".FacebookController.createIntegrateFacebookPageUsingPOST") createIntegrateFacebookPageUsingPOST

> Integrates the Facebook page with the given ID with the provisioned account.


```php
function createIntegrateFacebookPageUsingPOST($facebookPageId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| facebookPageId |  ``` Required ```  | facebookPageId |



#### Example Usage

```php
$facebookPageId = 'facebookPageId';

$facebook->createIntegrateFacebookPageUsingPOST($facebookPageId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | Unauthorized |
| 403 | Forbidden |
| 404 | Not Found |



### <a name="get_facebook_pages_using_get"></a>![Method: ](https://apidocs.io/img/method.png ".FacebookController.getFacebookPagesUsingGET") getFacebookPagesUsingGET

> Gets a list of Facebook pages belonging to the provisioned and Facebook authorised account.


```php
function getFacebookPagesUsingGET()
```

#### Example Usage

```php

$result = $facebook->getFacebookPagesUsingGET();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | Unauthorized |
| 403 | Forbidden |
| 404 | Not Found |



### <a name="get_facebook_authorisation_url_using_get"></a>![Method: ](https://apidocs.io/img/method.png ".FacebookController.getFacebookAuthorisationUrlUsingGET") getFacebookAuthorisationUrlUsingGET

> Once an account has been provisioned, endpoint can be called to get the Facebook authorisation URL.


```php
function getFacebookAuthorisationUrlUsingGET()
```

#### Example Usage

```php

$result = $facebook->getFacebookAuthorisationUrlUsingGET();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | Unauthorized |
| 403 | Forbidden |
| 404 | Not Found |



[Back to List of Controllers](#list_of_controllers)



