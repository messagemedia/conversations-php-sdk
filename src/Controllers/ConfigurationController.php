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
class ConfigurationController extends BaseController
{
    /**
     * @var ConfigurationController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return ConfigurationController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Configures your existing MessageMedia account to use the Conversations API by giving it a human
     * readable name (for reference later on), and also by specifying a callback URL which is where any
     * Inbound Messages and/or Notifications will be pushed to. The request would have the following
     * structure:
     * ```
     * {
     * "name": "Rainbow Serpent Festival",
     * "callback_url": "http://accounts-domain.com/callback"
     * }
     * ```
     * * `name` is a required property and is a customer friendly name to identify your provisioned
     * account
     * * `callback_url` is an optional property is the callback URL to forward inbound messages to.
     * *Note: We are currently NOT using our Webhooks functionality for this while it's in beta, when we
     * make this production ready we will look at switching to having these webhooks managed via the
     * Webhooks Management API*
     *
     * @param Models\ConfigureAccountRequest $body TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createConfigureAccount(
        $body
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;

        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/beta/conversations/provision';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'messagemedia-conversations',
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
            throw new APIException('Not a valid request body.', $_httpContext);
        }

        if ($response->code == 409) {
            throw new APIException('The account has already been provisioned.', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MessageMediaConversationsLib\\Models\\ConfigureAccountResponse');
    }
}
