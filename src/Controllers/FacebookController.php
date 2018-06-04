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
class FacebookController extends BaseController
{
    /**
     * @var FacebookController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return FacebookController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Integrates the Facebook page with the given ID with the provisioned account.
     *
     * @param string $facebookPageId facebookPageId
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createIntegrateFacebookPageUsingPOST(
        $facebookPageId
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/v1/conversations/facebook/pages/{facebookPageId}/integrate';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'facebookPageId' => $facebookPageId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'messagesmedia-conversations'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 401) {
            throw new APIException('Unauthorized', $_httpContext);
        }

        if ($response->code == 403) {
            throw new APIException('Forbidden', $_httpContext);
        }

        if ($response->code == 404) {
            throw new APIException('Not Found', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
    }

    /**
     * Gets a list of Facebook pages belonging to the provisioned and Facebook authorised account.
     *
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getFacebookPagesUsingGET()
    {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/conversations/facebook/pages';

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
        if ($response->code == 401) {
            throw new APIException('Unauthorized', $_httpContext);
        }

        if ($response->code == 403) {
            throw new APIException('Forbidden', $_httpContext);
        }

        if ($response->code == 404) {
            throw new APIException('Not Found', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MessageMediaConversationsLib\\Models\\FacebookPagesDto');
    }

    /**
     * Once an account has been provisioned, endpoint can be called to get the Facebook authorisation URL.
     *
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getFacebookAuthorisationUrlUsingGET()
    {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/conversations/facebook/authorise';

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
        if ($response->code == 401) {
            throw new APIException('Unauthorized', $_httpContext);
        }

        if ($response->code == 403) {
            throw new APIException('Forbidden', $_httpContext);
        }

        if ($response->code == 404) {
            throw new APIException('Not Found', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MessageMediaConversationsLib\\Models\\FacebookAuthorisationResponse');
    }
}
