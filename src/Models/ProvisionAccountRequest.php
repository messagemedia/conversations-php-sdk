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
class ProvisionAccountRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $callbackUrl public property
     */
    public $callbackUrl;

    /**
     * @todo Write general description for this property
     * @var string|null $name public property
     */
    public $name;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $callbackUrl Initialization value for $this->callbackUrl
     * @param string $name        Initialization value for $this->name
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->callbackUrl = func_get_arg(0);
            $this->name        = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['callbackUrl'] = $this->callbackUrl;
        $json['name']        = $this->name;

        return $json;
    }
}
