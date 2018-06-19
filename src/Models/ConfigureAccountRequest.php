<?php
/*
 * MessageMediaConversations
 *
 * This file was automatically generated for MessageMedia by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MessageMediaConversationsLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class ConfigureAccountRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @maps callback_url
     * @var string $callbackUrl public property
     */
    public $callbackUrl;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $name        Initialization value for $this->name
     * @param string $callbackUrl Initialization value for $this->callbackUrl
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->name        = func_get_arg(0);
            $this->callbackUrl = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']         = $this->name;
        $json['callback_url'] = $this->callbackUrl;

        return $json;
    }
}
