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
class SendMessageResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $channel public property
     */
    public $channel;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $text public property
     */
    public $text;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $channel Initialization value for $this->channel
     * @param string $text    Initialization value for $this->text
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->channel = func_get_arg(0);
            $this->text    = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['channel'] = $this->channel;
        $json['text']    = $this->text;

        return $json;
    }
}
