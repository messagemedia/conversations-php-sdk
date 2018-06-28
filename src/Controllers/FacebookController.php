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
     * Integrates the Facebook page with the given ID with the configured account.
     *
     * @param string $facebookPageId facebookPageId
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createIntegrateFacebookPage(
        $facebookPageId
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;

        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/beta/conversations/facebook/pages/{facebookPageId}/integrate';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'facebookPageId' => $facebookPageId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'messagemedia-conversations-sdk-1.0.0'
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
        if ($response->code == 400) {
            throw new APIException(
                'The account is not provisioned or the Facebook user isn\'t authenticated or the facebookPageId is ' .
                'invalid.',
                $_httpContext
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Gets a list of Facebook pages belonging to the provisioned and Facebook authorised account. A
     * successful response from this endpoint will have the following structure:
     * ```
     * {
     * "data": [
     * {
     * "id": "1573307926039629",
     * "name": "Rainbow Serpent Festival"
     * },
     * {
     * "id": "373479609790958",
     * "name": "Fans of Doing Live Demos"
     * }
     * ]
     * }
     * ```
     *
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getFacebookPages()
    {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;

        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/beta/conversations/facebook/pages';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'messagemedia-conversations-sdk-1.0.0',
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
        if ($response->code == 400) {
            throw new APIException(
                'The account is not provisioned or the Facebook user isn\'t authenticated.',
                $_httpContext
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MessageMediaConversationsLib\\Models\\GetFacebookPagesResponse');
    }

    /**
     * Before you can start integrating Facebook pages on your Facebook account, MessageMedia's messaging
     * platform needs access to that page via what Facebook call a page access token. To get the page
     * access token you first need to provide MessageMedia limited access to your Facebook account.
     * Calling this endpoint will get the Facebook authorisation URL which you are required to go through
     * before you can call the integration endpoints. A successful response from this endpoint will have
     * the following structure:
     * ```
     * {
     * "authorisation_url": "https://www.facebook.com/v2.12/dialog/oauth?client_id={facebookAppId}&amp;
     * redirect_uri={apiUrl}/beta/integration/authenticated&amp;state={provisionedAccountUUID}&amp;
     * response_type=token&amp;scope=email,manage_pages,pages_messaging"
     * }
     * ```
     * *Note: Granting MessageMedia access will only see allow us to see your basic details and the list of
     * pages you have*
     *
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getFacebookAuthorisationURL()
    {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;

        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/beta/conversations/facebook/authorise';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'messagemedia-conversations-sdk-1.0.0',
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
        if ($response->code == 400) {
            throw new APIException('The account is not provisioned', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MessageMediaConversationsLib\\Models\\GetFacebookAuthorisationURLResponse');
    }
}
