<?php
/*
 * MessageMediaConversations
 *
 * This file was automatically generated for MessageMedia by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MessageMediaConversationsLib\Models;

use JsonSerializable;
use MessageMediaConversationsLib\Utils\DateTimeHelper;

/**
 * @todo Write general description for this model
 */
class MessageDto implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $channel public property
     */
    public $channel;

    /**
     * @todo Write general description for this property
     * @var string|null $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @var string|null $text public property
     */
    public $text;

    /**
     * @todo Write general description for this property
     * @factory \MessageMediaConversationsLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $timestamp public property
     */
    public $timestamp;

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $channel   Initialization value for $this->channel
     * @param string    $id        Initialization value for $this->id
     * @param string    $text      Initialization value for $this->text
     * @param \DateTime $timestamp Initialization value for $this->timestamp
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->channel   = func_get_arg(0);
            $this->id        = func_get_arg(1);
            $this->text      = func_get_arg(2);
            $this->timestamp = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['channel']   = $this->channel;
        $json['id']        = $this->id;
        $json['text']      = $this->text;
        $json['timestamp'] = isset($this->timestamp) ?
            DateTimeHelper::toRfc3339DateTime($this->timestamp) : null;

        return $json;
    }
}
