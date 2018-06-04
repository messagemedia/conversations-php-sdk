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
class FacebookAuthorisationResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $authorisationUrl public property
     */
    public $authorisationUrl;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $authorisationUrl Initialization value for $this->authorisationUrl
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->authorisationUrl = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['authorisationUrl'] = $this->authorisationUrl;

        return $json;
    }
}
