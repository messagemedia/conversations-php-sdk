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
class FacebookPagesDto implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var \MessageMediaConversationsLib\Models\FacebookPageDto[]|null $pages public property
     */
    public $pages;

    /**
     * Constructor to set initial or default values of member properties
     * @param array $pages Initialization value for $this->pages
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->pages = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['pages'] = $this->pages;

        return $json;
    }
}
