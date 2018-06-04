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
class FacebookPageDto implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @var string|null $name public property
     */
    public $name;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $id   Initialization value for $this->id
     * @param string $name Initialization value for $this->name
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->id   = func_get_arg(0);
            $this->name = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']   = $this->id;
        $json['name'] = $this->name;

        return $json;
    }
}
