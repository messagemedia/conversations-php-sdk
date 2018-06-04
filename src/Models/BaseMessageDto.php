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
class BaseMessageDto implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $text public property
     */
    public $text;

    /**
     * @todo Write general description for this property
     * @var string|null $channel public property
     */
    public $channel;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $text    Initialization value for $this->text
     * @param string $channel Initialization value for $this->channel
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->text    = func_get_arg(0);
            $this->channel = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['text']    = $this->text;
        $json['channel'] = $this->channel;

        return $json;
    }
}
