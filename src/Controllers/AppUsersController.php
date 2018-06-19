<?php
/*
 * MessageMediaConversations
 *
 * This file was automatically generated for MessageMedia by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MessageMediaConversationsLib\Controllers;

use MessageMediaConversationsLib\APIException;
use MessageMediaConversationsLib\APIHelper;
use MessageMediaConversationsLib\Configuration;
use MessageMediaConversationsLib\Models;
use MessageMediaConversationsLib\Exceptions;
use MessageMediaConversationsLib\Http\HttpRequest;
use MessageMediaConversationsLib\Http\HttpResponse;
use MessageMediaConversationsLib\Http\HttpMethod;
use MessageMediaConversationsLib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class AppUsersController extends BaseController
{
    /**
     * @var AppUsersController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return AppUsersController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Sends a message to the App User with the given ID.
     * You can use this endpoint in conjuction with the app users or app user by id endpoint where the
     * response from one of the latter endpoints would display the user id and this can be used with this
     * endpoint to send a message to that user. A successful response from this endpoint will have the
     * following structure:
     * ```
     * {
     * "channel": "facebook",
     * "text": "Thank you for your query we'll be in touch with an answer shortly."
     * }
     * ```
     *
     * @param string                $appUserId appUserId
     * @param Models\BaseMessageDto $body      TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createSendMessage(
        $appUserId,
        $body
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/beta/conversations/users/{appUserId}/messages';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'appUserId' => $appUserId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'messagesmedia-conversations',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($body));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('The posted request is invalid or the account is not provisioned.', $_httpContext);
        }

        if ($response->code == 404) {
            throw new APIException('The app user does not exist.', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MessageMediaConversationsLib\\Models\\SendMessageResponse');
    }

    /**
     * Gets the list of messages sent to and received by the App User with the given ID. A successful
     * response from this endpoint will have the following structure:
     * ```
     * {
     * "messages": {
     * "data": [
     * {
     * "direction": "RECEIVED",
     * "text": "Hey, I was just wondering how much shipping would be to Australia for one of them
     * awesome t-shirts?",
     * "channel": "FACEBOOK",
     * "timestamp": "2017-12-12T18:18:40.000Z"
     * },
     * {
     * "direction": "SENT",
     * "text": "Thank you for your query we'll be in touch with an answer shortly.",
     * "channel": "FACEBOOK",
     * "timestamp": "2017-12-08T10:12:16.000Z"
     * }
     * ]
     * },
     * "metadata" : {
     * "user_id": "{id}",
     * "account_id": "FunGuys007"
     * }
     * }
     * ```
     *
     * @param string $appUserId appUserId
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getAppUserMessages(
        $appUserId
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/beta/conversations/users/{appUserId}/messages';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'appUserId' => $appUserId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'messagesmedia-conversations',
            'Accept'        => 'application/json'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 404) {
            throw new APIException('The app user does not exist.', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MessageMediaConversationsLib\\Models\\GetAppUserMessagesResponse');
    }

    /**
     * Gets the App User with the given ID. A successful response from this endpoint will have the
     * following structure:
     * ```
     * {
     * "id": "3898c5e4-73cc-44f9-812f-3698a4c3bb1d",
     * "surname": "Sims",
     * "given_name": "Ben"
     * }
     * ```
     *
     * @param string $appUserId appUserId
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getAppUserById(
        $appUserId
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/beta/conversations/users/{appUserId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'appUserId' => $appUserId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'messagesmedia-conversations',
            'Accept'        => 'application/json'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 404) {
            throw new APIException('The app user does not exist.', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MessageMediaConversationsLib\\Models\\GetAppUserByIdResponse');
    }

    /**
     * Gets a list of App Users that belong to the configured account. A successful response from this
     * endpoint will have the following structure:
     * ```
     * {
     * "data": [
     * {
     * "id": "3898c5e4-73cc-44f9-812f-3698a4c3bb1d",
     * "surname": "Sims",
     * "given_name": "Ben"
     * },
     * {
     * "id": "331b1da8-10a5-44c7-91df-1dc14cc2f373",
     * "surname": "Hood",
     * "given_name": "Robert"
     * }
     * ]
     * }
     * ```
     *
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getAppUsers()
    {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/beta/conversations/users';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'messagesmedia-conversations',
            'Accept'        => 'application/json'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MessageMediaConversationsLib\\Models\\GetAppUsersResponse');
    }
}
